<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Matt Ellis</title>
<link href="matt_cait/bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="photos/icon.fw.png">

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

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
</style>

<body style="background-color:#EEEEEE;">
	<div class="container" style="background-color:#EEEEEE;">
    	<br />
    	<div class="row">
        	<div class="col-lg-8 col-md-8 col-sm-8">
            	<img src="photos/matt_logo.fw.png" style="max-width:100%;" />
            </div>
        	<div class="col-lg-4 col-md-4 col-sm-4">
            	<div class="pull-right">
                    <a href="#portfolio" style="margin-right:25px;"><h4 style="color:#AAAAAA;">PORTFOLIO</h4></a>
                    <a href="#"><h4 style="color:#AAAAAA;">CONTACT</h4></a>
                </div>
            </div>
        </div>
        <br />
        <div class="whiteBG">
        	<center><img src="photos/break.fw.png" style="max-width:100%;" /></center>
            <br />
            <!-- Block Links -->
            <div class="col-lg-2 col-md-2 col-sm-2 whiteBG">
                <div class="list-group">
                	<a target="about" id="about" class="list-group-item topBlock active" style="max-height:125px; min-height:125px;"><h3>About</h3></a>
                    <br />
                    <a target="comments" id="comments" class="list-group-item topBlock" style="max-height:125px; min-height:125px;"><h3>Comments</h3></a>
                    <br />
                    <a target="social" id="social" class="list-group-item topBlock" style="max-height:125px; min-height:125px;"><h3>Social</h3></a>
                </div>
            </div>
            <!-- Information Blocks -->
            <div class="col-lg-10 col-md-10 col-sm-10 whiteBG">
            	<!-- About Block -->
                <div class="topBlock_hide" id="topBlock_about" style="min-height:433px; max-height:433px;">
                	<div class="row">
                    	<div class="col-lg-4 col-md-4 col-sm-4">
                        	<img src="photos/matt.fw.png" style="max-width:100%; max-height:415px;" />
                        </div>
                        <div class="col-lg-8">
                        
                        </div>
                    </div>
                </div>
                <!-- Comments Block -->
                <div class="topBlock_hide" id="topBlock_comments" style="min-height:433px; max-height:433px; display:none;">
                	<img src="../fireworks/merryChristmas.fw.png" style="max-width:100%; max-height:415px;" />
                </div>
                <!-- Social Block -->
                <div class="topBlock_hide" id="topBlock_social" style="min-height:433px; max-height:433px; display:none;">
                	<!-- Images -->
                    <div class="col-lg-6 col-md-6 col-sm-6">
                    	<div class="row">
                    	<!-- Active Bar -->
                    	<div class="col-lg-1 col-md-1 col-sm-1" style="min-height:413px; max-height:413px; position:relative;">
                            <div class="twitterActive col-lg-12 col-md-6 col-sm-6 socialHideActive" id="socialActive_twitter" style="max-height:125px; min-height:125px;">
                            </div>
                            <div class="facebookActive col-lg-12 col-md-12 col-sm-12 socialHideActive" id="socialActive_facebook" style="max-height:125px; min-height:125px; margin-top:144px; display:none;">
                            </div>
                            <div class="mailActive col-lg-12 col-md-12 col-sm-12 socialHideActive" id="socialActive_mail" style="max-height:125px; min-height:125px; margin-top:288px; display:none;">
                            </div>
                        </div>
                        <!-- Images -->
                        <div class="col-lg-11 col-md-11 col-sm-10">
                            <a target="twitter" id="twitter" class="socialBlock">
                            	<img src="photos/twitter_icon.fw.png" style="max-width:100%;" onmouseover="this.src='photos/twitter_hover.fw.png'" onmouseout="this.src='photos/twitter_icon.fw.png'" />
                            </a>
                            <a target="facebook" id="facebook" class="socialBlock">
                            	<img src="photos/facebook_icon.fw.png" style="max-width:100%; margin-top:19px;" onmouseover="this.src='photos/facebook_hover.fw.png'" onmouseout="this.src='photos/facebook_icon.fw.png'" />
                            </a>
                            <a target="mail" id="mail" class="socialBlock">
                            	<img src="photos/mail_icon.fw.png" style="max-width:100%; margin-top:19px;" onmouseover="this.src='photos/mail_hover.fw.png'" onmouseout="this.src='photos/mail_icon.fw.png'" />
                        	</a>
                        </div>
                        </div>
                    </div>
                    <!-- Detailed Info for Social -->
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <!-- Twitter -->
                        <div class="socialHide" id="social_twitter">
                            <a class="twitter-timeline" href="https://twitter.com/matte_1" height="415"  data-widget-id="390209154196832257">
                                Tweets by @matte_1
                            </a>
                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById
							(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(
							document,"script","twitter-wjs");</script>
                        </div>
                        <!-- Facebook -->
                        <div class="socialHide" id="social_facebook" style="display:none;">
                        	Facebook
                        </div>
                        <!-- Mail -->
                        <div class="socialHide" id="social_mail" style="display:none;">
                        	<form>
                            	<h5>FROM</h5>
                                <input class="col-lg-12 col-md-12 col-sm-12 input-lg lightGrayBG" name="from" type="text" placeholder="your email" />
                                <h5>SUBJECT</h5>
                                <input class="col-lg-12 col-md-12 col-sm-12 input-lg lightGrayBG" name="subject" type="text" placeholder="subject" />
                                <h5>MESSAGE</h5>
                                <textarea class="col-lg-12 col-md-12 col-sm-12 input-lg lightGrayBG" name="message" rows="5" placeholder="message"></textarea>
                                <input class="btn btn-lg btn-primary pull-right" type="submit" value="Send" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>    
        </div>  
        <img src="photos/break2.fw.png" style="max-width:100%;" />
        <a id="portfolio"></a>
        <!-- Portfolio -->
        <div class="blueBG" style="margin-top:-20px;">
            <br />
            <h1 style="color:#FFFFFF; margin-left:50px;">Portfolio</h1>
            <!-- Top row of blocks -->
            <div class="row whiteBG" style="padding:20px; padding-bottom:0px;">
            	<!-- Web Dev. Block -->               
                <div id="webDev" class="col-lg-4 col-md-4 col-sm-4 portHide portShow">
                    <a target="webDev" class="port">
                    	<img src="photos/webDev_block2.fw.png" style="max-width:100%;" />
                    </a>
                    <div class="portHide" id="port_sub_webDev" style="display:none;">
                        <br /><br />
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <a target="webDev" class="port"><img src="photos/webDev_block2.fw.png" style="max-width:100%;" /></a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <a target="skills" class="port"><img src="photos/skills_block2.fw.png" style="max-width:100%;" /></a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                            	<a target="languages" class="port"><img src="photos/languages_block2.fw.png" style="max-width:100%;" /></a>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                            	<a target="examples" class="port"><img src="photos/example_block.fw.png" style="max-width:100%;" /></a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                            	<a target="projects" class="port"><img src="photos/academic_block2.fw.png" style="max-width:100%;" /></a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                            	<a target="resume" class="port"><img src="photos/resume_block2.fw.png" style="max-width:100%;" /></a>
                            </div>
                        </div>
                    </div>
                </div>                
                <!-- Skills Block -->
                <div id="skills" class="col-lg-4 col-md-4 col-sm-4 portHide portShow">
                    <a target="skills" class="port">
                    	<img src="photos/skills_block2.fw.png" style="max-width:100%;" />
                    </a>
                    <div class="portHide" id="port_sub_skills" style="display:none;">
                        <br /><br />
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <a target="webDev" class="port"><img src="photos/webDev_block2.fw.png" style="max-width:100%;" /></a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <a target="skills" class="port"><img src="photos/skills_block2.fw.png" style="max-width:100%;" /></a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                            	<a target="languages" class="port"><img src="photos/languages_block2.fw.png" style="max-width:100%;" /></a>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                            	<a target="examples" class="port"><img src="photos/example_block.fw.png" style="max-width:100%;" /></a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                            	<a target="projects" class="port"><img src="photos/academic_block2.fw.png" style="max-width:100%;" /></a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                            	<a target="resume" class="port"><img src="photos/resume_block2.fw.png" style="max-width:100%;" /></a>
                            </div>
                        </div>
                    </div>
                </div>  
                <!-- Web Dev. Info -->
                <div class="col-lg-8 col-md-8 col-sm-8 portHide" id="port_webDev" style="display:none; min-height:542px; background-color:#DDDDDD;">
                	<button type="button" class="btn btn-lg portShowAll pull-right" style="margin-top:5px;">Close</button>
                    <legend><h3>Web Projects</h3></legend>
                    <div class="row">
                    	<div class="col-lg-4 col-md-4 col-sm-4">
                        	<img src="photos/Clemson_International_WEB_Logo.gif" style="max-width:100%" />
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                        	<p>
                        	This is my first full web site which is an ongoing development.  Created for the non-profit Clemson Area International Friendship
                            organization, this web site provides local international students the ability to sign up and be paired with host families in the 
                            community.  I was able to provide the ability for CAIF's president to have administrative functionality for back-end web upkeep
                            as well as implement a way for the CAIF officers to easily match and pair the students with host families.
                            </p>
                            <a href="http://caifclemson.org/" target="_blank"><h3>View Site &raquo;</h3></a>
                        </div>
                    </div>
                    <br />
                    <div class="row">
                    	<div class="col-lg-6 col-md-6 col-sm-6">
                        	<p>
                            	The Rutland Institute for Ethics is a ...
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                        	<img src="photos/compass.fw.png" style="max-width:100%" />
                        </div>
                    </div>
                </div>
                <!-- Skills Info -->
                <div class="col-lg-8 col-md-8 col-sm-8 portHide" id="port_skills" style="display:none; min-height:542px; background-color:#DDDDDD;">
                	<button type="button" class="btn btn-lg portShowAll pull-right" style="margin-top:5px;">Close</button>
                    <legend><h3>Skills</h3></legend>
                    <p><h4>Adobe Products</h4></p>
                    <p>
                    	<div class="row">
                        	<div class="col-lg-3 col-md-3 col-sm-3">
                            	<img src="photos/adobe_dw.fw.png" style="max-width:100%;" />
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3">
                            	<img src="photos/adobe_fw.fw.png" style="max-width:100%;" />
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3">
                            	<img src="photos/adobe_ai.fw.png" style="max-width:100%;" />
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3">
                            	<img src="photos/adobe_ps.fw.png" style="max-width:100%;" />
                            </div>
                        </div>
                    </p>
                </div>
                <!-- Languages Info -->
                <div class="col-lg-8 col-md-8 col-sm-8 portHide" id="port_languages" style="display:none; min-height:542px; background-color:#DDDDDD;">
                	<button type="button" class="btn btn-lg portShowAll pull-right" style="margin-top:5px;">Close</button>
                    <legend><h3>Languages</h3></legend>
                    <p>
                    	<h4>< html >< body >< h1 > <b style="color:#1175EE">HTML</b> < /h1 >< /body >< /html ></h4>
                        <h4>< ?php echo "<b style="color:#1175EE">PHP</b>"; ? ></h4>
                        <h4>System.out.println("<b style="color:#1175EE">JAVA</b>");</h4>
                        <h4>printf("<b style="color:#1175EE">C</b>\n");</h4>
                        <h4>cout << "<b style="color:#1175EE">C++</b>" << endl;</h4>
                        <h4>document.write('<b style="color:#1175EE">JAVASCRIPT</b>');</h4>
                        <h4>print("<b style="color:#1175EE">MATLAB</b>");</h4>
                    </p>
                </div>
                <!-- Languages Block -->
                <div id="languages" class="col-lg-4 col-md-4 col-sm-4 portHide portShow">
                    <a target="languages" class="port">
                    	<img src="photos/languages_block2.fw.png" style="max-width:100%;" />
                    </a>
                    <div class="portHide" id="port_sub_languages" style="display:none;">
                        <br /><br />
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <a target="webDev" class="port"><img src="photos/webDev_block2.fw.png" style="max-width:100%;" /></a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <a target="skills" class="port"><img src="photos/skills_block2.fw.png" style="max-width:100%;" /></a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                            	<a target="languages" class="port"><img src="photos/languages_block2.fw.png" style="max-width:100%;" /></a>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                            	<a target="examples" class="port"><img src="photos/example_block.fw.png" style="max-width:100%;" /></a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                            	<a target="projects" class="port"><img src="photos/academic_block2.fw.png" style="max-width:100%;" /></a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                            	<a target="resume" class="port"><img src="photos/resume_block2.fw.png" style="max-width:100%;" /></a>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
            <!-- Bottom row of blocks -->
            <div class="row whiteBG" style="padding:20px; padding-top:0px;">
            	<!-- Examples Block -->
                <div id="examples" class="col-lg-4 col-md-4 col-sm-4 portHide portShow">
                    <div class="portHide" id="port_sub_examples" style="display:none;">
                        <br /><br />
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <a target="webDev" class="port"><img src="photos/webDev_block2.fw.png" style="max-width:100%;" /></a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <a target="skills" class="port"><img src="photos/skills_block2.fw.png" style="max-width:100%;" /></a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                            	<a target="languages" class="port"><img src="photos/languages_block2.fw.png" style="max-width:100%;" /></a>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                            	<a target="examples" class="port"><img src="photos/example_block.fw.png" style="max-width:100%;" /></a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                            	<a target="projects" class="port"><img src="photos/academic_block2.fw.png" style="max-width:100%;" /></a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                            	<a target="resume" class="port"><img src="photos/resume_block2.fw.png" style="max-width:100%;" /></a>
                            </div>
                        </div>
                    </div>
                    <br /><br />
                    <a target="examples" class="port">
                    	<img src="photos/example_block.fw.png" style="max-width:100%;" />
                    </a>
                </div>  
                <!-- Academic Projects Block -->
                <div id="projects" class="col-lg-4 col-md-4 col-sm-4 portHide portShow">
                    <div class="portHide" id="port_sub_projects" style="display:none;">
                        <br /><br />
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <a target="webDev" class="port"><img src="photos/webDev_block2.fw.png" style="max-width:100%;" /></a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <a target="skills" class="port"><img src="photos/skills_block2.fw.png" style="max-width:100%;" /></a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                            	<a target="languages" class="port"><img src="photos/languages_block2.fw.png" style="max-width:100%;" /></a>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                            	<a target="examples" class="port"><img src="photos/example_block.fw.png" style="max-width:100%;" /></a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                            	<a target="projects" class="port"><img src="photos/academic_block2.fw.png" style="max-width:100%;" /></a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                            	<a target="resume" class="port"><img src="photos/resume_block2.fw.png" style="max-width:100%;" /></a>
                            </div>
                        </div>
                    </div>
                    <br /><br />
                    <a target="projects" class="port">
                    	<img src="photos/academic_block2.fw.png" style="max-width:100%;" />
                    </a>
                </div>  
                <!-- Examples Info -->
                <div class="col-lg-8 col-md-8 col-sm-8 portHide" id="port_examples" style="display:none; min-height:542px; background-color:#DDDDDD;">
                	<button type="button" class="btn btn-lg portShowAll">Close</button>
                </div>
                <!-- Academic Projects Info -->
                <div class="col-lg-8 col-md-8 col-sm-8 portHide" id="port_projects" style="display:none; min-height:542px; background-color:#DDDDDD;">
                	<button type="button" class="btn btn-lg portShowAll">Close</button>
                </div>
                <!-- Resume Info -->
                <div class="col-lg-8 col-md-8 col-sm-8 portHide" id="port_resume" style="display:none; min-height:542px; background-color:#DDDDDD;">
                	<button type="button" class="btn btn-lg portShowAll">Close</button>
                </div>
                <!-- Resume Block -->
                <div id="resume" class="col-lg-4 col-md-4 col-sm-4 portHide portShow">
                    <div class="portHide" id="port_sub_resume" style="display:none;">
                        <br /><br />
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <a target="webDev" class="port"><img src="photos/webDev_block2.fw.png" style="max-width:100%;" /></a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <a target="skills" class="port"><img src="photos/skills_block2.fw.png" style="max-width:100%;" /></a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                            	<a target="languages" class="port"><img src="photos/languages_block2.fw.png" style="max-width:100%;" /></a>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                            	<a target="examples" class="port"><img src="photos/example_block.fw.png" style="max-width:100%;" /></a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                            	<a target="projects" class="port"><img src="photos/academic_block2.fw.png" style="max-width:100%;" /></a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                            	<a target="resume" class="port"><img src="photos/resume_block2.fw.png" style="max-width:100%;" /></a>
                            </div>
                        </div>
                    </div>
                    <br /><br />
                    <a target="resume" class="port">
                    	<img src="photos/resume_block2.fw.png" style="max-width:100%;" />
                    </a>
                </div>  
            </div>
        	<br /><br />
        </div>
        <img src="photos/break3.fw.png" style="max-width:100%;" />
        <div class="whiteBG">
        	
        </div>
    </div>
</body>
</html>