<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
        <link rel="stylesheet" href="styles.css" />
    </head>
    <body style="background-color:#FAFAFA">
        <div class="mx-auto  text-center" style="margin-top:50px;width:320px">
            <div class="card" style="padding:40px 40px 10px;margin-bottom:20px">
                <h1 style="margin-bottom:40px;" class="serif fontIg">Instagram</h1>
                <?php
                     if(isset($_SESSION['signUpStatus'])){
                         echo "<small style='color:green' class='pb-3'>".$_SESSION['signUpStatus']."</small";
                     }  
                     if(isset($_SESSION['logInStatus'])){
                        echo "<small style='color:red' class='pb-3'>".$_SESSION['logInStatus']."</small";
                    } 
                ?>
                <form method="post" action="loginProcess.php">
                    <input style="margin-bottom:10px;" class="form-control font-size12" type="text" name="username" placeholder="Phone number, username or email" required/>
                    <input style="margin-bottom:15px;" class="form-control font-size12" type="password" name="password" placeholder="Password" required/>
                    <button type="submit" name="submit" class="btn btn-primary" style="background-color:#0195F7;width:100%"><b>Log In</b></button>
                    <!-- <div class="container" style="padding:0">
                        <div class="row">
                            <div class="col-5"><hr></div>
                            <div class="col-2" style="font-size:10px; margin-top:10px" >OR</div>
                            <div class="col-5"><hr></div>
                        <div>
                    </div> -->
                    <small class="d-block mx-auto" style="margin-top:10px">Forgot password?</small>
                </form>
            </div>
            <div class="card font-size12 p-3">
                <span>Don't have an account? <a style="color:#0195F7" href="signUp.php">Sign up</a></span>
            </div>
        </div>
        <?php 
        session_unset();
        ?>
    </body>
</html>