<?php
include('./maininclude/header.php');
?>
<!-- Start Video background -->
<div class="contaner-fluid remove-vid-marg">
    <div class="vid-parent">
        <video playsinline autoplay muted loop>    
            <source src="video/Coding.mp4">
        </video>
        <div class="vid-overlay"></div>
    </div>
    <div class="vid-content">
        <h1 class="my-content" style="color:black">Welcome to iSkill</h1>
        <small class="my-content" style="color:black">Learn and Explore</small><br>
        <?php
            //session is already been started as we have included header.php in index.php
            if(!isset($_SESSION['is_login'])){
                echo '<a href="#" class="btn btn-danger mt-3" data-toggle="modal" data-target="#StuRegModalCenter">Get started</a>
                ';
            }
            else{
                echo '<a href="#" class="btn btn-primary mt-3">My Profile</a>';
            }
        ?>
        
    </div>
</div>
<!-- End video background -->


<!-- Start Text Banner -->
<!-- icons taken from fontawesome.com -->
<div class="container-fluid bg-danger txt-banner">
    <div class="row bottom-banner">
        <div class="col-sm">
            <h5><i class="fas fa-book-open mr-3"></i> 100+ Online Courses</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-users mr-3"></i> Expert Instructors</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-keyboard mr-3"></i> Lifetime Access</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-rupee-sign mr-3"></i> Money Back Guarantee</h5>
        </div>
    </div>
</div>

<!-- End Text Banner -->
    <!-- Start Most Popular Course -->
    <a name="Courses">
    <div class="container mt-5">
        <h1 class="text-center" name="Courses">Popular Course</h1>
        <!-- Start Most Popular Course 1st Card Deck -->
        <div class="card-deck mt-4">
            <a href="#" class="btn" style="text-align: left; padding:0px; margin:0px;">
                <div class="card">
                    <img src="image/courseimage/c++.jpeg" class="card-img-top" alt="Guitar"/>
                    <div class="card-body">
                    <h5 class="card-title">Learn C++ from Scratch</h5>
                        <p class="card-text">C++ is one of the world's most popular programming languages.

                        C++ can be found in today's operating systems, Graphical User Interfaces, and embedded systems.

                        C++ is an object-oriented programming language which gives a clear structure to programs and allows code to be reused, lowering development costs.

                        C++ is portable and can be used to develop applications that can be adapted to multiple platforms.

                        C++ is fun and easy to learn! </p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Price: <small><del>&#8377 2000 </del></small>
                        <span class = "font-weight-bolder">&#8377 200</span></p>
                        <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>  
                    </div>     
                </div>    
            </a>
            <a href="#" class="btn" style="text-align: left; padding:0px; margin:0px;">
                <div class="card">
                    <img src="image/courseimage/c++.jpeg" class="card-img-top" alt="Guitar"/>
                    <div class="card-body">
                    <h5 class="card-title">Learn C++ from Scratch</h5>
                        <p class="card-text">C++ is one of the world's most popular programming languages.

                        C++ can be found in today's operating systems, Graphical User Interfaces, and embedded systems.

                        C++ is an object-oriented programming language which gives a clear structure to programs and allows code to be reused, lowering development costs.

                        C++ is portable and can be used to develop applications that can be adapted to multiple platforms.

                        C++ is fun and easy to learn! </p></div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Price: <small><del>&#8377 2000 </del></small>
                        <span class = "font-weight-bolder">&#8377 200</span></p>
                        <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>  
                    </div>     
                </div>    
            </a>
            <a href="#" class="btn" style="text-align: left; padding:0px; margin:0px;">
                <div class="card">
                    <img src="image/courseimage/c++.jpeg" class="card-img-top" alt="Guitar"/>
                    <div class="card-body">
                    <h5 class="card-title">Learn C++ from Scratch</h5>
                        <p class="card-text">C++ is one of the world's most popular programming languages.

                        C++ can be found in today's operating systems, Graphical User Interfaces, and embedded systems.

                        C++ is an object-oriented programming language which gives a clear structure to programs and allows code to be reused, lowering development costs.

                        C++ is portable and can be used to develop applications that can be adapted to multiple platforms.

                        C++ is fun and easy to learn! </p>  </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Price: <small><del>&#8377 2000 </del></small>
                        <span class = "font-weight-bolder">&#8377 200</span></p>
                        <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>  
                    </div>     
                </div>    
            </a>
        </div>
</a>
        
        <!-- End Most Popular Course 1st Card Deck -->
        <!-- Start Most Popular Course 2nd Card Deck -->
        <div class="card-deck mt-4">
            <a href="#" class="btn" style="text-align: left; padding:0px;">
                <div class="card">
                    <img src="image/courseimage/python.png" class="card-img-top" alt="Python"/>
                    <div class="card-body">
                        <h5 class="card-title">Learn Python</h5>
                        <p class="card-text">Python is a popular programming language. It was created by Guido van Rossum, and released in 1991.It is used for:web development (server-side),software development,
                            mathematics,system scripting. </p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Price: <small><del>&#8377 3000 </del></small>
                        <span class = "font-weight-bolder">&#8377 200</span></p>
                        <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>  
                    </div>     
                </div>    
            </a>
            <a href="#" class="btn" style="text-align: left; padding:0px;">
                <div class="card">
                    <img src="image/courseimage/python.png" class="card-img-top" alt="Python"/>
                    <div class="card-body">
                        <h5 class="card-title">Learn Python</h5>
                        <p class="card-text">Python is a popular programming language. It was created by Guido van Rossum, and released in 1991.It is used for:web development (server-side),software development,
                            mathematics,system scripting. </p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Price: <small><del>&#8377 3000 </del></small>
                        <span class = "font-weight-bolder">&#8377 200</span></p>
                        <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>  
                    </div>     
                </div>    
            </a>
            <a href="#" class="btn" style="text-align: left; padding:0px;">
                <div class="card">
                    <img src="image/courseimage/python.png" class="card-img-top" alt="Python"/>
                    <div class="card-body">
                        <h5 class="card-title">Learn Python</h5>
                        <p class="card-text">Python is a popular programming language. It was created by Guido van Rossum, and released in 1991.It is used for:web development (server-side),software development,
                            mathematics,system scripting. </p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Price: <small><del>&#8377 3000 </del></small>
                        <span class = "font-weight-bolder">&#8377 200</span></p>
                        <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>  
                    </div>     
                </div>    
            </a>
        </div>
        <!-- End Most Popular Course 2nd Card Deck -->
        <div class="text-center m-2">
            <a class="btn btn-danger">View All Course</a>
        </div>
    </div>
    <!-- End Most Popular Course -->
  
    <!-- Start Contact Us-->
    <a name="contact">
    <?php
    include('./contact.php')
    ?>
    </a>
    <!--End Contact Us -->

   
</div>
 <!-- Start Students Testimonial
 <div class="container-fluid mt-5" style="background-color:#4B7289" id="Feedback">

    <h1 class="text-center  p-4">Student's Feedback</h1>
    <div class="container testimonial-group" style="overflow-x:scroll;white-space: nowrap;">
        <div class="row text-center">
                        <div class="col-xs-4">
                            
                                                <p class="description">
                                                iSkill provides universal access to the world's best education and also all the courses
                                                , meeting and materials which are being taught in possible every engineering
                                                </p>
                                                <div class="pic">
                                                    <img src="image/student/stu1.jpg" alt="This is student"/>
                                                </div>
                                                <div >
                                                    <h4>Sonam</h4>
                                                    <small>Web Developer</small>
                                                </div>
                        </div>

                
                        <div class="col-xs-4">
                                                <p class="description">
                                                iSkill provides universal access to the world's best education and also all the courses
                                                , meeting and materials which are being taught in possible every engineering
                                                </p>
                                                <div class="pic">
                                                    <img src="image/student/stu1.jpg" alt="This is student"/>
                                                </div>
                                                <div >
                                                    <h4>Sonam</h4>
                                                    <small>Web Developer</small>
                                                </div>
                        </div>
                        <div class="col-xs-4">
                                                <p class="description">
                                                iSkill provides universal access to the world's best education and also all the courses
                                                , meeting and materials which are being taught in possible every engineering
                                                </p>
                                                <div class="pic">
                                                    <img src="image/student/stu1.jpg" alt="This is student"/>
                                                </div>
                                                <div >
                                                    <h4>Sonam</h4>
                                                    <small>Web Developer</small>
                                                </div>
                        </div>
        
        </div>  
    </div>  

</div> 

End student testimonial
-->

<!-- Start Social Follow -->

<div class="container-fluid bg-danger">
<div class="row text-white text-center p-1">
    <div class="col-sm">
        <a class="text-white social-hover" href="#" ><i class="fab fa-facebook-f"></i>Facebook</a>
    </div>
    <div class="col-sm">
        <a class="text-white social-hover" href="#" ><i class="fab fa-twitter"></i>Twitter</a>
    </div>
    <div class="col-sm">
        <a class="text-white social-hover" href="#"><i class="fab fa-whatsapp"></i>whatsapp</a>
    </div>
    <div class="col-sm">
        <a class="text-white social-hover" href="#" ><i class="fab fa-linkedin"></i>linkedin</a>
    </div>
</div>
</div>
<!-- End Social Follow -->

<!--Start About Section-->
<div class="container-fluid p-4" style="background-color:#E9ECEF">
<div class="container"  style="background-color:#E9ECEF">
<div class="row text-center">
    <div class="col-sm">
        <h5>About Us</h5>
        <p>iSkill provides universal access to the world's best education and also 
            all the courses , meeting and materials which are being taught in possible every
             engineering
        </p>
    </div>
    <div class="col-sm">
        <h5>Category</h5>
        <a href="#" class="text-dark">Web Development</a><br />
        <a href="#" class="text-dark">Web Designing</a><br />
        <a href="#" class="text-dark">Android App Development</a><br />
        <a href="#" class="text-dark">ioS Development</a><br />
        <a href="#" class="text-dark">Data Analysis</a><br />
    </div>
    <div class="col-sm">
        <h5>Contact Us</h5>
        <p>iCharusat Pvt Ltd<br>
        CHARUSAT Campus Off. Nadiad-Petlad Highway,<br />
        Changa 388 421 <br />
        Anand, Gujarat, INDIA<br /> 
        Telephone: 02697-265011<br /> 
        Telephone: 02697-265021<br />
        Email: info@charusat.ac.in</p>
    </div>
</div>
</div>
</div><!--End About Section-->

<!-- Including Footer -->
<?php
include('./maininclude/footer.php');
?>
<!-- End Footer -->
