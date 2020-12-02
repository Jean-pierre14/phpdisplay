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
        $errors = [];
        include("./config/db.php");

        if(isset($_POST['name'])):

            $name = mysqli_real_escape_string($con, htmlentities(trim($_POST['name'])));
            $email = mysqli_real_escape_string($con, htmlentities(trim($_POST['email'])));
            $pass = mysqli_real_escape_string($con, htmlentities(trim($_POST['pass'])));

            // checking if the values are in our variables
            if(empty($name)){array_push($errors, "Your name is required");}
            if(empty($email)){array_push($errors, "Your Email is required");}
            if(empty($pass)){array_push($errors, "Your Password is required");}

            // checking in the database if datas are not match
            $check_u = mysqli_query($con, "SELECT * FROM users WHERE username = '$name'");
            $check_e = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'");
            
            if(mysqli_num_rows($check_u)>0){
                array_push($errors, "this username is used");
            }
            if(mysqli_num_rows($check_e)>0){
                array_push($errors, "this email is used");
            }
            
            
            
            if(count($errors) == 0){
                $password = md5($pass);
                $sql = mysqli_query($con, "INSERT INTO users SET username='$name', email='$email', pass='$password'");
                if($sql){
                    print "Success";
                }else{
                    print "Failed";
                }
            }

        endif;
    ?>
    <?php foreach($errors as $error):?>
    <?php print '<p class="alert alert-danger">'.$error.'</p>';?>
    <?php endforeach;?>
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