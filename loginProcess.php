<?php
    session_start();
    echo "sup";
    $con = new mysqli('localhost','root','','php_ig');
    if($con->connect_error){
        die("Unable to connect");
    }
    else{
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $fetch_db = $con->query("SELECT password,username,full_name,user_id from userlist WHERE email='$username' || username='$username'");
            $a = $fetch_db->fetch_assoc();
            echo json_encode($a);
            if($a){
                $pass = $a['password'];
                $verifyPassword = password_verify($password,$pass);
                if($verifyPassword){
                    header('Location:dashboard.php');
                    $_SESSION['full_name']=$a['full_name'];
                    $_SESSION['username']=$a['username'];
                    $_SESSION['user_id']=$a['user_id'];
                }
                else{
                    $_SESSION['logInStatus']="Login details incorrect";
                    header('Location:login.php');
                }
            }
            else{
                $_SESSION['logInStatus']="Login details incorrect";
                header('Location:login.php');
            }
        }
        else{
            echo "Please login";
        }
    }
?>