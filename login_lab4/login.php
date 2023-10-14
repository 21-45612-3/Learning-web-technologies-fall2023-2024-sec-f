<?php
 session_start();
$name = $_REQUEST['username'];
$pw = $_REQUEST['password'];


function AlphaNum($str) {
    $valid = 'a-zA-Z0-9._-';
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        
        if (strpos($valid, $char) === false) {
            return false; 
        }
    }

    return true; 
}


function pwchat($str) {
    
    $flag = false;
    $chars = ['@', '#', '$', '%'];
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];

        if (in_array($char, $chars)) {
            $flag = true;
            break; 
        }
    }

    if (!flag) {
        return false; 
    }

    return true; 
}

if($name == "" || $pw == "" ){
    echo "null username or password!";

}else if (AlphaNum($name) && strlen($name) >=2 && strlen($pw) >= 8 && pwchat($pw)){
    setcookie('flag', 'true', time()+3600, '/');
    header('location: home.php');
}else{
    echo "invalid user!";
}
?>