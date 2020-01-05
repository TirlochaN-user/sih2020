<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Welcome user</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.html"><img src="images/firimg.jpg" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="active"><a href="userdash.php">Dashboard</a></li>
                            <li><a href="userdetails.php"><i class="ti-map-alt"></i> <span>User Details</span></a></li>
                            <li><a href="#"><i class="ti-receipt"></i> <span>Track FIR</span></a></li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                </div>
                <!-- header area end -->
                <!-- page title area start -->
                <div class="page-title-area">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="breadcrumbs-area clearfix">
                                <h4 class="page-title pull-left">Dashboard</h4>
                                <ul class="breadcrumbs pull-left">
                                    <li><a href="userdash.php">Home</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 clearfix">
                            <div class="user-profile pull-right">
                                <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                                <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
                                    <?php echo $_SESSION['name'] ?><i class="fa fa-angle-down"></i></h4>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="logout.php">Log Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="col-12" style="margin-top:30px">
                    <div class="card">
                        <div class="card-body">
                            <h1 style="text-align:center">Enter FIR Details</h1>
                            <hr>
                            <form>
                                <h4 style="margin-bottom: 30px">Submit to Police Station:</h4>
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label for="District">Dsitrict Name</label>
                                        <select id="District" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2"></div>
                                    <div class="form-group col-md-5">
                                        <label for="PSName">Police Station Name</label>
                                        <select id="PSName" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <h4 style="margin-bottom: 30px">Details of Complaint/Information to Police:</h4>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="ctype">Complaint Type</label>
                                        <select id="ctype" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2"></div>
                                    <div class="form-group col-md-4">
                                        <label for="date" class="col-form-label">Occurence Date</label>
                                        <input class="form-control" type="date" value="2020-01-01" id="date" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label for="CDetails">Complaint Details</label>
                                        <textarea class="form-control" id="CDetails" rows="3" required></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label for="SDetails">Suspect Details</label>
                                        <textarea class="form-control" id="SDetails" rows="3" required></textarea>
                                    </div>
                                </div>
                                <hr>
                                <h4 style="margin-bottom: 30px">Your Details: </h4>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Your Name: </label>
                                        <input type="text" class="form-control" id="name" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="fname">Father/Husband Name: </label>
                                        <input type="text" class="form-control" id="fname" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label for="caste">Caste</label>
                                        <select id="caste" class="form-control">
                                        <option >General</option>
                                            <option >OBC</option>
                                            <option >SC</option>
                                            <option>ST</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="id">Identification</label>
                                        <select id="id" class="form-control" required>
                                            <option >Aadhar Card</option>
                                            <option >Driving License</option>
                                            <option >PAN Card</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2"></div>
                                    <div class="form-group col-md-6">
                                        <label for="idno">Identification No: </label>
                                        <input type="number" id="idno" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label for="padress">Permanent Address: </label>
                                        <textarea class="form-control" id="paddress" rows="3" required></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="contactno">Contact No: </label>
                                        <input type="number" class="form-control" id="contactno" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="email">Email Id: </label>
                                        <input type="email" class="form-control" id="email" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page container area end -->
            <!-- jquery latest version -->
            <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
            <!-- bootstrap 4 js -->
            <script src="assets/js/popper.min.js"></script>
            <script src="assets/js/bootstrap.min.js"></script>
            <script src="assets/js/owl.carousel.min.js"></script>
            <script src="assets/js/metisMenu.min.js"></script>
            <script src="assets/js/jquery.slimscroll.min.js"></script>
            <script src="assets/js/jquery.slicknav.min.js"></script>


            <!-- others plugins -->
            <script src="assets/js/plugins.js"></script>
            <script src="assets/js/scripts.js"></script>
</body>

</html>