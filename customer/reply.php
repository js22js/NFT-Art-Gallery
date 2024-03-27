<?php
error_reporting(0);
ob_start(); 
session_start();
include_once "../db/db.php"; 
$sql="select * from customer where user_name='".$_SESSION['user_name']."'";
$sqls=mysql_query($sql);
$rees=mysql_fetch_object($sqls);

?>


<html>
<head><title>NFT- Customer</title>
</head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../menu.css" />
<link rel="stylesheet" type="text/css" href="../style.css" />
<script type="text/javascript" src="../jquery.js"></script>
<script type="text/javascript" src="../menu.js"></script>
<body>
<div id="total">
<form id="form1" name="form1" method="post" onSubmit="return valid()" action="#" enctype="multipart/form-data">
<table width="100%" border="0" cellpadding="0px" cellspacing="0px" height="615" style="font-family:Arial, Helvetica, sans-serif;font-size:14px"> 
    <tr>
      <td colspan="2" >
	  
	  
	   <div class="navbar navbar-fixed-top">  
		<div class="navbar-inner">  
		<div class="container">  
		<img src="../images/logo.png" style="height:50px;width:70px;float:left;"> 
		<div class="nav-collapse">  
		<ul class="nav">  
		<li ><a href="retail.php">Products</a></li> 
		<li class="divider-vertical"></li>
		
      
		
		<li><a href="profile.php">My Profile</a></li> 
		</ul>
	<ul class="nav pull-right">
	<li class="divider-vertical"></li>
	<li><a href="logout.php">Sign Out</a></li></ul>
		</div>
		</div>  
		</div>  
		</div>	  </td>
    </tr>
	<tr>
<td valign="top" align="right" style="color:#0088cc;font-size:14px;padding-right:20px"  colspan="2">
Welcome&nbsp;<?php echo $rees->cust_name; ?></td>
</tr>
 
 
<tr>
<td height="350" colspan="2" align="center" valign="top">
<table width="100%" border="0" cellpadding="0px" cellspacing="0px" style="font-size:14px;">
	
	
	<tr>
	  <td colspan="6" align="center"><img src="../images/comp.png" width="239" height="23"></td>
	  </tr>
	<tr>
	  <td colspan="6" align="left" style="padding-left:25px">&nbsp;</td>
	  </tr>
	<tr>
	  <td colspan="6" align="left" style="padding-left:50px">
	  <a href="complaint.php" style="text-decoration:none">
	  <strong>Back</strong>	  </a>	  </td>
	  </tr>
	<tr>
	  <td width="39%" align="right">&nbsp;</td>
	  <td width="61%" colspan="5" align="left">&nbsp;</td>
	  </tr>
	<tr>
	  <td colspan="7" align="center"> <table width="95%" border="1" cellpadding="5px" cellspacing="1px" style="font-size:14px">
        <tr bgcolor="#333333" style="color:#FFFFFF">
          <td width="20%" align="center">Complaint Date </td>
          <td width="13%" align="center" valign="middle">Complaint Type </td>
          <td width="28%" align="center" valign="middle">Complaint</td>
          <td width="13%" align="center" valign="middle">Status</td>
          <td width="26%" align="center" valign="middle">Reply</td>
        </tr>
        <?php
		 $sqlup="Select * from complaint
        where `comp_by` = '".$rees->cust_id."' ORDER BY comp_id desc ";
		
		
	$we=mysql_query($sqlup);
	
	while($res=mysql_fetch_object($we))
{


		$name=mysql_query($sel);
		$cus=mysql_fetch_object($name);
?>
        <tr>
          <td width="20%" align="center"><?php echo $res->comp_date; ?></td>
          <td align="center"><?php echo $res->comp_type; ?></td>
          <td align="center"><?php echo $res->comp_comp; ?></td>
          <td align="center"><?php echo $res->comp_status; ?></td>
          <td align="center" valign="middle"><?php echo $res->comp_action; ?></td>
        </tr>
        <?php } ?>
</table></td>
	</tr>
	<tr><td colspan="7">&nbsp;</td>
	</tr>
	</table></td>
</tr>
  <tr>
<td align="center" style="font-size:12px; color:#999999"><hr color="#CCCCCC">
<strong>Copy Rights @ 2013 All Rights Reserved</strong></td>
  </tr>
 <tr>
   <td colspan="2" align="center" style="font-size:12px">&nbsp;</td>
 </tr>
</table>
</form>
</div>
</body>
</html>
<script type="text/javascript">

function check(custId) {	
		
	xmlhttp=new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

						document.getElementById('custdiv').innerHTML=xmlhttp.responseText;						
				
				}				
			}
			xmlhttp.open("GET","ajax.php?cust_id="+custId, true);
			xmlhttp.send(null);
		}		
		
				
var frm = document.form1;

function valid(){

if(frm.track_id.value =="") { alert("Please Enter Track ID"); frm.track_id.focus(); return false }


}

</script>
