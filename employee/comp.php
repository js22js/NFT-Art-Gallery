<?php
error_reporting(0);
ob_start(); 
session_start();
include_once "../db/db.php"; 
$sql="select * from employee where user_name='".$_SESSION['user_name']."'";
$sqls=mysql_query($sql);
$rees=mysql_fetch_object($sqls);



if($_GET['Mode'] =="Edit") {
	$sqlup="Select * from complaint
	where comp_id='".$_REQUEST['id']."' ";
	//echo $sqlup;
	//exit;
	$we=mysql_query($sqlup);
	$res=mysql_fetch_object($we);
}

if($_GET['Mode'] =="Delete") {
	$sqldel="Delete from complaint
	where comp_id='".$_REQUEST['id']."' ";
	//echo $sqldel;
	//exit;
	mysql_query($sqldel);
	
    
	echo "<meta http-equiv='refresh' content='0;url=complaint.php'>";
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
	  <td colspan="4" align="center">&nbsp;</td>
	  </tr>
	<tr>
	  <td colspan="4" align="center"><img src="../images/comp.png" width="200" height="30">&nbsp;</td>
	  </tr>
	<tr>
	  <td height="29" colspan="5" align="left" style="padding-left:25px">
	  <a href="complaint.php" style="text-decoration:none">
	  <strong>Back</strong>	  </a>	  </td>
	  </tr>
	<tr>
	  <td align="right"><input type="hidden" name="comp_id" id="comp_id" value="<?php echo $res->comp_id; ?>">
	    Complaint No  :&nbsp;</td>
	  <td width="17%" align="left"><strong><?php echo $res->comp_id; ?></strong></td>
	  <td width="12%" align="right">User Id :&nbsp; </td>
	  <td width="42%" align="left"><strong><?php echo $res->comp_by; ?></strong></td>
	  </tr>
	<tr>
	  <td align="right">&nbsp;</td>
	  <td align="left">&nbsp;</td>
	  <td align="right">&nbsp;</td>
	  <td align="left">&nbsp;</td>
	  </tr>
	<tr>
	  <td align="right">Date :&nbsp; </td>
	  <td align="left"><strong><?php echo $res->comp_date; ?></strong></td>
	  <td align="right">Complaint :&nbsp; </td>
	  <td rowspan="5" align="char" valign="top"><strong><?php echo $res->comp_comp; ?></strong></td>
	  </tr>
	<tr>
	  <td align="right">&nbsp;</td>
	  <td align="left">&nbsp;</td>
	  <td align="right">&nbsp;</td>
	  </tr>
	<tr>
	  <td align="right">Type :&nbsp; </td>
	  <td align="left"><strong><?php echo $res->comp_id; ?></strong></td>
	  <td align="right">&nbsp;</td>
	  </tr>
	<tr>
	  <td align="right">&nbsp;</td>
	  <td align="left">&nbsp;</td>
	  <td align="right">&nbsp;</td>
	  </tr>
	<tr>
	  <td align="right">Status :&nbsp; </td>
	  <td align="left"><strong><?php echo $res->comp_status; ?></strong></td>
	  <td align="right">&nbsp;</td>
	  </tr>
	<tr>
	  <td align="right">&nbsp;</td>
	  <td colspan="3" align="left">&nbsp;</td>
	  </tr>
	<tr>
	<td align="right">Change Status :&nbsp;</td>
	  <td align="left"><select name="comp_status" id="comp_status">
	  					<option value="">Select Status</option>
						<option value="Solved">Solved</option>
						<option value="Not Solved">Not Solved</option>
					    </select>      </td>
	  <td align="right">Reply :&nbsp;</td>
	  <td align="left"><textarea name="comp_action" style="height:50px;width:300px"></textarea></td>
	  </tr>
	
	
	<tr>

	  <td colspan="4" align="center" valign="middle">&nbsp;</td>
	  </tr>
	  <tr >
	<td align="center">&nbsp;</td>
	<td align="center">&nbsp;</td>
	  <td align="center" valign="middle">
 <input type="submit" name="submit"  id="submit"  value="Update" class="btn btn-info btn-block"/>
	
  <input type="hidden" name="submit" id="submit" value="compUpdate" /></td>
<td align="center">&nbsp;</td>
	  </tr>
	<tr><td colspan="4">&nbsp;</td></tr>
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

