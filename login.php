<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        <link href="vendor/bootstrap/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <?php
            require('database.php');
            session_start();
            // If form submitted, insert values into the database.
            if (isset($_POST['username'])){
                    // removes backslashes
                $username = stripslashes($_REQUEST['username']);
                $username = mysqli_real_escape_string($koneksi,$username);

                $password = stripslashes($_REQUEST['password']);
                $password = mysqli_real_escape_string($koneksi,$password);

                //Checking is user existing in the database or not
                $query = "SELECT * FROM `user` WHERE username='$username' and password='".md5($password)."'";
                $result = mysqli_query($koneksi,$query) or die(mysql_error());
                $rows = mysqli_num_rows($result);
                    if($rows==1){
                        $_SESSION['username'] = $username;
                        header("Location: index.php");
                    }else{
                        echo "<div class='form'><h3>Username/password is incorrect.</h3>
                        <br/>Click here to <a href='login.php'>Login</a></div>";
                    }
                }else{
            ?>  
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form action="" method="post" name="login">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="username" type="text" placeholder="Username" />
                                                <label for="username">Username</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="password" type="password" placeholder="Password" />
                                                <label for="password">Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button type="submit" class="btn btn-primary">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="regist.php">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="vendor/bootstrap/js/scripts.js"></script>
        <?php } ?>
    </body>
</html>


