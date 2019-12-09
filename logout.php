<?php
require "session.php";

delSession('email');
delSession('designation');

session_destroy();
header('location:index.php');

?>