<?php
  include 'controller.php';
?>
<!DOCTYPE html>
<html>
    <head>
      <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-151906986-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-151906986-1');
        </script>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie-edge" />
        <meta name="theme-color" content="#333" />
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />
        <link rel="manifest" href="manifest.json" />
        <link rel="icon" type="image/png" href="https://res.cloudinary.com/thecavemann/image/upload/v1571839870/logo_g4kuoa.png"/>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/header&footer.css">
        <link rel="icon" type="image/png" href="https://res.cloudinary.com/thecavemann/image/upload/v1571839870/logo_g4kuoa.png"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="css/main.css" rel="stylesheet" />

        <script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
        <title>DOCUFIX</title>
    </head>
    <body>
        <!-- Header Start -->
        <!-- Desktop Header -->
                <!--Header-->
                 <header>
          <nav class="navbar navbar-expand-lg navbar-light scrolling-navbar fixed-top">
            <a class="navbar-brand px-sm-5 ml-3" href="index.php"><img src="https://res.cloudinary.com/kuic/image/upload/v1573054016/docufix/Group_1_5_olg2uj.svg" alt="DOCUFIX" id="image"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto px-5">
                <li class="nav-item">
                  <a class="nav-link text-center" href="about_us.php">About</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tools
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-justify" href="fileUpload.php">Compare files</a>
                    <a class="dropdown-item text-justify" href="grammarChecker.php">Grammar Check</a>
                    <a class="dropdown-item text-justify" href="fileDuplicate.php">Duplicates Check</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-center" href="teampage.php">Our Team</a>
                </li>
                <?php
                  if(!isset($_SESSION['login_user'])){
                  echo '
                  <li class="nav-item">
                    <a class="nav-link text-center" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-center" href="signup.php">Get Started</a>
                </li>
                  ';


                }
                else
                {
                    echo '
                  <li class="nav-item">
                    <a class="nav-link text-center" href="profile.php">Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-center" href="logout.php">Logout</a>
                </li>
                  ';
                }
                ?>
                
                
              </ul>
            </div>
          </nav>
    </header>

        <!-- Mobile Header -->
        <!-- <i class="fas fa-bars" id="open" onclick="openSideNav()"></i>

        <div id="side-nav-wrapper">
          <ul class="side-nav">
            <li><a href="#">About us</a></li>
            <li><a href="#">Tools<i class="fas fa-caret-down"></i></a>
              <ul>
                <li><a href="https://docufix.io/fileUpload.php">Compare files</a></li>
                <li><a href="https://docufix.io/grammarChecker.php">Grammar Check</a></li>
                <li><a href="https://docufix.io/fileDuplicate.php">Duplicates Check</a></li>
                <li><a href="plagiarismChecker.php">Plagiarism Check</a></li>
                <li><a href="https://docufix.io/paraphrase.php">Paraphrasing tool</a></li>
              </ul>
            </li>
            <li><a href="#">Login</a></li>
            <li><a class="active" href="#">Get started</a></li>
          </ul>
        </div> -->
        <!-- Header Ends -->

        <!-- Banner Starts -->
        <section class="banner-wrapper">
            <div class="banner">
                <div class="banner-text" data-aos="fade-right" data-aos-duration="1500">
                    <h3>Your Online Document Comparison Solution</h3>
                    <p>Compare documents content, check for duplicates and grammatical error effortlessly. Docufix is built solidly with the latest technological tools for file and data management</p>
                </div>
                <div data-aos="fade-right" data-aos-duration="1500" data-aos-delay="200">
                    <button class="b-btn comp-btn"><a href="./fileUpload.php">Compare files</a></button>
                    <button class="b-btn dup-btn"><a href="./fileDuplicate.php">Check duplicates</a></button>
                </div>
            </div>
    
            <div class="banner-img" data-aos="fade-down" data-aos-duration="1800">
                <img src="https://res.cloudinary.com/theonlybakare/image/upload/v1572801658/drawkit_hw20tz.png" alt="workflow" />
            </div>
        </section>
        <!-- Banner Ends -->

        <!-- Feature Section Starts -->
        <div class="feature-wrapper">
          <div class="feature-content">
            <h3>Features Of Docufix</h3>
            
            <div class="feature-content-text-wrapper">
              <div class="feature-content-text feat-1" data-aos="fade-up" data-aos-duration="2000" data-aos-easing="ease-in-out">
                  <div class="feature-content-asset">
                    <img src="https://res.cloudinary.com/theonlybakare/image/upload/v1573037501/Plagiarism_s3zf2l.png" alt="Plaigiarism" />
                  </div>
                  <h2>Grammar Check</h2>
                  <p>Docufix grammar checker corrects over 100 types of grammar and spelling mistakes, including verbs, nouns, pronouns, prepositions, and more.  In offering you advanced correction software, Docufix allows you to improve the quality of your writing and master English pronunciation.</p>
              </div>
              <div class="feature-content-text feat-2" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300" data-aos-easing="ease-in-out">
                  <div class="feature-content-asset">
                    <img src="https://res.cloudinary.com/theonlybakare/image/upload/v1573037501/Word_duplicate_sbqism.png" alt="Word duplicate" />
                  </div>
                  <h2>Remove Duplicates</h2>
                  <p>One of the main problem in document is that most of the words that are duplicated also appear in the previous line, which makes it difficult to achieve your goal. If you want to remove all duplicated text effortlessy, your best option is Docufix.</p>
              </div>
              <div class="feature-content-text feat-3" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600" data-aos-easing="ease-in-out">
                  <div class="feature-content-asset">
                    <img src="https://res.cloudinary.com/theonlybakare/image/upload/v1573037501/File_checker_xz39qn.png" alt="File checker" />
                  </div>
                  <h2>Compare files</h2>
                  <p>We help you compare files and texts, and generate differences in a visual text format which is easy to manage and understand. Comparing hundreds of files can be a tedious task, there are high chances that you would miss out on something. Here we make that easy for you.</p>
              </div>
            </div>
          </div>
        </div>
        <!-- Feature Section Ends -->

        <!-- Pricing Plan Section Begins -->
        <!--div class="pricing-wrapper">
          <div class="pricing-content-wrapper">
            <h3>Pricing Offer</h3>
            <hr>
            <div class="price-container">
              <div class="pricing-contents pr-1" data-aos="fade-right" data-aos-duration="2000">
                <div class="pricing-content-text">
                  <div class="rectangle">
                    <p>20 Comparisons a month</p>
                    <p>Ads</p>
                  </div>
                  <h3>FREE PLAN</h3>
                  <div class="money-wrapper">
                    <div>
                        <h3 class="money">$0</h3><sub>/month</sub>
                    </div>
                  </div>
                  <div class="users">
                    <p>Unlimited plagiarism check</p>
                    <p>15 grammer Check</p>
                    <p>5 duplicate check</p>
                    <p>5 compare files</p>
                    <p>3 file format downloads</p>
                    <p>(.docx, .txt, .pdf)</p>
                  </div>
                  <div class="button-container">
                    <button class="money-btn-2"><a href="#">Get Plan</a></button>
                  </div>
                </div>
              </div>

              <div class="pricing-contents pr-2" data-aos="fade-up" data-aos-duration="2000">
                <div class="pricing-content-text">
                  <div class="rectangle r2">
                    <p>100 Comparisons a month</p>
                    <p>No Ads</p>
                  </div>
                  <h3>BASIC PLAN</h3>
                  <div class="money-wrapper">
                    <div>
                        <h3 class="money">$12</h3><sub>/month</sub>
                    </div>
                  </div>
                  <div class="users">
                    <p>Unlimited plagiarism check</p>
                    <p>Unlimited grammer Check</p>
                    <p>15 duplicate check</p>
                    <p>10 compare files</p>
                    <p>8 file format downloads</p>
                    <p>(.docx, .txt, .pdf, .json, .xml, .csv, .rtf, .xls)</p>
                  </div>
                  <div class="button-container">
                    <button class="money-btn-2"><a href="#">Get Plan</a></button>
                  </div>
              </div>
            </div>

              <div class="pricing-contents pr-3" data-aos="fade-left" data-aos-duration="2000">
                <div class="pricing-content-text">
                  <div class="rectangle r3">
                    <p>Unlimited Comparisons a month</p>
                    <p>No Ads</p>
                  </div>
                  <h3>PRO PLAN</h3>
                  <div class="money-wrapper">
                    <div>
                        <h3 class="money">$48</h3><sub>/month</sub>
                    </div>
                  </div>
                  <div class="users us-3">
                    <p>Unlimited plagiarism check</p>
                    <p>Unlimited grammer Check</p>
                    <p>Unlimited duplicate check</p>
                    <p>Unlimited compare files</p>
                    <p>All available file formats download</p>
                  </div>
                  <div class="button-container">
                    <button class="money-btn-2"><a href="#">Get Plan</a></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div -->
        <!-- Pricing Plan Section Ends -->

        <!-- Testimonies Starts -->
        <div class="testimony-wrapper">
          <div class="testimony-content">
            <h3>Testimony</h3>
            <hr>
            <div class="testimonials-wrapper" data-aos="fade-left" data-aos-duration="3000">
              <div class="testimonials">
                <i class="fa fa-quote-left"></i>
                <p>Nice user interface and experience. Very detailed to the core and simple to use. Nice work guys. This one of the best websites I use in checking for duplicates in my files and text.</p>

                <hr>

                <div class="testimonials-img">
                  <img src="https://res.cloudinary.com/theonlybakare/image/upload/v1573172807/kuic_g5u0hr.jpg" alt="" />
                  <cite title="Source Title">Kinsley Umujeyan</cite>
                </div>
              </div>

              <div class="testimonials">
                <i class="fa fa-quote-left"></i>
                <p>Great tools! Very useful tools for our daily activities, we all know the importance of this, despite the advances in technology; this tool is still the best form of checking documents.</p>

                <hr>

                <div class="testimonials-img">
                  <img src="https://res.cloudinary.com/theonlybakare/image/upload/v1573171975/martini_v0hc3i.jpg" alt="" />
                  <cite title="Source Title">Martini Mabifa</cite>
                </div>
              </div>

              <div class="testimonials">
                <i class="fa fa-quote-left"></i>
                <p>Science kindling the energy hidden in matter astonishment birth of brilliant sysntheses rings of Uranus. Stirred by starlight descended. Good job to the team that built this lovely app</p>

                <hr>

                <div class="testimonials-img">
                  <img src="https://res.cloudinary.com/theonlybakare/image/upload/v1573171976/cross_ptkarx.png" alt="" />
                  <cite title="Source Title">Isuma Chidera</cite>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Testimonies Ends -->

        <!-- News Letter Starts -->
        <div class="news-wrapper">
          <div class="news-content">    
            <form id="newsForm" action="newsletter.php" method="POST">
              	<p  id="success" class="txt"> </p>
            <h2>subscribe to our newsletter</h2>
            <div class="news-input">
            <input type="email" name="mail" placeholder="Enter your email address here" required />
              <button type="submit" name="submit" class="btn btn-default">Submit</button>
            </div>
          <form>
          </div>
        </div>
        <!-- News Letter Ends -->

        <!-- FOOTER STARTS -->
         <footer id="footer">
          <div class="container mt-3"><hr>
            <div class="row">
                <div class="col-sm-6" id="docufix">
                    <a class="navbar-brand  text-justify" href="index.php"><img src="https://res.cloudinary.com/kuic/image/upload/v1572638901/docufix/Docufix_Logo_lnsgsr.svg" alt="DOCUFIX" id="image"></a>
                    <p class="text-justify">This app was built by <a href="https://hng.tech/" target="_blank">HNGi6</a> interns</p>
                </div>
              <div class="col-sm-6 text-center">           
                  <ul class="list-inline text-center mt-3 pl-3">  
                      <li class="list-inline-item">
                        <a class="text-center" href="contact.php">Contact us</a>
                      </li>
                      <li class="list-inline-item">
                          <a class="text-center" href="faq.php">FAQs</a>
                        </li>
                        <li class="list-inline-item">
                          <a class="text-center" href="privacy.php">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-center" href="termsOfService.php">Terms of Service</a>
                          </li>
                      
                    </ul>
              </div>
            </div>
          </div>
        
  </footer>
        <!-- FOOTER ENDS -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="js/main.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
       



<script type="text/javascript">

$(document).ready(function(){
  var delay = 2000;
  $("#newsForm").submit(function(e){
    e.preventDefault();

    var email = $('#mail').val();
    if (email == ''){
      $('.txt').html('<span> Email field is not suppose to be empty</span>');
    $('#mail').focus();
    return false;
    }
    $('#success').html('');
    var values = $(this).serialize();

    $.ajax ({


      url: "newsletter.php",
      type:"POST",
      data: $(this).serialize(),
      beforeSend: function(){
        $('.txt').html(
          '<span style="color:green"><img src="programming.gif" width="25" height="25"/>  Wait a sec, processing... </span>'
        );
      }
    }).done (function (data){
      setTimeout(function(){
        $('.txt').html(data);
        $("#newsForm").trigger("reset");
      }, delay);
    });
  });
});


          var SCROLLING_NAVBAR_OFFSET_TOP = 100;
          $(window).on("scroll", function() {
            var $navbar = $(".navbar");

              if ($navbar.length) {
                if ($navbar.offset().top > SCROLLING_NAVBAR_OFFSET_TOP) {
                  $(".scrolling-navbar").addClass("top-nav-collapse");
                } else {
                  $(".scrolling-navbar").removeClass("top-nav-collapse");
                }
              }
            });
          </script>
    </body>
</html>
