<?php 
ob_start(); 
session_start();
include_once "../db/db.php"; 
include "function.php";
?>
<link type="text/css" href="../../query_answering/pagination/pagination.css" rel="stylesheet" />
<?php
if($_GET['comp_id'])
{
?>

 <table width="95%" border="1" cellpadding="5px" cellspacing="1px" style="font-size:14px">
        <tr bgcolor="#333333" style="color:#FFFFFF">
          <td width="20%" align="center"><strong>Name</strong></td>
          <td width="13%" align="center" valign="middle"><strong>Complaint Type </strong></td>
          <td width="28%" align="center" valign="middle"><strong>Complaint</strong></td>
          <td width="13%" align="center" valign="middle"><strong>Status</strong></td>
          <td width="26%" align="center" valign="middle"><strong>Action</strong></td>
        </tr>
        <?php
		 if($_GET['comp_id'] == 'All')
		 {
		 $sqlup="Select * from complaint
        where `comp_status` = 'Not Solved' ORDER BY comp_id desc ";
		 }else
		 {
$sqlup="Select * from complaint
        where `comp_status` = 'Not Solved' AND `comp_type` = '".$_GET['comp_id']."' ORDER BY comp_id desc ";
	}//echo $sqlup;
	//exit;
	$we=mysql_query($sqlup);
	
	while($res=mysql_fetch_object($we))
{
$sel="Select * from customer where `cust_id` = '".$res->comp_by."' ";

		$name=mysql_query($sel);
		$cus=mysql_fetch_object($name);
?>
        <tr>
          <td width="20%" align="center"><strong><?php echo $cus->user_name; ?></strong></td>
          <td align="center"><strong><?php echo $res->comp_type; ?></strong></td>
          <td align="center"><strong><?php echo $res->comp_comp; ?></strong></td>
          <td align="center"><strong><?php echo $res->comp_status; ?></strong></td>
          <td align="center" valign="middle">
		   <a href="comp.php?id=<?php echo $res->comp_id; ?>&amp;Mode=Edit">
	 <img src="../images/editform.png" width="26" height="26" /></a>
	  <img src="../images/space.png" />
	  <a href="comp.php?id=<?php echo $res->comp_id; ?>&Mode=Delete" onClick="return confirm(' Are You Sure To Delete? ');" >
	  <img src="../images/deleteform.png" width="26" height="26" /></a>		  </td>
        </tr>
        <?php } ?>
      </table></td>
	</tr>
	<tr><td colspan="7">&nbsp;</td>
	</tr>
	</table>
<?php
}

if($_GET['cust_id'])
{
$query="SELECT * FROM employee WHERE emp_code='".$_GET['cust_id']."'";
$result=mysql_query($query);
$row=mysql_fetch_object($result);
echo "<input type='hidden' name='customer_id' id='customer_id' value='".$row->emp_code."'>";
if($row > 0)
{
echo "The Id <font color='#CC0000'><strong>".$_GET['cust_id']."</strong></font> is already exist. Please try another Employee Code";
}
}
if($_GET['cust_name'])
{
$query="SELECT * FROM employee WHERE user_name='".$_GET['cust_name']."'";
$result=mysql_query($query);
$row=mysql_fetch_object($result);
echo "<input type='hidden' name='customer_name' id='customer_name' value='".$row->user_name."'>";
if($row > 0)
{
echo "The Id <font color='#CC0000'><strong>".$_GET['cust_name']."</strong></font> is already exist. Please try another User Name";
}
}

?>	
