<?php
error_reporting(0);
ob_start(); 
session_start();
include_once "../db/db.php"; 
include "function.php";
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
<link href="../css/lightbox.css" rel="stylesheet" />
<script src="../js/jquery-1.7.2.min.js"></script>
<script src="../js/lightbox.js"></script>
<script type="text/javascript" src="../jquery.js"></script>
<script type="text/javascript" src="../menu.js"></script>
<link rel="stylesheet" type="text/css" href="../pagination/pagination.css" />
<body>
<div id="total">
<form id="form1" name="form1" method="post" action="#" enctype="multipart/form-data">
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
      <td height="384" colspan="2" align="center" valign="top">
	  <table width="100%" border="0" cellpadding="0px" cellspacing="0px">
      
         <tr>
            <td colspan="7" align="center">
			 <font style="font-family:Hobo Std;font-weight:bold;font-size:30px;color:#000000">CONGRATULATIONS</font>
			</td>
          </tr>
          <tr>
            <td colspan="7" align="left" valign="middle" style="padding-left:25px" >
			<a href="retail.php" style="text-decoration:none">
			<img src="../images/back.png" width="136" height="42" title="Back To Shopping "></a></td>
          </tr>
           <tr>
            <td colspan="7" align="center">
			<table width="95%" border="0" cellpadding="0px" cellspacing="0px">
               <tr bgcolor="#333333" style="color:#FFFFFF">
			   				   	<td width="50%" align="center">
<img src="../images/thankyou.jpg" width="500" height="300"> </td>
									<td width="37%" align="center"><strong>&nbsp	&nbsp	&nbspYour NFT has been added in your Wallet<br></strong></td>
                                    <td width="13%" align="center">&nbsp;</td>
               </tr>
               <tr bgcolor="#333333" style="color:#FFFFFF"></tr>
            </table></td>
          </tr>
          
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
