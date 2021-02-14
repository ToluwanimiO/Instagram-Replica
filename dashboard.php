<?php
session_start();
if(isset($_SESSION['full_name']) && isset($_SESSION['username'])){
    $con = new mysqli('localhost','root','','php_ig');
    $user_id = $_SESSION['user_id'];
    $fetch_db = $con->query("SELECT file_id,files,caption from user_posts WHERE user_id='$user_id'");
    $a = $fetch_db->fetch_all(MYSQLI_ASSOC);
    $postNo = $fetch_db->num_rows;
?>
<!DOCTYPE html/>
<html>
    <head>
        <title>DASHBOARD</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
        <link rel="stylesheet" href="styles.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </head>
    <body class="bg-light">
    <nav class="navbar navbar-light bg-white navbar-expand-md nav-card">
        <span class="navbar-brand serif brandIg">Instagram</span>
        <span class="padL"><input type="text" placeholder="&#xf002 Search" class="text-center fontAwesome"/></span>
        <ul class="navbar-nav ml-auto padR">
            <li class="nav-item">
                <a href="#" class="nav-link fa fa-home fa-2x active"></a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link fa fa-user-circle fa-2x active"></a>
            </li>
        </ul>
    </nav>
    <div>
        <div class="padL-R">
            <div class="row p-3">
                <div class="col-md-4">
                    <img src="../Php codes/uploads/image.png" width="150px" height="150px" class="profileImg"/>
                </div>
                <div class="col-md-8">
                    <?php 
                        echo "<span class='userFont p-3 m-3'>".$_SESSION['username']."</span>"; 
                    ?>
                    <button class="btn-sm font-size12 bg-white editBtn">Edit Profile</button>
                    <br /><br />
                    <span class="p-3"><b><?php echo $postNo;?> </b> Posts</span>
                    <span class="p-3"><b>200 </b> Followers</span>
                    <span class="p-3"><b>200 </b> Following</span>
                    <br /><br />
                    <?php 
                        echo "<b class='p-3'>".$_SESSION['full_name']."</b class='p-3'>"; 
                    ?>
                </div>
            </div>
            <hr/>
            <div class="col-12 mx-auto text-center">
                <a class="btn btn-secondary btn-sm" type="button" href="post.php">Post picture</a>
            </div><br />
            <?php
                //  echo json_encode($a);
                 echo "<div class='row'>";
                 foreach ($a as $value) {
                    // echo json_encode($value);
            ?>
                <div class='col-4'>
                <img src='<?php echo $value['files'];?>' width='100%' height='200px' class='p-3' data-toggle='modal' data-target='#popPicture<?php echo $value['file_id'] ?>'>
                <div class='modal' id='<?php echo "popPicture".$value['file_id'] ?>'>
                <div class='padL-R mt-3 bg-white row' role='document'>
                <div class='col-9'>
                <img src='<?php echo $value['files'];?>' width='100%' height='500px' class='p-3' data-toggle='modal' data-target='#popPicture'>
                </div>
                <div class='col-3'>
                <p class='pt-3'><?php echo $value['caption'];?></p>
                </div>
                </div>
                </div>
                </div>
            <?php
                }
                // echo "<br/><br/>";
                echo "</div>";
            ?>
            <div class="row">                
                <div class="col-4">
                    <!-- <img src="<?php 

                    ?>"/> -->
                </div>
                <div class="col-4"></div>
                <div class="col-4"></div>
            <div>    
        </div>
    </div>
    </body>
</html>
<?php
}else{
    $_SESSION['logInStatus']="Please log in first";
    header('Location:login.php');
}
?>