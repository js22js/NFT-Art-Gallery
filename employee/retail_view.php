<?php
error_reporting(0);
ob_start(); 
session_start();
include_once "../db/db.php"; 
include "function.php";
$sql="select * from employee where user_name='".$_SESSION['user_name']."'";
$sqls=mysql_query($sql);
$rees=mysql_fetch_object($sqls);


$sel="select * from bill where `id`='".$_REQUEST['id']."'";
$from=mysql_query($sel);
$ret=mysql_fetch_object($from);
?>

<html>
<head><title>NFT-Creator</title>
</head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../menu.css" />
<link rel="stylesheet" type="text/css" href="../style.css" />
<link href="../css/align.css" rel="stylesheet" />
<script type="text/javascript" src="../jquery.js"></script>
<script type="text/javascript" src="../menu.js"></script>
<link rel="stylesheet" type="text/css" href="../pagination/pagination.css" />
<body>
<div id="total">
<form id="form1" name="form1" method="post" onSubmit="return valid()" action="process.php" enctype="multipart/form-data">
  <table width="100%" border="0" cellpadding="0px" cellspacing="0px" height="602" style="font-family:Arial, Helvetica, sans-serif;font-size:14px"> 
    <tr>
      <td><div class="navbar navbar-fixed-top">  
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
		</div>	  </td>
    </tr>
	<tr>
<td valign="top" align="right" style="color:#0088cc;font-size:14px;padding-right:20px">
Welcome&nbsp;<?php echo $rees->emp_name; ?></td>
</tr>
	<tr>
	  <td height="18" align="right" valign="top" style="color:#0088cc;font-size:14px;padding-right:20px">&nbsp;</td>
	  </tr>
   
          
      <td height="350" colspan="2" align="center" valign="top">
	  <table width="100%" border="0" cellpadding="0px" cellspacing="0px">
        
       
          <tr>
            <td colspan="7" align="center">
			 <font style="font-family:Hobo Std;font-weight:bold;font-size:30px;color:#000000">PURCHASE HISTORY</font>			</td>
          </tr>
          <tr>
            <td colspan="7" align="left" style="padding-left:25px">
			 <a href="retail_rep.php" style="text-decoration:none"><strong>Back</strong></a></td>
          </tr>
           <tr>
            <td colspan="7" align="center">
			<table width="95%" border="1" cellpadding="5px" cellspacing="1px" style="font-size:14px;color:#FFFFFF;background-color:#333333">
               
			   <tr>
			   <td width="27%" align="left">Cutomer Name&nbsp;:</td>
			   <td width="23%" align="left"><strong><?php echo $ret->bill_name; ?></strong></td>
			   <td width="21%" align="left">Customer ID :&nbsp;</td>
			   <td width="29%" align="left"><strong><?php echo $ret->bill_id; ?></strong></td>
               </tr>
               <tr>
			   <tr>
			   <td width="27%" align="left">Purchase Date&nbsp;:</td>
			   <td width="23%" align="left"><strong><?php echo $ret->bill_date; ?></strong></td>
			   <td width="21%" align="left">Total Amount ( ETH ) :&nbsp;</td>
			   <td width="29%" align="left"><strong><?php echo $ret->bill_amt; ?></strong></td>
               </tr>
              
           
             
               
			    <tr >                     
				<td height="54" colspan="4" align="center"><strong>Products Details  </strong></td>
		        </tr>
				<tr >
		         <td align="center">Product</td>
                 <td align="center">Product Image</td>
                 <td align="center">Price</td>
                 <td align="center">Quantity</td>
				</tr>
	<?php 
		$where = "`bill_id`='".$rees->cust_id."'";
		
$sqlup="select * from bill where `id`='".$_REQUEST['id']."'";

	$we=mysql_query($sqlup);

	$res=mysql_fetch_object($we);

	$pros=explode(',',$res->bill_prod);

$no=1;
while ($pros[$no] != '')
{ 	
$split=explode('=',$pros[$no]);	
$sqlup="select * from product where `prod_id`='".$split[0]."'";
$we=mysql_query($sqlup);
$res=mysql_fetch_object($we);	
				?>
				<tr >
		         <td align="center"><strong><?php echo $res->prod_name; ?></strong></td>
                 <td align="center">
				 <img src="../products/<?php echo $res->prod_image; ?>" width="148" height="113"></td>
                 <td align="center">     <img src="../images/coins.png" width="45" height="45"> <span><strong><?php echo $res->prod_rate; ?></strong></span></td>
<td align="center"><strong><?php echo $res->prod_code; ?></strong></td>
                
				</tr>
			  
<?php $no++; } ?>			  
			  </table></td>
          </tr>
          <tr>
            <td colspan="7">&nbsp;</td>
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


