<?php
ob_start();
session_start();
include_once "../db/db.php";
 switch($_REQUEST['submit']){
 

case "regSubmit":

$useradd = "INSERT INTO `customer` (`cust_name` ,
								`cust_id` ,
								`user_name` ,
								`user_pwd` ,
							    `cust_age` ,
								`cust_gender` ,
								`cust_phone` ,
								`cust_address` ,
								`cust_email`)
						VALUES ('".$_POST['cust_name']."',
								'".$_POST['cust_id']."',
								'".$_POST['cust_uname']."',
								'".$_POST['cust_pwd']."',
								'".$_POST['cust_age']."',
								'".$_POST['cust_gender']."',
								'".$_POST['cust_phone']."',
								'".$_POST['cust_address']."',
								'".$_POST['cust_email']."')";

//echo $useradd;
//exit;
	mysql_query($useradd);
echo "<meta http-equiv='refresh' content='0;url=index.php'>";
break;




case "billSubmit":

	$product=0;
		$sqlup="Select * from ".$_SESSION['user_name']."_product GROUP BY prod_id";
		$we=mysql_query($sqlup);
		while($row=mysql_fetch_object($we))
{
$product=$product.','.$row->prod_id.'='.$row->prod_qty;
$sqlups="Select * from product where prod_id='".$row->prod_id."'";
//echo $sqlups;
//exit;
		$wes=mysql_query($sqlups);
		$rows=mysql_fetch_object($wes);
		$count=$rows->prod_qty - $row->prod_qty;
$qty="UPDATE `product` SET `prod_qty` = '".$count."' WHERE `prod_id` ='".$row->prod_id."'"; 
mysql_query($qty);
}
if($_POST['bill_type']=='Cash On Delivery')
{
$useradd = "INSERT INTO `bill` (`bill_name` ,
								`bill_id` , 
								`bill_amt` ,
								`bill_type`,
								`bill_mode` ,
								`bill_card` ,
							    `bill_address`,
								`bill_date`,
								`bill_prod`,
								`bill_shipping`)
						VALUES ('".$_POST['bill_name']."',
								'".$_POST['bill_id']."',
								'".$_POST['bill_amt']."',
								'".$_POST['bill_type']."',
								'-',
								'-',
								'".$_POST['bill_address']."',
								'".date('d/m/Y')."',
								'".$product."',
								'".$_POST['bill_shipping']."')";
}else
{
$useradd = "INSERT INTO `bill` (`bill_name` ,
								`bill_id` , 
								`bill_amt` ,
								`bill_type`,
								`bill_mode` ,
								`bill_card` ,
							    `bill_address`,
								`bill_date`,
								`bill_prod`,
								`bill_shipping`)
						VALUES ('".$_POST['bill_name']."',
								'".$_POST['bill_id']."',
								'".$_POST['bill_amt']."',
								'".$_POST['bill_type']."',
								'".$_POST['bill_mode']."',
								'".$_POST['bill_card']."',
								'".$_POST['bill_address']."',
								'".date('d/m/Y')."',
								'".$product."',
								'".$_POST['bill_shipping']."')";

}
mysql_query($useradd);
$empty="TRUNCATE TABLE ".$_SESSION['user_name']."_product ";
mysql_query($empty);
	
echo "<meta http-equiv='refresh' content='0;url=thank.php'>";
break;


case "postSubmit":

$useradd = "INSERT INTO `postal` (`post_name` ,
								`post_id` ,
								`post_no` ,
								`post_size` ,
							    `post_address` ,
								`post_desc` ,
								`post_code`,
								`post_date`,
								`post_to`,
								`post_wt`)
						VALUES ('".$_POST['post_name']."',
								'".$_POST['post_id']."',
								'".$_POST['post_no']."',
								'".$_POST['post_size']."',
								'".$_POST['post_address']."',
								'".$_POST['post_desc']."',
								'".$_POST['post_code']."',
								'".date('d/m/Y')."',
								'".$_POST['post_to']."',
								'".$_POST['post_wt']."')";

//echo $useradd;
//exit;
	mysql_query($useradd);
echo "<meta http-equiv='refresh' content='0;url=trackid.php?t_id=".$_POST['post_code']."'>";
break;

case "compSubmit":

$useradd = "INSERT INTO `complaint` (`comp_comp` ,
								     `comp_by` ,
									 `comp_type` ,
								     `comp_status`,
								     `comp_date` )
						VALUES ('".$_POST['comp_comp']."',
								'".$_POST['comp_by']."',
								'".$_POST['comp_type']."',
								'Not Solved',
								'".date('d/m/Y')."')";

//echo $useradd;
///exit;
	mysql_query($useradd);
echo "<meta http-equiv='refresh' content='0;url=comp.php'>";
break;

case "Change Password":

if($_POST['old_pass'] == '')
{
echo "<script type='text/javascript'>alert('Enter The Old Password');</script>";
echo "<meta http-equiv='refresh' content='0;url=profile.php'>";
}
elseif($_POST['new_pass'] == '')
{
echo "<script type='text/javascript'>alert('Enter The New Password');</script>";
echo "<meta http-equiv='refresh' content='0;url=profile.php'>";
}
else
{
$sel="select * from customer where user_pwd='".$_POST['old_pass']."' and id='".$_POST['cust_id']."'";
$from=mysql_query($sel);
$emp=mysql_fetch_row($from);
if($emp > 0)
{
$useradd = "UPDATE `customer` SET `user_pwd` ='".($_POST['new_pass'])."'
						     where user_pwd='".($_POST['old_pass'])."' and id='".$_POST['cust_id']."'";
	mysql_query($useradd);
echo "<script type='text/javascript'>alert('Password Changed Successfully');</script>";
echo "<meta http-equiv='refresh' content='0;url=profile.php'>";
}else
{
echo "<script type='text/javascript'>alert('Invalid Old Password');</script>";
echo "<meta http-equiv='refresh' content='0;url=profile.php'>";
}

}

break;



case "Change Address":

if($_POST['cust_address'] == '')
{
echo "<script type='text/javascript'>alert('Enter The Address');</script>";
echo "<meta http-equiv='refresh' content='0;url=profile.php'>";
}
else
{
$useradd = "UPDATE `customer` SET `cust_address` ='".($_POST['cust_address'])."'
						     where  id='".$_POST['cust_id']."'";
mysql_query($useradd);
echo "<script type='text/javascript'>alert('Address Changed Successfully');</script>";
echo "<meta http-equiv='refresh' content='0;url=profile.php'>";
}


break;
}
?>