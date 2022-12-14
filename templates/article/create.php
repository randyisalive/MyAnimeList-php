<?php

include('../base.php');

include('../navbar.php');
?>

<br>

<div class="container border">
    <div class="container">
        <ul class="nav nav-tabs mt-3" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Creare Article</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="container-fluid align-content-center">
                    <div class="container">
                        <form action="../../templates/process/process_article.php" method="POST" class=" mt-5 mb-8">
                            <div class="container mt-3">
                                <h5>Create Article Entry</h5>
                            </div>

                            <div class="container mt-3">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div class="container">
                                                <small class="ms-1">Enter Title</small>
                                                <input type="text" placeholder="Title..." name="title" class="form-control mt-2" required>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="row">
                                        <div class="col mt-4">
                                            <div class="container">
                                                <small class="ms-1">Entry Text:</small>
                                                <div class="form-floating mt-3">
                                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="body" required></textarea>
                                                    <label for="floatingTextarea2">Article</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mt-5">
                                            <div class="container text-center mt-5 mb-5">
                                                <input type="submit" class="btn btn-success mb-5" value="Submit Article">

                                            </div>
                                        </div>

                                    </div>



                                </div>

                            </div>
                        </form>

                    </div>

                </div>



            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
        </div>
    </div>

</div>
<?php 
include('../footer.php')
?>




