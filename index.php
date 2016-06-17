<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Matt Ellis</title>

    <link rel="shortcut icon" href="public/images/e-favicon.png">

    <link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="public/css/custom.css">
    <link rel="stylesheet" type="text/css" href="public/font-awesome/css/font-awesome.min.css">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

    <script type="text/javascript">
        $(function() {
          $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
              if (target.length) {
                $('html,body').animate({
                  scrollTop: target.offset().top
                }, 1000);
                return false;
              }
            }
          });
        });
    </script>

    <style type="text/css">
        h1 {
            font-size: 3.8em;
            letter-spacing: 3px;
        }
    </style>
</head>

<body>
<div class="light-background">
    <!-- Header -->
    <div class="container">
        <?php if (isset($_GET['email'])): ?>
            <br>
            <div class="alert-custom alert-custom-success">
                Thanks for the email! It was successfully sent to me and I should reply shortly if needed.
            </div>
        <?php endif ?>
        <br />
        <!-- Tabs -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <a href="public/images/Resume-Revised-2015.pdf" target="_blank" class="pull-right" style="margin-right:25px; font-size:22px; color:#FFF;">Resume</a>
                <a href="#contact" class="pull-right" style="margin-right:25px; font-size:22px; color:#FFF;">Contact</a>
                <a href="#portfolio" class="pull-right" style="margin-right:25px; font-size:22px; color:#FFF;">Portfolio</a>
                <a href="#skills" class="pull-right" style="margin-right:25px; font-size:22px; color:#FFF;">Skills</a>
                <a href="#about" class="pull-right" style="margin-right:25px; font-size:22px; color:#FFF;">About</a>
            </div>
        </div>
        <!-- Intro Block -->
        <div class="col-sm-10">
            <!-- About Block -->
            <div class="topBlock_hide" id="topBlock_about" style="max-height:433px;">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="photos/matt_img2.png" style="max-width:100%; max-height:415px;" />
                    </div>
                    <div class="col-lg-offset-1 col-sm-7" style="color: #fff;">
                        <br><br><br>
                        <h2 style="font-size: 48px;">
                            Hi. I'm Matt. A Web and Mobile Application Developer.
                        </h2>
                    </div>
                </div>
            </div>
        </div><!-- End Intro -->
    </div><!-- End Container -->

    <!-- About Me -->
    <a id="about"></a>
    <div class="dark-background"><!-- 9DA4BB -->
        <div class="container" style="padding-bottom: 150px;">
            <div class="row">
                <h1 class="text-center" style="color:#FFF; margin-top: 150px;">
                    About me
                </h1>
                <br>
                <div class="col-sm-offset-2 col-sm-8 text-block">
                    My name is Matt Ellis. I graduated from Clemson University with a Bachelors of Science in Computer Science. Through my internship at the university, building web apps for the NCEES, and various freelance jobs; I have enjoyed learing many new languages and OOP skills. I have a passion for web development. I like building, desiging, and structuring an application that not only functions, but promotes a good user experience. In my free time, I enjoy spending time on the lake with friends and family. My goal is to help build a better tomorrow through learning new technologies and never backing down from a challenge.
                </div>
            </div>
        </div>
    </div>

    <!-- Skills -->
    <div style="background-color: #fff;">
        <div class="container" style="min-height:550px; padding-bottom: 150px">
            <center>
                <h1 class="primary-color" style="margin-top: 150px;">
                    <a id="skills"></a>
                    Skills
                </h1>
            </center>
            <div class="row">
                <!-- Languages -->
                <div class="col-sm-offset-2 col-sm-8">
                    <h3 class="medium-grey">Languages</h3>
                    <br>
                    <table class="col-sm-12" style="font-size: 18px;">
                        <tr>
                            <td class="col-sm-6">
                                <div class="pull-right primary-color">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                PHP
                            </td>
                            <td class="col-sm-6">
                                <div class="pull-right primary-color">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                MySql
                            </td>
                        </tr>
                        <tr>
                            <td class="col-sm-6">
                                <div class="pull-right primary-color">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                JavaScript
                            </td>
                            <td class="col-sm-6">
                                <div class="pull-right primary-color">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                Java
                            </td>
                        </tr>
                        <tr>
                            <td class="col-sm-6">
                                <div class="pull-right primary-color">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                JQuery
                            </td>
                            <td class="col-sm-6">
                                <div class="pull-right primary-color">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                SQL
                            </td>
                        </tr>
                        <tr>
                            <td class="col-sm-6">
                                <div class="pull-right primary-color">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                CSS
                            </td>
                            <td class="col-sm-6">
                                <div class="pull-right primary-color">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                C
                            </td>
                        </tr>
                        <tr>
                            <td class="col-sm-6">
                                <div class="pull-right primary-color">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                HTML
                            </td>
                            <td class="col-sm-6">
                                <div class="pull-right primary-color">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                C++
                            </td>
                        </tr>
                        <tr>
                            <td class="col-sm-6">
                                <div class="pull-right primary-color">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                JQuery
                            </td>
                            <td class="col-sm-6">
                                <div class="pull-right primary-color">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                Objective C
                            </td>
                        </tr>
                    </table>

                    <br><br>
                    <hr>
                    <br>

                    <h3 class="medium-grey">Tools</h3>
                    <br>
                    <table class="col-sm-12" style="font-size: 18px;">
                        <tr>
                            <td class="col-sm-6">
                                <div class="pull-right primary-color">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                MVC Frameworks
                            </td>
                            <td class="col-sm-6">
                                <div class="pull-right primary-color">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                Object Oriented Design
                            </td>
                        </tr>
                        <tr>
                            <td class="col-sm-6">
                                <div class="pull-right primary-color">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                Symfony
                            </td>
                            <td class="col-sm-6">
                                <div class="pull-right primary-color">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                Responsive Design
                            </td>
                        </tr>
                        <tr>
                            <td class="col-sm-6">
                                <div class="pull-right primary-color">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                CodeIgniter
                            </td>
                            <td class="col-sm-6">
                                <div class="pull-right primary-color">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                Apache
                            </td>
                        </tr>
                        <tr>
                            <td class="col-sm-6">
                                <div class="pull-right primary-color">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                Doctrine
                            </td>
                            <td class="col-sm-6">
                                <div class="pull-right primary-color">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                Nginx
                            </td>
                        </tr>
                        <tr>
                            <td class="col-sm-6">
                                <div class="pull-right primary-color">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                Twig
                            </td>
                            <td class="col-sm-6">
                                <div class="pull-right primary-color">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                Xcode
                            </td>
                        </tr>
                        <tr>
                            <td class="col-sm-6">
                                <div class="pull-right primary-color">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                MS Office
                            </td>
                            <td class="col-sm-6">
                                <div class="pull-right primary-color">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                Adobe Suite
                            </td>
                        </tr>
                        <tr>
                            <td class="col-sm-6">
                                <div class="pull-right primary-color">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                Bootstrap Framework
                            </td>
                            <td class="col-sm-6">
                                <div class="pull-right primary-color">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                Android Studio
                            </td>
                        </tr>
                        <tr>
                            <td class="col-sm-6">
                                <div class="pull-right primary-color">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                Git
                            </td>
                            <td class="col-sm-6">
                                <div class="pull-right primary-color">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                Eclipse
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- web terminal -->
    <div class="darkish-background">
        <div class="container" style="padding-bottom: 50px;">
            <div class="row">
                <h3 class="text-center" style="margin-top: 50px;">
                    Prefer the command line over a GUI? Check out my <a href="/terminal.php">web terminal</a> for a different look.
                </h3>
            </div>
        </div>
    </div>

    <!-- Portfolio -->
    <a id="portfolio"></a>
    <br>
    <center>
        <h1 class="white-color" style="margin-top: 150px;">Some of my work</h1>
    </center>
    <br>

    <div class="container" style="padding: 20px 0px 65px 0px;">
        <!-- CAIF -->
        <h2 class="white-color text-center">
            Clemson Area International Friendship
        </h2>
        <br>
        <div class="row">
            <div class="col-sm-6">
                <img src="public/images/CAIF-Screenshot.png" style="max-width: 100%;">
            </div>
            <div class="col-sm-6">
                <div class="thumbnail light-background" style="border: none;">
                    <div class="caption">
                        <p class="purple-color text-block">
                            This was my first full web site which is an ongoing development. Created for the non-profit Clemson Area International Friendship organization, this web site provides local international students the ability to sign up and be paired with host families in the community. I was able to provide the ability for CAIF's president to have administrative functionality for back-end web upkeep as well as implement a way for the CAIF officers to easily match and pair the students with host families.
                        </p>
                        <a href="http://caifclemson.org/" target="_blank">
                            <h3 class="purple-color">
                                View Site &raquo;
                            </h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="lighter-background">
        <div class="container" style="padding: 50px 0px 65px 0px;">
            <h2 class="white-color text-center">
                Parabond iPhone and Android App
            </h2>
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="public/images/MainScreen4.png" style="max-width: 100%;">
                        </div>
                        <div class="col-sm-4">
                            <img src="public/images/DistributorScreen4.png" style="max-width: 100%;">
                        </div>
                        <div class="col-sm-4">
                            <img src="public/images/ProductScreen4.png" style="max-width: 100%;">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail lighter-background" style="border: none;">
                        <div class="caption">
                            <p class="purple-color text-block">
                                This app was developed for a local adhesives company to display their product information.
                                This is my first published iOS application that can be found in the Apple app store. I
                                provided an application that displays details about the individual products along with a
                                map with information regarding distributors of these products. The android version was
                                recently publised and can be found in the Google Play store. I am also working on a web
                                application to handle push updates to the local SQLite database.
                            </p>
                            <a href="https://itunes.apple.com/us/app/parabond/id925469601" target="_blank">
                                <h3 class="purple-color col-md-6">
                                    View in Itunes &raquo;
                                </h3>
                            </a>
                            <a href="https://play.google.com/store/apps/details?id=com.royaladhesives.parabond" target="_blank">
                                <h3 class="purple-color col-md-6">
                                    View in Google Play &raquo;
                                </h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container" style="padding: 50px 0px 65px 0px;">
        <h2 class="white-color text-center">
            Chick-fil-A
        </h2>
        <br>
        <div class="row">
            <div class="col-sm-6">
                <img src="public/images/cfa-main.png" style="max-width: 100%;">
            </div>
            <div class="col-sm-6">
                <div class="thumbnail light-background" style="border: none;">
                    <div class="caption">
                        <p class="purple-color text-block">
                            This is an application that I am currently working on for a local Chick-fil-A store. As my wife works in
                            their marketing department, I am never running out of ideas for this app. This application will serve
                            as a tool to help manage many aspects of the day to day tasks such as: scheduling, managing employees,
                            assigning tasks, performance reviews, and many more. This app will allow the operator and directors
                            to have a searchable record of tasks that currently have little to no paper trail. It will also provide
                            a singluar place for information that can be accessed easily by managers, along with a responsive design
                            for the team members to view and change their schedules.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="lighter-background">
        <div class="container" style="padding: 50px 0px 65px 0px;">
            <div class="row">
                <h2 class="white-color text-center">
                    Rutland Institute for Ethics
                </h2>
                <hr class="custom-hr">
                <div class="col-sm-6">
                    <img src="public/images/Rutland-Screenshot.png" style="max-width: 100%;">
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail lighter-background" style="border: none;">
                        <div class="caption">
                            <p class="purple-color text-block">
                                Rutland is an institute on Clemson Univeristy's campus that strives to benefit the campus and
                                community by showing the importance of ethics. I began working for the Rutland Institute to
                                upkeep their site. Along the way, I have been able to update the old site with a completly
                                new look and file structure. The new site is easy to use as well as easy to maintain. The new
                                site also provides the institute a way of viewing archived files.
                            </p>
                            <a href="http://www.clemson.edu/ethics/RIE" target="_blank">
                                <h3 class="purple-color">
                                    View Site &raquo;
                                </h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="padding: 50px 0px 150px 0px;">
        <h2 class="white-color text-center">
            Clemson CCIT Applications
        </h2>
        <br>
        <div class="row">
            <div class="col-sm-6">
                <img src="photos/RSVP_main.png" style="max-width:100%;">
            </div>
            <div class="col-sm-6">
                <div class="thumbnail light-background" style="border: none;">
                    <div class="caption">
                        <h3 class="purple-color">RSVP Application</h3>
                        <p class="purple-color text-block">
                            Created as an intern at the university, the RSVP application is designed for all Clemson faculty and staff to have access to events and to also be able to respond with a RSVP to those events. The approved Clemson users with administrative options also have the ability to create and manage these events.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col-sm-6">
                <img src="photos/MOU_main.png" style="max-width:100%;">
            </div>
            <div class="col-sm-6">
                <div class="thumbnail light-background" style="border: none;">
                    <div class="caption">
                        <h3 class="purple-color">
                            Clemson CCIT MOU Application
                        </h3>
                        <p class="purple-color text-block">
                            This was another application developed as an intern. The MOU (Memorandum of Understanding) application was created to replace the current paper process. Before the application, the paper MOU's were passed around to all of the department heads when an application needed access to University records such as student or employee information. This process is now completly automated by this application, by being able to manage departments, MOU's, and request fields. This app also keeps an orgainzed record of all past MOU's for later review.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Container -->

    <!-- Contact Me -->
    <a id="contact"></a>
    <div class="darkish-background" style="padding-bottom: 150px;">
        <div class="container">
            <center>
                <h1 class="white-color" style="margin-top: 150px;">Contact Me</h1>
            </center>
            <br />
            <div class="row">
                <div class="col-sm-4">
                    <h3 class="white-color">My Info</h3>
                    <address style="font-size: 18px;">
                        <abbr title="Email">E:</abbr> mellis0292@gmail.com
                        <br><br>
                        <abbr title="Phone">P:</abbr> (864) 247-9619
                    </address>
                    <br>
                    <a href="public/images/Resume-Revised-2015.pdf" target="_blank" style="font-size:18px; color: inherit;">
                        My Resume
                    </a>
                </div>
                <div class="col-sm-8">
                    <h3 class="white-color">Send me a message</h3>
                    <form method="post" action="sendemail.php" class="form-email">
                        <input type="text" name="name" class="form-control" placeholder="Your Name"><br>
                        <input type="email" name="email" class="form-control" placeholder="Your Email"><br>
                        <textarea name="message" id="message" class="form-control" rows="6" placeholder="Your Message"></textarea>
                        <br>
                        <button type="submit" class="btn btn-custom btn-lg pull-right">
                            Send
                        </button>
                    </form>
                    <!-- <form method="post" action="sendemail.php">
                    <div class="well">
                        <div class="row">
                            <div class="col-md-5">
                                <label>Your Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Your Name"><br />
                                <label>Email Address</label>
                                <input type="email" name="email" class="form-control" placeholder="Your email address"><br />
                                <label>Subject</label>
                                <input type="text" name="subject" class="form-control" placeholder="Your email subject">
                            </div>
                            <div class="col-md-7">
                                <label>Message</label>
                                <textarea name="message" id="message" class="form-control" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <br />
                                <button type="submit" class="btn btn-custom pull-right">
                                    <i class="fa fa-send"></i>
                                    Send
                                </button>
                            </div>
                        </div>
                    </div>
                    </form> -->
                </div>
            </div>
        </div><!-- End Container -->
    </div>

    <!-- Footer -->
    <div class="dark-background">
        <br /><br />
        <div class="container">
            <div class="row">
                <div class="col-sm-4" style="margin-top: 5px;">
                    <p style="font-size: 1.2em;">
                        <?php date_default_timezone_set('America/New_York'); ?>
                        Matt Ellis
                        <br>
                        Copyright &copy; <?php echo date('Y'); ?>
                    </p>
                </div>
                <div class="col-sm-4 text-center" style="margin-top: 5px; font-size: 2.6em;">
                    <a href="https://twitter.com/matte_1" target="_blank" style="margin-right: 5px;">
                        <!-- <img src="photos/twitter_icon_orange.fw.png" style="max-width:8%;" /> -->
                        <i class="fa fa-twitter-square light-purple"></i>
                    </a>
                    <a href="https://www.facebook.com/matt.ellis.5076" target="_blank">
                        <!-- <img src="photos/facebook_icon_orange.fw.png" style="max-width:8%;" /> -->
                        <i class="fa fa-facebook-square light-purple"></i
                    </a>
                    <a href="https://www.linkedin.com/pub/matthew-ellis/89/1ab/420" target="_blank" style="margin-left: 5px;">
                        <!-- <img src="photos/linkedin_icon_orange.fw.png" style="max-width:8%;" /> -->
                        <i class="fa fa-linkedin-square light-purple"></i>
                    </a>
                </div>
                <div class="col-sm-4" style="margin-top: 5px; font-size: 1.2em;">
                    <div class="pull-right">
                        864-247-9619
                    </div>
                    <br>
                    <div class="pull-right">
                        mellis0292@gmail.com
                    </div>
                </div>
            </div>
        </div>
        <br /><br />
    </div>
</div>
</body>
</html>
