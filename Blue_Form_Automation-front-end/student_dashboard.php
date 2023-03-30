<!DOCTYPE html>
<html lang="en">

<?php
session_start();
$user = $_SESSION['user_name'];
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Blue Form</title>
    <!--w3school-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body class="student_dashboard">
    <!--navbar-->
    <nav id="navbar-example2" class="navbar bg-body-tertiary px-3 mb-3">
        <a class="navbar-brand" href="#"><img
                src="https://ncrcourses.christuniversity.in/pluginfile.php/1/core_admin/logo/0x200/1630494788/LOGO%20PNG.png"
                alt="" height="50px"></a>

        <ul class="nav nav-pills ">
            <li class="nav-item">
                <a class="nav-link">
                    <?php
                    echo " " . $_SESSION['user_name'];
                    ?>
                </a>
            </li>
            <div class="btn-group">
                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static"
                    aria-expanded="false">
                </button>
                <ul class="dropdown-menu dropdown-menu-lg-end">
                    <li><a class="dropdown-item" href="#scrollspyHeading4">Application</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#scrollspyHeading5">Log out</a></li>
                </ul>
            </div>
        </ul>
    </nav>
    <!--main Body-->
    <!--cards-->
    <div class="container">
        <div class="dashboard_cards_case">
            <div class="dashboard_cards ">
                <div class="card" onmouseover="zoomIn1(this)" onmouseout="normal1(this)" id="card1">
                    <img src="images/main_bg.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">New Application</h5>
                        <p class="card-text">Apply a new application</p>
                        <button data-bs-toggle="modal" data-bs-target="#id01" class="btn btn-primary">Apply</button>
                    </div>
                </div>
                <div class="card" onmouseover="zoomIn2(this)" onmouseout="normal1(this)" id="card2">
                    <img src="images/main_bg.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Application Status</h5>
                        <p class="card-text">Check the status of your current Application(s)</p>
                        <button data-bs-toggle="modal" data-bs-target="#id01" class="btn btn-primary">Check</button>
                    </div>
                </div>
                <div class="card" onmouseover="zoomIn3(this)" onmouseout="normal1(this)" id="card3">
                    <img src="images/main_bg.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button data-bs-toggle="modal" data-bs-target="#id01" class="btn btn-primary">Apply</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!--modal code-->
    <div id="id01" class="modal">
        <div class="modal-dialog modal-dailog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Medical Leave Form</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!--blue-form-->
                <div class="modal-body">
                    <div class="upload">
                        <form name =f2 class="modal_form" action="image_upload.php"  onsubmit ="return validation2()" method="post" enctype="multipart/form-data">                            
                            <label>Reason For Leave</label>
                            <input type="text area" name="reason" height="50px" class="reason_TA">
                        <label>Select Image File:</label>
                        <input type="file" name="image">
                        <input type="submit" name="submit" value="Upload" >
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!--footer-->
    <section class="login_footer">
        <div class="login_contact">
            <p class="uni_name">CHRIST (Deemed to be <br> University), Delhi NCR</p>
            <p><i class="fa fa-globe" aria-hidden="false"></i> https://ncr.christuniversity.in/ <br>
                <i class="fa fa-envelope" aria-hidden="true"></i> sysadmin.ncr@christuniversity.in <br>
                <i class="fa fa-mobile" aria-hidden="true"></i> 1800 123 3212
            </p>
            <div class="login_socialmedia">
                <i class="fa fa-facebook-official" aria-hidden="false"></i>
                <i class="fa fa-twitter-square" aria-hidden="true"></i>
                <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                <i class="fa fa-youtube-square" aria-hidden="true"></i>
                <i class="fa fa-flickr" aria-hidden="true"></i>
                <i class="fa fa-instagram" aria-hidden="true"></i>
                <i class="fa fa-globe" aria-hidden="true"></i>
            </div>
        </div>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
<script src="script.js"></script>

</html>