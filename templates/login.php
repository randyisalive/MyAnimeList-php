<?php

include('db.php');
?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="/static/css/mdb.min.css" />
    <title>Login</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<?php include('navbar.php')
?>
<br>
<div class="container border">
    <div class="row">
        <div class="col-3 ">

        </div>
        <div class="col border mt-3 mb-3">
            <div class="row">
                <div class="col text-center mb-5">
                    <span class="h6">Login With</span>

                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="container border-top ">
                        <form action="process_login.php" method="post">
                            <div class="container mb-3 mt-3">
                                <div class="form-floating">
                                    <input type="text" placeholder="Username..." class="form-control" name="username">
                                    <label for="floatingInput">Username</label>
                                </div>
                            </div>
                            <div class="container mb-3 mt-3">
                                <div class="form-floating">
                                    <input type="password" placeholder="Password..." class="form-control" name="password">
                                    <label>Password</label>
                                </div>
                            </div>
                            {% for messages in get_flashed_messages() %}
                            <div class="container text-center text-danger">
                                <h6>{{messages}}</h6>

                            </div>
                            {% endfor %}


                            <div class="text-center container mb-5 mt-3">
                                <input type="submit" value="Login" class="btn btn-primary">
                            </div>


                        </form>
                        <div class="text-center container">
                            <a href="" class="text-decoration-none ">Forgot Password?</a> |
                            <a href="" class="text-decoration-none">Forgot Username?</a>
                        </div>
                        <div class="container text-center mt-5 mb-5">
                            <a href="{{url_for('auth.signup')}}" class="btn btn-outline-primary">Sing Up</a>

                        </div>
                    </div>

                </div>
            </div>


        </div>
        <div class="col-3">

        </div>
    </div>


</div>


<?php
include('footer.php')
?>