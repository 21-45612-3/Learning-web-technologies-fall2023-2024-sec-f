<?php
 session_start(); 
 $oldPw = $_REQUEST['current_password'];
$newPw = $_REQUEST['new_password'];
$retypePw = $_REQUEST['retype_new_password'];




if($oldPw == "" || $newPw == "" || $retypePw == "" ){
    echo "blank password!";

}else if ($oldPw==$newPw ){
    echo "Your new password can not be your old password";
    
    
}else if ($newPw!=$retypePw ){
        echo "Retype your new password correctly";
       
    }else{

        header('location: home.php');
    }

?>