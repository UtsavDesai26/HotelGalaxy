<?php
//start the session
require_once('db_config.php');
session_start();
$db = new Database();
//check whether the button is clicked or not
if(isset($_POST['signup']))
{
    // check whether the bix are empty or not
    if(!empty($_POST['username'])   &&  !empty($_POST['email'])    &&   !empty($_POST['password']))
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        echo $username." ".$email." ".$password; 

        $stmt = $db->connection->prepare("INSERT INTO information (username, email, password) VALUES (:user, :email, :passw)");
        $stmt->bindParam(':user', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':passw', $password);
        $stmt->execute();
        header("location: index.html");
    }  
}


?>