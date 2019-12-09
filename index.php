<?php
require "connect.php";
?>
<!doctype html>
<html lang="en">
<head>
	<title>Job Stock - Responsive Job Portal Bootstrap Template | ThemezHub</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="assets/plugins/css/plugins.css">
    <link href="assets/css/style.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" id="jssDefault" href="assets/css/colors/green-style.css">
	</head>
	<body>
		<div class="Loader"></div>
		<div class="wrapper" id="wrapper">  
			<nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav">
				<div class="container">            
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
						<i class="fa fa-bars"></i>
					</button>
					<div class="navbar-header">
						<a class="navbar-brand" href="index.html">
							<img src="assets/img/logo-white.png" class="logo logo-display" alt="">
							<img src="assets/img/logo-white.png" class="logo logo-scrolled" alt="">
						</a>
					</div>
					<div class="collapse navbar-collapse" id="navbar-menu">
						<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp" >
							<li><a href="Login/login.php"><i class="fa fa-pencil" aria-hidden="true"></i>SignUp</a></li>
							
							<li class="dropdown megamenu-fw"><a href="#" class="dropdown-toggle" data-toggle="dropdown">SIGN IN NOW</a>
								<ul class="dropdown-menu megamenu-content" style="width: 201px!important;right: 5vw;left:auto;" role="menu">
									<li>
										<!--  <div class="row">-->
											<div class="col-menu col-md-3">
												<div class="content">
												 <ul class="menu-col">
												  <li><a href="register/user_register.php">USER</a></li>
											    <li><a href="register/company_reg.php">COMPANY </a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
							<li class="dropdown megamenu-fw"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Brows</a>
								<ul class="dropdown-menu megamenu-content" role="menu">
									<li>
										<div class="row">
											<div class="col-menu col-md-3">
												<h6 class="title">Main Pages</h6>
												<div class="content">
												 <ul class="menu-col">
												  <li><a href="index-2.html">Home Page 1</a></li>
											    <li><a href="signin-signup.html">Sign In / Sign Up</a></li>
														<li><a href="search-job.html">Search Job</a></li>
														<li><a href="tab.html">Tab Style</a></li>
													</ul>
												</div>
											</div><!-- end col-3 -->
											
											</div><!-- end col-3 -->
											<div class="col-menu col-md-3">
												<h6 class="title">For Employer</h6>
												<div class="content">
													<ul class="menu-col">
														<li><a href="create-job.html">Create Job</a></li>
														<li><a href="create-company.html">Create Company</a></li>
														<li><a href="manage-company.html">Manage Company</a></li>
														<li><a href="manage-candidate.html">Manage Candidate</a></li>
														<li><a href="manage-employee.html">Manage Employee</a></li>
														<li><a href="browse-resume.html">Browse Resume</a></li>
														<li><a href="search-new.html">New Search Job</a></li>
														<li><a href="employer-profile.html">Employer Profile</a></li>
														<li><a href="manage-resume.html">Manage Resume</a></li>
														<li><a href="new-job-detail.html">New Job Detail</a></li>
													</ul>
												</div>
											</div>    
											<div class="col-menu col-md-3">
												<h6 class="title">Extra Pages <span class="new-offer">New</span></h6>
												<div class="content">
							
														
												</div>
											</div><!-- end col-3 -->
										</div><!-- end row -->
									</li>
								</ul>
							</li>
							<li><a href="blog.html">Blog</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>   
			</nav>
			<div class="clearfix"></div>
			<div class="banner" style="background-image:url(assets/img/banner-9.jpg);">  
				<div class="container">
					<div class="banner-caption">
						<div class="col-md-12 col-sm-12 banner-text">
							<h1>7,000+ Browse Jobs</h1>
							<form class="form-horizontal">
								<div class="col-md-4 no-padd">
									 <div class="input-group">
										 <input type="text" class="form-control right-bor" placeholder="Skills, Designations, Companies">
									 </div>
								</div>
								<div class="col-md-3 no-padd">
									 <div class="input-group">
										 <input type="text" class="form-control right-bor" placeholder="Search By Location..">
									 </div>
								</div>
								
								<div class="col-md-3 no-padd">
								<div class="input-group">
									<?php
                                    $sql = "SELECT * FROM add_district";
                                    $result = mysqli_query($conn,$sql);
                                    ?>
                                <select name="district" class="form-control right-bor	"  id="choose-city">;
               	                <option value="0">Select District</option>
                                 	<?php
                                     while ($row = mysqli_fetch_array($result)) 
       {
        echo "<option value='" . $row['did'] ."'>" . $row['district'] ."</option>";
        }
       echo "</select>";
        ?>
									 </div>
								</div>
								
								<div class="col-md-2 no-padd">
									<div class="input-group">
										<button type="submit" class="btn btn-primary">Search Job</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				
				<div class="company-brand">
					<div class="container">
						<div id="company-brands" class="owl-carousel">
							<div class="brand-img">
								<img src="assets/img/microsoft-home.png" class="img-responsive" alt="" />
							</div>
							<div class="brand-img">
								<img src="assets/img/img-home.png" class="img-responsive" alt="" />
							</div>
							<div class="brand-img">
								<img src="assets/img/mothercare-home.png" class="img-responsive" alt="" />
							</div>
							<div class="brand-img">
								<img src="assets/img/paypal-home.png" class="img-responsive" alt="" />
							</div>
							<div class="brand-img">
								<img src="assets/img/serv-home.png" class="img-responsive" alt="" />
							</div>
							<div class="brand-img">
								<img src="assets/img/xerox-home.png" class="img-responsive" alt="" />
							</div>
							<div class="brand-img">
								<img src="assets/img/yahoo-home.png" class="img-responsive" alt="" />
							</div>
							<div class="brand-img">
								<img src="assets/img/mothercare-home.png" class="img-responsive" alt="" />
							</div>
						</div>
					</div>
				</div>
				
			</div>
			
			<!-- video section Start -->
	<div class="clearfix">
        <?php				
       if(isset($_POST['submit']))
          {
          $text=$_POST['text'];
          $jobtype=$_POST['jobtype'];
          $district=$_POST['district'];
          $qury="select * from create_job where jtype='$jobtype' and city='$district' and (jobtitle or qualification or jdescription) = '$text' and status=1";
          $result=mysqli_query($conn,$qury) or die ("error");
          while($row=mysqli_fetch_assoc($result))
          {
          ?>
        <div style="width:400px; height:200px; border-width:800px; background:green;border-radius: 2px; box-sizing: border-box;">
     
          <br id="id"><?php echo $row['jobtitle'];?>
          <br id="id"><?php echo $row['cname'] ?>
          <br id="id"><?php echo $row['jdescription'];?>
          <br id="id"><a href="Login/login.php">More Info..</a>
        </div>
       <?php
       }
       }
       ?>

	</div>
		

			<!-- ====================== How It Work ================= -->
			<section class="how-it-works">
				<div class="container">
					
					<div class="row" data-aos="fade-up">
						<div class="col-md-12">
							<div class="main-heading">
								<p>Working Process</p>
								<h2>How It <span>Works</span></h2>
							</div>
						</div>
					</div>
					
					<div class="row">
					
						<div class="col-md-4 col-sm-4">
							<div class="working-process">
								<span class="process-img">
									<img src="assets/img/step-1.png" class="img-responsive" alt="" />
									<span class="process-num">01</span>
								</span>
								<h4>Create An Account</h4>
								<p>Post a job to tell us about your project. We'll quickly match you with the right freelancers find place best.</p>
							</div>
						</div>
						
						<div class="col-md-4 col-sm-4">
							<div class="working-process">
								<span class="process-img">
									<img src="assets/img/step-2.png" class="img-responsive" alt="" />
									<span class="process-num">02</span>
								</span>
								<h4>Search Jobs</h4>
								<p>Post a job to tell us about your project. We'll quickly match you with the right freelancers find place best.</p>
							</div>
						</div>
						
						<div class="col-md-4 col-sm-4">
							<div class="working-process">
								<span class="process-img">
									<img src="assets/img/step-3.png" class="img-responsive" alt="" />
									<span class="process-num">03</span>
								</span>
								<h4>Save & Apply</h4>
								<p>Post a job to tell us about your project. We'll quickly match you with the right freelancers find place best.</p>
							</div>
						</div>
						
					</div>
					
				</div>
			</section>
			<div class="clearfix"></div>
			
				<div class="row copyright">
					<div class="container">
						<p>Copyright Job Stock © 2017. All Rights Reserved </p>
					</div>
				</div>
			</footer>
			<div class="clearfix"></div>
			<!-- Footer Section End -->
			
			<!-- Sign Up Window Code -->
			<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-body">
							<div class="tab" role="tabpanel">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#login" role="tab" data-toggle="tab">Sign In</a></li>
								<li role="presentation"><a href="#register" role="tab" data-toggle="tab">Sign Up</a></li>
							</ul>
							<!-- Tab panes -->
							<div class="tab-content" id="myModalLabel2">
								<div role="tabpanel" class="tab-pane fade in active" id="login">
									<img src="assets/img/logo.png" class="img-responsive" alt="" />
									<div class="subscribe wow fadeInUp">
										<form class="form-inline" method="post">
											<div class="col-sm-12">
												<div class="form-group">
													<input type="email"  name="email" class="form-control" placeholder="Username" required="">
													<input type="password" name="password" class="form-control"  placeholder="Password" required="">
													<div class="center">
													<button type="submit" id="login-btn" class="submit-btn"> Login </button>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>

								
							</div>
							</div>
						</div>
						</div>
				</div>
			</div>   
			<!-- End Sign Up Window -->
			
			<button class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()"><i class="spin fa fa-cog" aria-hidden="true"></i></button>
			<div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="rightMenu">
				<button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
				<ul id="styleOptions" title="switch styling">
					<li>
						<a href="javascript: void(0)" class="cl-box blue" data-theme="colors/blue-style"></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box red" data-theme="colors/red-style"></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box purple" data-theme="colors/purple-style"></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box green" data-theme="colors/green-style"></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box dark-red" data-theme="colors/dark-red-style"></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box orange" data-theme="colors/orange-style"></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box sea-blue" data-theme="colors/sea-blue-style "></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box pink" data-theme="colors/pink-style"></a>
					</li>
				</ul>
			</div>
			
			<!-- Scripts
			================================================== -->
			<script type="text/javascript" src="assets/plugins/js/jquery.min.js"></script>
			<script type="text/javascript" src="assets/plugins/js/viewportchecker.js"></script>
			<script type="text/javascript" src="assets/plugins/js/bootstrap.min.js"></script>
			<script type="text/javascript" src="assets/plugins/js/bootsnav.js"></script>
			<script type="text/javascript" src="assets/plugins/js/select2.min.js"></script>
			<script type="text/javascript" src="assets/plugins/js/wysihtml5-0.3.0.js"></script>
			<script type="text/javascript" src="assets/plugins/js/bootstrap-wysihtml5.js"></script>
			<script type="text/javascript" src="assets/plugins/js/datedropper.min.js"></script>
			<script type="text/javascript" src="assets/plugins/js/dropzone.js"></script>
			<script type="text/javascript" src="assets/plugins/js/loader.js"></script>
			<script type="text/javascript" src="assets/plugins/js/owl.carousel.min.js"></script>
			<script type="text/javascript" src="assets/plugins/js/slick.min.js"></script>
			<script type="text/javascript" src="assets/plugins/js/gmap3.min.js"></script>
			
			<!-- Custom Js -->
			<script src="assets/js/custom.js"></script>
			<script src="assets/js/jQuery.style.switcher.js"></script>
			<script type="text/javascript">
				$(document).ready(function() {
					$('#styleOptions').styleSwitcher();
				});
			</script>
			<script>
				function openRightMenu() {
					document.getElementById("rightMenu").style.display = "block";
				}

				function closeRightMenu() {
					document.getElementById("rightMenu").style.display = "none";
				}
			</script>
		</div>
	</body>

<!-- Mirrored from live.themezhub.com/updated-job-stock-preview/job-stock/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Oct 2018 18:30:01 GMT -->
</html>