<?php
include 'functions.php';

// Handle admin registration
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register_admin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    registerAdmin($username, $password);
}

// Handle employer search (using Ajax)
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['search_employer'])) {
    $keyword = $_GET['keyword'];
    $result = searchEmployer($keyword);
    echo json_encode($result);
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
    <!-- Admin Registration Form -->
    <form method="POST" action="">
        <label for="username">Admin Username:</label>
        <input type="text" name="username" required>
        <label for="password">Admin Password:</label>
        <input type="password" name="password" required>
        <input type="submit" name="register_admin" value="Register Admin">
    </form>

    <!-- Employer Search Form -->
    <form id="searchForm">
        <label for="keyword">Search Employers:</label>
        <input type="text" id="keyword" name="keyword" required>
        <input type="button" value="Search" onclick="searchEmployer()">
    </form>

    <!-- Display search results using Ajax -->
    <div id="searchResults"></div>

    <script>
        function searchEmployer() {
            var keyword = $('#keyword').val();
            $.ajax({
                url: 'index.php?search_employer=1&keyword=' + keyword,
                type: 'GET',
                success: function(data) {
                    var results = JSON.parse(data);
                    displayResults(results);
                }
            });
        }

        function displayResults(results) {
            var html = '<h3>Search Results:</h3>';
            html += '<ul>';
            for (var i = 0; i < results.length; i++) {
                html += '<li>' + results[i].employer_name + ' - ' + results[i].company_name + '</li>';
            }
            html += '</ul>';
            $('#searchResults').html(html);
        }
    </script>
</body>
</html>
