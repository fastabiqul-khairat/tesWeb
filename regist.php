<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - SB Admin</title>
        <link href="vendor/bootstrap/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
    <?php
       
        require('database.php');
        // If form submitted, insert values into the database.
        if (isset($_REQUEST['username'])){
                // removes backslashes
            $first_name = stripcslashes($_REQUEST['firstname']);
            $first_name = mysqli_real_escape_string($koneksi, $first_name);

            $last_name = stripcslashes($_REQUEST['lastname']);
            $last_name = mysqli_real_escape_string($koneksi, $last_name);

            $username = stripslashes($_REQUEST['username']);
            $username = mysqli_real_escape_string($koneksi,$username); 

            $email = stripslashes($_REQUEST['email']);
            $email = mysqli_real_escape_string($koneksi,$email);

            $telepon = stripcslashes($_REQUEST['telepon']);
            $telepon = mysqli_real_escape_string($koneksi, $telepon);

            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($koneksi,$password);

            $query = "INSERT into `user` VALUES ('$username', '".md5($password)."', '$first_name', '$last_name', '$telepon', '$email')";
            $result = mysqli_query($koneksi,$query);
            if($result){
                echo"<h3>You are registered successfully.</h3>";
                echo "<br/>Click here to <a href='login.php'>Login</a></div>";
            }else{
                echo "<p>Username tersebut telah digunakan</p>";
                echo "<p>Harap Masukan Username yang lain</p>";
                echo "Click here to <a href='regist.php'>back</a></div>";
            }
        }else{
        ?>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center mb-5">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form name="regist" action="" method="post">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" name="firstname" type="text" placeholder="Enter your first name" required/>
                                                        <label for="inputFirstName">First name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" name="lastname" type="text" placeholder="Enter your last name" required/>
                                                        <label for="inputLastName">Last name</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" name="email" placeholder="name@example.com" required/>
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputTelepon" name="telepon" type="telepon" placeholder="telepon" required/>
                                                <label for="inputTelepon">Telepon</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputUsername" type="username" name="username" placeholder="username" required/>
                                                <label for="inputUsername">Username</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Create a password" required/>
                                                <label for="inputPassword">Password</label>
                                            </div>
                                                
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary btn-block">Create Account</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.php">Have an account? Go to login</a></div>
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
                            <div class="text-muted">Copyright &copy; Cepmek Website 2022</div>
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
