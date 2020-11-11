<?php
$error = $_SERVER['REDIRECT_STATUS'];

$error_title = '';
$error_message = '';

 if($error == 404):
    $error_title = '404 Page not Found';
    $error_message = 'The document/file requested was not found on this server.';
 endif;
?>
<!DOCTYPE html>
<html lang="en">
<style>
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: ubuntu;
}

body {
    background-image: url(https://scontent.febb6-1.fna.fbcdn.net/v/t1.0-9/110983489_3013424465450675_2411853159129688546_o.jpg?_nc_cat=107&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeEAgVqm9YaI2-zN9uVjdrSZ8-C1SVDXDabz4LVJUNcNpvx5KL7CIAcvRZ9TK1AvN3x3LQWBixPOxMfaDnF0SQz9&_nc_ohc=2K0vvCkzVWwAX-X_v9g&_nc_ht=scontent.febb6-1.fna&oh=7ec9d6a778139265a0ac17b0364949e3&oe=5FD26C1A);
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    height: 100vh;
}

.img {
    background-image: url(https://scontent.febb6-1.fna.fbcdn.net/v/t1.0-0/s640x640/122993435_3300307700095682_8595396494773562864_o.jpg?_nc_cat=109&ccb=2&_nc_sid=730e14&_nc_eui2=AeGSDQ_r-Ol-TZmiS12CY6g-S0XgjHK_4NZLReCMcr_g1ii_vO4jFubQdAYICilQ-scBRFbQfUx9Ys2XIwur4vGA&_nc_ohc=Mqjdg7DxI8kAX8Iv0Py&_nc_ht=scontent.febb6-1.fna&tp=7&oh=45da7930e281eaed60b545dcd859297f&oe=5FD22926);
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
}

h1 {
    color: red;
    margin-bottom: 60px;
}

h1,
h4 {
    text-align: center;
}

.div {
    position: relative;
    width: 50%;
    margin: 50px auto;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.5);

    border-radius: 20px;
}

@media(max-width: 500px) {
    .div {
        width: 95%;
        margin: 90px auto;
    }
}
</style>

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Jean-pierre14">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sniper14</title>
</head>

<body>
    <div class="div">
        <h1><?php  print $error_title;?></h1>
        <h4><?php  print $error_message;?></h4>
    </div>
    <div class="div img">
        <h2>Welcome to Sniper@14.arm</h2>
        <p>
            This part of code was design to make my mind strong, to master many thing.
        </p>
    </div>
</body>

</html>