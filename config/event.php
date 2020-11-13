<?php

$message = '';
$error_user_name = '';
$error_user_email = '';
$error_user_password = '';
$user_name = '';
$user_email = '';
$user_password = '';

if(isset($_POST['register'])){
    if(empty($_POST['name'])){
        $error_user_name = "<label class='text-danger'>Enter your name</label>";}else{$user_name = trim($_POST['name']);$user_name=htmlentities($user_name);}
    if(empty($_POST['email'])){
        $error_user_name = "<label class='text-danger'>Enter your email address</label>";
    }else{
        $user_email = trim($_POST['email']);
        if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)){
            $error_user_email = '<label class="text-danger">Enter valid email address</label>';
        }
    }
    if(empty($_POST['pass'])){
        $error_user_password = "<label class='text-danger'>Enter your name</label>";
    }else{
        $user_password = trim($_POST['pass']);
        $user_password = password_hash($user_password, PASSWORD_DEFAULT);
    }
}

$sql = $con->query("SELECT * FROM user_account INNER JOIN programmes_tb ON user_account.id = programmes_tb.userId LIMIT 5");
// $sql = $con->query("SELECT * FROM user_account");
$output = '';
while($row = $sql->fetch_assoc()){
    $time = time(strtotime($row['created_at']));

    $output .= '
    <div>
        <h4>'.$row['name'].'</h4>
        <p>Email: '.$row['email'].'</p>
        <p class="">Created at: <small class="">'.$time.'</small></p>
    </div>';
}