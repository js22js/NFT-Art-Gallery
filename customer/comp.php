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
<head><title>NFT - Customer</title>
</head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../menu.css" />
<link rel="stylesheet" type="text/css" href="../style.css" />
<script type="text/javascript" src="../jquery.js"></script>
<script type="text/javascript" src="../menu.js"></script>
<body>
<div id="total">
<form id="form1" name="form1" method="post" onSubmit="return valid()" action="process.php" enctype="multipart/form-data">
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
	<table width="100%" border="0" cellpadding="0px" cellspacing="0px">
	
	
	<tr>
	  <td colspan="4" align="center"><img src="../images/thank.png" width="287" height="35"></td>
	  </tr>
	<tr>
	  <td colspan="4" align="left" style="padding-left:25px"><a href="complaint.php" style="text-decoration:none"><strong>Back</strong></a></td>
	  </tr>
	<tr>
	  <td colspan="4" align="left" style="padding-left:50px">	  	  </td>
	  </tr>
	<tr>
	  <td colspan="4" align="right">&nbsp;</td>
	  </tr>
	<tr>
	  <td width="3%" align="right"><strong>&nbsp;</strong></td>
	  <td align="right">&nbsp;</td>
	  <td width="40%" align="center"  bgcolor="#333333" style="color:#FFFFFF" >&nbsp;<br>
	    <strong>We Will Take Action About Your Complaint<br>
	    Thank You For Your Support.</strong><br>
	    &nbsp;</td>
	  <td width="30%" align="left">&nbsp;</td>
	</tr>
	<tr>
	  <td align="right">&nbsp;</td>
	  <td colspan="3" align="left"><input type="hidden" id="comp_by" name="comp_by" value="<?php echo $rees->cust_code; ?>"></td>
	</tr>
	<tr>
	  <td align="right">&nbsp;</td>
	  <td colspan="3" align="left">&nbsp;</td>
	  </tr>
	
	<tr>
	  <td align="right">&nbsp;</td>
	  <td width="27%" align="center">&nbsp;</td>
	  <td colspan="2" align="left">&nbsp;</td>
	  </tr>
	<tr><td colspan="4">&nbsp;</td></tr>
	</table></td>
</tr>
  <tr>
<td align="center" style="font-size:12px; color:#999999"><hr color="#CCCCCC">
<strong>Copy Rights @ 2013 All Rights Reserved</strong></td>
  </tr>
</table>
</form>
</div>
</body>
</html>
<script type="text/javascript">

		
var frm = document.form1;

function valid(){

if(frm.comp_comp.value =="") { alert("Please Enter Complaint"); frm.comp_comp.focus(); return false }

}

</script>
	