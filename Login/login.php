<?php
require"../session.php";
require "connect.php";
if(isset($_POST["submit"]))
{
$username=$_POST['email'];
// $password=$_POST['password'];
// $password = md5($password);
$password=md5($_POST['password']);
$sql="select * from login where email='$username' and  Password='$password' and status=0";
   $res=mysqli_query($conn,$sql) or die("eror");

   if(mysqli_num_rows($res)==0)
   {
   	?>
   	<script type="text/javascript">
   		alert("Please SignUp.....");
   		document.location='#';
   	</script>
   	<?php
   }  
   else
   {
    $fetch=mysqli_fetch_assoc($res);
   
    setSession('email', $username);
    setSession('designation',$fetch['designation']);

    if($fetch['designation']=='admin')
       {
       $_SESSION["logid"]=$fetch['logid'];	
        header("location:../admin/admin_home.php");	
        }
     if($fetch['designation']=='company') 
       {
       $_SESSION["logid"] =$fetch['logid'];	
        header("location:../company/company_home.php");	
	   }  
     if($fetch['designation']=='user') 
       {
       $_SESSION["logid"] =$fetch['logid']; 

        header("location:../user/user_home.php"); 
     }  
   
   }	 
}
?>
<!DOCTYPE HTML>

<head>
	<title>Login</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/fontawesome-all.css">
		<!-- //web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Nova+Round" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<style>
	nav{
		width: 100%;
		height: 60px;
		background: rgba(0, 0, 0, 0.2588);
		position: sticky;
		top: 0;
	}

	nav ul li{
		color:rgba(255, 255, 255, 0.42);;
		float: right;
		width: 100px;
		padding: 15px 10px;
	}

	nav .navbar-header{
		display: inline-block;
   	 	width: 200px;
    	left: 10px;
    	top: 10px;
    	position: absolute;
    }



	.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}


	.dropdown {
    float: right;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

/*.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}*/

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}

</style>
</head>

<body>
	<!-- title -->
	<div class="collapse navbar-collapse" id="navbar-menu">
		<nav>
			<div class="navbar-header">
						<a class="navbar-brand" href="..`/index.php">
							<img src="../assets/img/logo-white.png" class="logo logo-display" alt="">
							
						</a>
					</div>
			<ul>
				<li class="dropbtn">
					<a href="../index.php">Home</a></li>			
				<li class="dropbtn"><a href="../Login/login.php">Sign Up</a></li>
			<div class="dropdown">
                <button class="dropbtn">Sign In 
                <i class="fa fa-caret-down"></i>
                </button>
            <div class="dropdown-content">
                <a href="../register/company_reg.php">Company Registration</a>
                <a href="../register/user_register.php">User Registration</a>
      
            </div>
            </div> 
			</ul>
		</nav>
								
	<h1>
		<span>L</span>ogin
	</h1>
	<!-- //title -->
	<!-- content -->
	<div class="sub-main-w3">
		<form   action="#" method="post">
			<h2>Login Your Account</h2>
			<div class="form-group">
				<input type="email" class="form-control textbox" name="email" placeholder="E-mail" required="">
			</div>
			<div class="form-group">
				<input type="password" class="form-control textbox" name="password" placeholder="Password" required="">
			</div>
			<div class="form-group-2">
				<button class="btn btn-default btn-osx btn-lg"  type="submit" name="submit">
					<i class="fas fa-long-arrow-alt-right"></i>
				</button>
			</div>
			<!-- <div class="alert alert-success hidden" role="alert">You Have Successfully Logged In</div> -->
		</form>
		<!-- //switch -->
	</div>
	<!-- //content -->

	<!-- copyright -->
	<div class="footer">
		<p>&copy; 2018 .All rights reserved | Design by
			<a href="http://w3layouts.com">calYpZo</a>
		</p>
	</div>
	<!-- //copyright -->

	<!-- Jquery -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //Jquery -->
	<!-- validify plugin -->
	<script src="js/validify.js"></script>
	<script>
		$("#demo").validify({
			onSubmit: function (e, $this) {
				$this.find('.alert').removeClass('hidden')
			},
			onFormSuccess: function (form) {
				console.log("Form is valid now!")
			},
			onFormFail: function (form) {
				console.log("Form is not valid :(")
			}
		});
		$("#demo").validify({
			errorStyle: "validifyError",
			successStyle: "validifySuccess",
			emailFieldName: "email",
			emailCheck: true,
			requiredAttr: "required",
		});
	</script>
	<!-- //validify plugin -->

</body>

</html>