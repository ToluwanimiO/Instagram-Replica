<!DOCTYPE html/>
<html>
    <head>
        <title>POSTS</title>
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
        <div class="padAll bg-white">
        <form method="post" action="postProcess.php" enctype="multipart/form-data">
            <div class="container">
                <b>NEW POST</b>
                <button type="submit" name="postFile" class="btn ml-auto d-block" style="margin-top:-2em">
                    <b style="color:#0195F7">Share</b>
                </button>
            </div>
            <hr/>
            <br />
            <br />
            <div class="text-center">
                <input type="file" name="myFile" /><br /><br />
                <textarea name="caption" class="form-control" style="height:120px" placeholder="Write a caption...." maxlength="255"></textarea>
            </div>
        </form>
        </div>
    </body>
</html>