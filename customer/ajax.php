<?php 
ob_start(); 
session_start();
include_once "../db/db.php"; 
include "function.php";
?>
<link type="text/css" href="../../query_answering/pagination/pagination.css" rel="stylesheet" />
<?php
if($_GET['cust_id'])
{
$query="SELECT * FROM customer WHERE cust_id='".$_GET['cust_id']."'";
$result=mysql_query($query);
$row=mysql_fetch_object($result);
echo "<input type='hidden' name='customer_id' id='customer_id' value='".$row->cust_id."'>";
if($row > 0)
{
echo "The Id <font color='#CC0000'><strong>".$_GET['cust_id']."</strong></font> is already exist. Please try another Id";
}
}
if($_GET['cust_name'])
{
$query="SELECT * FROM customer WHERE user_name='".$_GET['cust_name']."'";
$result=mysql_query($query);
$row=mysql_fetch_object($result);
echo "<input type='hidden' name='customer_name' id='customer_name' value='".$row->user_name."'>";
if($row > 0)
{
echo "The Id <font color='#CC0000'><strong>".$_GET['cust_name']."</strong></font> is already exist. Please try another User Name";
}
}
if($_GET['comp_id'])
{
$str=explode('=',$_GET['comp_id']);

$sqledit="UPDATE ".$_SESSION['user_name']."_product SET  `prod_qty` = '".$str[0]."'
	where prod_id='".$str[1]."' ";
	mysql_query($sqledit);
	
?>	
<?php	
}
if($_GET['cash_id'])
{
if($_GET['cash_id']=='Cash On Delivery')
{
?>
&nbsp;
<?php
}else
{
?>
<table width="100%" align="right">
 <tr bgcolor="#333333">
   <td width="30%" align="right">&nbsp;</td>
   <td colspan="2">&nbsp;</td>
   <td width="26%">&nbsp;</td>
 </tr>
 <tr bgcolor="#333333" style="color:#FFFFFF">
   <td width="30%" align="right"><strong>Card Type  :&nbsp;</strong></td>
   <td colspan="2"><select name="bill_mode" id="bill_mode">
   <option value="">Select The Card Type</option>
   <option value="MASTER CARD">MASTER CARD</option>
   <option value="VISA">VISA</option>
   <option value="AMEX">AMEX</option>
   <option value="DISCOVER">DISCOVER</option>
   </select></td>
   <td width="26%" align="left"><img src="../images/index_70.gif"></td>
 </tr>
 <tr bgcolor="#333333" style="color:#FFFFFF">
   <td align="right">&nbsp;</td>
   <td colspan="3">&nbsp;</td>
 </tr>
 <tr bgcolor="#333333" style="color:#FFFFFF">
   <td align="right"><strong>Card No :&nbsp;</strong></td>
   <td colspan="3"><input type="text" name="bill_card" id="bill_card"></td>
 </tr>
 <tr bgcolor="#333333" style="color:#FFFFFF">
   <td align="right">&nbsp;</td>
   <td colspan="3">&nbsp;</td>
 </tr>
 </table>
<?php
}
}

?>