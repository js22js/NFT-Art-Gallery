<?php
ob_start();
session_start();
include_once "../db/db.php";
 switch($_REQUEST['submit']){
 



case "prodSubmit":

$photo=$_FILES['prod_image']['name'];

$useradd = "INSERT INTO `product` (`prod_name` ,
								   `prod_code` ,
								   `prod_qty` ,
								   `prod_rate` ,
								   `prod_image`,
								   `prod_status` )
						VALUES ('".($_POST['prod_name'])."',
								'".($_POST['prod_code'])."',
								'".($_POST['prod_qty'])."',
								'".($_POST['prod_rate'])."',
								'".$photo."',
								'OFF')";

//echo $useradd;
//exit;
	mysql_query($useradd);
	
$path = "../products/$photo";
$file_tmp_name=$_FILES['prod_image']['tmp_name'];
if(move_uploaded_file($file_tmp_name, $path)||($query))
    {
		$msg="File Uploaded Successfully";

    }    
	
echo "<meta http-equiv='refresh' content='0;url=stock.php'>";
break;

case "prodUpdate":


$useradd = "UPDATE `product` SET `prod_name` ='".($_POST['prod_name'])."',
								`prod_code` ='".($_POST['prod_code'])."',
								`prod_qty` ='".($_POST['prod_qty'])."',
								`prod_rate` ='".($_POST['prod_rate'])."',
								`prod_status` ='OFF'
						   where prod_id= '".$_REQUEST['id']."'";

//echo $useradd;
//exit;
	mysql_query($useradd);
echo "<meta http-equiv='refresh' content='0;url=stock.php'>";
break;


case "assignSubmit":


$useradd = "UPDATE `postal` SET `post_job_from` ='".($_POST['emp_id'])."',
								`post_job_to` ='".($_POST['assign_to'])."',
								`post_status` ='".($_POST['assign_status'])."'
						   where id= '".$_REQUEST['id']."'";

//echo $useradd;
//exit;
	mysql_query($useradd);
echo "<meta http-equiv='refresh' content='0;url=job.php'>";
break;


case "compUpdate":


$useradd = "UPDATE `complaint` SET `comp_status` ='".($_POST['comp_status'])."',`comp_action` ='".($_POST['comp_action'])."'
							where comp_id= '".$_REQUEST['comp_id']."'";

//echo $useradd;
//exit;
	mysql_query($useradd);
echo "<meta http-equiv='refresh' content='0;url=complaint.php'>";
break;

case "passUpdate":
$sel="select * from employee where user_pwd='".($_POST['old_pass'])."' and emp_id='".($_POST['emp_id'])."'";
$from=mysql_query($sel);
$emp=mysql_fetch_row($from);
if($emp > 0)
{
$useradd = "UPDATE `employee` SET `user_pwd` ='".($_POST['new_pass'])."'
						     where user_pwd='".($_POST['old_pass'])."' and emp_id='".($_POST['emp_id'])."'";
	mysql_query($useradd);
echo "<script type='text/javascript'>alert('Password Changed Successfully');</script>";
echo "<meta http-equiv='refresh' content='0;url=pass.php'>";
}else
{
echo "<script type='text/javascript'>alert('Invalid Old Password');</script>";
echo "<meta http-equiv='refresh' content='0;url=pass.php'>";
}
//echo $useradd;
//exit;

break;

}
?>