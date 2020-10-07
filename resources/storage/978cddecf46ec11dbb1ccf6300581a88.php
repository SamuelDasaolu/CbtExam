<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register</title>
        <link href="<?php echo asset('adminpage/css/styles.css'); ?>" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form method="POST">
                                            <div class="alert alert-<?php echo isset($_SESSION['error'])? 'danger' : 'light'; ?>" role="alert">
                                            <small id="emailHelp" class="form-text text-muted"><?php echo isset($_SESSION['error'])? $_SESSION['error'] : ''; ?></small>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="first_name">First Name</label><input name="first_name" class="form-control py-4" id="" type="text" placeholder="Enter first name" value="<?php echo isset($_POST['first_name'])? $_POST['first_name'] : ''; ?>"/></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="last_name">Last Name</label><input name="last_name" class="form-control py-4" id="" type="text" placeholder="Enter last name" value="<?php echo isset($_POST['last_name'])? $_POST['last_name'] : ''; ?>"/></div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="small mb-1" for="username_register">Username</label><input name="username_register" class="form-control py-4" id="" type="text" aria-describedby="emailHelp" placeholder="Choose a Username" value="<?php echo isset($_POST['username_register'])? $_POST['username_register'] : ''; ?>"/></div>
                                            <div class="form-group"><label class="small mb-1" for="email_register">Email</label><input name="email_register" class="form-control py-4" id="inputEmail" type="email" aria-describedby="emailHelp" placeholder="Enter email address" value="<?php echo isset($_POST['email_register'])? $_POST['email_register'] : ''; ?>"/></div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="password_register">Password</label><input name="password_register" class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" /></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="confirm_password_register">Confirm Password</label><input name="confirm_password_register" class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Confirm password" /></div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0"><input type="submit" class="btn btn-primary btn-block" value="Create Account" name="submit_register"/></div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="<?php echo route('home'); ?>">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; CBT Technologies 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo asset('adminpage/js/scripts.js'); ?>"></script>
    </body>
</html>
