<?php
ob_start();        // output buffer start
session_start();  //session start

date_default_timezone_set('Asia/Kolkata');

//$con = mysqli_connect("localhost", "cas", "try", "complainbox");
$con = mysqli_connect("localhost", "root", "", "kalpataru");

if (mysqli_connect_errno()) {
    echo "failed to connect" . mysqli_connect_errno;
}
?>
