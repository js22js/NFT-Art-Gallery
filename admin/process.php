<?php
ob_start();
session_start();
include_once "../db/db.php";
 switch($_REQUEST['submit']){
 


case "empSubmit":


$useradd = "INSERT INTO `employee` (`emp_name` ,
								`emp_code` ,
								`emp_desc` ,
								`emp_address` ,
								`emp_phone` ,
								`emp_email` ,
								`user_name` ,
								`user_pwd`)
						VALUES ('".($_POST['emp_name'])."',
								'".($_POST['emp_code'])."',
								'".($_POST['emp_desc'])."',
								'".($_POST['emp_address'])."',
								'".($_POST['emp_phone'])."',
								'".($_POST['emp_email'])."',
								'".($_POST['emp_uname'])."',
								'".($_POST['emp_pwd'])."')";

//echo $useradd;
//exit;
	mysql_query($useradd);
echo "<meta http-equiv='refresh' content='0;url=employee.php'>";

case "empUpdate":


$useradd = "UPDATE `employee` SET `emp_name` ='".($_POST['emp_name'])."',
								`emp_code` ='".($_POST['emp_code'])."',
								`emp_desc` ='".($_POST['emp_desc'])."',
								`emp_address` ='".($_POST['emp_address'])."',
								`emp_phone` ='".($_POST['emp_phone'])."',
								`emp_email` ='".($_POST['emp_email'])."',
								`user_name` ='".($_POST['emp_uname'])."',
								`user_pwd`='".($_POST['emp_pwd'])."' 
							where emp_id= '".$_REQUEST['id']."'";

//echo $useradd;
//exit;
	mysql_query($useradd);
echo "<meta http-equiv='refresh' content='0;url=../index.php'>";
break;
case "compUpdate":


$useradd = "UPDATE `complaint` SET `comp_status` ='".($_POST['comp_status'])."',`comp_action` ='".($_POST['comp_action'])."'
							where comp_id= '".$_REQUEST['comp_id']."'";

//echo $useradd;
//exit;
	mysql_query($useradd);
echo "<meta http-equiv='refresh' content='0;url=complaint.php'>";
break;
}
?>