<?php highlight_file(__FILE__); ?>
<?php
/*
 *	This page can be found at www.clemson.edu/ethics/RIE/new_RIE/programs.php
 *	This page shows some of the relevant programs that are going 
 *	on accross the campus that involve ethics.
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body>

<?php include('included/header.php'); ?>

<?php 
	if(isset($_GET['tab']))
		$tab = $_GET['tab'];
	else
		$tab = NULL; 
?>

<script type="text/javascript">
	var screenWidth = $(window).width();
    if (screenWidth > 1024) {
        document.write('<div class="container" style="background-color:#FFF;">');
    }
	else {
		document.write('<div style="background-color:#FFF;">');
	}
</script>
	<br /><br />
	<div class="tabbable">
        <ul class="nav nav-tabs">
            <li <?php if(($tab == NULL) || ($tab == 'events')){ echo 'class="active"'; } ?>><a href="#events" data-toggle="tab">Events</a></li>
            <li <?php if($tab == 'ci'){ echo 'class="active"'; } ?>><a href="#ci" data-toggle="tab">Creative Inquiries</a></li>
            <li <?php if($tab == 'programs'){ echo 'class="active"'; } ?>><a href="#programs" data-toggle="tab">Programs and Centers</a></li>
        	<li <?php if($tab == 'c_projects'){ echo 'class="active"'; } ?>><a href="#c_projects" data-toggle="tab">Collaborative Projects</a></li>
            <li <?php if($tab == 's_projects'){ echo 'class="active"'; } ?>><a href="#s_projects" data-toggle="tab">Special Projects</a></li>
        </ul>
        
        <!-- Events Tab -->
        <div class="tab-content">
            <div class="tab-pane <?php if(($tab == NULL) || ($tab == 'events')){ echo 'active'; } ?>" id="events">
                <legend><h3 style="color:#C60;">Events</h3></legend>
                <!-- Presidentail Colloquium -->
                <div class="row">
                	<center><h3 style="color:#C60;">2013-2014 Presidential Colloquium - Vulnerability and Responsibility</h3></center>
                	<br />
                    <div class="col-lg-offset-1 col-md-offset-1 col-lg-4 col-md-4 col-sm-5">
                    	<img src="images/jpg/programs/programs_hardin.jpg" style="max-width:100%;" />
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-7 well">
                    	The theme of this year’s Presidential Colloquium, “Vulnerability and Responsibility,” was chosen with an eye to alignment with the summer reading program for incoming freshmen. (This year incoming freshmen read The Iguana Tree, a novel written by Clemson alumna Michel Stone, which, she told the assembled freshman class, is about “hope and humanity.”) Colloquium events will explore the relationship between vulnerability, noting that we are all vulnerable in some measure, and responsibility, not in the sense that presupposes culpability, but in the sense of what one can be reasonably expected to do—what one's responsibilities are. The colloquium will also explore whether and to what extent the vulnerabilities of citizens entail societal responsibilities. <a href="news2.php?pc=13-14">Click here for more information</a>, or <a href="images/pdf/compiled colloquium events.pdf" target="_blank">here to view all past Presidential Colloquiums</a>.
                    </div>
                </div>
                <!-- J.T. Barton Essay Contest -->
                <div class="row" style="margin-top:50px;">
                	<center><h3 style="color:#C60;">J.T. Barton, Jr. Ethics Essay Contest</h3></center>
                	<br />
                    <div class="col-lg-offset-1 col-md-offset-1 col-lg-4 col-md-4 col-sm-5">
                    	<img src="images/jpg/programs/programs_sikes.jpg" style="max-width:100%;" />
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-7 well">
                    	The J.T. Barton, Jr. Ethics Essay Contest was established in 2001 by class of 1972 alumnus Stephan “Steve” Barton in honor of his father, J.T. Barton Jr., an alumnus of the class of 1950. Any Clemson undergraduate student, regardless of major or grade-point average, is eligible to compete in the essay competition. To see the essay topics and competition winners since 2001, <a href="images/pdf/barton_winners_to_date.pdf" target="_blank">click here</a>.
                    </div>
                </div>
                <!-- MBA Ethical Leadership -->
                <div class="row" style="margin-top:50px;">
                	<center><h3 style="color:#C60;">MBA Ethical Leadership Competition</h3></center>
                    <br />
                    <div class="col-lg-offset-1 col-md-offset-1 col-md-offset-1 col-lg-10 col-md-10 col-sm-10 well">
                    	<div class="col-lg-12 col-md-12 col-sm-12">
                        	<strong>Congratulations to Caroline Brown Aneskievich, Wendi Witek and Syndey Wyatt, 
                            the team members of ROI: Roar on Investment for winning the March 6th Fourth Annual 
                            MBA Ethical Leadership Case Competition</strong>
                            <br />
                        </div>
                        <br />
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            The competition was judged by three local business people and was based on scoring 
                            the teams’ presentations of recommendations about a case, “Tendexta: Charting the 
                            Way Forward Responsibly.” 
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                        	<strong>View the 2014 MBA Ethical Leadership Competition</strong><br />
                            <a href="Documents/ROI_Tendexta.pdf">Click here</a> for the case<br />
                            <a href="http://www.gsabusiness.com/news/50712-startup-weekend-winner-creates-custom-storybooks-to-facilitate-learning">Click here</a> for the GSA story<br />
                            <a href="Documents/program2014.pdf">Click here</a> for the program<br />
                            <a href="news2.php?ethical_leadership=ROI2014">Click here</a> for the photos
                        </div>
                    </div>
                </div>
                <!-- Thinking Critically, Acting Ethically -->
                
                <!-- Tenth Anniversary Gala -->
                <div class="row" style="margin-top:50px;">
                	<center><h3 style="color:#C60;">Tenth Anniversary Gala</h3></center>
                    <br />
                    <div class="col-lg-offset-1 col-md-offset-1 col-lg-4 col-md-4 col-sm-5">
                    	<img src="images/jpg/programs/Echo_Gala_Thumbnail1.jpg" style="max-width:100%;" />
                    </div>
                	<div class="col-lg-6 col-md-6 col-sm-7 well">
                    	
                    	<b>Integrity, Ethics, Athletics: In It to Win It</b><br />
                        The Rutland Institute for Ethics' Tenth Anniversary Gala was held at the Owen Pavillion of the <a href="http://g.co/maps/cqhpd" target="_blank">Madren Center in Clemson</a> at 6:00 PM Tuesday, April 10. The program shed light on the ever-evolving issue of ethics in collegiate athletics. Former Clemson University President Jim Barker joined chancellors of NCAA universities <a href="http://www.unl.edu/ucomm/chancllr/bio.shtml" target="_blank">Harvey Perlman</a> and Charles Nelms in a panel discussion moderated by <a href="http://chronicle.com/article/Brad-Wolverton-Bio/48522" target="_blank">Brad Wolverton</a>, senior writer of college sports for <a href="http://chronicle.com/section/Home/5" target="_blank">The Chronicle of Higher Education</a>, after Wolverton delivered the keynote address. 
                        <br /><br />     	
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            To view photos of the event, 
                            <a href="http://www.flickr.com/photos/clemsonuniversity/sets/72157629430952534/show" target="_blank">click here</a>
                            <br /><br />
                            To view the host committee, <a href="images/pdf/host committee.pdf" target="_blank">click here</a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 pull-right">
                        	Bart Wright, a sports writer for the Greenville News, wrote an article on the gala, 
                            <a href="images/pdf/ethical%20issues%20focus%20of%20rules%20makers_Gvl%20News%204-13-12_wueste.pdf" target="_blank">
                            	accessible here
                            </a>
                            <br /><br />
                            Follow Bart on Twitter @bartwriter
                        </div>
                    </div>
                </div>
                <br /><br />
            </div>
            
            <!-- Creative Inquiry Tab -->
            <div class="tab-pane <?php if($tab == 'ci'){ echo 'active'; } ?>" id="ci">
                <legend><h3 style="color:#C60;">Creative Inquiries</h3></legend>
                <!-- Tigers Talk Ethics -->
                <div class="row" style="margin-top:50px;">
                	<center><h3 style="color:#C60;">Tigers Talk Ethics</h3></center>
                    <br />
                    <div class="col-lg-offset-1 col-md-offset-1 col-lg-4 col-md-4 col-sm-5">
                    	<img src="images/jpg/programs/programs_TigersTalkEthics.jpg" style="max-width:100%;" />
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-7 well">
                    	The Tigers Talk Ethics Creative Inquiry is an effort on behalf of the Robert J. Rutland Institute for Ethics to capture and explore the ethical attitudes and moral beliefs of Clemson University students. It focuses on controversial issues that influence the lives of college academia and offers a platform for students with various beliefs to discuss the societal impact of these issues. The main goal of the creative inquiry is to promote awareness, understanding, and tolerance of these issues. Students interested in becoming a part of Tigers Talk Ethics should contact Dr. Stephen Satris at <b>stephen@clemson.edu</b>.
                        <br /><br />
                        <div class="col-lg-6 col-md-6 col-sm-6">
                        	More information on this creative inquiry can be found on the <a href="http://www.clemson.edu/tte/" target="_blank">Tigers Talk Ethics Website</a>.
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                        	Recorded past discussions can be found on the <a href="http://www.youtube.com/user/clemsonTTE?feature=watch" target="_blank">Tigers Talk Ethics youtube channel</a>.
                        </div>
                    </div>
                </div>
                <!-- Ethics Bowl -->
                <div class="row" style="margin-top:50px;">
                	<center><h3 style="color:#C60;">Ethics Bowl</h3></center>
                    <br />
                    <div class="col-lg-offset-1 col-md-offset-1 col-lg-4 col-md-4 col-sm-5">
                    	<center>
                    		<img src="images/jpg/programs/programs_37.jpg" style="max-width:100%; width:350px;" />
                        	<img src="images/jpg/programs/programs_38.jpg" style="max-width:100%; width:350px; margin-top:10px;" />
                    	</center>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-7 well">
                        Clemson's Orange Wave Ethics Bowl team has a documented history since 2004, with a solid record of competitive results, including being the 2008 national champions. Coaches for the team at various times are, Dr. Stephen Satris, Dr. Kelly Smith, Dr. Charles Starkey, and institute director, Dr. Daniel Wueste. Students interested in joining the team should contact Dr. Wueste at <a href="mailto:ernest@clemson.edu">ernest@clemson.edu</a>
                        <br /><br />
                        <center><a href="Documents/ChronologyOfOrangeWave.pdf" target="_blank">Click here</a> to view the record of The Orange Wave.</center>
                    </div>
                </div>
                <!-- Based on NCAA Rulebook Rewrite -->
                <div class="row" style="margin-top:50px;">
                	<center><h3 style="color:#C60;">Based on NCAA Rulebook Rewrite</h3></center>
                	<br />
                    <div class="col-lg-offset-1 col-md-offset-1 col-lg-4 col-md-4 col-sm-5">
                    	<img src="images/jpg/programs/programs_41.jpg" style="max-width:100%; width:350px;" />
                        <img src="images/jpg/programs/programs_42.jpg" style="max-width:100%; width:350px; margin-top:10px;" />
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-7 well">
                        During the 2011-2012 academic year, President Barker paired with institute director, Dr. Daniel Wueste, to facilitate a creative inquiry group and involve them with the work of reviewing and suggesting rewrites and simplifications of the NCAA Rulebook. Their work was showcased at the Tenth Anniversay Gala. Just recently, an article on the CI appeared in Clemson World:  <br /><a href="http://www.clemson.edu/clemsonworld/2012/summer" target="_blank">http://www.clemson.edu/clemsonworld/2012/summer</a>
                    </div>
                </div>
                <br /><br />
            </div>
            
            <!-- Programs and Centers Tab -->
            <div class="tab-pane <?php if($tab == 'programs'){ echo 'active'; } ?>" id="programs">
                <legend><h3 style="color:#C60;">Programs and Centers</h3></legend>
                <!-- Ethics Across the Curriculum -->
                <div class="row" style="margin-top:50px;">
                	<center><h3 style="color:#C60;">Ethics Across the Curriculum</h3></center>
                    <br />
                    <div class="col-lg-offset-1 col-md-offset-1 col-lg-4 col-md-4 col-sm-5">
                    	<img src="images/jpg/programs/programs_03.jpg" style="max-width:100%; width:350px;" />
                        <img src="images/jpg/programs/programs_02.jpg" style="max-width:100%; width:350px; margin-top:10px;" />
                        <img src="images/jpg/programs/programs_01.jpg" style="max-width:100%; width:350px; margin-top:10px;" />
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-7 well">
                        It is absolutely critical that students are educated in how to make ethical decisions. Thus, developing “students' ethical judgment” is prominent among the goals set out in Clemson’s Mission Statement. The best evidence of Clemson’s commitment to this goal is that ethical judgment is a distributed competency in the general education curriculum. It is a distributed competency, rather than one met by taking a single three-credit course, because Clemson faculty recognize that ethics in practice is not compartmentalized and the most effective way of conveying this point is by integrating ethics in regular courses throughout the curriculum. In fact, <a href="http://www.tbp.org/pubs/Features/SP12Ohland.pdf" target="_blank">an article was published</a> in the engineering honor society Tau Beta Pi's Bent about ethical decision making, with four of the writers (Well, Sill, Park, and Ohland) being EAC Alumni. EAC is part of a worldwide movement for whom interested professionals may affiliate with the <a href="http://www.rit.edu/cla/ethics/seac/conferences.html" target="_blank">Society for Ethics Across the Curriculum</a>.  For an overview of the program: <a href="Documents/EAC-desc.pdf" target="_blank">Ethics Across the Curriculum: At the Heart of the Rutland Institute's Mission</a>. Over the last several years, as a benefit of membership in the Rutland Ethics Alliance at certain levels, and as a means of outreach into the community, scholarships have been provided for K-12 teachers to attend a one day version of <a href="Documents/EAC-k-12_2014.pdf" target="_blank">EAC K-12</a>. Drs. Wueste and Fishman have created and offered this program.
                    </div>
                </div>
                <!-- Ethics in Design and Building -->
                <div class="row" style="margin-top:50px;">
                	<center><h3 style="color:#C60;">Ethics in Design and Building</h3></center>
                	<br />
                    <div class="col-lg-offset-1 col-md-offset-1 col-lg-4 col-md-4 col-sm-5">
                    	
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-7 well">
                        The aim of the Professional Ethics in Design and Building seminar is to enhance practical understanding of relevant state law and, in particular, ethical principles relevant to architectural practice. The approach is interactive and user-friendly. We use case studies (a) to elicit ethical principles and (b) as occasions for practice in applying them. We explain how these ethical principles figure in what we call a “toolbox approach” to ethical decision-making and stress the need to approach ethical issues in a systematic, reflective and responsible way. 
                        <br /><br />
                        <a href="http://www.aia.org/education/providers/AIAB099462" target="_blank">
                        	For a related article from the American Institute of Architects
                        </a>
                        <br /><br />
                        <a href="http://www.clemson.edu/ethics/events/architecture2014.php" target="_blank">
                        	For information on the 2014 offerings
                        </a>
                    </div>
                </div>
                <!-- International Center for Academic Integrity -->
                <div class="row" style="margin-top:50px;">
                	<center><h3 style="color:#C60;">International Center for Academic Integrity</h3></center>
                	<div class="col-lg-offset-1 col-md-offset-1 col-lg-4 col-md-4 col-sm-5">
                    	<img src="images/jpg/programs/programs_05.jpg" style="max-width:100%; width:350px;" />
                        <img src="images/jpg/programs/programs_06.jpg" style="max-width:100%; width:350px; margin-top:10px;" />
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-7 well">
                        The International Center for Academic Integrity provides a forum to identify, affirm, and promote the values of academic integrity among students, faculty, teachers and administrators. The ICAI Web site is divided into a public tier, which contains general information about the Center and its activities, and a members-only tier, which contains specific information on ICAI projects, research, and a list-server for members to exchange ideas and information. Learn how your academic institution can gain access to all of the online resources provided by the ICAI by becoming a member today.
                    </div>
                </div>
                <!-- Department of Philosophy and Religion -->
                <div class="row" style="margin-top:50px;">
                	<center><h3 style="color:#C60;">Department of Philosophy and Religion</h3></center>
                    <div class="col-lg-offset-1 col-md-offset-1 col-lg-4 col-md-4 col-sm-5">
                    	<img src="images/jpg/programs/programs_07.jpg" style="max-width:100%; width:350px;" />
                        <img src="images/jpg/programs/programs_09.jpg" style="max-width:100%; width:350px; margin-top:10px;" />
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-7 well">
                        The Clemson Department of Philosophy and Religion has an extremely active body of undergraduates interested in extracurricular Philosophy and Religion activities. In fact, interest has grown so rapidly that the department now has an undergraduate coordinator, Kelly Smith, whose job it is to oversee and facilitate all student activities. What's really important about this fact is that the department has allocated a small budget which can be used to facilitate said undergraduate activities.
                    </div>
                </div>
                <br /><br />
            </div>
            
            <!-- Collaborative Projects Tab -->
            <div class="tab-pane <?php if($tab == 'c_projects'){ echo 'active'; } ?>" id="c_projects">
                <legend><h3 style="color:#C60;">Collaborative Projects</h3></legend>
                <!-- Values Based Leadership Working Group -->
                <div class="row" style="margin-top:50px;">
                	<center><h3 style="color:#C60;">Values Based Leadership Working Group</h3></center>
                	<br />
                    <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-10 col-md-10 col-sm-10 well">
                        On March 8, 2013 the Rutland Institute for Ethics held a symposium on “Influential Voices on Economic Development, Ethics and Education.” As an outgrowth of that meeting and in collaboration with Ten At The Top, during the remainder of 2013 the institute conducted quarterly C-level executive sessions of a Values Based Leadership Working Group. The sessions for 2014, the first one on March 14th this section.
                        <br /><br />
                        <table>
                          <tr>
                            <th style="width:150px;">
                              March 14, 2014:
                            </th>
                            <td style="width:200px;">
                              <a href="Documents/VBL_notes-3-14-14.pdf" target="_blank">Notes from the Session</a>
                            </td>
                            <td style="width:100px;">
                              <a href="Documents/Values Based Leadership Working Group Meeting_DBJ_L.pdf" target="_blank">Agenda</a>   
                            </td>
                            <td style="width:200px;">
                              <a href="CIvblPhotosMar14.html">Photos from the Session</a>    
                            </td>
                            <td>
                                <a href="Documents/bio sheet-final-march 14-14.pdf" target="_blank">Bios</a>
                            </td>
                          </tr>
                        </table>
                        <hr />
                        <table>
                          <tr>
                            <th style="width:150px;">
                              December 4, 2013:
                            </th>
                            <td style="width:200px;">
                              <a href="Documents/VBL_notes-12-4-13.pdf" target="_blank">Notes from the Session</a>
                            </td>
                            <td style="width:100px;">
                              <a href="Documents/VBL event - performance appraisal - 12-4-13.pdf" target="_blank">Agenda</a>
                            </td>
                            <td>
                              <a href="CIvblPhotosDec4.html">Photos from the Session</a>   
                            </td>
                          </tr>
                        </table>
                        <hr />
                        <table>
                          <tr>
                            <th style="width:150px;">
                              September 27, 2013:
                            </th>
                            <td style="width:200px;">
                              <a href="Documents/VBL_notes-9-27-13.pdf" target="_blank">Notes from the Session</a>
                            </td>
                            <td style="width:100px;">
                              <a href="Documents/VBL event - onboarding - 9-27-13.pdf" target="_blank">Agenda</a>
                            </td>
                            <td>
                              No Photos available.   
                            </td>
                          </tr>
                        </table>
                        <hr />
                        <table>
                          <tr>
                            <th style="width:150px;">
                              June 11, 2013:
                            </th>
                            <td style="width:200px;">
                              <a href="Documents/VBL_notes .htm" target="_blank">Notes from the Session</a>
                            </td>
                            <td style="width:100px;">
                              <a href="Documents/Rutland Instititute Event - agenda-6.11.2013.pdf" target="_blank">Agenda</a>
                            </td>
                            <td>
                              <a href="http://imgur.com/a/uqJVh" target="_blank">Photos from the Session</a>   
                            </td>
                          </tr>
                        </table>
                    </div>
                </div>
                <!-- Engineering Ethics Slam -->
                <div class="row" style="margin-top:50px;">
                	<center><h3 style="color:#C60;">Engineering Ethics Slam</h3></center>
                    <br />
                    <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-10 col-md-10 col-sm-10 well">
                   		<strong>Definition:</strong> The Ethics Slam is an ethical dilemma competition 
                        that challenges various groups of students to compete by having their responses 
                        to major ethical dilemmas evaluated by a panel of judges. There can also be a 
                        “people’s choice” audience judging element if deemed desirable.
                        <br /><br />
                        <strong>Background:</strong> In an effort to engage people on the Clemson Campus 
                        and encourage interaction in ethical discussions in a fun yet meaningful way, the 
                        concept of an alternative version of an “ethics slam” as detailed in an article in 
                        the August 2013 issue of The Rotarian magazine was proposed. The article is about 
                        the Big Ethical Question Slam competition that takes place annually in Ann Arbor 
                        http://www.a2ethics.org/programs/big-ethical-question-slam. The project at Clemson 
                        was outlined, planned and implemented by a Technical Writing class instructed by 
                        Ms. Angelina Oberdan in the spring 2014 semester. 
                        <br /><br />
                        <strong>Learning Outcomes:</strong> 
                        <ul>
                        	<li>Students demonstrated their ability to use conventional workplace writing 
                            genres (emails, memos, and business letters) to facilitate and organize an event.
                            </li>
                            <li>Students investigated possible audiences, as well as estimated and measured 
                            the effectiveness of their communication and of the event.
                            </li>
                            <li>Students established a one-semester threshold event that can lead to a series 
                            of similar events over the next few years and will clearly dictate through 
                            instructions how this series can progress. 
							</li>
                        </ul>
    					<strong>Resulting Products:</strong>
                        <ul>
                        	<li>Engineering Ethics Slam event that involved the students from the Technical 
                            Writing Class and the audience/spectators that they drew to the event.
							</li>
                            <li>A manual for organizing future ethics slams across any discipline or by a 
                            Greek group or other organization on campus.
							</li>
     					</ul>
                        <strong>Resources:</strong>
                        <br /><br />
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <iframe src="http://prezi.com/embed/kheb3qwczpbs/?bgcolor=ffffff&amp;lock_to_path=0&amp;autoplay=0&amp;autohide_ctrls=0&amp;features=undefined&amp;disabled_features=undefined" width="550" height="300" frameBorder="0" webkitAllowFullScreen mozAllowFullscreen allowfullscreen style="max-width:100%;"></iframe>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <iframe src="http://prezi.com/embed/muk-js56nymz/?bgcolor=ffffff&amp;lock_to_path=0&amp;autoplay=0&amp;autohide_ctrls=0&amp;features=undefined&amp;disabled_features=undefined" width="550" height="300" frameBorder="0" webkitAllowFullScreen mozAllowFullscreen allowfullscreen style="max-width:100%;"></iframe>
                            <br />
                            <a href="Documents/posteventanalysisTMI.pdf" target="_blank">Click here to view the paper</a>
                        </div>
                    </div>
                </div>
                <!-- Influences Project -->
                <div class="row" style="margin-top:50px;">
                	<center><h3 style="color:#C60;">Influences Project</h3></center>
                    <div class="col-lg-offset-1 col-md-offset-1 col-lg-4 col-md-4 col-sm-5">
                    	<img src="images/jpg/programs/programs_19.jpg" style="max-width:100%; width:350px;" />
                        <img src="images/jpg/programs/programs_21.jpg" style="max-width:100%; width:350px; margin-top:10px;" />
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-7 well">
                        The Influences Project is an ethics DVD created with the Project Challenge Drama class of students from Westside and T. L. Hanna High Schools and Ashley Cowden’s Business and Technical Writing class at Clemson. Students in one of Ashley Cowden’s business writing classes teamed up with a drama teacher and her students from Hanna-Westside Extension Campus in Anderson, S.C., to create an educational DVD about ethical dilemmas high school students face. The goal of the project was to facilitate discussions between students and teachers about making good choices when faced with tough decisions.
                        <br /><br />
                        <a href="http://vimeo.com/channels/clientbasedprogram"><strong onclick="MM_openBrWindow('emrge.html','emrge','scrollbars=yes,width=350,height=550')">View a highlight video of the event here</strong></a>
                        <br /><br />
                        <a href="http://www.youtube.com/watch?feature=player_embedded&v=Rfs0GfahVgU" target="_blank">
                        	<strong>View the interview with Coach Dabo Swinney</strong>
                        </a>
                    </div>
                </div>
                <!-- Ethics in Medical Research and Genetic Engineering (EMRGE) -->
                <div class="row" style="margin-top:50px;">
                	<center><h3 style="color:#C60;">Ethics in Medical Research and Genetic Engineering (EMRGE)</h3></center>
                    <div class="col-lg-offset-1 col-md-offset-1 col-lg-4 col-md-4 col-sm-5">
                    	<img src="images/jpg/programs/programs_22.jpg" style="max-width:100%; width:350px;" />
                       	<img src="images/jpg/programs/programs_23.jpg" style="max-width:100%; width:350px; margin-top:10px;" />
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-7 well">
                        Developed in collaboration with Anderson School District 5, SC Life and the SC DNA Learning Center, <a href="images/pdf/emerge_link.pdf"><strong>EMRGE</strong></a> (Ethics in Medical Research and Genetic Engineering) worked with six high school science teachers to provide them with professional development to enable them to facilitate discussions of ethical issues that arise across curriculum.  They were mentored in lesson planning, project rubrics, and experiential trips to Clemson for 350 students. Specifically addressed were several SC standards for which they had few resources and background to effectively guide their students. Click here to view resources associated with the project. Click <a href="#collaborative_projects"><strong onclick="MM_openBrWindow('emrge.html','emrge','scrollbars=yes,width=350,height=550')">here</strong></a> to view some useful documents. Click <a href="http://www.flickr.com/photos/rutlandethicsalliance/sets/72157627179206873/"><strong onclick="MM_openBrWindow('emrge.html','emrge','scrollbars=yes,width=350,height=550')">here</strong></a> to view photos of the event.
                    </div>
                </div>
                <!-- The Land Ethics and Sustainable Communities Project -->
                <div class="row" style="margin-top:50px;">
                	<center><h3 style="color:#C60;">The Land Ethics and Sustainable Communities Project</h3></center>
                    <div class="col-lg-offset-1 col-md-offset-1 col-lg-4 col-md-4 col-sm-5">
                    	<img src="images/jpg/programs/programs_27.jpg" style="max-width:100%; width:350px;" />
                       	<img src="images/jpg/programs/programs_26.jpg" style="max-width:100%; width:350px; margin-top:10px;" />
                        <br /><br />
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-7 well">
                        The <strong>Land Ethics and Sustainable Communities Project</strong> provides seminars and events that provide participants with information about establishing and maintaining sustainable communities. Initiatives that educate people about energy consumption, climate change, new technology and alternate energy options comprise the foundation of this project (<em>this project is yet to be initiated</em>).
                     </div>
                </div>
            </div>
            
            <!-- Special Projects Tab -->
            <div class="tab-pane <?php if($tab == 's_projects'){ echo 'active'; } ?>" id="s_projects">
                <legend><h3 style="color:#C60;">Special Projects</h3></legend>
                <!-- National Survey of CEOs on Business Ethics -->
                <div class="row" style="margin-top:50px;">
                	<center><h3 style="color:#C60;">National Survey of CEOs on Business Ethics</h3></center>
                    <div class="col-lg-offset-1 col-md-offset-1 col-lg-4 col-md-4 col-sm-5">
                    	<img src="images/jpg/programs/programs_29.jpg" style="max-width:100%; width:350px;" />
                       	<img src="images/jpg/programs/programs_30.jpg" style="max-width:100%; width:350px; margin-top:10px;" />
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-7 well">
                        <strong>The National Survey of CEOs on Business Ethics </strong></a>is a study involving 300 large and mid-size corporations in all major industries, in collaboration with the Rutland Institute for Ethics at Clemson and the Center for Ethics and Corporate Responsibility at GSU and conducted with support from UPS.  Panelists from Prominent Upstate corporations will comment on the results and share their practical perspectives.  
                    </div>
                </div>
                <!-- Rutland Institute Event Template -->
                <div class="row" style="margin-top:50px;">
                	<center><h3 style="color:#C60;">Rutland Institute Event Template</h3></center>
                    <div class="col-lg-offset-1 col-md-offset-1 col-lg-4 col-md-4 col-sm-5">
                    	<img src="images/jpg/programs/programs_33.jpg" style="max-width:100%; width:350px;" />
                       	<img src="images/jpg/programs/programs_34.jpg" style="max-width:100%; width:350px; margin-top:10px;" />
                        <br /><br />
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-7 well">
                        <a href="images/pdf/RIE_Event_Template.pdf"><strong>The Rutland Institute for Ethics Event Template</strong></a> was created as a marketing tool that emphasizes one of the services that the institute can coordinate and facilitate to ensure a tangible work product. Often tough challenges or thorny issues may not get the attention needed for an effective solution.  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('included/footer.php'); ?>

</body>
</html>