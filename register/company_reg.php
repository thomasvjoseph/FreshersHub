<?php
    require "connect.php";
    require "../session.php";
    if(isset($_POST["submit"]))
    {
       $cname=$_POST['cname'];
       $regno=$_POST['regno'];
       $caddress=$_POST['caddress'];
       $district=$_POST['district'];
       $website=$_POST['website'];
       $phone=$_POST['phone'];
       $email=$_POST['email_check'];
       $password=$_POST['password'];

       $targetDir="uploads/";
       $fileName=basename($_FILES["image"]["name"]);
       $targetFilePath=$targetDir.$fileName;
       move_uploaded_file($_FILES["file"]["tmp_name"],$targetFilePath);

       $qury="INSERT INTO company_registration(cname,ragno,caddress,website,phone,icon,did) VALUES('$cname','$regno','$caddress','$website','$phone','$fileName','$district')";
        $obj=mysqli_query($conn,$qury) or die("erorr1");
        $id=mysqli_insert_id($conn);

        if (isset($_POST['email_check'])) {
  	    $email = $_POST['email_check'];
  	    $sql = "SELECT * FROM login WHERE email='$email'";
  	    $results = mysqli_query($conn, $sql);
  	if (mysqli_num_rows($results) > 0) 
  	{
  	?>
  	<script>
  	 alert('Already exists,go LOGIN');
  	 document.location='../index.php';
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
  	echo $qury1 = "INSERT INTO login (logid, email, password,designation,status) 
  	       	VALUES ($id,'$email','$password','company',0)";
  	    $obj1 = mysqli_query($conn, $qury1);
  	  
      if($obj && $obj1 )
    {
      setSession('email',$email);
    	setSession('designation','user');
      header('location:../company/company_home.php');
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
   
      
  ?>
    
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>company registration</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Validator Signup Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
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
						<a class="navbar-brand" href="index.html">
							<img src="../assets/img/logo-white.png" class="logo logo-display" alt="">
							
						</a>
					</div>
			<ul>
				<li class="dropbtn">Home</li>
				<li class="dropbtn">Sign Up</li>
			<div class="dropdown">
                <button class="dropbtn">Sign In 
                <i class="fa fa-caret-down"></i>
                </button>
            <div class="dropdown-content">
                <a href="#">Company Registration</a>
                <a href="user_register.php">User Registration</a>
      
            </div>
            </div> 
			</ul>
		</nav>
		</nav>
	<h1>
		<span>C</span>ompany
		<span>R</span>egistration
		
	</h1>
	<!-- //title -->
	<!-- content -->
	<div class="sub-main-w3">
		<form validate="true" action="#" method="post" enctype="multipart/form-data" onSubmit="return Validate()"; >
			<div class="form-group">
				<label for="exampleInputText">Company Name</label>
				<input type="text" class="form-control" name="cname" id="exampleInputText" placeholder="Enter Name" required>
			</div>
			<div class="form-group">
				<label for="exampleConfirmPassword1">Register Number</label>
				<input type="text" class="form-control" id="exampleConfirmPassword1" name="regno" placeholder="Register number" >
			</div>
			<div class="form-group">
				<label for="exampleConfirmPassword1">Company Address</label>
				<input type="text" class="form-control" id="exampleConfirmPassword1" name="caddress" placeholder="comapny address" ">
			</div>

			<div class="form-group">
				<label for="exampleConfirmPassword1">District</label>
				
				<?php
                $sql = "SELECT * FROM add_district";
                $result = mysqli_query($conn,$sql);

               ?>
               <select name="district" class="select">;
               	<option value="0">Select District</option>
               	<?php
       while ($row = mysqli_fetch_array($result)) 
       {
        echo "<option value='" . $row['did'] ."'>" . $row['district'] ."</option>";
        }
       echo "</select>";
        ?>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Website</label>
				<input type="url" class="form-control" name="website" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter website url">
			</div>

            <div class="form-group">
				<label for="exampleInputEmail1">Company Icon</label>
				<input type="file" class="form-control" name="image" id="file" accept="image/*" placeholder="Upload Company Icon" required>
			</div>

			<div class="form-group">
				<label for="exampleMobile1">Mobile Number</label>
				<input type="mobile" class="form-control" name="phone" id="exampleMobile1" placeholder="Mobile number">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" name="email_check" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input maxlength="10" minlength="3" type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
				    required>
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
			<div>
			<a href="login.php">
			<button type="submit" name="submit" class="btn btn-primary" id="reg_btn">Submit</button>
		
		    </a>
	        </div>
			
		</form>
	</div>
	<!-- //content -->

	<!-- copyright -->
	<div class="footer">
		<p>&copy; 2018 Validator Signup Form. All rights reserved | Design by
		<a href="http://w3layouts.com">W3layouts</a>
		</p>
	</div>
	<!-- //copyright -->

	<!-- Jquery -->
	<script src="js_reg/jquery-2.2.3.min.js"></script>
	<!-- //Jquery -->
	<!-- Jquery -->
	<script src="js_reg/jquery-simple-validator.min.js"></script>
	<!-- //Jquery -->
    <script src="js_reg/register.js"></script>

</body>

   

   Image size validation @ 19-10-2018


<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> -->
<script type="text/javascript">
function Validate()
{
     var image =document.getElementById("file").value;
     if(image!='')
     {
           var checkimg = image.toLowerCase();
          if (!checkimg.match(/(\.jpg|\.png|\.JPG|\.PNG|\.jpeg|\.JPEG|\.mp4|\.MP4|\.flv|\.FLV|\.mkv|\.MKV)$/)){ // validation of file extension using regular expression before file upload
              document.getElementById("image").focus();
              document.getElementById("errorName5").innerHTML="Wrong file selected"; 
              return false;
           }
            var img = document.getElementById("file"); 
            alert(img.files[0].size);
            if(img.files[0].size <  1048576)  // validation according to file size
            {
            document.getElementById("errorName5").innerHTML="Image size too short";
            return false;
             }
             return true;
      }
}
</script>

</html>