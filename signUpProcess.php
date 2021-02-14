<?php
    session_start();
    $con = new mysqli('localhost','root','','php_ig');
    if($con->connect_error){
        die("unable to connect");
    }
    else{
        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $name = $_POST['name'];
            $username = $_POST['username'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            
            $insert = $con->query("INSERT INTO userlist(email, full_name, username, password) VALUES ('$email','$name','$username','$password')");
            if($insert){
                $_SESSION['signUpStatus']="Sign up was successful, please login";
                header('Location:login.php');
            }else{
                $_SESSION['signUpStatus']="Something went wrong. Please try again";
                header('Location:SignUp.php');       
            }
        }
        else{
            echo "Please sign up";
        }
    }
?>