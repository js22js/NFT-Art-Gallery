<?php
error_reporting(0);
ob_start(); 
session_start();
include_once "../db/db.php"; 
include "function.php";
$sql="select * from admin where user_name='".$_SESSION['user_name']."'";
$sqls=mysql_query($sql);
$rees=mysql_fetch_object($sqls);
?>

<html>
<head><title>NFT- Admin</title>
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

<table width="100%" border="0" cellpadding="0px" cellspacing="0px" height="647" style="font-family:Arial, Helvetica, sans-serif;font-size:14px">

<tr>
<td>
<div class="navbar navbar-fixed-top">  
		<div class="navbar-inner">  
		<div class="container">  

		<img src="../images/logo.png" style="height:50px;width:70px;float:left;"> 
		<div class="nav-collapse">  
		<ul class="nav">  
		<li><a href="retail_rep.php">Purchase Report</a>   <li class="divider-vertical"></li>
		<li><a href="empview.php">Creators</a>   <li class="divider-vertical"></li>   
		<li><a href="stock.php">Stock</a></li>
		<li class="divider-vertical"></li>    
        
		</ul>
	<ul class="nav pull-right"><li><a href="logout.php">Sign Out</a></li></ul>
		</div>
		</div>  
		</div>  
		</div>  
		
</td>
</tr>
<tr>
<td valign="top" align="right" style="color:#0088cc;font-size:14px;padding-right:20px">
Welcome&nbsp;<?php echo $rees->admin_name; ?>
</td>
</tr>
<td height="350" colspan="2" align="center" valign="top">
	  <table width="100%" border="0" cellpadding="0px" cellspacing="0px">
        
       
          <tr>
            <td colspan="7" align="center">
			 <font style="font-family:Hobo Std;font-weight:bold;font-size:30px;color:#000000">CREATOR LIST</font>
			</td>
          </tr>
	
	<tr>
	  <td colspan="7" align="center">
	  <table width="95%" border="1" cellpadding="5px" cellspacing="1px" style="font-size:14px">
        <tr bgcolor="#333333" style="color:#FFFFFF">
          <td width="13%" align="center"><strong>Name</strong></td>
          <td width="10%" align="center" valign="middle"><strong>ID</strong></td>
          <td width="12%" align="center" valign="middle"><strong>Designation</strong></td>
          <td width="12%" align="center" valign="middle"><strong>Address</strong></td>
          <td width="13%" align="center" valign="middle"><strong>Phone No</strong></td>
          <td width="11%" align="center" valign="middle"><strong>Email id</strong></td>
          <td width="10%" align="center" valign="middle"><strong>User Name</strong></td>
        <td width="19%" align="center" valign="middle"><strong>Action</strong></td>
        </tr>
        <?php
		 
   $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit =6;
		
    	$startpoint = ($page * $limit) - $limit;
        
        //to make pagination
        $statement = "employee ";
		$where = "`emp_id` like '%'";
		
$sqlup="Select * from {$statement}
        where {$where} ORDER BY emp_name LIMIT {$startpoint},{$limit}";
	//echo $sqlup;
	//exit;
	$we=mysql_query($sqlup);
	
	while($res=mysql_fetch_object($we))
{
?>
        <tr>
          <td width="13%" align="center"><?php echo $res->emp_name; ?></td>
          <td align="center"><?php echo $res->emp_code; ?></td>
          <td align="center"><?php echo $res->emp_desc; ?></td>
          <td align="center"><?php echo $res->emp_address; ?></td>
          <td align="center"><?php echo $res->emp_phone; ?></td>
          <td align="center"><?php echo $res->emp_email; ?></td>
          <td align="center"><?php echo $res->user_name; ?></td>
         <td align="center" valign="middle">
		   
	  <a href="employee.php?id=<?php echo $res->emp_id ?>&Mode=Delete" onClick="return confirm(' Are You Sure To Delete? ');" >
	  <img src="../images/deleteform.png" width="26" height="26" /></a>
		  </td>
        </tr>
        <?php } ?>
      </table></td>
	</tr>
	<tr><td colspan="7"><?php  echo pagination($statement,$where,$limit,$page);?></td>
	</tr>
	</table></td>
</tr>

  <tr style="border-top:thick;color:#999999">
<td colspan="2" align="center" style="font-size:12px">
<hr color="#CCCCCC"><strong></strong>
</td>
  </tr>
  

</table>
</form>
</div>
</body>
</html>

