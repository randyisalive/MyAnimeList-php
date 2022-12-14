<?php include('base.php');
include('db.php');

?>

<title>
    Home
</title>
<link rel="stylesheet" href="/static/css/home.css">
<link rel="stylesheet" href="/static/css/profile.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="/static/js/read_more.js"></script>

<?php include('navbar.php') ?>
<div class="container-fluid ">

    <div class="row">

        <!-- Left Container -->
        <div class="col-sm-9 border">

            <div class="row">
                <div class="col">
                    <div class="mt-3">
                        <p class="h5">Anime Newest</p>
                    </div>
                    <!-- image top container -->
                    <div class="image-container border-top row mt-3">
                        <?php
                        $sql = "SELECT * FROM anime_newest";
                        $result = mysqli_query($db_connection, $sql);
                        if ($result -> num_rows > 0) 
                        {
                            while ($row = $result -> fetch_assoc()) {
                                echo '<div class="col">
                            <img src="../static/img/'?><?=$row['picture_name']; ?> <?='" class="img-panel img-fluid mx-auto d-block" alt="...">
                            <p class="text-center h6">'?><?=$row['picture_title'];?><?='</p>

                        </div>';
                            }
                        }
                        
                        ?>
                    <!-- image top container -->
                </div>

            </div>
            <div class="row">
                <div class="col mt-5">
                    <div class="p-1">
                        <div class="row">
                            <div class="col">

                                <h6 class="">Featured Articles</h6>
                            </div>
                            <div class="col-2 text-end">
                                <h6>
                                    <a href="/article" style="margin-right: 3px;" class="text-decoration-none">view more</a>

                                </h6>
                            </div>

                        </div>




                        <div class="border-top border-bottom">
                            <div class="row">
                                <div class="col ">
                                    <p class="h4 text-center mt-3 mb-6">{{title}}</p>



                                </div>

                            </div>
                            <div class="row">
                                <div class="col m-more-less-content">
                                    <p class="mb-4 justify-content">

                                        {{body }}
                                    </p>

                                </div>

                            </div>
                            {% endfor %}

                        </div>
                    </div>

                </div>

            </div>

        </div>
        <!-- Left Container -->
        <!-- Right Container -->
        <div class="col">
            {% if session and session.get('name') %}
            <!-- profile data -->
            <div class="row">
                <div class="col">
                    <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
                        <div class="card1 p-4">
                            <div class=" image1 d-flex flex-column justify-content-center align-items-center">
                                <img src="{{ img_url }}" height="100" width="100" class="rounded img-thumbnail img-fluid" /></button> <span class="name mt-3">Hello, 
                                    
                                    <?php   if (isset($_SESSION['username'])) {
                                        echo $_SESSION['username'];

                                    } else {
                                        echo "<p class=text-danger>Guest</p>";
                                    }
                                    
                                     ?></span> <span class="idd"><?php   ?></span>
                                <div class="d-flex flex-row justify-content-center align-items-center gap-2"> <span class="idd1">
                                    <?php  
                                    if (isset($_SESSION['email'])) {
                                         echo $_SESSION['email']; 
                                    } else {
                                        echo "<a href=edit_profile.php>Add your email!!</a>";
                                    }
                                    
                                   ?></span> <span><i class="fa fa-copy"></i></span> </div>
                                <div class="d-flex flex-row justify-content-center align-items-center mt-3"> <span class="number">1069 <span class="follow">Followers</span></span>
                                </div>
                                <div class=" d-flex mt-2"> <button class="btn2 btn-dark"> <a href="{{url_for('auth.edit_profile', name=session.get('name'))}}" class="text-decoration-none text-white">Edit Profile</a> </button> </div>
                                <div class="text mt-3"> <span>Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br><br> Artist/ Creative Director by Day #NFT minting@ with FND night. </span> </div>
                                <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center"> <span><i class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i></span> <span><i class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span> </div>
                                <div class=" px-2 rounded mt-4 date "> <span class="join">Joined May,2021</span> </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- profile data -->
            <!--Table Profile Statistics-->
            <div class="row">
                <div class="col">
                    <p class="h6 mt-3">My Statistic</p>
                    <div class="row">
                        <div class="col">
                            <table class="table table-striped table-hover">
                                <tbody>
                                    <tr>
                                        <td>Forum Created</td>
                                        <td>{{total_forum[0]}}</td>
                                    </tr>
                                    <tr>
                                        <td>Anime Entries</td>
                                        <td>total anime entries</td>
                                    </tr>
                                    <tr>
                                        <td>AnimeList Views</td>
                                        <td>total anime entries</td>

                                    </tr>
                                    <tr>
                                        <td>Manga Entries</td>
                                        <td>total anime entries</td>


                                    </tr>
                                    <tr>
                                        <td>MangaList Views</td>
                                        <td>total anime entries</td>
                                    </tr>
                                    <tr>
                                        <td>Profile Views</td>
                                        <td>total anime entries</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!--Table Profile Statistics-->
            {% endif %}
            <!-- Table top airing anime -->
            <div class="row">
                <div class="col">
                    <p class="h6 mt-3">Top Airing Anime</p>
                    <div class="row">
                        <div class="col">
                            <ul>
                                <li>
                                    <div class="row">
                                        <div class="col-sm-1">
                                            <span>1</span>
                                        </div>
                                        <div class="col">
                                            <p class="img"><img src="" alt="img-anime"></p>
                                        </div>
                                        <div class="col data-anime">
                                            <p>Title</p>
                                            <div class="row">
                                                <div class="col">
                                                    <p>TV, 12 eps, scored 9.08</p>
                                                    <p>525,916 members
                                                    </p>

                                                </div>

                                            </div>

                                        </div>
                                        <div class="col">
                                            <p><a href="">Add</a></p>
                                            <!-- add to your animelist -->

                                        </div>

                                    </div>

                                </li>
                            </ul>


                        </div>

                    </div>
                </div>

            </div>
            <!-- Table top airing anime -->
            <div class="row">
                <div class="col">
                    <p class="h6">Top Upcoming Anime</p>
                    <div class="row">
                        <div class="col">
                            <ul>
                                <li>
                                    <div class="row">
                                        <div class="col-sm-1">
                                            <span>1</span>
                                        </div>
                                        <div class="col">
                                            <p class="img"><img src="" alt="img-anime"></p>
                                        </div>
                                        <div class="col data-anime">
                                            <p>Title</p>
                                            <div class="row">
                                                <div class="col">
                                                    <p>TV, 12 eps, scored 9.08</p>
                                                    <p>525,916 members
                                                    </p>

                                                </div>

                                            </div>

                                        </div>
                                        <div class="col">
                                            <p><a href="">Add</a></p>
                                            <!-- add to your animelist -->

                                        </div>

                                    </div>

                                </li>
                            </ul>

                        </div>

                    </div>
                </div>


            </div>
            <!-- Table top airing anime -->
            <!-- Table most popular anime -->
            <div class="row">
                <div class="col">
                    <p class="h6">Most Popular Anime</p>
                    <div class="row">
                        <div class="col">
                            <ul>
                                <li>
                                    <div class="row">
                                        <div class="col-sm-1">
                                            <span>1</span>
                                        </div>
                                        <div class="col">
                                            <p class="img"><img src="" alt="img-anime"></p>
                                        </div>
                                        <div class="col data-anime">
                                            <p>Title</p>
                                            <div class="row">
                                                <div class="col">
                                                    <p>TV, 12 eps, scored 9.08</p>
                                                    <p>525,916 members
                                                    </p>

                                                </div>

                                            </div>

                                        </div>
                                        <div class="col">
                                            <p><a href="">Add</a></p>
                                            <!-- add to your animelist -->

                                        </div>

                                    </div>

                                </li>
                            </ul>

                        </div>

                    </div>
                </div>


            </div>
            <!-- Table most popular anime -->
        </div>





    </div>





</div>
<?php 
include('../templates/footer.php');

?>

<script>
    function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }
</script>