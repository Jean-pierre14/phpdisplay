<?php

require_once("./config/db.php");
require_once("./config/event.php");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h3>Welcome to PHP OTP verification</h3>
        <a href="index.php" class="btn btn-sm shadow btn-success">Home</a>
        <a href="index.php?get" class="btn btn-sm shadow btn-success">Add photo</a>
        <?php if(isset($_GET['get'])):?>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card card-body">
                    <form action="./config/upload.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="photo">Photo</label>
                            <input type="file" name="photo" id="photo" class="form-control">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success" name="upload">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php else:?>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <form action="">
                    <div class="form-group">
                        <label for="username">Your name</label>
                        <input type="text" class="form-control" placeholder="Enter your name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email@gmail.com" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-success">Register</button>
                    </div>
                </form>
            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-header panel-primary">
                        <h2>Display using PHP</h2>
                    </div>
                    <div class="panel-body">
                        <div id="results">
                            <?php print $output;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif;?>
    </div>
</body>

</html>