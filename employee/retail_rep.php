<?php
error_reporting(0);
ob_start(); 
session_start();
include_once "../db/db.php"; 
include "function.php";
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
          
      <td height="350" colspan="2" align="center" valign="top">
	  <table width="100%" border="0" cellpadding="0px" cellspacing="0px">
        
       
          <tr>
            <td colspan="7" align="center">
			 <font style="font-family:Hobo Std;font-weight:bold;font-size:30px;color:#000000">PURCHASE HISTORY</font>
			</td>
          </tr>
          <tr>
            <td colspan="7" align="left" style="padding-left:25px">
			<a href="cart.php" style="text-decoration:none"></a></td>
          </tr>
           <tr>
            <td colspan="7" align="center">
			<table width="95%" border="1" cellpadding="5px" cellspacing="1px" style="font-size:14px">
               <tr bgcolor="#333333" style="color:#FFFFFF">
			   <td width="19%" align="center">Customer Name </td>
			   <td width="17%" align="center">Purchase Date</td>
			   <td width="15%" align="center">Total Amount ( ETH)</td>
			  
			   <td width="27%" align="center">Action</td>
			   <tr>
			
			    <?php
		 
   $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit =8;
		
    	$startpoint = ($page * $limit) - $limit;
        
        //to make pagination
        $statement = "`bill` ";
		$where = "`bill_id` like '%'";
		
$sqlup="Select * from {$statement}
        where {$where} ORDER BY id desc LIMIT {$startpoint},{$limit}";

	$we=mysql_query($sqlup);

	while($res=mysql_fetch_object($we))
{ 	
?>
    <tr >                     
			   <td align="center"><?php echo $res->bill_name; ?></td>
			   <td align="center"><?php echo $res->bill_date; ?></td>
			   <td align="center"><?php echo $res->bill_amt; ?></td>
			  
			   <td align="center">
			   <a href="retail_view.php?id=<?php echo $res->id; ?>">
			   <input type="button" name="submit" id="submit" value="View Details" class="btn btn-primary">
			   </a></td>
		<?php  } ?>
				
            </table></td>
          </tr>
          <tr>
            <td colspan="7"><?php  echo pagination($statement,$where,$limit,$page);?></td>
          </tr>
      </table></td>
    </tr>
  <tr>
<td align="center" style="font-size:12px; color:#999999"><hr color="#CCCCCC">
<strong>Copy Rights @ 2013 All Rights Reserved</strong></td>
  </tr>  </table>
</form>
</div>
</body>


