<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/style.css">
</head>

<body>
    <div class="container" style="padding: 50px 0">
        <div class="bg-white p-3 box mb-3">
            <h4>Ajax display CRUD OP</h4>
            <p>
                We gonna use html to display data and jquery come from mongodb backend
            </p>
        </div>
        <div class="row">
            <div class="col-md-4">
                <form action="">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" placeholder="Username" id="username">
                        </div>
                        <div class="form-group col-md-8">
                            <label for="name">name</label>
                            <input type="text" placeholder="Name" id="name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" class="form-control" placeholder="Password ****">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email@gmail.com" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-sm btn-success">Register</button>
                    </div>
                </form>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="p-1 card-header">
                        <h2>Data</h2>
                    </div>
                    <div class="card-body">

                    </div>
                    <div class="card-footer">
                        <small>23 mount</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <img src="https://scontent.febb6-1.fna.fbcdn.net/v/t1.0-0/s640x640/123833714_3325758467550605_9113912822362667779_o.jpg?_nc_cat=101&ccb=2&_nc_sid=730e14&_nc_eui2=AeGnTh8_RducRqzMQX0dMvp4npSVeK5rJJ6elJV4rmsknk43QhDWvrtjfZs6quGtaXejsjBCE3jTQE0n1rN5hc4W&_nc_ohc=2OSgykOaZMoAX_V6O_3&_nc_ht=scontent.febb6-1.fna&tp=7&oh=d85c29b8c9f376dcdbb73006f5b9b81f&oe=5FD06973"
                    alt="Grace El bisimwa" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div id="results">
                    <!-- Ajax -->
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./public/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="./public/js/main.js"></script>
</body>

</html>