<?php 
include('wordpress/wp-includes/wp-db.php');
require('./wordpress/wp-blog-header.php');
global $wpdb;

session_start(); 
if (!empty($_SESSION['log_in']))
{
    $logged_in = true;
    $userType= $_SESSION['userType'];
}
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jogja Community School</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">Jogja Community School</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Discover JCS</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About Us</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact Us</a>
                    </li>
                <!-- Login ------>
                 <?php if($logged_in==true){ ?>
                    <li><a href="logout.php">Logout</a></li>
                <?php } else{ ?>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">Sign in <b class="caret"></b></a>
                        <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form" name="newForm" method="POST" action="check_login.php" accept-charset="UTF-8" id="login-nav">
                                        <div class="form-group">    
                                           <label class="sr-only">User Name</label>
                                           <input type="name" name="username" class="form-control"  placeholder="Email address" required>
                                           <input type="hidden" name="lastpage" value="index.php" class="form-control"> 
                                        </div>
                                        <div class="form-group">
                                           <label class="sr-only" for="exampleInputPassword2">Password</label>
                                           <input type="password" name="password" class="form-control"  placeholder="Password" required>
                                        </div>
                                        <div class="form-group">
                                           <button type="submit" class="btn btn-success btn-block">Sign in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    </div>
                    <div class="clearfix"></div>
                  <!-- End Login -->
                  <?php } ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <ul class="list-inline item-details">
                   <li> <img class="img-responsive" src="img/portrait4.png" alt=""> </li>
                   <li> <img class="img-responsive" src="img/portrait5.png" alt=""> </li>
                   <li> <img class="img-responsive" src="img/portrait6.png" alt=""> </li>
                   <li> <img class="img-responsive" src="img/portrait7.png" alt=""></li>
                </ul>
                    <div class="intro-text">
                        <span class="name">Jogja Community School</span>
                        <hr class="star-light">
                        <span class="skills">Excellence - Professionalism - Commitment</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Discover JCS</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
            <!-- Start School row -->
                <div class="col-sm-4 portfolio-item">
                    <a href="#school_modal" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/school_edited.png" class="img-responsive" alt="">
                    </a>
                </div>
            <!-- End School row -->
            <!-- Start Community row -->
                <div class="col-sm-4 portfolio-item">
                    <a href="#community_modal" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/community.png" class="img-responsive" alt="">
                    </a>
                </div>
            <!-- End Community row -->
            <!-- Start Agenda row -->
            <?php if($logged_in==true){ ?>
                <div class="col-sm-4 portfolio-item">
                    <a href="timeline.php" class="portfolio-link">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/agenda.png" class="img-responsive" alt="">
                    </a>
                </div>
                <?php } else {?>
                <div class="col-sm-4 portfolio-item">
                    <a href="#login_first_modal" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/agenda.png" class="img-responsive" alt="">
                    </a>
                </div>
            <?php }?>
            <!-- End Agenda row -->
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About Us</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>JCS provides students with an
                    internationally recognised and transferable curriculum
                    supported by quality international and local resources.
                    .As a small school with a high teacher-to-student ratio, JCS is able respond to the individual needs of students.</p>
                </div>
                <div class="col-lg-4">
                    <p> In multi-grade classrooms, teachers support students in learning at the appropriate level and age. Enquiry-based learning is applied as much as possible to support the diverse range of ages and skill levels in each classroom.</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#" class="btn btn-lg btn-outline">
                        <i class="glyphicon glyphicon-zoom-in"></i> Learn more
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact Us</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit"  class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Where are we</h3>
                        <p>Login to get the adress<br>Or contact us for more details</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Follow us</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/pages/Jogjakarta-Community-School/395131763855494" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Jogja Community School</h3>
                        <p>Join us on Facebook to keep updated of our  <a href="https://www.facebook.com/pages/Jogjakarta-Community-School/395131763855494">activities and events</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; JCS 2015
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Start School row detail -->
    <div class="portfolio-modal modal fade" id="school_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Our School</h2>
                            <hr class="star-primary">
                            <img src="img/kids_hands.jpg" class="img-responsive img-centered" alt="">
                                <p><a>Jogjakarta Community School (JCS)</a> provides students with an internationally recognised and transferable curriculum supported by quality international and local resources.  As a small school with a high teacher-to-student ratio, JCS is able respond to the individual needs of students.  In multi-grade classrooms, teachers support students in learning at the appropriate level and age. Enquiry-based learning is applied as much as possible to support the diverse range of ages and skill levels in each classroom.
                                <hr>
                                Curriculum coordination across the entire teaching program supports students’ transitions from Pre-School and Kindergarten, through to the Primary Years Program, and then to the Secondary Years Program, specifically Cambridge Key Stage 3 program of study when students are 11 years old, and Key Stage 4/IGCSE when students are 14 years old.
                                 <hr>
                                The school year comprises 185 teaching days divided into three terms.  JCS follows a northern hemisphere timetable; the School year begins late August and runs until the end of June.  There are breaks between terms and mid-term.  The school day is from 8.00am to 2.30pm, with the exception of Pre-school and Reception students who are dismissed at 12.00pm.
                                 <hr>
                                The learning program is divided into three levels:
                                 <hr>
                                <ul class="list-inline ">
                                    <li align=left><strong>Early Years Foundation Program </strong></li>
                                    <li align=left>Primary Years Program</li>
                                    <li align=left><strong>Secondary Years Program</strong></li>
                                </ul>
                             </p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- End School row detail -->
     <!-- Start Community row detail -->
    <div class="portfolio-modal modal fade" id="community_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Our Community</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/community.png" class="img-responsive img-centered" alt="">
                            <p><a>Jogjakarta Community School (JCS)</a> prides itself on its welcoming atmosphere to families and students. Students of any age quickly feel comfortable in the School, make friends and respond well to the encouraging and supportive environment.  The JCS community includes families from Belgium, Netherlands, USA, Denmark, Argentina, Germany, Australia, UK, France and numerous parts of Indonesia.
                            <hr>
                             JCS has a strong community ethos.  The “community” element of JCS is developed internally as a supportive school community where people are respected and respect the contributions of others.  The community orientation is also developed in JCS’ external relations and how the School engages with the local community.  JCS seeks to draw on the diverse resources of our local community and ground children’s education in their local context.  JCS also actively engages with the local community through charitable and social activities.</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Community row detail -->
    <!-- Start Modal if not logged in to see timeline -->
     <div class="portfolio-modal modal fade" id="login_first_modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Please log in to enter this area!</h2>
                                <p>Please login in order to enter this area. If you still dont have a login user please contact our staff</p>
                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- End Modal if not logged in -->


</body>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script> -->

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>

</html>
