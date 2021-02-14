<?php
    session_start();
    $user_id = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit Profile</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
        <link rel="stylesheet" href="styles.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </head>
    <body class="bg-light">
        <div class=" padL-R bg-white mt-3">
            <div class="row">
                <div class="col-3 card">
                    <div class="text-center p-2">Edit Profile</div>
                </div>
                <div class="col-9 card">
                    <table class="p-3">
                        <tr class="p-3">
                            <td class="p-3">Name</td>
                            <td class="p-3"><input class="form-control col-8"/></td>
                        </tr>
                        <tr class="p-3">
                            <td class="p-3">Username</td>
                            <td class="p-3"><input class="form-control col-8"/></td>
                        </tr>
                        <tr class="p-3">
                            <td class="p-3">Bio</td>
                            <td class="p-3"><input class="form-control col-8"/></td>
                        </tr>
                        <tr class="p-3">
                            <td class="p-3">Email</td>
                            <td class="p-3"><input class="form-control col-8"/></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>