<?php
require"../connect.php";
  if($_GET['id'])
    {
    echo $id=$_GET['id'];
   echo  $sql="UPDATE login set status=1  where logid=$id"; 
    mysqli_query($conn,$sql) or die(mysqli_error());
    echo "<script>alert(' Success')</script>";
    echo "<script>window.location.href='manage_user.php'</script>";
    }
        
?>
      