<?php
require_once 'includes/dbConfig.php';
require_once 'includes/registerSql.php';
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Register</title>
    </head>

    <body class="bg-dark">
        <div class="container">
            <div class="card card-register mx-auto mt-5">
                <div class="card-header">Register an Account</div>
                <div class="card-body">
                    <form method="post" action="register.php">
                        <?php include('includes/errors.php'); ?>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="exampleInputName">Username</label>
                                    <input class="form-control" id="exampleInputName" type="text" name="username"
                                        value="<?php echo $username; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp"
                                name="email" value="<?php echo $email; ?>">
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input class="form-control" id="exampleInputPassword1" type="password"
                                        name="password_1">
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputPassword1">Confirm Password</label>
                                    <input class="form-control" id="exampleInputPassword2" type="password"
                                        name="password_2">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block" name="reg_user">Register</button>
                    </form>
                    <div class="text-center">
                        <a class="d-block small mt-3" href="login.php">Login Page</a>
                        <!--- <a class="d-block small" href="forgot-password.html">Forgot Password?</a>-->
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
    <?php
} else {
    header("Location: login.php");
    die();
} ?>