<?php
error_reporting(0);
ob_start(); 
session_start();
include_once "../db/db.php"; 
include "function.php";
$sql="select * from employee where user_name='".$_SESSION['user_name']."'";
$sqls=mysql_query($sql);
$rees=mysql_fetch_object($sqls);


if($_GET['Mode'] =="Assign") {
	$sqlup="Select * from postal
	where id='".$_REQUEST['id']."' ";
	//echo $sqlup;
	//exit;
	$we=mysql_query($sqlup);
	$res=mysql_fetch_object($we);
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
		  <td height="272" align="center" valign="middle">
		  	<table width="80%" border="0" cellpadding="0px" cellspacing="0px" style="background-color:#f2f2f2;font-size:14px">
		  <tr>
		    <td align="right">&nbsp;</td>
		    <td colspan="2" align="left">&nbsp;</td>
		    <td colspan="2" align="right">&nbsp;</td>
		    <td align="left"><input type="hidden" name="emp_id" id="emp_id" value="<?php echo $rees->emp_id; ?>">
		      <input type="hidden" name="Mode" id="Mode" value="<?php echo $_REQUEST['Mode']; ?>"></td>
		    </tr>
		  <tr>
		    <td colspan="6" align="center"><img src="../images/assign job.png" width="200" height="30"></td>
		    </tr>
		  <tr>
		    <td align="right">&nbsp;</td>
		    <td colspan="2" align="left">&nbsp;</td>
		    <td colspan="2" align="right">&nbsp;</td>
		    <td align="left">&nbsp;</td>
		    </tr>
		  <tr>
            <td width="20%" align="right">Customer Name :&nbsp; </td>
            <td colspan="2" align="left"><strong><?php echo $res->post_name; ?></strong></td>
            <td colspan="2" align="right"><input type="hidden" name="id" id="id" value="<?php echo $res->id; ?>">
              Post Date  :&nbsp; </td>
            <td width="28%" align="left"><strong><?php echo $res->post_date; ?></strong></td>
          </tr>
          <tr>
            <td align="right">&nbsp;</td>
            <td colspan="2" align="left">&nbsp;</td>
            <td colspan="2" align="right">&nbsp;</td>
            <td align="left">&nbsp;</td>
          </tr>
          <tr>
            <td align="right">No Of Item/Package :&nbsp; </td>
            <td colspan="2" align="left"><strong><?php echo $res->post_no; ?></strong></td>
            <td colspan="2" align="right">Item/Package Size :&nbsp;</td>
            <td align="left"><strong><?php echo $res->post_size; ?></strong></td>
          </tr>
          <tr>
            <td align="right">&nbsp;</td>
            <td colspan="2" align="left" >&nbsp;</td>
            <td colspan="2" align="right">&nbsp;</td>
            <td align="left" >&nbsp;</td>
          </tr>
          <tr>
            <td align="right">Address :&nbsp; </td>
            <td colspan="2" align="left" ><strong><?php echo $res->post_address; ?></strong></td>
            <td colspan="2" align="right">Description :&nbsp; </td>
            <td align="left" ><strong><?php echo $res->post_desc; ?></strong></td>
          </tr>
          
          <tr>
            <td align="right">&nbsp;</td>
            <td colspan="2" align="left">&nbsp;</td>
            <td colspan="2" align="right">&nbsp;</td>
            <td align="left">&nbsp;</td>
          </tr>
          <tr>
            <td align="right">Status :&nbsp;</td>
            <td colspan="2" align="left">
			 <select name="assign_status" id="assign_status">
                <option value="">Pending</option>
				<option value="Deliveried">Deliveried</option>
              </select>
			 <!-- <input name="assign_status" id="assign_status" value="<?php echo $res->post_status; ?>" type="text">-->
            </strong></td>
            <td colspan="2" align="right">Assigned To :&nbsp;</td>
            <td align="left"><select name="assign_to" id="assign_to">
			<option value="<?php echo $rees->emp_id; ?>">Take Job</option>
			<?php 
			$sel="Select * from employee where emp_id != '".$rees->emp_id."' ";
			$emp=mysql_query($sel);
			while($to=mysql_fetch_object($emp))
			{
			echo '<option value='.$to->emp_id.'>'.$to->emp_name.'</option>';
			}
			?>
				    </select></td>
          </tr>
          <tr>
            <td align="right">&nbsp;</td>
            <td colspan="2" align="left">&nbsp;</td>
            <td colspan="2" align="right">&nbsp;</td>
            <td align="left">&nbsp;</td>
          </tr>
          <tr>
		  <td align="left">&nbsp;</td>
		  <td width="20%" align="left">&nbsp;</td>
            <td colspan="2" align="center">
			  <input type="submit" name="submit2"  id="submit2" value="Submit" class="btn btn-info btn-block"/>
              <input type="hidden" name="submit" id="submit" value="assignSubmit" /></td>
            <td width="9%" align="center">&nbsp;</td>
            <td align="left">&nbsp;</td>
			</tr>
          <tr>
            <td colspan="6" align="center">&nbsp;</td>
          </tr>
	     </table></td></tr>
         <tr><td height="107">&nbsp;</td>
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

