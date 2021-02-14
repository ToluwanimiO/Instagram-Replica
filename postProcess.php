<?php
    session_start();
    $con = new mysqli('localhost','root','','php_ig');
    if($con->connect_error){
        die("Unable to connect");
    }else{
        if(isset($_POST['postFile'])){
            $file = ($_FILES['myFile']);
            $caption = $_POST['caption'];
            $ext = pathinfo($file['name'],PATHINFO_EXTENSION);
            $newFileName = 'uploads/myImage'.rand(50,1000000).'.'.$ext;
            $moved = move_uploaded_file($file['tmp_name'],$newFileName);
            $user_id = $_SESSION['user_id'];
            if($moved){
                $insertPost = $con->query("INSERT INTO user_posts (files,caption,user_id) VALUES ('$newFileName','$caption','$user_id') ");
                if($insertPost){
                    echo "Upload succesful";
                }else{
                    echo "Something went wrong";
                }
            }
            else{
                echo "Your post was unsuccesful";
            }
            // $insert = $con->query("INSERT INTO user_posts(files,caption) VALUES ('$file','$caption')");
            // if($insert){
            //     $_SESSION['signUpStatus']="Sign up was successful, please login";
            //     header('Location:login.php');
            // }else{
            //     $_SESSION['signUpStatus']="Something went wrong. Please try again";
            //     header('Location:SignUp.php');       
            // }
        }else{
            echo "You haven't tried posting a picture";
        }
    }
?>