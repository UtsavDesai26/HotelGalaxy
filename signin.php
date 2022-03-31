<?php
session_start();

require_once('db_config.php');
session_start();
$db = new Database();
if(isset($_POST['signin']))
{
    if(!empty($_POST['email']) && !empty($_POST['password']))
    {
        $email = $_POST['email'];
        $password =$_POST['password'];
        
        $stmt = $db->connection->prepare("INSERT INTO information (email, password) VALUES (:email, :passw)");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':passw', $password);
        $stmt->execute();
        header("location: index.html");
        
        




        // $user_check_query="SELECT * FROM information WHERE email='$email' or password='$password' LIMIT 1";

        // //running error query
        
        // $result = mysqli_query($db,$user_check_query);
        // echo $result;
        // $user = mysqli_fetch_assoc($result);

        // if($user)
        // {
        //     if($user['email']==$email && $user['Password']==$password)
        //     {
        //         echo "login successful";
        //     }
        //     else
        //     {
        //         echo "username or password incorrect";
        //     }
        // }
    }
}

?>