<!doctype html>
<html class="no-js" lang="en">
<?php 
include_once "connect.php";
session_start();
if (!isset($_SESSION["fname"])) {
    header('location: indexmain.php');
    exit();
}
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PROFILE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <!-- all css here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!--color css-->
    <link rel="stylesheet" id="triggerColor" href="assets/css/triggerplate/color-0.css">
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
    <!-- prealoader area end -->
    <!-- header area start -->
    <header id="header">
        <!-- header top area start -->
        <div class="header-top">
            <div class="container">
                <div class="row d-flex flex-center">
                    <div class="col-sm-8">
                        <div class="ht-address">
                         <ul>
                           <li><h4 style="color: white;">
                            <?php 
                                 if (isset($_SESSION['fname']) && isset($_SESSION['lname'])) {
                                 echo "Welcome, " . $_SESSION['fname'] . " " . $_SESSION['lname'];
                               }
                               else{
                                echo "test";
                               }
                            ?></h4>  </li>

                         </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                    <div class="cta-btn">
                        <a class="btn btn-light btn-round" href="indexmain.php">LOG OUT</a>
                    </div>
                </div>

                    
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- header top area end -->
        <!-- header bottom area start -->
        <div class="header-bottom">
            <div class="container">
                <div class="header-bottom-inner">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-sm-9">
                            <div class="logo">
                                <a href="indexmain.php"><img src="assets/images/icon/logo-middle2.png" alt="logo"></a>
                                <h6 style="color: white; display: inline-block; margin-left: 10px;">ELEARNING DZ</h6>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 d-none d-lg-block">
                            <div class="main-menu">
                                <nav>
                                    <ul id="m_menu_active">
                                        
                                        
                                        <li><a href="QUIZZSTUDENT.html"style="color: aliceblue;"><h4 style="color:white;">Quizzes</h4></a>
                                            <ul class="submenu">
                                                
                                               
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0);"style="color: aliceblue;"><h4 style="color:white;">Programming</h4></a>
                                            <ul class="submenu">
                                                
                                                <li><a href="PHPS.html">PHP</a></li>
                                                <li><a href="C++s.html">C++</a></li>
                                                <li><a href="Cs.html">C</a></li>
                                                <li> <a href="HTMLS.html">HTML</a></li>
                                                <li><a href="CSSDZS.html">CSS</a></li>
                                                <li><a href="JAVASCS.html">JAVASCRIPT</a></li>
                                                <li><a href="JAVAS.html">JAVA</a></li>
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        
                        <div class="col-12 d-block d-lg-none">
                            <div id="mobile_menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header bottom area end -->
    </header>
    <!-- header area end -->
   
    <!-- body overlay area start -->
    <div class="body_overlay"></div>
    <!-- body overlay area end -->
    <!-- crumbs area start -->
    <div class="crumbs-area">
        <div class="container">
            <div class="crumb-content">
                <h4 class="crumb-title"><span>Welcome</span><h4 style="color:white;">Dear Student Choose Your Level</h4></h4>
            </div>
        </div>
    </div>
    <!-- crumbs area end -->
    
    <!-- levels area start -->
    <div class="teacher-area pb--100">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="section-title-style2 black-title title-tb text-center">
                        <span>Learn from the best</span>
                        <h2 class="primary-color">Our GRADS</h2>
                    </div>
                </div>
            </div>
            <div class="commn-carousel owl-carousel card-deck">   
                <div class="card mb-5"> 
                    <img src="assets/images/teacher/teacher-member3.jpg" alt="image"> 
                    <div class="card-body teacher-content p-25">  
                      <h4 class="card-title mb-4"></a>Bachelor's Degree</h4>
                      <span class="primary-color  d-block mb-4">our  levels</span>
                      <ul  class="card-text" style="color: black;">
                          <li><a href=".html"><h4>L1</h4></a></li>
                          <li><a href="l2.html"><h4>L2</h4></a></li>
                          <li><h4>L3</h4>
                            <ul class="submenu">
                                                
                                <li><a href="L3ISIL.html">ISIL</a></li>
                                <li><a href=".html">ACAD</a></li>
                               
                            </ul>
                          </li>
                     </ul>
                      
                    </div>
                  </div><!-- card -->    

              <div class="card mb-5"> 
                <img src="assets/images/teacher/D.jpg" alt="image"> 
                <div class="card-body teacher-content p-25">  
                  <h4 class="card-title mb-4"></a>Master's Degree</h4>
                  <span class="primary-color  d-block mb-4">our  levels</span>
                  <ul  class="card-text" style="color: black;">
                    <li><a href=".html"><h4>M1</h4></a></li>
                   
                    <li><h4>M2</h4>
                      <ul class="submenu">
                                          
                          <li><a href=".html">Big Data </a></li>
                          <li><a href=".html">security</a> </li>
                          <li><a href=".html">AI </a></li>
                          
                      </ul>
                    </li>
               </ul>
                  
                </div>
              </div><!-- card -->    

              <div class="card mb-5"> 
                <img src="assets/images/bg/hero-bg2.jpg" alt="image"> 
                <div class="card-body teacher-content p-25">  
                  <h4 class="card-title mb-4"></a>Doctorate </h4>
                  <span class="primary-color  d-block mb-4">our  levels</span>
                  <ul  class="card-text" style="color: black;">
                    <li><a href=".html"><h4>D1</h4></a></li>
                    <li><a href=".html"><h4>D2</h4></a></li>
                    <li><a href=".html"><h4>D3</h4></a></li>
                   

                   
        
               </ul>
                </div>
              </div><!-- card -->    
              
              
            </div>
        </div>
       
    </div>

    
    <div class="section-title sec-style-two"></div>
   


   
    <!-- footer area start -->
    <footer>
        <div class="footer-top has-color pt--120 pb--30">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="widget widget-company">
                           
                            <div class="address">
                               <nav>
                                <ul>
                                    <li><h6>BUSINESS PHONE</h6>
                                        <p>+012 3456 7890</p>
                                    </li>
                                    <li><h6>BUSINESS EMAIL</h6>
                                        <p>Business@themerocket.net</p>
                                    </li>
                                   </ul> 
                               </nav>
                            </div>
                            
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                  
                    
                </div>
                <div class="footer-bottom">
                    <p>Copyright © 2022 <span><a class="primary-color" href="https://themeforest.net/user/pixelthemez/portfolio" target="_blank">E-LEARNING DZ</a> 
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->
 
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- others plugins -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
    
</body>

</html>