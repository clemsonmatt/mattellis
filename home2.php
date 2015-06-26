<html>
<head>
  <title>Matt Ellis</title>
  <link href="matt_cait/bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
  <link href="includes/custom.css" rel="stylesheet" type="text/css" />
</head>
<body style="background-color:#555;">
  <!-- Header -->
  <div style="background-color:#999;">
    <div class="container custom_background" style="background-color:#999;">
      <h1>Matt's Web Site</h1>
    </div>
  </div>
  <!-- Navbar -->
  <div class="navbar navbar-inverse" style="margin-bottom:0px;">
    <div class="container">
      <ul class="nav navbar-nav">
	<li class="active"><a href="#">Home</a></li>
	<li><a href="about.php">About</a></li>
	<li><a href="#">Comments</a></li>
      </ul>
    </div>
  </div>
  <!-- Body -->
  <div class="container" style="background-color:#EEE;">
    <br />
    <div class="alert alert-warning">Website is under construction.</div>
    <legend><h3>Welcome to my website!</h3></legend>
    <p>Content will be added soon.</p>
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="thumbnail" style="background-color:#FFF; color:#222;">
        <div class="caption" style="background-color:#222;">
          <h3 style="color:#FFF;">Welcome!</h3>
        </div>
        <br />
        <p>
          Thanks for visiting! 
          <br /><br />
          Please check back often as I'll be continuously updating the site!
        </p>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="thumbnail" style="background-color:#FFF; color:#222;">
        <div class="caption" style="background-color:#222;">
          <h3 style="color:#FFF;">Countdown to Christmas!</h3>
        </div>
        <p>
          <?php
	    date_default_timezone_set('America/New_York');
	    $target = mktime(0, 0, 0, 12, 25, 2013) ;
	    $today = time () ;
	    $difference =($target-$today) ;
	    $days =(int) ($difference/86400) ;
	    $h = $difference/86400; while($h>1){ $h--; };
	    echo '
	      <h5>Today: '.date('l, F d, Y', $today).'</h5>
	      <h5>Christmas: '.date('l, F d, Y', $target).'</h5>
	      <hr />
	      <h2 style="margin-left:15%;">'.$days.' Days</h2>
	      <br />
	      <table class="table">
		<tr>
		  <td>
		    <script language="JavaScript">
		      TargetDate = "12/25/2013 12:00 AM";
		      CountActive = true;
		      CountStepper = -1;
		      LeadingZero = true;
		      DisplayFormat = "%%D%% Days, %%H%% Hours, %%M%% Minutes, %%S%% Seconds.";
		    </script>
		    <script language="JavaScript" src="matt_cait/bootstrap/assets/js/mins_custom.js">
		    </script>
		  </td>
		</tr>
	      </table>
	    ';
          ?> 
        </p>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="thumbnail" style="background-color:#FFF; color:#222;">
        <div class="caption" style="background-color:#222;">
          <h3 style="color:#FFF;">Thumbnail Label</h3>
        </div>
        <p>

        </p>
      </div>
    </div>
  </div>
  <br /><br />
  </div>
  <!-- Footer -->
  <div class="container" style="background-color:#999">
    <center><h5 style="color:#222;">&copy Matt Ellis <?php echo date('Y'); ?></h5></center>
  </div>
</body>
</html>
