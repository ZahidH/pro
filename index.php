<?php
if(isset($_POST['SubmitButton'])){
    $to = "zahid4453@gmail.com\r\n";
    $subject = "zahidhussain.tech\r\n";
    $message = $_POST['name']."\r\n ".$_POST['email']."\r\n ".$_POST['comment']."\r\n";
    $headers = "From: zahid4453@gmail.com\r\n";
    $headers .= "Reply-To: ".$_POST['email']."\r\n";
    $headers .= "Return-Path: zahid4453@gmail.com\r\n";


    if (mail($to, $subject, $message, $headers)) {
        $emailSend =  "Email sent successfully.";
    }
}
    
?>


<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zahid Hussain</title>
    <!--<link rel="icon" type="image/jpg" sizes="32x32" href="images/p.jpg">-->
    <!--<link rel="icon" type="image/p.jpg" sizes="16x16" href="images/p.jpg">-->
    <!--<link rel="shortcut icon" href="favicon.ico">-->
    <meta name="author" content="Zahid Hussain">
    <!--<meta property="og:title" content="Freeman - Multipurpose Personal One Page Html Template">-->
    <!--<meta property="og:url" content>-->
    <!--<meta property="og:image" content>-->
    <!--<meta property="og:description" content="Freeman - Multipurpose Personal One Page Html Template">-->
    <!--<meta property="og:site_name" content="Freeman template">-->
    <!--<meta name="twitter:card" content="summary">-->
    <!--<meta name="twitter:title" content="Freeman - Multipurpose Personal One Page Html Template">-->
    <!--<meta name="twitter:description" content="Freeman - Multipurpose Personal One Page Html Template">-->
    <meta name="twitter:image" content>
    <meta id="tw_url" name="twitter:url" content>
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
  </head>
  <body>
    <header id="headermain">
      <div class="container">
        <div class="row headerwrap">
          <div class="col-xs-12 col-md-12 col-lg-2">
            <div class="headerwrap__logo">
              <img src="images/logo.png" alt="logo" class="img-fluid">
            </div>
            <div class="navicon d-block d-lg-none">
              <div class="navicon__bar"></div>
            </div>
          </div>
          <div class="col-lg-10 text-xl-left d-none d-lg-block justify-content-lg-left justify-content-xl-left">
            <nav class="navpage text-left">
              <ul class="navpage__wrap">
                <li class="navpage__list">
                  <a href="#sectionhero" class="activelink">Intro.</a>
                </li>
                <li class="navpage__list">
                  <a href="#aboutsection">About Me.</a>
                </li>
                <li class="navpage__list">
                  <a href="#servicesection">Service.</a>
                </li>
                <li class="navpage__list">
                  <a href="#portfoliosection">Portfolio.</a>
                </li>
                <li class="navpage__list">
                  <a href="#contactsection">Contact.</a>
                </li>
                <li class="navpage__list" style="float:right;">
                  <a target="_BLANK"  href=" https://wa.me/3077170871" style="color:#fff;background-color: blueviolet;" class="linkbtn">Whatsapp <i class="fa-brands fa-whatsapp"></i></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <div class="overlay">
      <div class="overlay__navigation">
        <ul class="overlay__listnav">
          <li class="navpage__list">
            <a href="#herosection">Intro.</a>
          </li>
          <li>
            <a href="#aboutsection">About Me.</a>
          </li>
          <li>
            <a href="#servicesection">Services.</a>
          </li>
          <li>
            <a href="#portfoliosection">Portfolio.</a>
          </li>
          <li>
            <a href="#contactsection">Contact.</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="preloader">
      <div class="preloader__img">
        <img src="images/logo.png" alt="logopage" class="img-fluid">
      </div>
    </div>
    <main id="mainwrap">
      <div id="sectionhero" class="sectionblock">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 pr-0 mr-0 pl-lg-0 pr-lg-5 mr-lg-0 mt-3 mt-lg-0 align-items-center justify-content-center align-items-lg-left justify-content-lg-left text-center text-lg-left d-flex order-1 order-lg-0 ">
              <div class="infohero ">
                <p class="infohero__p">Hello, i'm Laravel VueJS  - FullStack Developer</p>
                <h1 class="infohero__title">Zahid <span>Hussain</span>
                </h1>
                <span id="typed-text"></span>
                <span class="cursor blink"></span>
              </div>
            </div>
            <div class="col-lg-6 text-center order-0 order-lg-1 mb-5 mb-lg-0">
              <div class="heroimg">
                <img src="images/p.jpg" alt="poto" class="img-fluid heroimg__poto">
              </div>
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path fill="#ffffff" fill-opacity="1" d="M0,128L60,149.3C120,171,240,213,360,192C480,171,600,85,720,85.3C840,85,960,171,1080,197.3C1200,224,1320,192,1380,176L1440,160L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z" />
        </svg>
      </div>
      <div id="aboutsection" class="sectionblock">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 text-center text-lg-left">
              <div class="abouthero">
                <h3>Zahid Hussain</h3>
              </div>
            </div>
            <div class="col-lg-8 pl-lg-5 text-center text-lg-left">
              <div class="infoabout">
                <p class="infoabout__title"> As a PHP developer, I am adept with Laravel and Vue.js, My expertise lies in crafting scalable, robust, and high-performance web applications, With a strong understanding of backend development,s </br>Strong Understanding Of Database </br>
                    5+ years Experince in Php, Laravel, Vuejs,Python, Django Mysql, Postgress, CSS, HTML, Bootstrap, Tailwind, Javascript,Jquery
                </p>
                <ul>
                  <li>I design and implement APIs that power front-end interactions</li>
                  <li>I prioritize clean and maintainable code</li>
                  <li>Ensure that my projects are fully tested and well-documented</li>
                </ul>
                <div class="row  text-center text-lg-left">
                  <div class="col-lg-6">
                    <ul class="infoabout__list">
                      <li>
                        <div class="infoabout__wrap">
                          <span class="mt-4 mb-2 d-block infoabout__title">FULL NAME</span>
                          <p> Zahid Hussain </p>
                        </div>
                      </li>
                      <li>
                        <div class="infoabout__wrap">
                          <span class="mt-4 mb-2 d-block infoabout__title">EMAIL ADDRESS</span>
                          <p>
                            <a href="mailto: zahid4453@gmail.com" class="__cf_email__">zahid4453@gmail.com</a>
                          </p>
                        </div>
                      </li>
                      <li>
                        <div class="infoabout__wrap">
                          <span class="mt-4 mb-2 d-block infoabout__title">PHONE NUMBER</span>
                          <p> +92 3077170871 </p>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <a target="_BLANK" href="zahid-resume.pdf" class="btn linkbtn aboutlink mt-4"> Download Cv </a>
              </div>
            </div>
          </div>
          <div class="col-lg-12 mt-5 mb-4 pt-5">
            <div class="row">
              <div class="col-lg-3">
                <div class="counterwrap">
                  <p class="counterwrap__counternum">
                    <span class="counterwrap__counter" data-speed="5000">100</span>
                    <span class="icon">+</span>
                  </p>
                  <p>Projects completed </p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="counterwrap">
                  <p class="counterwrap__counternum">
                    <span class="counterwrap__counter" data-speed="5000">5</span>
                  </p>
                  <p>Winning Awards </p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="counterwrap">
                  <p class="counterwrap__counternum">
                    <span class="counterwrap__counter" data-speed="5000">200</span>
                    <span class="icon">+</span>
                  </p>
                  <p>Happy Clients </p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="counterwrap">
                  <p class="counterwrap__counternum">
                    <span class="counterwrap__counter" data-speed="5000">2</span>
                  </p>
                  <p>On Projects </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div id="servicesection" class="sectionblock">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path fill="#ffffff" fill-opacity="1" d="M0,96L60,117.3C120,139,240,181,360,186.7C480,192,600,160,720,138.7C840,117,960,107,1080,117.3C1200,128,1320,160,1380,176L1440,192L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z" />
        </svg>
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div id="sliderservice" class="sliderservice__contentinner keen-slider">
               
                <div class="wrapservice keen-slider__slide text-center text-lg-left">
                  <i class="fa-solid fa-bullhorn"></i>
                  <h3 class="mt-3 wrapservice__title">Product Development.</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem maxime ex asperiorest.</p>
                </div>
                 <div class="wrapservice keen-slider__slide text-center text-lg-left">
                   <i class="fa-solid fa-bullhorn"></i>
                  <h3 class="mt-3 wrapservice__title">Product Designer.</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem maxime ex asperiorest.</p>
                </div>
                <div class="wrapservice keen-slider__slide text-center text-lg-left">
                  <i class="fa-solid fa-bullhorn"></i>
                  <h3 class="mt-3 wrapservice__title"> Web Development.</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path fill="#ffffff" fill-opacity="1" d="M0,96L60,117.3C120,139,240,181,360,197.3C480,213,600,203,720,186.7C840,171,960,149,1080,160C1200,171,1320,213,1380,234.7L1440,256L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z" />
        </svg>
      </div>
      <div id="portfoliosection" class="sectionblock">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <div class="warpfilter text-left">
                <ul id="filterwrap" class="warpfilter__filter justify-content-left text-center text-lg-left">
                  <li data-group="all" class="active">All</li>
                  <li data-group="web">Web Development</li>
                  <li data-group="branding">Branding</li>
                </ul>
              </div>
              <div id="porfoliowarp" class="grid-gutter-md grid-col-3">
                <div class="porfoliowarp__item" data-groups="[" branding"]">
                  <a class="porfoliowarp__portolink glightbox" data-glightbox="type: image" href="./images/2.png">
                    <i class="fa-solid fa-circle-plus"></i>
                    <div class="porfoliowarp__content" style="background: url(images/2.png) no-repeat center;  background-position: center;
                        background-size: cover;"></div>
                  </a>
                </div>
                <div class="porfoliowarp__item" data-groups="[" branding"]">
                  <a class="porfoliowarp__portolink glightbox" data-glightbox="type: image" href="./images//3.png">
                    <i class="fa-solid fa-circle-plus"></i>
                    <div class="porfoliowarp__content" style="background: url(images/3.png) no-repeat center;  background-position: center;
                        background-size: cover;"></div>
                  </a>
                </div>
                <div class="porfoliowarp__item" data-groups="[" web"]">
                  <a class="porfoliowarp__portolink glightboxvideo" data-glightbox="type: image" href="./images/4.png">
                    <i class="fa-solid fa-circle-plus"></i>
                    <div class="porfoliowarp__content" style="background: url(images/4.png) no-repeat center;  background-position: center;
                        background-size: cover;"></div>
                  </a>
                </div>
                <div class="porfoliowarp__item" data-groups="[" web"]">
                  <a class="porfoliowarp__portolink glightboxvideo" data-glightbox="type: image" href="./images/h2.png">
                    <i class="fa-solid fa-circle-plus"></i>
                    <div class="porfoliowarp__content" style="background: url(images/h2.png) no-repeat center;  background-position: center;
                        background-size: cover;"></div>
                  </a>
                </div>
              </div>
              <a href="#" class="btn linkbtn mt-5"> More Works </a>
            </div>
          </div>
        </div>
      </div>
      <div id="contactsection" class="sectionblock">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path fill="#ffffff" fill-opacity="1" d="M0,96L60,117.3C120,139,240,181,360,186.7C480,192,600,160,720,138.7C840,117,960,107,1080,117.3C1200,128,1320,160,1380,176L1440,192L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z" />
        </svg>
        <div class="container">
          <div class="row">
            <div class="col-lg-6 pr-lg-5">
              <div class="contactdetail">
                <h3 class="contactdetail__title mb-4"> Let's get intouch </h3>
                <!--<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam itaque, eos a maxime numquam inventore officia quam.</p>-->
                <ul class="contactdetail__list">
                  <li>
                    <span class="contactdetail__span"> Karachi Pakistan </span>
                  </li>
                  <li>
                    <span class="contactdetail__span"> +92 3077170871 </span>
                  </li>
                  <li>
                    <span class="contactdetail__span">
                      <a href="mailto: zahid4453@gmail.com" class="__cf_email__" >zahid4453@gmail.com</a>
                    </span>
                  </li>
                </ul>
                <ul class="contactdetail__sosmed">
                  <li>
                    <a target="_BLANK" href="//linkedin.com/in/zahid-hussain-8a0b0511a">
                      <i class="fa-brands fa-linkedin"></i>
                    </a>
                  </li>
                  <li>
                    <a target="_BLANK" href="#">
                      <i class="fa-brands fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a target="_BLANK" href="#">
                      <i class="fa-brands fa-github"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-6">
                <?php
                    if(isset($emailSend)){
                        echo '<span style="color:green;">'.$emailSend.'</span>';
                    }
                
                ?>
                
              <div class="contactform">
                <form action="" id="formcontact" class="contactform" method="post">
                  <div class="contactform__form-group row">
                    <div class="col-lg-12 pt-4">
                      <label for="yourname" class="pb-2 ">Your Name</label>
                      <input type="text" id="yourname" class="contactform__inputtext input-control " placeholder="Your name" name="name" data-name="name" required>
                    </div>
                    <div class="col-lg-12 pt-4">
                      <label for="yourmail" class="pb-2 ">Your Email</label>
                      <input type="email" id="yourmail" class="contactform__inputtext input-control " placeholder="Your email address" name="email" data-name="email" required>
                    </div>
                    <div class="col-lg-12 pt-4">
                      <label for="comment" class="pb-2">Input your message</label>
                      <textarea class="contactform__comentarea input-control" id="comment" placeholder="Your comment" name="comment" data-name="comment" required></textarea>
                      <button id="submitbutton" class="btn mt-5  contactform__submitbuton linkbtn mt-5 mb-3" name="SubmitButton" type="submit">Submit now</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer id="footerwrap" class="pt-4">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center footwrap">
            <p>
              BY <b>Zahid Hussain</b>
            </p>
          </div>
        </div>
      </div>
    </footer>
    <script data-cfasync="false" src="js/email-decode.min.js"></script>
    <script src="js/keen-slider.js"></script>
    <script src="js/glightbox.js"></script>
    <script src="js/shufle.js"></script>
    <script src="js/main.js"></script>
    <script defer src="js/beacon.min.js" data-cf-beacon="{" token": "4f90f21c0dd847f4b18b0224b7a9df02" }"></script>
  </body>
</html>