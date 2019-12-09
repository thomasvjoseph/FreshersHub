<?php
require "../session.php";
require "../connect.php";
if(!getSession('email'))
{
header("location:index.php");
}
$cid=getSession('logid');
if(isset($_POST["submit"]))
    {
         $cname=$_POST['cname'];
        $jobtitle=$_POST['jobtitle'];
        $jobtype=$_POST['jobtype'];
        $salary=$_POST['salary'];
        $district=$_POST['district'];
        $ldate=$_POST['ldate'];
        $Qualification=$_POST['Qualification'];
        $jdescription=$_POST['jdescription'];
        $company_info=$_POST['company_info'];

      $qury="INSERT INTO create_job(jobtitle,jtype,salary,city,ldate,qualification,jdescription,company_info,status,cname,cid) VALUES('$jobtitle','$jobtype','$salary','$district','$ldate','$Qualification','$jdescription','$company_info',0,'$cname','$cid')";
        $obj=mysqli_query($conn,$qury) or die("erorr");
      if($obj)
		{ 
			?><script>
      window.location.href="create-job.php";</script>';
      <?php
		}
		else
			mysqli_error($conn);
    }
?>

<!doctype html>
<html lang="en">
<head>
	
	<title>Job Stock</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	
	<link rel="stylesheet" href="../assets/plugins/css/plugins.css">
    <link rel="stylesheet" href="../assets/css/sidebar.css">
    <!-- Custom style -->
    <link href="../assets/css/style.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" id="jssDefault" href="../assets/css/colors/green-style.css">
    
    <style >
    .inner-header-title.blank {
margin-top: 40px;
margin-bottom: 20px;
    padding: 8px 20px;
    text-align: center;
    color: #ffffff;
    overflow: visible;
    border-bottom: 4px solid #11b719;
    background: #53bb13;
    background: -moz-radial-gradient(center, ellipse cover, #53bb13 0%, #11b719 100%);
    background: -webkit-radial-gradient(center, ellipse cover, #53bb13 0%,#11b719 100%);
    background: radial-gradient(ellipse at center, #53bb13 0%,#11b719 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#53bb13', endColorstr='#11b719',GradientType=1 );
    background-size: cover;
}

h2.detail-title1 {
    border-left: 4px solid #07b107;
    width: 100%;
}
h2.detail-title1 {
	width: 100%;
	height: 44px;
    font-size: 18px;
    background: #f5f6f7;
    padding: 8px 20px;
    margin-bottom: 20px;
    line-height: 1.6;
    border-radius: 2px;
    color: #35434e;
    border-left: 3px solid #11b719;
}

.wrapper{
	min-height: 100vh;
}

    </style>
	</head>
	<body>


			
	<div id="wrapper">
		 <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Start Bootstrap
                    </a>
                </li>
                <li>
                    <a href="admin_home.php">HOME</a>
                </li>
                <li>
                    <a href="add_city.php">ADD CITY</a>
                </li>
                <li>
                    <a href="add_district.php">ADD DISTRICT</a>
                </li>
                <li>
                    <a href="add_jobtype.php">ADD JOBTYPE</a>
                </li>
                <li>
                    <a href="education.php">ADD EDUCATION</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="../logout.php">LOGOUT</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <!-- Start Navigation -->
            <a href="#menu-toggle" class="" id="menu-toggle">
				 <i class="fa fa-bars"></i>
			</a>
			 <nav class="navbar navbar-default  navbar-light white bootsnav">
				<div class="container">     
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
						<i class="fa fa-bars"></i>
					</button>
					<!-- Start Header Navigation -->

					<div class="navbar-header">
						<a class="navbar-brand" href="company_home.php">
							<img src="../assets/img/logo.png" class="logo logo-scrolled" alt="">
						</a>
					</div>
				
					<div class="collapse navbar-collapse" id="navbar-menu">

						<br>
						<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">

							<li><a href="company_home.php">HOME</a></li>
							<li><a href="../logout.php">Logout</a></li>
						</ul>	
					</div><!-- /.navbar-collapse -->

				</div>   
							
			</nav>
			<div class="clearfix"></div>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			
			<!-- Header Title Start -->
			<section class="inner-header-title blank">
				<h2 class="detail-title" >Create Job</h2>

			</section>
			<div class="clearfix">
				
			</div>
			<!-- Header Title End -->
			
<section class="full-detail">
				<div class="container">
					<div class="row bottom-mrg extra-mrg">
						<form class="add-feild" method="post" action="#">

							<h2 class="detail-title">Company Information</h2>
							<?php
	$id = getSession('logid');
       $qury="select * from company_registration where `cid`='$id'";

	    $result=mysqli_query($conn,$qury) or die("error");
	    $row=mysqli_fetch_array($result);

	    
		
						?>
						<div class="col-md-6 col-sm-6">
						<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-flag"></i></span>
						<input type="text" class="form-control" value="<?php echo $row['cname']; ?>" name="cname" id="cname">
						</div>	
						</div>
							
							
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
									<input type="text" class="form-control"value="<?php echo getSession('email'); ?>">
								</div>	
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
									<input type="text" class="form-control"value="<?php echo $row['caddress']; ?>">
								</div>	
							</div>
							<br>
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-globe"></i></span>
									<input type="text" class="form-control" value="<?php echo $row['website']; ?>">
								</div>	
							</div>
							
					
					</div>
					
			
			<br>
			<br>
			<br>
			<br>
			<!-- General Detail Start -->
			<div class="detail-desc section">
				<div class="container white-shadow">
				<h2 class="detail-title">Job Info</h2>
					
					<div class="row bottom-mrg">
						
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Job Title" name="jobtitle" id="jobtitle">
								</div>
							</div>
								<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<?php
                                    $sql = "SELECT * FROM jobtype";
                                    $result = mysqli_query($conn,$sql);
                                    ?>
                                <select name="jobtype" class="form-control right-bor"  id="jobtype">;
               	     
                                 	<?php
                                     while ($row = mysqli_fetch_array($result)) 
       {
         ?>
         <option value="<?php echo $row['jobtype'];?>"><?php echo $row['jobtype'];?></option>
         
         <?php
        }
       echo "</select>";
        ?>
									 </div>
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Salary" name="salary" id="salary">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<?php
                                    $sql = "SELECT * FROM add_district";
                                    $result = mysqli_query($conn,$sql);
                                    ?>
                                <select name="district" class="form-control right-bor" id="district">;
               	                <option value="0">Select District</option>
                                 	<?php
                                     while ($row = mysqli_fetch_array($result)) 
       {
        ?>
        <option value="<?php echo $row['district'];?>"><?php echo $row['district'];?></option>
        <?php
        }
       echo "</select>";
        ?>
									 </div>
							</div>
							
                        <div class="col-md-6 col-sm-6">
						<div class="input-group">
				
						<input type="text" id="company-dob" data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control" readonly="" placeholder="Last date  For Apply" name="ldate" >
								</div>
							</div>
 
 <div class="col-md-6 col-sm-6">
								<div class="input-group">
									<?php
                                    $sql = "SELECT * FROM education";
                                    $result = mysqli_query($conn,$sql);
                                    ?>
                                <select name="Qualification" class="form-control right-bor	"  id="Qualification">;
               	                <option value="0">Qualification</option>
                                 	<?php
                                     while ($row = mysqli_fetch_array($result)) 
       {
        echo "<option value='" . $row['education'] ."'>" . $row['education'] ."</option>";
        }
       echo "</select>";
        ?>
									 </div>
							</div>

							<div class="col-md-12 col-sm-12">
								<textarea class="form-control" placeholder="Job Description" name="jdescription" id="jdescription"></textarea>
							</div>
							
						
					</div>
					
					
					
				</div>
			</div>
			<!-- General Detail End -->
			
			<!-- Basic Full Detail Form Start -->
			
					<div class="row bottom-mrg extra-mrg">
						
					</div>
					
					<div class="row bottom-mrg extra-mrg">
						
							<h2 class="detail-title">Job Requirement</h2>
							<div class="col-md-12 col-sm-12">
								<textarea class="form-control textarea" placeholder="About Company" name="company_info" id="company_info"></textarea>
							</div>	
							<div class="col-md-12 col-sm-12">
								<button type="submit" class="btn btn-success btn-primary small-btn" name="submit">Submit</button>	
							</div>	
						</form>
					</div>
				</div>
			</section>
			<!-- Basic Full Detail Form End -->
			
			<!-- Footer Section Start -->
			
						
				</div>
				</div>
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
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->



		    <!-- Scripts
			================================================== -->
			<script type="text/javascript" src="../assets/plugins/js/jquery.min.js"></script>
			<script type="text/javascript" src="../assets/plugins/js/viewportchecker.js"></script>
			<script type="text/javascript" src="../assets/plugins/js/bootstrap.min.js"></script>
			<script type="text/javascript" src="../assets/plugins/js/bootsnav.js"></script>
			<script type="text/javascript" src="../assets/plugins/js/select2.min.js"></script>
			<script type="text/javascript" src="../assets/plugins/js/wysihtml5-0.3.0.js"></script>
			<script type="text/javascript" src="../assets/plugins/js/bootstrap-wysihtml5.js"></script>
			<script type="text/javascript" src="../assets/plugins/js/datedropper.min.js"></script>
			<script type="text/javascript" src="../assets/plugins/js/dropzone.js"></script>
			<script type="text/javascript" src="../assets/plugins/js/loader.js"></script>
			<script type="text/javascript" src="../assets/plugins/js/owl.carousel.min.js"></script>
			<script type="text/javascript" src="../assets/plugins/js/slick.min.js"></script>
			<script type="text/javascript" src="../assets/plugins/js/gmap3.min.js"></script>
			
			<!-- Date dropper js-->
			<script src="http://themezhub.com/"></script>
			
			<!-- Custom Js -->
			<script src="../assets/js/custom.js"></script>
			
			<script>
				$('#company-dob').dateDropper();
			</script>
			<script src="../assets/js/jQuery.style.switcher.js"></script>
			<script type="text/javascript">
				$(document).ready(function() {
					$('#styleOptions').styleSwitcher();
					$("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});
				});
			</script>
			<script>
				function openRightMenu() {
					document.getElementById("rightMenu").style.display = "block";
				}

				function closeRightMenu() {
					document.getElementById("rightMenu").style.display = "none";
				}

				function toggleSidebar(ref){
  document.getElementById("sidebar").classList.toggle('active');
}
			</script><div id="wrapper">

	</body>

<!-- Mirrored from live.themezhub.com/updated-job-stock-preview/job-stock/create-job.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Oct 2018 18:32:21 GMT -->
</html>