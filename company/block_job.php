<?php
require"../connect.php";

  if($_GET['id'])
    {
    $id=$_GET['id'];
    $sql="UPDATE create_job set status=0  where jobid='$id'"; 
    mysqli_query($conn,$sql) or die(mysqli_error());
    echo "<script>alert(' Success')</script>";
    echo "<script>window.location.href='block_job.php'</script>";
    }        
?>