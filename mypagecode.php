<?php highlight_file(__FILE__); ?>
<?php
/*
 *	This page is my website
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Matt Ellis</title>
<link href="matt_cait/bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="photos/icon.fw.png">

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

<script type="text/javascript" src="matt_cait/bootstrap/js/carousel.js"></script>

<script type="text/javascript">
	jQuery(function(){
		jQuery('.topBlock').click(function(){
			jQuery('.topBlock_hide').hide();
			jQuery('.topBlock').removeClass('active');
			jQuery('#topBlock_'+$(this).attr('target')).show();
			jQuery('#'+$(this).attr('target')).addClass('active');
		});
		jQuery('.socialBlock').click(function(){
			jQuery('.socialHide').hide();
			jQuery('.socialHideActive').hide();
			jQuery('#social_'+$(this).attr('target')).show();
			jQuery('#socialActive_'+$(this).attr('target')).fadeIn(1000);
		});
		jQuery('.port').click(function(){
			jQuery('.portHide').hide();
			jQuery('#'+$(this).attr('target')).show();
			jQuery('#port_sub_'+$(this).attr('target')).show();
			jQuery('#port_'+$(this).attr('target')).fadeIn(1000);
		});
		jQuery('.portShowAll').click(function(){
			jQuery('.portHide').hide();
			jQuery('.portShow').fadeIn(1000);
		});
	})
</script>

</head>

<style>
.arrow_box_tab { 
	position: relative; 
	background: #1175EE; 
	border: 4px solid #1175EE; 
	//border-radius: 10px;
} 

.arrow_box { 
	position: relative; 
	background: #1175EE; 
	border: 4px solid #1175EE; 
	//border-radius: 10px;
} 

.arrow_box:after, .arrow_box:before { 
	left: 100%; 
	top: 50%; 
	border: solid transparent; 
	content: " "; 
	height: 0; 
	width: 0; 
	position: absolute; 
	pointer-events: none; 
} 

.arrow_box:after { 
	border-color: rgba(34, 34, 34, 0); 
	border-left-color: #1175EE; 
	border-width: 35px; 
	margin-top: -35px; 
} 

.arrow_box:before { 
	border-color: rgba(34, 34, 34, 0); 
	border-left-color: #1175EE; 
	border-width: 41px; 
	margin-top: -41px; 
}

.whiteBG {
	background-color: #FFFFFF;
}

.grayBG {
	background-color: #CCCCCC;
}

.lightGrayBG {
	background-color: #F8F8F8;
}

.blueBG {
	background-color: #1175EE;	
}

.twitterActive {
	background-color: #42C8F4;
}

.facebookActive {
	background-color: #3B5998;
}

.mailActive {
	background-color: #CC6600;
}

.dark_color {
	background-color: #302E41;
}

.custom_header {
	/* IE10 Consumer Preview */ 
	background-image: -ms-linear-gradient(top, #7F7F7F 0%, #AFAFAF 100%);
	
	/* Mozilla Firefox */ 
	background-image: -moz-linear-gradient(top, #7F7F7F 0%, #AFAFAF 100%);
	
	/* Opera */ 
	background-image: -o-linear-gradient(top, #A45200 0%, #CC6600 100%);
	
	/* Webkit (Safari/Chrome 10) */ 
	background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #A45200), color-stop(1, #CC6600));
	
	/* Webkit (Chrome 11+) */ 
	background-image: -webkit-linear-gradient(top, #A45200 0%, #CC6600 100%);
	
	/* W3C Markup, IE10 Release Preview */ 
	background-image: linear-gradient(to left, #7F7F7F 0%, #CFCFCF 100%);
}
</style>

<body>
<div style="background-color:#AFAFAF;" class="custom_header">
	<!-- Header -->
	<div class="container">
    	<br />
        <!-- Tabs -->
        <div class="row">
        	<div class="col-lg-12">
            	<a href="#contact" class="pull-right" style="margin-right:25px; font-size:22px; color:#FFF;">Contact</a>
                <a href="#portfolio" class="pull-right" style="margin-right:25px; font-size:22px; color:#FFF;">Portfolio</a>
                <a href="#skills" class="pull-right" style="margin-right:25px; font-size:22px; color:#FFF;">Skills</a>
            	<a href="#about" class="pull-right" style="margin-right:25px; font-size:22px; color:#FFF;">About</a>
            </div>
        </div>
        <!-- Intro Block -->
        <div class="col-lg-10 col-md-10 col-sm-10">
            <!-- About Block -->
            <div class="topBlock_hide" id="topBlock_about" style="max-height:433px;">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <img src="photos/matt_img.fw.png" style="max-width:100%; max-height:415px;" />
                    </div>
                    <div class="col-lg-offset-1 col-lg-5" style="color:#FFF;">
                        <br /><br /><br />
                        <h1>Hi. I'm Matt. A Web and Mobile Application Developer.</h1>
                    </div>
                </div>
            </div>      
        </div><!-- End Intro -->
    </div><!-- End Container -->
    <!-- About Me -->
    <a id="about"></a>
    <div class="dark_color" style="color:#B6B9CD"><!-- 9DA4BB -->
    	<center><img src="photos/arrow.fw.png" style="max-width:100px; margin-top:-50px;" /></center>
    	<div class="container" style="min-height:400px;">
            <center>
                <div class="row">
                    <h1 style="color:#FFF; margin-top:100px;">A little about myself...</h1>
                    <br />
                    <div class="col-lg-offset-1 col-lg-10" style="font-size:18px;">
                        My name is Matt Ellis. I am currently a Senior Computer Science major at Clemson University.
                        Currently haveing an internship at the university, I have gained valuable knowledge of web
                        development that would have not been learned in the class room. I also juggle two other part
                        time jobs along with my concurrent studies. In my free time, I enjoy spending time on the 
                        lake with friends and family. My goal is to help build a better tomorrow through learning 
                        new interesting technologies and never backing down from a challenge.
                    </div>
                </div>
            </center>
        </div>
        <center><img src="photos/arrow.fw.png" style="max-width:100px; margin-bottom:-50px;" /></center>
    </div>    
    <br /><br /><br />
    <!-- Skills -->
    <a id="skills"></a>
    <div class="container" style="color:#FFF; min-height:550px;">
    	<center><h1 style="margin-top:100px;">My skillset...</h1></center>
        <br />
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <center><legend><h3 style="color:#FFF;">Web Development</h3></legend></center>
                <div class="row">
                    <div class="col-lg-offset-2 col-lg-3">
                    	<img src="photos/CSS3_logo.fw.png" style="max-width:100%;" />
                    </div>
                    <div class="col-lg-3">
                        <img src="photos/HTML5_logo.fw.png" style="max-width:100%;" />
                    </div>
                    <div class="col-lg-3">
                        <img src="photos/JS6_logo.fw.png" style="max-width:100%;" />
                    </div>
                </div>
                <br />
                <center>
                	<h4>Use of MVC frameworks</h4>
                	<h4>JavaScript &amp; JQuery</h4>
                    <h4>Databases with MySql</h4>
                    <h4>Front and Back-End Design</h4>
                </center>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
            	<center><legend><h3 style="color:#FFF;">Mobile Applications</h3></legend></center>
                <div class="row">
                	<center>
                	<div class="col-lg-offset-2 col-lg-4">
                    	<img src="photos/android_logo.png" style="max-width:80%;" />
                    </div>
                    <div class="col-lg-4">
                    	<img src="photos/Apple_gray_logo.png" style="max-width:80%;" />
                    </div>
                    </center>
                </div>
                <br />
                <center>
                	<h4>MySql Lite Databases</h4>
                    <h4>Experienced in iOS and Android</h4>
                </center>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <center><legend><h3 style="color:#FFF;">Adobe Products</h3></legend></center>
                <div class="row">
                	<div class="col-lg-4">
                		<img src="photos/adobe_ai.fw.png" style="max-width:100%;" />
                    </div>
                    <div class="col-lg-4">
                    	<img src="photos/adobe_dw.fw.png" style="max-width:100%;" />
                    </div>
                    <div class="col-lg-4">
                		<img src="photos/adobe_fw.fw.png" style="max-width:100%;" />
                    </div>
                </div>
                <br />
                <center>
                	<h4>Graphic Design Skills</h4>
                    <h4>Proficient with DreamWeaver, Fireworks, and Illustrator</h4>
                </center>
            </div>
        </div>
    </div><!-- End Container -->
    <center><img src="photos/arrow.fw.png" style="max-width:100px; margin-bottom:-50px;" /></center>
</div>
<br /><br /><br />
<!-- Portfolio -->
<a id="portfolio"></a>
<div style="background-color:#FFF;">
    <div class="container">
    	<!-- CAIF -->
        <div class="row">
            <center><h1 style="color:#302E41;">Some of my work...</h1></center>
            <br />
            <div class="col-lg-3 col-md-3 col-sm-3">
                <img src="photos/Clemson_International_WEB_Logo.gif" style="max-width:100%;" />
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9">
            	<legend><h3>Clemson Area International Friendship</h3></legend>
                This is my first full web site which is an ongoing development.  Created for the non-profit 
                Clemson Area International Friendship organization, this web site provides local international 
                students the ability to sign up and be paired with host families in the community.  I was able 
                to provide the ability for CAIF's president to have administrative functionality for back-end 
                web upkeep as well as implement a way for the CAIF officers to easily match and pair the 
                students with host families.
                <br /><br />
                <a href="http://caifclemson.org/" class="pull-right" target="_blank"><h3>View Site &raquo;</h3></a>
                <a href="caifcode.php" style="margin-right:50px;" class="pull-right" target="_blank"><h3>View Some Code &raquo;</h3></a>
            </div>
        </div><!-- End CAIF -->
        <!-- Rutland -->
        <div class="row">
            <br /><br />
            <div class="col-lg-3 col-md-3 col-sm-3">
                <img src="photos/RIE_logo_white_unnoffical.fw.png" style="max-width:100%;" />
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9">
            	<legend><h3>Rutland Institute for Ethics</h3></legend>
                Rutland is an institute on Clemson Univeristy's campus that strives to benefit the campus and community
                by showing the importance of ethics. I began working for the Rutland Institute to upkeep their site.
                Along the way, I have been able to update the old site with a completly new look. The new site is easy to 
                use as well as easy to maintain.
                <br /><br />
                <a href="http://www.clemson.edu/ethics/RIE/new_RIE" class="pull-right" target="_blank"><h3>View Site &raquo;</h3></a>
                <a href="riecode.php" style="margin-right:50px;" class="pull-right" target="_blank"><h3>View Some Code &raquo;</h3></a>
            </div>
        </div><!-- End Rutland -->
        <br /><hr />
        <a href="mypagecode.php" target="_blank">
        	<center><h3>Don't forget to view this page's source code!</h3></center>
        </a>
        <!-- CCIT Apps -->        
        <br /><br />
        <legend><h3>CCIT Applications</h3></legend>
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-7">
                <div id="carousel-example-generic" class="carousel slide">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <center>
                                <img src="photos/RSVP_main.png" alt="..." style="max-width:100%;" />
                            </center>
                            <div class="carousel-caption">
                                <h3 style="color:#222;">Home Screen</h3>
                            </div>
                        </div>
                        <div class="item">
                            <center>
                                <img src="photos/RSVP_web_app.png" alt="..." style="max-width:100%;" />
                            </center>
                            <div class="carousel-caption">
                                <h3 style="color:#222;">Submit your RSVP</h3>
                            </div>
                        </div>
                        <div class="item">
                            <center>
                                <img src="photos/RSVP_create.png" alt="..." style="max-width:100%;" />
                            </center>
                            <div class="carousel-caption">
                                <h3 style="color:#222;">Create a new RSVP event</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="icon-prev"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="icon-next"></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5">
            	<legend><h3>RSVP Application</h3></legend>
            	The RSVP application is designed for all Clemson faculty and staff to have access to 
                events and to also be able to respond with a RSVP to those events.  The approved Clemson 
                users with administrative options also have the ability to create and manage these events.
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-7">
                <div id="carousel-example-generic2" class="carousel slide">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic2" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic2" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic2" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <center>
                                <img src="photos/MOU_main.png" alt="..." style="max-width:100%;" />
                            </center>
                            <div class="carousel-caption">
                                <h3 style="color:#222;">Home Screen</h3>
                            </div>
                        </div>
                        <div class="item">
                            <center>
                                <img src="photos/MOU_web_app.png" alt="..." style="max-width:100%;" />
                            </center>
                            <div class="carousel-caption">
                                <h3 style="color:#222;">Manage all MOU's</h3>
                            </div>
                        </div>
                        <div class="item">
                            <center>
                                <img src="photos/MOU_create.png" alt="..." style="max-width:100%;" />
                            </center>
                            <div class="carousel-caption">
                                <h3 style="color:#222;">Create a new MOU</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic2" data-slide="prev">
                        <span class="icon-prev"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic2" data-slide="next">
                        <span class="icon-next"></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5">
            	<legend><h3>MOU Application</h3></legend>
            	The MOU (Memorandum of Understanding) application was created to replace the current paper
                process. Before the application, the paper MOU's were passed around to all of the department
                heads when an application needed access to University records such as student or employee 
                information. This process is now completly automated by this application, by being able to 
                manage departments, MOU's, and request fields. This app also keeps an orgainzed record of 
                all past MOU's for later review.
            </div>
        </div>	
        <br /><br />
        <center><img src="photos/arrow.fw.png" style="max-width:100px; margin-bottom:-50px;" /></center>
    </div><!-- End Container -->
</div>
<!-- Contact Me -->
<a id="contact"></a>
<div class="custom_header">
	<br /><br />
    <div class="container">
    	<center><h1 style="color:#FFF;">Contact Me...</h1></center>
        <br />
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <legend><h3 style="color:#FFF;">My Info</h3></legend>
                <address style="font-size:18px; color:#FFF;">
                    <abbr title="Email">E:</abbr> mlellis@clemson.edu
                    <br /><br />
                    <abbr title="Phone">P:</abbr> (864) 247-9619
                </address>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8">
                <legend><h3 style="color:#FFF;">Email Me</h3></legend>
                <form method="post" action="sendemail.php">
                <div class="well">
                    <div class="row">
                        <div class="col-lg-5">
                            <label>Your Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Your Name"><br />
                            <label>Email Address</label>
                            <input type="email" name="email" class="form-control" placeholder="Your email address"><br />
                            <label>Subject</label>
                            <input type="text" name="subject" class="form-control" placeholder="Your email subject">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7">
                            <label>Message</label>
                            <textarea name="message" id="message" class="form-control" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        	<br />
                            <button type="submit" class="btn btn-primary pull-right">Send</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <br /><br />
    	<center><img src="photos/arrow.fw.png" style="max-width:100px; margin-bottom:-50px;" /></center>
    </div><!-- End Container -->
</div>
<!-- Footer -->
<div class="dark_color" style="color:#B6B9CD">
	<br /><br />
    <div class="container">
    	<div class="row">
    		<div class="col-lg-4 col-md-4 col-sm-4">
            	<br />
            	<a href="https://twitter.com/matte_1" target="_blank">
                	<img src="photos/twitter_icon_orange.fw.png" style="max-width:8%;" />
                </a>
                <a href="https://www.facebook.com/matt.ellis.5076" target="_blank">
                	<img src="photos/facebook_icon_orange.fw.png" style="max-width:8%;" />
                </a>
                <a href="https://www.linkedin.com/pub/matthew-ellis/89/1ab/420" target="_blank">
                	<img src="photos/linkedin_icon_orange.fw.png" style="max-width:8%;" />
            	</a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
            	<center><h3>Matt Ellis &copy; <?php echo date('Y'); ?></h3></center>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
            	<br />
            	<p class="pull-right">mlellis@clemson.edu | 864-247-9619</p>
            </div>
        </div>
    </div>
    <br /><br />
</div>
</body>
</html>