<?php
    require "connect.php";
    require "../session.php";

    if(isset($_POST["submit"]))
    {
       $fname=$_POST['fname'];
       $lname=$_POST['lname'];
       $education=$_POST['education'];
       $phone=$_POST['phone'];
       $email=$_POST['email_check'];
       $password=$_POST['password'];

      $qury="INSERT INTO user_registration(fname,lname,phoneno,education) VALUES('$fname','$lname','$phone','$education')";
        $obj=mysqli_query($conn,$qury) or die("erorr1");
   $id=mysqli_insert_id($conn);

    //email validation 25-09-21018

    if (isset($_POST['email_check'])) {
  	$email = $_POST['email_check'];
  	$sql = "SELECT * FROM login WHERE email='$email'";
  	$results = mysqli_query($conn, $sql);
  	if (mysqli_num_rows($results) > 0) 
  	{
  		?>
  		<script>
  		alert("Already exists,go Login");
  		document.location='../Login/login.php';
  		</script>
  	<?php
  	}

  	else{

  	  if (isset($_POST['submit'])) {
  	$email = $_POST['email_check'];
  	$password = $_POST['password'];
  	$sql = "SELECT * FROM login WHERE email='$email'";
  	$results = mysqli_query($conn, $sql);
  	if (mysqli_num_rows($results) > 0) {
  	  echo "exists";	
  	  exit();
  	}else{
  		$password = md5($password);
  	echo  $qury1 = "INSERT INTO login (logid, email, password,designation,status) 
  	       	VALUES ($id, '$email', '$password','user',0)";
  	  $obj1 = mysqli_query($conn, $qury1);
  	  
      if($obj && $obj1 )
    {
    	setSession('email',$email);
    	setSession('designation','user');
      header('location:../user/user_home.php');
    }
    else
      mysqli_error($conn);
    }
  	  exit();
  	}
  }
  	  
  	}
  	exit();
  }
   
    //echo    $qury1="INSERT INTO login(logid,email,password,designation,status)VALUES('$id ','$email','$password','user',0)";

       
       
  ?>
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>user registraton</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Validator Signup Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>

	<!-- Meta tag Keywords -->
	<!-- css file -->
	<link rel="stylesheet" href="css_reg/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<!-- //css file -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Cuprum:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //web-fonts -->
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
						<a class="navbar-brand" href="index.php">
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
                <a href="company_reg.php">Company Registration</a>
                <a href="#">User Registration</a>
      
            </div>
            </div> 
			</ul>
		</nav>
	<h1>
		<span>C</span>andidate
		<span>R</span>egistration
		
	</h1>
	<!-- //title -->
	<!-- content -->
	<div class="sub-main-w3">
		<form validate="true" action="#" method="post" onsubmit='return formValidation()'><br><p id="head"></p><br>
			<div class="form-group">
				<label for="exampleInputText">First Name</label>
				<input type="text" class="form-control"  name="fname" id="fname" placeholder="Enter Name" required>
				<p id="p1"></p>	<!--This segment displays the validation rule for name-->
			</div>
			<div class="form-group">
				<label for="exampleInputText">Last Name</label>
				<input type="text" class="form-control" name="lname" id="exampleInputText" placeholder="Enter Name">

			</div>
			<div class="form-group">
				<label for="exampleConfirmPassword1">Highest Qualification</label>
				
				<?php
                $sql = "SELECT * FROM education";
                $result = mysqli_query($conn,$sql);

               ?>
               <select name="education" class="form-control">
               	<p id="p4"></p> <!--This segment displays the validation rule for selection--> ;
               	<option value="0">Select Course</option>
               	 <?php
       while ($row = mysqli_fetch_array($result)) 
       {
        echo "<option value='" . $row['education'] ."'>" . $row['education'] ."</option>";
        }
       echo "</select>";
        ?>
			</div>
			<div class="form-group">
				<label for="exampleMobile1">Mobile Number</label>
				<input type="mobile" class="form-control" name="phone" id="exampleMobile1" placeholder="Mobile number">
				<p id="p6"></p> <!--This segment displays the validation rule for zip--> 

			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" name="email_check" id="email" aria-describedby="emailHelp" placeholder="Enter email">
				<p id="p3"></p> <!--This segment displays the validation rule for email-->
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input maxlength="10" minlength="3" type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" >
			</div>
			<div class="form-group">
				<label for="exampleConfirmPassword1">Confirm Password</label>
				<input type="password" class="form-control" id="exampleConfirmPassword1" name="name" placeholder="Confirm Password" required data-match="password"
				    data-match-field="#exampleInputPassword1">
			</div>
			<div class="form-group">
				<label class="checkbox-inline">
					<input type="checkbox" value="true" required>I agree to the terms and conditions
				</label>
			</div>
			
			<button type="submit" name="submit" class="btn btn-primary" id="reg_btn">Submit</button>
		
		</form>
	</div>
	<!-- //content -->

	<!-- copyright -->
	<div class="footer">
		<p>&copy; 2018 All rights reserved | Design by CalypZo
			
		</p>
	</div>
	<!-- //copyright -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Jquery -->
	<script src="js_reg/jquery-2.2.3.min.js"></script>
	<!-- //Jquery -->
	<!-- Jquery -->
	<script src="js_reg/jquery-simple-validator.min.js"></script>
	<!-- //Jquery -->
	<script src="js_reg/register.js"></script>
	<script src="js_reg/formvalidate.js"></script>

	<script type="text/javascript">
		function valid_name() {
			document.getElementById('')
		}
	</script>

</body>

</html>