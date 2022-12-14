<?php include ('base.php')
?>
<title>Signup</title>

<?php include('navbar.php') ?>
<div class="container border">
    <div class="row">
        <div class="col-3 ">

        </div>
        <div class="col border mt-3 mb-3">
            <div class="row">
                <div class="col text-center mb-5">
                    <span class="h6 mt-3">Sign Up</span>

                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="container border-top ">
                        <form action="../templates/process/process_signup.php" method="POST">
                            <div class="container mb-3 mt-3">
                                <div class="form-floating">
                                    <input type="text" placeholder="Username" class="form-control" name="username" required>
                                    <label for="floatingInput">Username</label>
                                </div>
                            </div>
                            <div class="container mb-3 mt-3">
                                <div class="form-floating">
                                    <input type="email" placeholder="Email" class="form-control" name="email" required>
                                    <label>Email</label>
                                </div>
                            </div>
                            <div class="container mb-3 mt-3">
                                <div class="form-floating">
                                    <input type="password" placeholder="Password" class="form-control" name="password" required>
                                    <label>Password</label>
                                </div>
                            </div>
                            <div class="container mb-3 mt-3">
                                <div class="form-floating">
                                    <input type="text" placeholder="Re-Enter password" class="form-control" name="re_enter" required>
                                    <label>Re-Enter Password</label>
                                </div>
                            </div>
                            <div class="container text-center text-danger">
                                
                                <h6><?php
                                if (isset($_SESSION['flash_error_signup'])) {
                                     echo $_SESSION['flash_error_signup'];
                                }                                   
                                
                                ?></h6>

                            </div>


                            <div class="text-center container mb-5 mt-3">
                                <input type="submit" value="Create Account" class="btn btn-primary">
                            </div>


                        </form>

                        <div class="container text-center mt-5 mb-5">
                            <a href="../templates/login.php" class="btn btn-outline-primary">Log In</a>

                        </div>
                    </div>

                </div>
            </div>


        </div>
        <div class="col-3">

        </div>
    </div>


</div>


<?php include('footer.php') ?>