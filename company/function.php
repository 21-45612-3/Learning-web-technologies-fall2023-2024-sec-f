<?php
include 'db.php';

function registerAdmin($username, $password) {
    
}

function searchEmployer($keyword) {
    global $con;
    $stmt = $con->prepare("SELECT * FROM employers WHERE employer_name LIKE :keyword OR company_name LIKE :keyword");
    $stmt->bindValue(':keyword', '%' . $keyword . '%');
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
