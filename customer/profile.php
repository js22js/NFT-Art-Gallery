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
	<table width="80%" border="0" cellpadding="0px" cellspacing="0px" style="font-size:14px;background-color:#333333;color:#FFFFFF">
	
	<tr bgcolor="#FFFFFF">
	  <td colspan="5" align="center">&nbsp;</td>
	  </tr>
	<tr bgcolor="#FFFFFF">
	  <td colspan="5" align="center"><font style="font-family:Hobo Std;font-weight:bold;font-size:30px;color:#000000">MY PROFILE </font></td>
	  </tr>
	<tr bgcolor="#FFFFFF">
	  <td height="17" colspan="5" align="left" style="padding-left:25px">&nbsp;</td>
	  </tr>
	<tr>
	  <td colspan="5" align="left" style="padding-left:25px">&nbsp;</td>
	  </tr>
	<tr>
	  <td colspan="5" align="left" style="padding-left:50px">&nbsp;	 	  </td>
	  </tr>

	<tr>
	  <td width="19%" align="right"><strong>Name :&nbsp;</strong></td>
	  <td width="26%" align="left">
	  <input type="text" readonly="readonly" value="<?php echo $rees->cust_name; ?>"></td>
	  <td width="16%" align="right"><strong>Id :&nbsp;</strong></td>
	  <td colspan="2" align="left">
	  <input type="text" readonly="readonly" value="<?php echo $rees->cust_id; ?>">	 </td>
	</tr>
	<tr>
	  <td align="right">&nbsp;</td>
	  <td align="left">&nbsp;</td>
	  <td align="right">&nbsp;</td>
	  <td colspan="2" align="left" id="checkId">&nbsp;</td>
	  </tr>
	<tr>
	  <td align="right"><strong>User Name  :&nbsp;</strong></td>
	  <td align="left"><input type="text"  readonly="readonly" value="<?php echo $rees->user_name; ?>" ></td>
	  <td align="right"><strong>DOB   :&nbsp;</strong></td>
	  <td colspan="2" align="left" id="checkId">
	  <input type="text" readonly="readonly" value="<?php echo $rees->cust_age; ?>"></td>
	  </tr>
	<tr>
	  <td align="right">&nbsp;</td>
	  <td align="left">&nbsp;</td>
	  <td align="right">&nbsp;</td>
	  <td colspan="2" align="left" id="checkId"><div id="custdiv"></div></td>
	  </tr>
	<tr>
	  <td align="right"><strong>Phone :&nbsp;</strong></td>
	  <td align="left">
	  <input type="text" readonly="readonly" value="<?php echo $rees->cust_phone; ?>" ></td>
	  <td align="right"><strong>Email :&nbsp;</strong></td>
	  <td colspan="2" align="left">
	  <input type="text" readonly="readonly" value="<?php echo $rees->cust_email; ?>" ></td>
	</tr>
	<tr>
	  <td align="right">&nbsp;</td>
	  <td colspan="4" align="left">&nbsp;</td>
	</tr>
<form id="form1" name="form1" method="post" action="process.php" enctype="multipart/form-data">
	<tr>
	  <td height="21" align="right"><strong> Address :&nbsp;</strong></td>
	  <td rowspan="2" align="left"><textarea name="cust_address"><?php echo $rees->cust_address; ?></textarea></td>
	  <td align="right"><strong>&nbsp;</strong></td>
	  <td rowspan="2" align="left">
	  <input type="submit" name="submit" class="btn btn-info btn-block" value="Change Address"></td>
	  <td rowspan="2" align="left">&nbsp;</td>
	</tr>
	<tr>
	  <td align="right">&nbsp;</td>
	  <td align="right"><strong>
	    <input type="hidden" name="cust_id" value="<?php echo $rees->id; ?>">
	    &nbsp;</strong></td>
	  </tr>
	  </form>
	  
	  
	<tr>
	  <td align="right">&nbsp;</td>
	  <td align="left">&nbsp;</td>
	  <td align="right">&nbsp;</td>
	  <td colspan="2" align="left">&nbsp;</td>
	  </tr>
<form id="form2" name="form2" method="post" action="process.php" enctype="multipart/form-data">	  
	<tr>
	  <td align="right"><strong>Old Password  :</strong>&nbsp;</td>
	  <td align="center"><input name="old_pass" type="password" ></td>
	  <td align="left"><strong>
	    <input type="hidden" name="cust_id" value="<?php echo $rees->id; ?>">
	  </strong></td>
	  <td width="25%" rowspan="2" align="left">
	  <input type="submit" name="submit" class="btn btn-info btn-block" value="Change Password">
	</td>
	  
	  <td width="14%" align="left">&nbsp;</td>
	</tr>
	<tr>
	  <td align="right"><strong>New Password  :</strong>&nbsp;</td>
	  <td align="center"><input name="new_pass" type="password"></td>
	  <td align="left">&nbsp;</td>
	  <td align="left">&nbsp;</td>
	  </tr></form>
	<tr><td colspan="5">&nbsp;</td></tr>
	</table></td>
</tr>
  <tr>
<td align="center" style="font-size:12px; color:#999999"><hr color="#CCCCCC">
<strong>Copy Rights @ 2013 All Rights Reserved</strong></td>
  </tr>
</table>
</div>
</body>
</html>
