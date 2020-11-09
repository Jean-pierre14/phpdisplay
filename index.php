<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/style.css">
</head>

<body>
    <div class="container" style="padding: 50px 0">
        <h4>Ajax display CRUD OP</h4>
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
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="./public/js/main.js"></script>
</body>

</html>