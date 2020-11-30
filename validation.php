<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation</title>
</head>

<body>
    <h3>Validation form using php</h3>
    <?php
        include("./config/db.php");

        if(isset($_POST['name'])):
            print "Clicked";
        endif;
    ?>
    <form action="" method="post">
        <div class="form-group">
            <label for="name">name</label>
            <input type="text" name="name" id="name" placeholder="enter your name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Email@gmail.com" class="form-control">
        </div>
        <div class="form-group">
            <label for="pass">Password</label>
            <input type="password" name="pass" id="pass" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-success">
                Submit
            </button>
        </div>
    </form>
</body>

</html>