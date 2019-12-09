
<?php
require "../session.php";
require"../connect.php";
if(!getSession('email'))
{
  header("location:index.php");
}
$id = getSession('logid');

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
  font-size:45px;
  font-weight: 20%;
  font-color:black;
  font-family:Times New Roman;
  padding:20px;
  
  
}
@sR: #418a95;
@sRLight: #418a95 + #222;
@sRDark: #418a95 - #222;
@darkGrey:#6b6b6b;
@offWhite:#f6f3f7;
@bg:#f6f3f7 - #111;
@darkBg:#f6f3f7 - #222;

*{  
  margin:0;
  padding:0;
  font-family:Lato;
}

.flatTable{  
  width:100%;
  min-width:500px;
  border-collapse:collapse;  
  font-weight:bold;
  color:@darkGrey;
  
  tr{
    height:50px;
    background:@darkBg;
    border-bottom:rgba(0,0,0,.05) 1px solid;
  }
  
  td{    
    box-sizing:border-box;
    padding-left:30px;
    font-color:whites;
    
  }

.titleTr{
  height:70px;  
  color:white; 
  background:@sR;  
  border:0px solid;
  font-color:white;
}

.plusTd{
    background:url(https://i.imgur.com/3hSkhay.png) center center no-repeat, rgba(0,0,0,.1);
}

.controlTd{  
  position:relative;
  width:80px;
  background:url(https://i.imgur.com/9Q5f6cv.png) center center no-repeat;
  cursor:pointer;
}

.headingTr{
    height:30px;
    background:@sRLight;
    color:@offWhite; 
    font-size:8pt;
    border:0px solid;
    font-color:whites;
}  
}

.button{
  text-align:center;
  cursor:pointer;
}

.sForm{
  position:absolute;
  top:0;
  right:-400px;
  width:400px;
  height:100%; 
  background:@darkBg;  
  overflow:hidden;  
  transition:width 1s, right .3s;
  padding:0px;
  box-sizing:border-box;
  
  .close{
    float:right; 
    height:70px;
    width:80px;
    padding-top:25px;    
    box-sizing:border-box;
    background:rgba(255,0,0,.4);
      
  }
  
  .title{
    width:100%;
    height:70px;
    padding-top:20px;
    padding-left:20px;
    box-sizing:border-box;
    background:rgba(0,0,0,.1);
    color: white;
  }
}
.open{  
  right:0;
  width:400px !important;
}

.settingsIcons{
  position:absolute; 
  top:0;
  right:0;
  width:0;

  overflow:hidden;

}

.display{

  width:300px;
}

.settingsIcon{
  float:right; 
  background:@sR;
  color:@offWhite;
  height:50px;
  width:80px;
  padding-top:15px;
  box-sizing:border-box;
  text-align:center;
  overflow:hidden;
  transition:width 1s;
}

.settingsIcon:hover{
  background:@sRDark;
}

tr:nth-child(3){
   .settingsIcon{
    height:51px;
  }
}

.openIcon{
   width:80px; 
}
</style>

  </head>
  <body style="background-color: #707c88;">
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
                    <a href="#">##</a>
                </li>
                <li>
                    <a href="applied_jobs.php">APPLIED JOBS</a>
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
      <div >  
      </div>
      <form id="form1" name="form1" method="post" action="jobinfo.php?jobid='<?php echo $jobid ?>'" >	
      <center>
      	<h2 class="detail-title1">APPLIED POSTS</h2>
    <table width="100%" style="color: white;">
    <tr class="titleTr">
    <td class="titleTd"></td>
    <td colspan="4"></td>
    <td class="plusTd button"></td>
</tr>
<tr class="headingTr">
    <td>JOB TITLE</td>
    <td>COMAPNY</td>
    <td>LOCATION</td>
    <td>STATUS</td>
  </tr>
  <?php
$id = getSession('logid');
  $qury="select * from applied_job where `uid`='$id'";
  $result=mysqli_query($conn,$qury) or die("error");
  $row=mysqli_fetch_array($result);
  $q=mysqli_query($conn,"select * from create_job where jobid='$row[1]'");
while( $data=mysqli_fetch_array($q))
    {
    ?>
  <tr>
    <td><?php echo$data[1]?></td>
    <td><?php echo$data[10]?></td>
    <td><?php echo$data[4]?></td>
    <td>Applied</td>
    <td class="controlTd">
      <div class="settingsIcons">
        <span class="settingsIcon"><img src="https://i.imgur.com/nnzONel.png" alt="X" /></span>
        <span class="settingsIcon"><img src="https://i.imgur.com/UAdSFIg.png" alt="placeholder icon" /></span>
        <div class="settingsIcon"><img src="https://i.imgur.com/UAdSFIg.png" alt="placeholder icon" /></div>
      </div>  
    </td>
  </tr>
<?php
    }
    ?>

        <br>
        <br>
  
  </form>
        s
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
