<?php 
session_start();
?>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #244291; color:#fff">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand text-white" href="../../FINAL/templates/index.php">MyAnimeList</a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            </ul>

            <div class="d-flex">
                <div class="d-flex m-0 p-0"><?php
                            if (isset($_SESSION['username']))  {
                                echo $_SESSION['username']; 
                            } else {
                                echo "Guest";
                            }
                            
                             ?>
                    <ul class="nav nav-pills m-0 p-0"> <?php if (isset($_SESSION['username'])) {
                                    echo '<li class="nav-item dropdown m-0 p-0">
                            
                            <a class="nav-link dropdown-toggle m-0 text-white" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                                
                           </a> 
                            <ul class="dropdown-menu">
                               
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                        </li>';
                                } ?>
                        
                        <li class="navbar-brand">
                            <img src="{{ img_url }}" alt="" class="img" width="30" height="24">

                        </li>
                    </ul>




                </div>
                <?php
                if (isset($_SESSION['username'])) {
                    echo  '<button class="btn btn-danger"><a href="../templates/session_destroy.php" style="color: white; text-decoration:none;">Log Out</a></button>';

                }; ?>
                
                

                <button class="btn btn-success"><a href="../templates/signup.php" style="color: white; text-decoration:none;">Sign Up</a></button>
                <button class="btn btn-primary ms-2"><a href="../templates/login.php" style="color: white; text-decoration:none;">Log In</a></button>
                <?php 
                if (isset($_SESSION['username']) == 'rei') {
                    echo '<button class="btn btn-warning ms-3"><a href="../../FINAL/templates/admin/index.php" style="color: white; text-decoration:none;">Admin Dashboard</a></button>';
                } ?>


            </div>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../templates/index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Anime
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Search</a></li>
                        <li><a class="dropdown-item" href="#">Top Anime</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Manga
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Community
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../templates/forum/index.php">Forum</a></li>
                        <li><a class="dropdown-item" href="#">Blog</a></li>
                        <li><a class="dropdown-item" href="#">Users</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="../templates/article/create.php">Create Article</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/article/create">Add New Forum</a>
                </li>

            </ul>
            <form class="d-flex" method="GET">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="q">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>