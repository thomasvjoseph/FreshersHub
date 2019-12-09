<?php
require "../session.php";
require"../connect.php";
if(!getSession('email'))
{
  header("location:index.php");
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
    font-size: 25px;
    background: #f5f6f7;
    padding: 8px 20px;
    margin-bottom: 20px;
    line-height: 1.6;
    border-radius: 2px;
    color: #5a1212;
    border-left: 3px solid #11b719;
}

.wrapper{
  min-height: 100vh;
}
 #id
{
  font-size:25px;
  font-weight: 20
  color:blue;
  font-family:Times New Roman;
  padding:20px;
  
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
                    <a href="user_home.php">HOME</a>
                </li>
                <li>
                    <a href="complete_user.php">Complete Profile</a>
                </li>
                <li>
                    <a href="apllied_jobs.php">APPLIED JOBS</a>
                </li>s
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="user/change_passwoed.php">CHANGE PASSWORD</a>
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
     
      <div class="clearfix">
        
      </div>
      <div class="banner" style="background-image:url(../assets/img/banner-9.jpg);">  
       
				<div class="container">
					<div class="banner-caption">
						<div class="col-md-12 col-sm-12 banner-text">
							<h1>7,000+ Browse Jobs</h1>
							<form class="form-horizontal" action="#" method="post">
								<div class="col-md-4 no-padd">
									 <div class="input-group">
										<input type="text" class="form-control right-bor" placeholder="Skills, Designations, Companies" name="text"  id="text">
									 </div>
								</div>
								<div class="col-md-3 no-padd">
								<div class="input-group">
									<?php
                                  $sql = "SELECT * FROM jobtype";
                                  $result = mysqli_query($conn,$sql);
                                  ?>
                                <select name="jobtype" class="form-control right-bor	"  id="jobtype">;
               	                <option value="0">Select JobType</option>
                                <?php
                                while ($row = mysqli_fetch_array($result)) 
                               {
                                  echo "<option value='" . $row['jobtype'] ."'>" . $row['jobtype'] ."</option>";
                                }
                                echo "</select>";
                                ?>
							    </div>
								</div>
								
								<div class="col-md-3 no-padd">
								<div class="input-group">
								<?php
                                $sql = "SELECT * FROM add_district";
                                $result = mysqli_query($conn,$sql);
                                ?>
                                <select name="district" class="form-control right-bor	"  id="choose-city">;
               	                <option value="0" selected="selected">Select District</option>
                                <?php
                                while ($row = mysqli_fetch_array($result)) 
                                {
                                echo "<option value='" . $row['district'] ."'>" . $row['district'] ."</option>";
                                }
                                echo "</select>";
                                ?>
							    </div>
								</div>
								
								
								<div class="col-md-2 no-padd">
									<div class="input-group">
										<button type="submit" class="btn btn-primary" name="submit">Search Job</button>
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
								<img src="../assets/img/microsoft-home.png" class="img-responsive" alt="" />
							</div>
							<div class="brand-img">
								<img src="../assets/img/img-home.png" class="img-responsive" alt="" />
							</div>
							<div class="brand-img">
								<img src="../assets/img/mothercare-home.png" class="img-responsive" alt="" />
							</div>
							<div class="brand-img">
								<img src="../assets/img/paypal-home.png" class="img-responsive" alt="" />
							</div>
							<div class="brand-img">
								<img src="../assets/img/serv-home.png" class="img-responsive" alt="" />
							</div>
							<div class="brand-img">
								<img src="../assets/img/xerox-home.png" class="img-responsive" alt="" />
							</div>
							<div class="brand-img">
								<img src="../assets/img/yahoo-home.png" class="img-responsive" alt="" />
							</div>
							<div class="brand-img">
								<img src="../assets/img/mothercare-home.png" class="img-responsive" alt="" />
							</div>
						</div>
					</div>
				</div>
				
			</div>
			<div class="clearfix"></div>
			<!-- Main Banner Section End -->
			
			<!-- Job List-->
			<section>
				<div class="container">
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Latest Job End-->
			
			<!-- video section Start -->
			
			<div class="clearfix"></div>
			<!-- video section Start -->

			<!-- ====================== How It Work ================= -->
			<section class="how-it-works">
				<div class="container">
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
  <br id="id"><a href="jobinfo.php?jobid=<?php echo $row['jobid'];?>">More Info..</a>
   </div>

   
  <!-- <tr><td><?php echo $row[10];?></td>
    
    
    <td><a href='jobinfo.php?jobid="<?php echo $row[0]?>"'>More Info..</a></td>
  </tr> -->


  <?php
  }
}
?>


					<div class="row" data-aos="fade-up">
						<div class="col-md-12">
							<div class="main-heading">
                <br>
                <br>
                <br>
								<p>Working Process</p>
								<h2>How It <span>Works</span></h2>
							</div>
						</div>
					</div>
					
					<div class="row">
					
						<div class="col-md-4 col-sm-4">
							<div class="working-process">
								<span class="process-img">
									<img src="../assets/img/step-1.png" class="img-responsive" alt="" />
									<span class="process-num">01</span>
								</span>
								<h4>Create An Account</h4>
								<p>Post a job to tell us about your project. We'll quickly match you with the right freelancers find place best.</p>
							</div>
						</div>
						
						<div class="col-md-4 col-sm-4">
							<div class="working-process">
								<span class="process-img">
									<img src="../assets/img/step-2.png" class="img-responsive" alt="" />
									<span class="process-num">02</span>
								</span>
								<h4>Search Jobs</h4>
								<p>Post a job to tell us about your project. We'll quickly match you with the right freelancers find place best.</p>
							</div>
						</div>
						
						<div class="col-md-4 col-sm-4">
							<div class="working-process">
								<span class="process-img">
									<img src="../assets/img/step-3.png" class="img-responsive" alt="" />
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
     </script>
 </div id="wrapper">
  </body>
</html>