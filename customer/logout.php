<?php
error_reporting(0);
session_start();
include_once "../db/db.php"; 
$drop = "DROP TABLE ".$_SESSION['user_name']."_product";
mysql_query($drop);
session_destroy();
echo "<meta http-equiv='refresh' content='0;url=../index.php'>";
?>