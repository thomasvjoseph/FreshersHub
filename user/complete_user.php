<?php
require "../session.php";
require "../connect.php";
if(!getSession('email'))
{
header("location:index.php");
}
$uid=getSession('logid');

   if(isset($_FILES['image']))
   {
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $tmp = explode('.', $file_name);
$file_ext = end($tmp);
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"../uploads/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }

   if ( isset( $_FILES['pdfFile'] ) ) {
  if ($_FILES['pdfFile']['type'] == "application/pdf") {
    $source_file = $_FILES['pdfFile']['tmp_name'];
    $dest_file = "../uploads/".$_FILES['pdfFile']['name'];
$s=$_FILES['pdfFile']['name'];
    if (file_exists($dest_file)) {
      print "The file name already exists!!";
    }
    else {
      move_uploaded_file( $source_file, $dest_file )
      or die ("Error!!");
      if($_FILES['pdfFile']['error'] == 0) {
        print "Pdf file uploaded successfully!";
        print "<b><u>Details : </u></b><br/>";
        print "File Name : ".$_FILES['pdfFile']['name']."<br.>"."<br/>";
        print "File Size : ".$_FILES['pdfFile']['size']." bytes"."<br/>";
        print "File location : ../upload/".$_FILES['pdfFile']['name']."<br/>";
      }
    }
  }
  else {
    if ( $_FILES['pdfFile']['type'] != "application/pdf") {
      print "Error occured while uploading file : ".$_FILES['pdfFile']['name']."<br/>";
      print "Invalid  file extension, should be pdf !!"."<br/>";
      print "Error Code : ".$_FILES['pdfFile']['error']."<br/>";
    }
  }
}
if(isset($_POST['submit']))
{
  echo $q="insert into complete_user (cuid,image,resume) values($uid,'$file_name','$s')";
  mysqli_query($conn,$q);
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
    

<style>

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
  width: 36%;
  height: 48px;
    font-size: 25px;
    background: #1b0000;
    padding: 8px 20px;
    margin-bottom: 20px;
    line-height: 1.6;
    border-radius: 2px;
    color: #f5f5f5;
    border-left: 3px solid #11b719;
}

.wrapper{
  min-height: 100vh;
}


table, th, td
{	
	border:1;
}

th, td
{ font-size:18px;
text-align:left;
padding: 10px;
padding-right: 135px;
background: #fff;
border-bottom: 1px solid #000
}

table tr{
	padding-bottom: 5px;
}

#t01
{   with:300px;
	border:1;
	background-color=:white;
}

#secondaryForm{
	background: #fff;
	color: #000;
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
                    <a href="#">##</a>
                </li>
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
      
      <center>
      	<h2 class="detail-title1">COMPLETE USER</h2>

        <br>
        <br>
      <table id="t01" >
	
	<?php
	$id = getSession('logid');
  $qury="select * from user_registration where `uid`='$id'";

	$result=mysqli_query($conn,$qury) or die("error");
	   
		$row=mysqli_fetch_assoc($result);
		$q=mysqli_query($conn,"select * from education where eid='".$row['education']."'");
		$data=mysqli_fetch_assoc($q);

		echo '<tr><th>Name</th><td>'.$row['fname'].' '.$row['lname'].'</td></tr>';
		echo '<tr><th>Name</th><td>'.$data['education'].'</td></tr>';

		?>
                 	               
</table>
</center>
<br>
 <br style="font-color:black;"><a href=".php">More Info..</a>
	 <form id="form1" name="form1" method="post" action="#"  enctype = "multipart/form-data">
     
            <div class="col-md-offset-4 col-md-4 col-sm-10 text-center">
            <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
           	<input type="file" class="form-control" id="image" name="image"  accept="image/*" placeholder="Upload Image" required>
           </div>
        </div>
        <br>
            <div class="col-md-offset-4 col-md-4 col-sm-10 text-center">
            <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
            <input type="file" class="form-control" id="image" name="pdfFile"  accept="application/pdf" placeholder="Upload Image" required>
        </div>       
          </div>
              <div class="col-md-12 col-sm-12 text-center ">
              <button class="btn btn-success btn-primary small-btn"  name="submit" type="submit">Submit</button>  
              </div>  
</div>
</form>


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