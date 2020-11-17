<?php


if(isset($_POST['uploads'])){
    // header('Location: ../index.php');
    $target_dir = '../uploads';
    $target_file = $target_dir . basename($_FILES['photo']['name']);

    $error = 1;

    
    move_uploaded_file($_FILES['photo']['tmp_name'], $target_file);
    header("Location: ../index.php");
}