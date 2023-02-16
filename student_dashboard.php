<!DOCTYPE html>
<html lang="en">

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
</head>

<body class="student_dashboard">
    <!--navbar-->
    <nav id="navbar-example2" class="navbar bg-body-tertiary px-3 mb-3">
        <a class="navbar-brand" href="#"><img
                src="https://ncrcourses.christuniversity.in/pluginfile.php/1/core_admin/logo/0x200/1630494788/LOGO%20PNG.png"
                alt="" height="50px"></a>

        <ul class="nav nav-pills ">
            <li class="nav-item">
                <a id="user" class="nav-link" on=username()>username</a>
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
    <div class="container">
        <div class="dashboard_cards_case">
            <div class="dashboard_cards " style="width: auto; height: 25rem;">
                <div class="card"  onmouseover="zoomIn1(this)" onmouseout="normal1(this)" id="card1">
                    <img src="images/main_bg.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">New Application</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
                <div class="card"  onmouseover="zoomIn2(this)" onmouseout="normal1(this)" id="card2">
                    <img src="images/main_bg.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Application Status</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
                <div class="card"  onmouseover="zoomIn3(this)" onmouseout="normal1(this)" id="card3">
                    <img src="images/main_bg.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
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
<script>
    function username(){
    let text =document.getElementById("user").innerHTML;
    document.getElementById("username").innerText=text;}

</script>

</html>