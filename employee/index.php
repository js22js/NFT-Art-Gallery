<?php
error_reporting(0);
ob_start(); 
session_start();
include_once "../db/db.php"; 

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
<form id="form1" name="form1" method="post" onSubmit="return valid()" action="index.php" enctype="multipart/form-data">

<table width="100%" border="0" cellpadding="0px" cellspacing="0px" height="505" style="font-family:Arial, Helvetica, sans-serif;font-size:14px">

<tr>
<td>
<div class="navbar navbar-fixed-top">  
		<div class="navbar-inner">  
		<div class="container">  

		<img src="../images/logo.png" style="height:50px;width:70px;float:left;"> 
		<div class="nav-collapse">  
		<ul class="nav">  
		<li ><a href="../index.php">Home</a></li> 
		<li class="divider-vertical"></li>   
		<li><a href="index.php">Contact</a></li>  
		<li class="divider-vertical"></li>
        <li><a href="index.php">Help</a>  
               
                </li> 
		</ul>
	<ul class="nav pull-right"><li><a href="index.php">Login as Employee</a></li></ul>
		</div>
		</div>  
		</div>  
		</div>  
		
</td>
</tr>

<td height="350" colspan="2" align="center" >
	<table width="50%" border="0" cellpadding="0px" cellspacing="0px">

	
	
	<td colspan="4">
	<div class="container"  >  

	<div class="row" style="margin-top:125px" >
		<div class="span6 offset3 well">
			<legend>Sign In</legend>
<input type="text" id="username" class="span6" name="user_name" placeholder="Username" style="width:100%;">
			<input type="password" id="password" class="span6" name="user_pwd" placeholder="Password" style="width:100%;">
          
			<button type="submit" style="margin-top:10px;" name="submit" class="btn btn-info btn-block">Sign in</button>
	
	</div>
	</div>
</div>
</td>
</tr>
	<tr>
	  <td colspan="2" align="center" valign="middle">&nbsp;</td>
	  <td colspan="2" align="left" valign="middle">&nbsp;</td>
	  </tr>
	<tr>
	  <td colspan="2" align="center" valign="middle">&nbsp;</td>
	  <td colspan="2" align="left" valign="middle">&nbsp;</td>
	  </tr>
	<tr>
	  <td colspan="2" align="center">&nbsp;</td>
	  <td colspan="2" align="center" valign="middle">&nbsp;</td>
	  </tr>
	<tr><td height="63" colspan="5">&nbsp;</td>
	</tr>
	</table>
</td>
</tr>


<tr><td colspan="2"><hr color="#CCCCCC"></td>
  
 
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

if(frm.user_name.value =="") { alert("Please Enter User Name"); frm.user_name.focus(); return false }

if(frm.user_pwd.value =="") { alert("Please Enter Password"); frm.user_pwd.focus(); return false }

}
</script>
<?php
if(isset($_REQUEST['submit']))
{
$user_name=$_REQUEST['user_name'];
$user_pwd=$_REQUEST['user_pwd'];
$_SESSION['user_name']=$_POST['user_name'];

$sqlup="Select user_name,user_pwd from employee
	where user_name='".$user_name."' AND user_pwd='".$user_pwd."'";
	$we=mysql_query($sqlup);
	$res=mysql_fetch_object($we);

if($res->user_name==$user_name && $res->user_pwd ==$user_pwd)
{

	echo "<meta http-equiv='refresh' content='0;url=product.php'>";
	
}
else{ 	echo "<script type='text/javascript'> alert('Invalid Login');</script>";	}
}
?>