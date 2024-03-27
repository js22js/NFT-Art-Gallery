<?php
error_reporting(0);
ob_start(); 
session_start();
include_once "../db/db.php"; 
include "function.php";
$sql="select * from customer where user_name='".$_SESSION['user_name']."'";
$sqls=mysql_query($sql);
$rees=mysql_fetch_object($sqls);

if($_GET['Mode'] =="Cart") {
	
	$create="CREATE TABLE ".$_SESSION['user_name']."_product (`prod_id` INT( 11 ) NOT NULL, `prod_qty` VARCHAR( 100 ) NOT NULL) ";
	$table=mysql_query($create);
	$insert="INSERT INTO ".$_SESSION['user_name']."_product (`prod_id`,`prod_qty`)VALUES (".$_GET['id'].",'1')";
	$into=mysql_query($insert);
	
}

if($_GET['Mode'] =="Delete")
{
$sqldel="Delete from ".$_SESSION['user_name']."_product
	where prod_id='".$_REQUEST['prod_id']."' ";

	mysql_query($sqldel);
echo "<meta http-equiv='refresh' content='0;url=cart.php'>";
}
?>


<html>
<head><title>NFT- Customer</title>
</head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../menu.css" />
<link rel="stylesheet" type="text/css" href="../style.css" />
<link href="../css/lightbox.css" rel="stylesheet" />
<link href="../css/align.css" rel="stylesheet" />
<script src="../js/jquery-1.7.2.min.js"></script>
<script src="../js/lightbox.js"></script>
<script type="text/javascript" src="../jquery.js"></script>
<script type="text/javascript" src="../menu.js"></script>
<link rel="stylesheet" type="text/css" href="../pagination/pagination.css" />
<body>
<div id="total">
<form id="form1" name="form1" method="post" action="#" enctype="multipart/form-data">
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
    <tr>
      <td height="363"  colspan="2" align="center" valign="top">
	  <table width="100%" border="0" cellpadding="0px" cellspacing="0px">
         
          
 <tr>
            <td colspan="7" align="center">
			 <font style="font-family:Hobo Std;font-weight:bold;font-size:30px;color:#000000">ARE YOU SURE?</font>
			</td>
          </tr>
          <tr>
            <td colspan="7" align="left" valign="middle" style="padding-left:25px" >
			<a href="retail.php" style="text-decoration:none">
			<img src="../images/back.png" width="136" height="42" title="Back To Shopping "></a></td>
          </tr>
           <tr>
            <td colspan="7" align="center">
			<table width="95%" border="1" cellpadding="5px" cellspacing="1px">
               <tr bgcolor="#333333" style="color:#FFFFFF">
			   				   	<td width="32%" align="center">Product Image </td>
				                <td colspan="2" align="center">Product Name </td>
				                 <td colspan="2" align="center">Product Price</td>
				                <td width="19%" align="center">Action</td>
                 </tr>

<?php	$sqlup="Select * from ".$_SESSION['user_name']."_product GROUP BY prod_id";
		$we=mysql_query($sqlup);
		while($row=mysql_fetch_object($we))
{
		
		$sqlups="Select * from product where prod_id='".$row->prod_id."' ";
		$wes=mysql_query($sqlups);
		$res=mysql_fetch_object($wes)
 ?>

 <tr bgcolor="#333333" style="color:#FFFFFF">
			   	<td width="32%" align="center"><img src="../products/<?php echo $res->prod_image; ?>" width="127" height="109"></td>
				<td colspan="2" align="center"><strong><?php echo $res->prod_name; ?></strong><br>
				  <br>
				</td>
<td colspan="2" align="center">
				<img src="../images/coins.png" width="45" height="45"> <span><strong><?php echo $res->prod_rate; ?></strong></span>
				<input type="hidden" name="prods_id" style="size:10px" value="<?php echo $row->prod_id ?>">	</td>				


<td width="19%" align="center">
				
				<a href="cart.php?prod_id=<?php echo $res->prod_id ?>&amp;Mode=Delete" style="text-decoration:none"> 
				<input type="button" name="Cancel" id="remove" value="Remove" class="btn btn-info btn-block"></a><br>
				<input type="submit" id="Purchase" name="purchase" value="Purchase" class="btn btn-info btn-block">    </td>
                 </tr>
 
<?php } ?>

          
</table></td></tr>
           <tr>
             <td colspan="7" align="center">&nbsp;</td>
           </tr>
           <tr>
            <td width="10%" align="center">&nbsp;</td>
            <td width="11%" align="center">&nbsp;</td>
            <td width="18%" align="center">&nbsp;</td>
            <td width="21%" align="center">&nbsp;</td>
            <td width="11%" align="center">&nbsp;</td>
            <td width="13%" align="center">&nbsp;</td>
            <td width="16%" align="center">&nbsp;</td>
           </tr>
      </table>
	  </td>
    </tr>
  <tr>
<td align="center" style="font-size:12px; color:#999999"><hr color="#CCCCCC">
<strong>Copy Rights @ 2013 All Rights Reserved</strong></td>
  </tr>
  </table>
</form>
</div>
</body>
<?php
if(isset($_REQUEST['purchase']))
{
echo "<meta http-equiv='refresh' content='0;url=purchase.php'>";
}
 
?>
<script type="text/javascript">
function check(compId) {	

xmlhttp=new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

						document.getElementById('compdiv').innerHTML=xmlhttp.responseText;						
				
				}				
			}
			xmlhttp.open("GET","ajax.php?comp_id="+compId, true);
			xmlhttp.send(null);
		}		
		</script>