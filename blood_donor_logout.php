<?php
session_start();
//session_destroy();
unset($_SESSION['bd_email']);
header("location: blood_donor_login.php");
?>