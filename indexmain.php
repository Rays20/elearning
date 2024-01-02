<!doctype html>
<html class="no-js" lang="en">
<?php
include_once "connect.php";
session_start();
unset($_SESSION['fname']);
unset($_SESSION['lname']);
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home</title>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../theme/assets/js/validation.js"></script>
    
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
        <!-- header two area start -->
        <div class="header-two"  style="background-color: black;">
            <div class="container">
                <div class="row align-items-center">
                    

                    <div class="col-lg-9 offset-lg-1 d-none d-lg-block">
                        
                        <div class="main-menu menu-style2" >
                           
                            <nav >
                                
                    
                                <ul id="main-menu">
                                    
                                  
                                       

                                    <li><a href="about.html" style="color: aliceblue;">about</a>
                                        <ul class="submenu">
                                            
                                           
                                            
                                        </ul>
                                    </li>
                                    <li><a href="QUIZZ.html"style="color: aliceblue;">QUIZZ</a>
                                        <ul class="submenu">
                                            
                                           
                                        </ul>
                                    </li>
                                     
                                    
                                                <img src="assets/images/icon/logo-middle2.png" alt="logo" >
                                    
                                       <li><a href="javascript:void(0);"style="color: aliceblue;">CATALOGUE</a>
                                            <ul class="submenu">
                                                
                                                <li><a href="PHP.html">PHP</a></li>
                                                <li><a href="C++.html">C++</a></li>
                                                <li><a href="C.html">C</a></li>
                                                <li> <a href="HTML.html">HTML</a></li>
                                                <li><a href="CSSDZ.html">CSS</a></li>
                                                <li><a href="JAVASC.html">JAVASCRIPT</a></li>
                                                <li><a href="JAVA.html">JAVA</a></li>
                                            </ul>
                                        </li>
                                   
                                    <li><a href="contact.html" style="color: aliceblue;">Contact</a>
                                       
                                    </li>

                                    
                                    
                                </ul>
                            </nav>
                        </div>
                        
                    </div>
                    
                    <div class="col-lg-2 col-sm-5">
                        <div class="header-bottom-right-style-2">
                            <ul>
                                 <li><a data-toggle="modal" data-target="#exampleModal" class="btn btn-light btn-round" href="">Log in </a></li>
                               
                                <li><a data-toggle="modal" data-target="#exampleModal2"  class="btn btn-primary btn-round" class="active" href="#">Sign Up</a></li>
                            </ul>
                        </div>

                               <!-- Button  LOG IN  -->  
                        
                               <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content p-5">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Login Here</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <form id="loginForm" action="login.php" method="post">
                                        <input type="email" id="email" placeholder="Enter Your Email.." name="mail">
                                        <span id="emailErrorLogin" style="color: red;"></span>
                                        <input type="password" id="password" placeholder="Enter Your Password" name="password">
                                        <span id="passwordErrorLogin" style="color: red;"></span>
                                        <label class="checkbox-inline mr-5"><input type="checkbox" value="">Remember Me</label>
                                        <a class="primary-color" href="forgetpassword.html "><u>Forgot password</u></a>
                                        <input class="btn btn-primary btn-sm" type="submit" id="loginButton" value="Login">
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              
                              
                       


                               <!-- Button  SIGN UP --> 


                        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content p-5">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Please Sign Up Here</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body"> 
                                <form class="signup-form text-center" action="signup.php" method="post">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input type="text" id="firstName" placeholder="First Name" name="fname">
                                            <span id="firstNameError" style="color: red;"></span>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" id="lastName" placeholder="Last Name" name="lname">
                                            <span id="lastNameError" style="color: red;"></span>
                                        </div>
                                    </div>
                                   
                                   
                                    <input type="text" id="dob" name="dob" placeholder="YYYY/MM/DD" onblur="validateDate()" >
                                    <span id="dobError" style="color: red;"></span>

                                    <input type="email" id="emailnew" placeholder="Enter Your Email.." name="mail">
                                    <span id="emailError" style="color: red;"></span>

                                    <input type="password" id="passwordnew" placeholder="Enter Your Password" name="password">
                                    <span id="passwordError" style="color: red;"></span>

                                    <input type="password" id="passwordRepeat" placeholder="Re-enter Your Password">
                                    <span id="passwordRepeatError" style="color: red;"></span>
                                    
                                    <input class="btn btn-primary btn-sm" type="submit" id="RegisterButton"  value="Register Now">
                                </form> 
                              </div> 
                            </div>
                          </div>
                        </div>
                    </div><!-- col-lg-2 -->
                    <div class="col-12 d-block d-lg-none">
                        <div id="mobile_menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header two area end -->
    </header>
    <!-- header area end -->
   
    
  
    <!-- body overlay area start -->
    <div class="body_overlay"></div>
    <!-- body overlay area end -->
    <!-- hero area start -->
    <div class="hero-area has-color">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="hero-content">
                        <h3>welcome </h3>
                        <h1 class="mb-5"><span class="primary-color">Build your Successful</span><b class="line-break"></b>Find Your Preferred Courses & Improve Your Skills</h1>
                        
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero area end -->

    <!-- about area start -->
    <!-- <div class="about-area-style2 ptb--120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="about-content-style2 text-center has-color">
                        <div class="section-title-style mb-4">
                            <h2>Welcome to <b class="line-break"></b><span class="text-color">Edification</span> University</h2>
                        </div>
                        <p class="text-white-70">Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                        <a class="btn btn-light btn-round mt-3" href="#">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- about area end -->

   
  
    <!-- levels area start -->
    <div class="teacher-area pb--100">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="section-title-style2 black-title title-tb text-center">
                        <span>Learn from the best</span>
                        <h2 class="primary-color">Our levels </h2>
                    </div>
                </div>
            </div>
            <div class="commn-carousel owl-carousel card-deck">   
                <div class="card mb-5"> 
                    <img src="assets/images/teacher/teacher-member3.jpg" alt="image"> 
                    <div class="card-body teacher-content p-25">  
                      <h4 class="card-title mb-4"></a>Bachelor's Degree</h4>
                      <span class="primary-color  d-block mb-4">our  diplomas</span>
                      <ul  class="card-text" style="color: black;">
                          <li>1\ ISIL</li>
                          <li>2\ ACAD </li>
                          
                     </ul>
                      
                    </div>
                  </div><!-- card -->    

              <div class="card mb-5"> 
                <img src="assets/images/teacher/D.jpg" alt="image"> 
                <div class="card-body teacher-content p-25">  
                  <h4 class="card-title mb-4"></a>Master's Degree</h4>
                  <span class="primary-color  d-block mb-4">our  diplomas</span>
                  <ul  class="card-text" style="color: black;">
                      <li>1\ ISIL</li>
                      <li>2\ ACAD </li>
                      <li>3\ ISIL</li>
                 </ul>
                  
                </div>
              </div><!-- card -->    

              <div class="card mb-5"> 
                <img src="assets/images/bg/hero-bg2.jpg" alt="image"> 
                <div class="card-body teacher-content p-25">  
                  <h4 class="card-title mb-4"></a>Doctorate </h4>
                  <span class="primary-color  d-block mb-4">our  diplomas</span>
                  <ul  class="card-text" style="color: black;">
                      <li>1\ ISIL</li>
                      <li>2\ ACAD </li>
                      <li>3\ ISIL</li>
                 </ul>
                  
                </div>
              </div><!-- card -->    
              
               
              
            </div>
        </div>
        <div class="text-center"> 
            <a href="about.html" class="btn btn-primary btn-round">Read more</a>
        </div>
    </div>
   
   
 
    <!-- course area end -->
    <div class="section-title sec-style-two"></div>
       
    
   
    <div class="testimonial-area ptb--120"><!-- testimonial area start -->
        
        <img class="tst-bg" src="assets/images/bg/tst-bg-shape.png" alt="image">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <div class="tst-carousel owl-carousel">
                        <div class="testimonial-content pb--40">
                            <div class="section-title sec-style-two">
                              
                                <h2 class="primary-color">Learn from the best </h2>
                            </div>
                            <h3> "Free software is a matter of liberty, not price. To understand the concept, you should think of 'free' as in 'free speech,' not as in 'free beer'."</h3>
                            <h4>Richard Stallman</h4>
                            <span> Stallman, founder of the Free Software Foundation, clarifies the concept of free software.</span>
                        </div>  
                        <div class="testimonial-content pb--40">
                            <div class="section-title sec-style-two">
                                <div class="section-title sec-style-two">
                                    <span>Learn from the best</span>
                            
                                </div>
                            </div>
                            <h3>"Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love what you do." </h3>
                            <h4>Steve Jobs </h4>
                            <span>Steve Jobs, co-founder of Apple, emphasizes the importance of passion in one's work.</span>
                        </div>  
                        <div class="testimonial-content pb--40">
                            <div class="section-title sec-style-two">
                                <div class="section-title sec-style-two">
                                    <span>Learn from the best</span>
                            
                                </div>
                            </div>
                            <h3> "We can only see a short distance ahead, but we can see plenty there that needs to be done." </h3>
                            <h4>Alan Turing</h4>
                            <span>Alan Turing's work laid the foundation for modern computing and artificial intelligence.</span>
                        </div> 
                    </div>
                    
                   

                </div><!-- row -->
            </div><!-- row -->
        </div><!-- container -->
        
    </div><!-- testimonial-area --> 
    <div class="section-title sec-style-two"></div>


   <!-- take toure area start-->
   <div class="take-toure-area ptb--120">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="section-title sec-style-two">
                    <img class="title-top-shape" src="assets/images/icon/title-top-shape.png" alt="image">
                    <span class="text-uppercase">Watch to know</span>
                    <h2 class="primary-color"> What is computer science</h2>
                </div>
            </div>
        </div>
        <div class="video-area">
            <a class="expand-video" href="https://www.youtube.com/watch?v=AnVBCyzNgaU"><i class="fa fa-play"></i></a>
        </div>
    </div>
</div>
<!-- take toure area end -->

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
>


   
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