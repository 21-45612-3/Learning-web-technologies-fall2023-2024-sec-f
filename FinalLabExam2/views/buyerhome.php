<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Show items</h1>
<button id="B">SHOW ITEMS</button>
<div id="showitem"></div>

<script>
    document.getElementById('B').addEventListener('click', json_show);
    
    function json_show() {
        var x = new XMLHttpRequest(); 
    
        x.open("GET", '../controllers/view_items.php', true);
    
        x.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var items = JSON.parse(this.responseText); 
                var output = '';
    
                for (var i in items) {
                    output += "<ul>" +
                        "<li>" + items[i].product_name + "</li>" +
                        "<li>" + items[i].price + "</li>" +
                        "</ul>";
                }
                document.getElementById('showitem').innerHTML = output;
            }
        }
        x.send();
    }
</script>
<h1>Show profile</h1>
<?php include("profile.php"); ?>
</body>
</html>