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
<head><title>NFT- Customer</title>
</head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../menu.css" />
<link rel="stylesheet" type="text/css" href="../style.css" />
<link href="../css/align.css" rel="stylesheet" />
<link href="../css/lightbox.css" rel="stylesheet" />
<script src="../js/jquery-1.7.2.min.js"></script>
<script src="../js/lightbox.js"></script>
<script type="text/javascript" src="../jquery.js"></script>
<script type="text/javascript" src="../menu.js"></script>
<link rel="stylesheet" type="text/css" href="../pagination/pagination.css" />
<body>
<div id="total">
<form id="form1" name="form1" method="post" action="process.php" enctype="multipart/form-data" onSubmit="return valid()">
  <table width="100%" border="0" cellpadding="0px" cellspacing="0px" height="638" style="font-family:Arial, Helvetica, sans-serif;font-size:14px"> 
    <tr>
      <td width="91%" >
	  
	  
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
<td valign="top" align="right" style="color:#0088cc;font-size:14px;padding-right:20px">
Welcome&nbsp;<?php echo $rees->cust_name; ?></td>
</tr>
<tr><td>&nbsp;</td></tr>
    <tr>
      <td height="350" colspan="2" align="center" valign="top">
	  <table width="100%" border="0" cellpadding="0px" cellspacing="0px">
         
          <tr>
            <td colspan="7" align="center"><img src="../images/pur.png" width="245" height="29"></td>
          </tr>
         


           <tr>
            <td width="20%" align="center">&nbsp;<br></td>
            
            
           </tr>


           <tr>
            <td colspan="7" align="center">
			<table width="95%" border="1" cellpadding="5px" cellspacing="1px">
               <tr bgcolor="#333333" style="color:#FFFFFF">
			   				   	<td width="33%" align="center">Product Details </td>
				                <td width="67%" colspan="2" align="center">Payment Details </td>
               </tr>
 <tr bgcolor="#333333" style="color:#FFFFFF">
 <td rowspan="4" valign="top">
 <table width="101%" >
<?php	
		$total=0;
		
		$sqlup="Select * from ".$_SESSION['user_name']."_product GROUP BY prod_id";
		$we=mysql_query($sqlup);
		while($row=mysql_fetch_object($we))
{
	$qty=0;	
		$sqlups="Select * from product where prod_id='".$row->prod_id."' ";
		$wes=mysql_query($sqlups);
		$res=mysql_fetch_object($wes)
 ?>

<tr bgcolor="#333333" style="color:#FFFFFF">
			   	<td width="51%" align="center"><img src="../products/<?php echo $res->prod_image; ?>" width="127" height="109"></td>
				<td width="6%">&nbsp;</td>
				<td width="43%" align="center"><strong><?php echo $res->prod_name; ?></strong><br>
				  <br>
<img src="../images/coins.png" width="45" height="45"> <span> <strong><?php echo $res->prod_rate; ?></strong></span><br> 
 <br><strong>Creator : <?php echo $res->prod_code; ?></strong></td>
</tr>
<?php 
$qty=1;

$rate=$qty*$res->prod_rate;

$total=$total+$rate; } ?></table></td>
<tr bgcolor="#333333" style="color:#FFFFFF">
 <td valign="top">
 <table width="100%" >
 <tr bgcolor="#333333" style="color:#FFFFFF">
   <td align="right">&nbsp;</td>
   <td colspan="3">&nbsp;</td>
 </tr>
 <tr bgcolor="#333333" style="color:#FFFFFF">
 <td width="31%" align="right"><strong>Name :&nbsp;</strong> </td>
 <td colspan="3"><input type="text" name="bill_name" id="bill_name" readonly="readonly" value="<?php echo $rees->cust_name; ?>"></td>
 </tr>
 <tr bgcolor="#333333" style="color:#FFFFFF">
   <td align="right">&nbsp;</td>
   <td colspan="3">&nbsp;</td>
 </tr>
 <tr bgcolor="#333333" style="color:#FFFFFF">
   <td align="right"><strong>Id :&nbsp;</strong> </td>
   <td colspan="3"><input type="text" name="bill_id" id="bill_id" readonly="readonly" value="<?php echo $rees->cust_id; ?>"></td>
 </tr>
 <tr bgcolor="#333333" style="color:#FFFFFF">
   <td align="right">&nbsp;</td>
   <td colspan="3">&nbsp;</td>
 </tr>
 <tr bgcolor="#333333" style="color:#FFFFFF">
   <td align="right"><strong>Total Amount ( ETH ) :&nbsp;</strong> </td>
   <td colspan="3"><input type="text" name="bill_amt" id="bill_amt" readonly="readonly" value="<?php echo $total; ?>"></td>
 </tr>
 <tr bgcolor="#333333" style="color:#FFFFFF">
   <td align="right">&nbsp;</td>
   <td colspan="3">&nbsp;</td>
 </tr>
 <tr bgcolor="#333333" style="color:#FFFFFF">
   <td align="right"><strong>Choose Wallet :&nbsp;</strong> </td>
   <td colspan="3" align="left">
  <button class="btn btn-success" onclick="window.open('https://metamask.io/download/','_blank')"><strong>Meta Mask</strong></button>
  <button class="btn btn-success" onclick="window.open('https://www.coinbase.com/signin','_blank')"><strong>Coinbase</strong></button><br><br>
  <button class="btn btn-success" onclick="window.open('https://rainbow.me/','_blank')"><strong>Rainbow</strong></button>
  <button class="btn btn-success" onclick="window.open('https://authereum.com/login','_blank')"><strong>Authereum</strong></button><br><br>
<button class="btn btn-success" onclick="window.open('https://wallet.portis.io/login','_blank')"><strong>Portis</strong></button>					
<input type="hidden" name="bill_type" type="text" value="Crypto">
</td>
  
 </tr>
 
 <tr bgcolor="#333333" style="color:#FFFFFF">
 <td colspan="4">
<div id="cashdiv">&nbsp;</div>
</td>
</tr>


 <tr bgcolor="#333333" style="color:#FFFFFF">
   <td align="right">&nbsp;</td>
   <td colspan="3">&nbsp;</td>
 </tr>
 <tr bgcolor="#333333" style="color:#FFFFFF">
   <td align="right">&nbsp;</td>
   <td width="21%"><input type="submit" id="submit" name="submit" value="Proceed" class="btn btn-info btn-block"></td>
   <td width="18%">&nbsp;</td>
   <td><input type="hidden" id="submit" name="submit" value="billSubmit"></td><br>
 </tr>
 </table></td>
</tr>
            </table></td>
          </tr>
           <tr>
             <td colspan="7" align="center">&nbsp;</td>
           </tr>
           <tr>
            <td colspan="7" align="center">&nbsp;</td>
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
<script type="text/javascript">
function check(cashId) {	

xmlhttp=new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

						document.getElementById('cashdiv').innerHTML=xmlhttp.responseText;						
				
				}				
			}
			xmlhttp.open("GET","ajax.php?cash_id="+cashId, true);
			xmlhttp.send(null);
		}		
		</script>