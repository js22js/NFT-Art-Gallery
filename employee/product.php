<?php
error_reporting(0);
ob_start(); 
session_start();
include_once "../db/db.php"; 
include "function.php";
$sql="select * from employee where user_name='".$_SESSION['user_name']."'";
$sqls=mysql_query($sql);
$rees=mysql_fetch_object($sqls);


if($_GET['Mode'] =="Edit") {
	$sqlup="Select * from product
	where prod_id='".$_REQUEST['id']."' ";
	//echo $sqlup;
	//exit;
	$we=mysql_query($sqlup);
	$res=mysql_fetch_object($we);
}

if($_GET['Mode'] =="Delete") {
	$sqldel="Delete from product
	where prod_id='".$_REQUEST['id']."' ";
	//echo $sqldel;
	//exit;
	mysql_query($sqldel);
	
    
	echo "<meta http-equiv='refresh' content='0;url=stock.php'>";
	}



?>

<html>
<head><title>NFT-Creator</title>
</head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../menu.css" />
<link rel="stylesheet" type="text/css" href="../style.css" />
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
<tr><td>&nbsp;</td></tr>
<tr>   
      <td align="center" valign="top">
	  <table width="80%" border="0" cellpadding="0px" cellspacing="0px" style="font-size:14px">
         
          <tr>
            <td colspan="3" align="center"><img src="../images/product.png" width="200" height="30"></td>
          </tr>
          <tr>
            <td colspan="3" align="center">
			<input type="hidden" name="id" id="id" value="<?php echo $_REQUEST['id']; ?>">
              <input type="hidden" name="Mode" id="Mode" value="<?php echo $_REQUEST['Mode']; ?>"></td>
          </tr>
          <tr>
            <td height="29" colspan="3" align="left"  style="padding-left:25px">
			<a href="stock.php" style="text-decoration:none">
	  <strong>View Stock</strong>	  </a>			</td>
          </tr>
          <tr>
            <td width="44%" align="right"><strong>Product Name :&nbsp;</strong> </td>
            <td width="56%" colspan="2" align="left">
			<input type="text" name="prod_name" id="prod_name" autofocus="autofocus" value="<?php echo $res->prod_name; ?>"></td>
          </tr>
          <tr>
            <td align="center">&nbsp;</td>
            <td colspan="2" align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="right"><strong>Creator ( displayed to the buyers ) :&nbsp; </strong></td>
            <td colspan="2" align="left"><input type="text" name="prod_code" id="prod_code"  value="<?php echo $res->prod_code; ?>"></td>
          </tr>
          <tr>
            <td align="center">&nbsp;</td>
            <td colspan="2" align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="right"><strong>Quantity :</strong></td>
            <td colspan="2" align="left"><input type="text" name="prod_qty" id="prod_qty" readonly="readonly" value="<?php echo $res->prod_qty; ?>1"></td>
          </tr>
          <tr>
            <td align="right">&nbsp;</td>
            <td colspan="2" align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="right"><strong>Rate ( ETH ) :&nbsp;</strong> </td>
            <td colspan="2" align="left"><input type="text" name="prod_rate" id="prod_rate" value="<?php echo $res->prod_rate; ?>"></td>
          </tr>
          <tr>
            <td align="right">&nbsp;</td>
            <td colspan="2" align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="right"><strong>Product Image :&nbsp;</strong></td>
            <td colspan="2" align="left">
			<?php
			if($_GET['Mode'] =="Edit")
			{ ?>
			<img src="../products/<?php echo $res->prod_image; ?>" width="127" height="109">
			<?php }else{
			?>
			<input type="file" name="prod_image" id="prod_image" ></td>
          <?php } ?>
		  </tr>
          <tr>
            <td align="right">&nbsp;</td>
            <td colspan="2" align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center">&nbsp;</td>
            <td align="left">
			  <input type="submit" name="submit"  id="submit" 
  value="<?php if($_GET['Mode'] == "Edit") { echo "Update";} else { echo "Submit";} ?>" style="font-weight:bolder" class="btn btn-info btn-block"/>
	
  <input type="hidden" name="submit" id="submit" 
  value="<?php if($_GET['Mode'] == "Edit") { echo "prodUpdate";} else { echo "prodSubmit"; } ?>" /></td>
            <td align="left" width="100px">&nbsp;</td></tr></table></td></tr>
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

if(frm.prod_name.value =="") { alert("Please Enter Product Name"); frm.prod_name.focus(); return false }

if(frm.prod_code.value =="") { alert("Please Enter Product Code"); frm.prod_code.focus(); return false }

if(frm.prod_qty.value =="") { alert("Please Enter Product Quantity"); frm.prod_qty.focus(); return false }

if(frm.prod_rate.value =="") { alert("Please Enter Product Rate"); frm.prod_rate.focus(); return false }

if(frm.prod_image.value =="") { alert("Please Enter Product Image"); frm.prod_image.focus(); return false }

}
</script>