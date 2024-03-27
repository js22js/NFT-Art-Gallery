<?php
error_reporting(0);
ob_start(); 
session_start();
include_once "../db/db.php"; 
$sql="select * from employee where user_name='".$_SESSION['user_name']."'";
$sqls=mysql_query($sql);
$rees=mysql_fetch_object($sqls);


?>

<html>
<head><title>NFT-Creator</title>
</head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../menu.css" />
<link rel="stylesheet" type="text/css" href="../style.css" />
<script type="text/javascript" src="../jquery.js"></script>
<script type="text/javascript" src="../menu.js"></script>
<body>
<div id="total">
<form id="form1" name="form1" method="post" onSubmit="return valid()" action="process.php" enctype="multipart/form-data">
<table width="100%" border="0" cellpadding="0px" cellspacing="0px" height="602" style="font-family:Arial, Helvetica, sans-serif;font-size:14px"> 
    <tr>
      <td width="100%"  >
	  
	  
	   <div class="navbar navbar-fixed-top">  
		<div class="navbar-inner">  
		<div class="container">  
		<img src="../images/logo.png" style="height:50px;width:70px;float:left;"> 
		<div class="nav-collapse">  
			<ul class="nav">  
		
		<li><a href="product.php">Products</a></li>  
		<li class="divider-vertical"></li>
        	<li><a href="retail_rep.php">Purchase History</a>
		<li class="divider-vertical"></li>
		
		<li><a href="pass.php">Reset Password</a></li> 
		</ul>
	<ul class="nav pull-right"><li><a href="logout.php">Sign Out</a></li></ul>
		</div>
		</div>  
		</div>  
		</div>  
	  
	  </td>
    </tr>
	<tr>
<td valign="top" align="right" style="color:#0088cc;font-size:14px;padding-right:20px" >
Welcome&nbsp;<?php echo $rees->emp_name; ?>
</td>
</tr>
 
<tr>
<td height="350" colspan="2" align="center" valign="top">
	<table width="80%" border="0" cellpadding="0px" cellspacing="0px" style="background-color:#f2f2f2">
	<tr>
	  <td colspan="6" align="center">&nbsp;</td>
	  </tr>
	<tr>
	  <td colspan="6" align="center">
	  <font style="font-family:Hobo Std;font-weight:bold;font-size:30px">CHANGE PASSWORD</font></td>
	  </tr>
	<tr>
	  <td colspan="6" align="center">&nbsp;</td>
	  </tr>
	<tr>
	  <td width="20%" align="right">Old Password :&nbsp; </td>
	  <td colspan="2" align="left"><input type="password" name="old_pass"></td>
	  <td colspan="2" align="right">New Password :&nbsp;</td>
	  <td width="32%" align="left"><input type="password" name="new_pass"></td>
	</tr>
	<tr>
	  <td align="left">&nbsp;</td>
	  <td colspan="5" align="left"><input type="hidden" name="emp_id" value="<?php echo $rees->emp_id; ?>"></td>
	  </tr>
	<tr>
	  <td align="left">&nbsp;</td>
	  <td colspan="5" align="left">&nbsp;</td>
	  </tr>
	
	
	<tr>

	  <td align="center" valign="middle" >&nbsp;</td>
	  <td width="20%" align="center" valign="middle" >&nbsp;</td>
	  <td colspan="2" align="center" valign="middle" ><input type="submit" name="submit"  id="submit"  value="Update" class="btn btn-info btn-block" />
        <input type="hidden" name="submit" id="submit" value="passUpdate" /></td>
	  <td width="7%" align="center" valign="middle" >&nbsp;</td>
	  <td align="center" valign="middle" >&nbsp;</td>
	</tr>
	  <tr >
	<td colspan="6" align="center">&nbsp;</td>
	</tr>
	<tr><td colspan="6">&nbsp;</td></tr>
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

if(frm.old_pass.value =="") { alert("Please Enter The Old Password"); frm.old_pass.focus(); return false }

if(frm.new_pass.value =="") { alert("Please Enter The New Password"); frm.new_pass.focus(); return false }


}
</script>