<div class="header-top">
            <div class="container clearfix">
                <div class="navvvvvbar">
           
            <div class="top-right">
                <ul class="social-links">
                    <li>
                        <a href="https://web.facebook.com/?_rdc=1&_rdr">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                              </a>
                        </li>
                        <li>
                            <a href="https://www.threads.net/login/?hl=en">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="google.com">
                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/accounts/login/?hl=en">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--header top-->
            
            <!--Header Upper-->
            <section class="header-uper">
                <div class="container clearfix">
                    <div class="logo">
                        <figure>
                            <a href="index.html">
                                <img src="images/Screenshot_2024-08-17_203036-removebg-preview.png" alt="" width="140" height="auto">
                            </a>
                        </figure>
                    </div>
                    <div class="right-side">
                        <ul class="contact-info">
                            <li class="item">
                                <div class="icon-box">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <strong>Email</strong>
                                <br>
                                <a href="#">
                                    <span>sye1dahmed125@gmail.com</span>
                                </a>
                            </li>
                            <li class="item">
                                <div class="icon-box">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <strong>Call Now</strong>
                                <br>
                                <span>+ (92)  0310  - 2664820 </span>
                            </li>
                        </ul>
                        <div class="link-btn">
                        <a  href="login-form.php" class="btn-style-one ">LOGIN</a>
                  </div>
                        <div class="link-btn">
                        <a href="signup.php" class="btn-style-one">signup</a>
                  </div>
            </div>
      </div>
</section>
<!--Header Upper-->


<!--Main Header-->

    <nav class="navbar navbar-default">
        <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
            aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="/about">About</a>
                    </li>
                    <li>
                        <a href="/service">Service</a>
                    </li>
                    <li>
                        <a href="team.php">Team</a>
                    </li>
                            <li>
                                <a href="/hospital">hospital</a>
                            </li>
                    <?php
                    if(isset($_SESSION["logPass"])){

                    if($_SESSION["logPass"] == 1){
                        $userRole =$_SESSION["logRole"];
                        // $userRole = $userRole["AdminRole"];
                     
                        if($userRole == 1){
                            ?>
                              <li>
                                  <a href="../inde.php"><i class="bi bi-person-vcard" style="font-size:2rem;"></i></a>
                                </li>
                                <?php
                        }elseif($userRole == 2){
                            ?>
                         
                         <li>
                             <a href="../BookingListApprove.php"><i class="bi bi-person-vcard" style="font-size:2rem;"></i></a>
                            </li>
                            <?php
                        }elseif($userRole == 3){
                            ?>
                          
                               <li>
                                <a href="../pateintMyAppoin.php"><i class="bi bi-person-vcard" style="font-size:2rem;"></i></a>
                            </li>
                    
                    
                    <?php
                }
            }
                    }
                    
                    ?>
                        
                             
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
            <!--End Main Header -->
        </div>