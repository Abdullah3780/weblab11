<?php
require_once('database.php');
$db=new Database('root','','bscs');
$username=$_POST["usrname"];
$password=$_POST["passwrd"];
$st=$db->signUp($username,$password);
if($st===false){
    print('Login Failed');
}
else{
    print("Login Successful\n");
}
?>