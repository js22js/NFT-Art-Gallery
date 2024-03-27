<?php
error_reporting(0);
ob_start(); 
session_start();
include_once "db/db.php"; 

?>

<html>
<head><title>Art-Gallery ( NFT )</title>
</head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link href="style.css" rel="stylesheet"> 
<script src="js/jquery.js"></script>  
<script src="js/bootstrap-transition.js"></script>  
<script src="js/bootstrap-alert.js"></script>  
<script src="js/bootstrap-modal.js"></script>  
<script src="js/bootstrap-dropdown.js"></script>  
<script src="js/bootstrap-scrollspy.js"></script>  
<script src="js/bootstrap-tab.js"></script>  
<script src="js/bootstrap-tooltip.js"></script>  
<script src="js/bootstrap-popover.js"></script>  
<script src="js/bootstrap-button.js"></script>  
<script src="js/bootstrap-collapse.js"></script>  
<script src="js/bootstrap-carousel.js"></script>  
<script src="js/bootstrap-typeahead.js"></script> 
<body>
<div id="total">
<form id="form1" name="form1" method="post" action="index.php" enctype="multipart/form-data">

<table width="100%" border="0" cellpadding="0px" cellspacing="0px" height="505" style="font-family:Arial, Helvetica, sans-serif;font-size:14px">

<tr>
<td>
<div class="navbar navbar-fixed-top">  
		<div class="navbar-inner">  
		<div class="container">  

		<img src="./images/logo.png" style="height:50px;width:70px;float:left;"> 
		<div class="nav-collapse">  
		<ul class="nav">  
		<li ><a href="index.php">Home</a></li>
		<li class="divider-vertical"></li>    
		<li><a href="index.php">Wallets Trusted Us</a></li>  
		<li class="divider-vertical"></li>
        <li><a href="index.php">Contact Us</a>  
   </li> 
		</ul>
		<ul class="nav pull-right">
				
	            <li><a href="admin/index.php">Admin</a></li>
                           <li class="divider-vertical"></li>
				<li class="dropdown" id="accountmenu"> 
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Create<b class="caret"></b></a>
				 <ul class="dropdown-menu">
				<li><a href="./admin/employee.php">Sign up</a></li>  
				 <li><a href="employee/index.php">Sign in</a></li></ul>
				<li class="divider-vertical"></li>
				<li class="dropdown" id="accountmenu"> 
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Buy<b class="caret"></b></a>
				 <ul class="dropdown-menu">   
				<li><a href="customer/register.php">Sign Up</a></li>
				<li><a href="customer/index.php">Sign in</a></li>   </ul>  
				
				</li></ul>
		</div>
		</div>  
		</div>  
		</div>  
		
</td>
</tr>
<p style="font-size:18px"><strong>*NOTE</strong>:Just an model and this is not an Official Website</p></td><br><br>
	  <h1 style="color:#FF5500;font-size:40px;" align="center">Wallets Trusted Us</h1> <br><br><br>
<p style="font-size:18px" align="center"><strong>1 .  Meta Mask </strong>(<a href="https://metamask.io/download/")>Go to Web Page</a>)</p><br>
<p style="font-size:18px" align="center"><strong>2 . Coinbase </strong>(<a href="https://www.coinbase.com/signin")>Go to Web Page</a>)</p><br>
<p style="font-size:18px" align="center"><strong>3 . Rainbow </strong>(<a href=" https://rainbow.me/")>Go to Web Page</a>)</p><br>
<p style="font-size:18px" align="center"><strong>4 . Authereum </strong>(<a href="https://authereum.com/login")>Go to Web Page</a>)</p><br>
<p style="font-size:18px" align="center"><strong>5 . Portis </strong>(<a href="https://wallet.portis.io/login")>Go to Web Page</a>)</p><br>





</table>
</form>
</div>
</body>
</html>

