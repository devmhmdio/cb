<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="assets/css/bootstrap..min.css">
    <link rel="stylesheet" href="assets/css/boxicons.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <link rel="stylesheet" href="assets/css/viewer.min.css">
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/student-registration.css">
    <title>CourseBees</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <style>
        .txt {
            line-height: 1.7;
            color: #727695;
            font-family: open sans, sans-serif;
            font-size: 15px;
        }

        .input-txt {

            color: lightsteelblue;
        }
        .container {
            min-height: auto !important;
        }
    </style>
</head>

<body>

    <div class="preloader">
        <div class="loader">
            <div class="shadow"></div>
            <div class="box"></div>
        </div>
    </div>

    <?php include './templates/header.php' ?>


    <div class="search-overlay">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-close">
                    <span class="search-overlay-close-line"></span>
                    <span class="search-overlay-close-line"></span>
                </div>
                <div class="search-overlay-form">
                    <form>
                        <input type="text" class="input-search" placeholder="Search here...">
                        <button type="submit"><i class='bx bx-search-alt'></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
   
    <section class="login-area">
        <div class="row m-0">
            <div class="col-lg-6 col-md-12 p-0">
                <div class="login-image">
                    <img src="assets/img/teacher-reg.jpg" alt="image">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 p-0">
                <div class="login-content">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="login-form">
                                <div class="logo">
                                    <a href="index.php"><img src="assets/img/black-logo.png" alt="image"></a>
                                </div>
                                <h3>Welcome...!!!</h3>
                                <!-- <p>New to CourseBees? <a href="register.html">Sign up</a></p> -->
                                <form method="POST" action="tea-reg.php" name="tea-reg">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Your name" class="form-control" required>
                                    </div>
                                    <div class="form-group" style="text-align: left;">
                                        <div class="row">
                                            <div class="col-sm-6 pt-1">
                                                <input type="email" name="email" placeholder="Your email address" class="form-control input-txt" style="width: 98%;" required>

                                            </div>
                                            <div class="col-sm-6 pt-1">
                                                <input type="tel" name="phone" placeholder="Your phone number" class="form-control input-txt" style="width: 98%;" required>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group" style="text-align: left;">

                                        <p>Enter your age and DOB</p>
                                        <input type="number" name="age" placeholder="Your age" class="form-control input-txt" style="width: 49%; float: left;" required>
                                        <input type="date" namee="dob" placeholder="Date of Birth" class="form-control input-txt" style="width: 49%; float: right;" required>
                                        <p>&nbsp;</p>
                                    </div>

                                    <div class="form-group" style="text-align: left;">
                                        <p>&nbsp;</p>
                                        <label class="txt px-2" style="margin-right: 10px;">Specialised Category</label>
                                        <br>
                                        <input type="checkbox" value="aviation" name="aviation" class="form-check-input " id="skill1">
                                        <label class="form-check-label" style="margin-right: 10px;" for="skill1">Aviation</label>
                                        <input type="checkbox" name="beauty" value="beauty" class="form-check-input" id="skill2">
                                        <label class="form-check-label" for="skill2" style="margin-right: 10px;">Beauty</label>
                                        <input type="checkbox" name="english" value="english" class="form-check-input" id="skill3">
                                        <label class="form-check-label" for="skill3">English</label>
                                    </div>
                                    <div class="form-group" style="text-align: left;">

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label class="txt px-2">Relevant Experience</label>
                                                <input type="text" name="exp" placeholder="Relevant Experience" class="form-control input-txt" style="width: 98%; float: left;" required>

                                            </div>
                                            <div class="col-sm-6">
                                                <label class="txt px-2">Personal Achievements</label>
                                                <input type="text" name="personal" placeholder="Personal Achievements" class="form-control input-txt" style="width: 98%; float: right;" required>

                                            </div>
                                        </div>
                                    </div>
                                    <p>&nbsp;</p>
                                    <button type="submit" name="submit" value="Submit">Submit Response</button>


                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='box' id="content-desktop">
                    <div class='wave -one'></div>
                    <div class='wave -two'></div>
                    <div class='wave -three'></div>
                </div>
                <div id="background-wrap">
                    <div class="bubble x1"></div>
                    <div class="bubble x2"></div>
                    <div class="bubble x3"></div>
                    <div class="bubble x4"></div>
                    <div class="bubble x5"></div>
                    <div class="bubble x6"></div>
                    <div class="bubble x7"></div>
                    <div class="bubble x8"></div>
                    <div class="bubble x9"></div>
                    <div class="bubble x10"></div>
                </div>
            </div>
        </div>
    </section>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/mixitup.min.js"></script>
    <script src="assets/js/parallax.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/particles.min.js"></script>
    <script src="assets/js/meanmenu.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/viewer.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>