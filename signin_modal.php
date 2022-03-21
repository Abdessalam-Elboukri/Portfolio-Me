<?php

    session_start();

        include("sql/config.php");

        // initializing variables ; define variables and set to empty values
                            
        $email    ="";
        $password ="";
        $errors = array();
        // LOGIN USER
        if (isset($_POST['login_user'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
// -------------
        $email = test_input($_POST["email"]);
        $password = test_input($_POST["password"]);

        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }

// -------------  
        if (empty($email)) {
            array_push($errors, "Email is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }
    
        if (count($errors) == 0) {
            // $user_pass = md5($password);
            $query = "SELECT * FROM users_accounts WHERE user_email='$email' AND user_password='$password' ";
            $results = mysqli_query($conn, $query);
            if (mysqli_num_rows($results) == 1) {

            $data_v=mysqli_fetch_array($results);
            $_SESSION['name'] = $data_v['name'] ;
            $_SESSION['email'] = $email ;
            $_SESSION['password'] = $password;
       
      
            if(isset($_POST['remeber_me'])){
                setcookie('email', $email, time()+3600*24 , "/");
                setcookie('pass', $password, time()+3600*24 , "/");
            }

            header('location:Home.php');

            }else {
                array_push($errors, "Wrong email / password combination");
        }
    }
}
?>
<?php
    function getcookie($val){
        if(isset($_COOKIE["$val"])){
            echo $_COOKIE["$val"];
        }
    }
?>

<section class=" d-flex justify-content-center align-items-center dark vh-100 vw-100">
    <div class=" col-lg-4 col-sm-8 col-md-6 ">
        <div class="bg-light p-4 shadow signin" style=" border-radius: 20px;">

            <div class=" d-flex flex-column">
                <div class="text-center">
                    <div class="modal-header">
                        <h4>You Should to Login </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="modal-body text-white">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><a
                        href="signin.php">LogIn</a></button>
                <button type="button" class="btn btn-primary"><a href="signin.php">LogIn</a></button>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div> <!-- </div> -->
    </div>
</section>

<section class=" d-flex justify-content-center align-items-center dark vh-100 vw-100">
    <div class=" col-lg-4 col-sm-8 col-md-6 ">
        <div class="bg-light p-4 shadow signin" style=" border-radius: 20px;">
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content p-4">
                        <div class=" d-flex flex-column">
                            <div class="text-center">
                                <h3 class="text-uppercase">Sign In</h3>
                                <p class="text-muted">Enter your credentials to access your account</p>
                            </div>
                            <form action="<?php echo $_SERVER[" PHP_SELF"];?>" method="POST" id="login-form">

                                <?php include 'error_login.php'; ?>

                                <div class=" d-flex flex-column text-muted ">
                                    <label for="">E-mail</label>
                                    <input type="text" name="email" id="email-login" value=""
                                        placeholder="Enter your email"
                                        class="w-100 rounded-3 border p-2 bg-transparent form-control">
                                </div>
                                <div class=" d-flex flex-column text-muted mt-3 text">
                                    <label for="">Password</label>
                                    <input type="password" name="password" id="pass-login" value=""
                                        placeholder="Enter your password"
                                        class="w-100 rounded-3 border p-2 bg-transparent form-control">
                                </div>
                                <div class="d-flex align-items-center mt-3">
                                    <input type="checkbox" name="remeber_me" id="check"
                                        class="form-check-input m-0 p-0 ">
                                    <label for="check" class="m-0 ml-3" style="font-size:13px">Remember me</label>
                                </div>
                                <div class="mt-3">
                                    <input type="submit" value="Login" name="login_user"
                                        class="btn btn-info w-100 rounded-3 border-1 text-decoretion-none text-white text-uppercase">
                                </div>
                            </form>
                            <div class="text-center mt-3">
                                <p class="text-muted " style="font-size:14px">I don't have an account<a
                                        href="signup.php" class="text-info ml-2">Sign Up</a></p>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</section>