<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>SIGN UP</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
        <link rel="stylesheet" href="styles.css" />
    </head>
    <body style="background-color:#FAFAFA">
        <div class="mx-auto  text-center" style="margin-top:50px;width:320px">
            <div class="card" style="padding:40px 40px 10px;margin-bottom:20px">
                <h1 style="margin-bottom:10px;" class="serif fontIg">Instagram</h1>
                <p class="font-size12 pr-3 pl-3">Sign up to see photos and videos from your friends</p>
                <?php
                    if(isset($_SESSION['signUpStatus'])){
                        echo  "<small style='color:red' class='pb-3'>".$_SESSION['signUpStatus']."</small";
                    }
                ?>
                <form method="post" action="signUpProcess.php">
                    <input style="margin-bottom:10px;" class="form-control font-size12" type="text" name="email" placeholder="Mobile Number or Email" required/>
                    <input style="margin-bottom:15px;" class="form-control font-size12" type="text" name="name" placeholder="Full Name" required/>
                    <input style="margin-bottom:10px;" class="form-control font-size12" type="text" name="username" placeholder="Username" required/>
                    <input style="margin-bottom:15px;" class="form-control font-size12" type="password" name="password" placeholder="Password" required/>
                    <button type="submit" name="submit" class="btn btn-primary" style="background-color:#0195F7;width:100%"><b>Sign Up</b></button>
                    <small class="d-block mx-auto" style="margin-top:10px">By signing up you agree to our <strong>Terms</strong>,<strong> Data Policy</strong> and <strong>Cookies Policy</strong></small>
                </form>
            </div>
            <div class="card font-size12 p-3">
                <span>Have an account? <a style="color:#0195F7" href="login.php">Log in</a></span>
            </div>
        </div>
        <?php
            session_unset();
        ?>
    </body>
</html>