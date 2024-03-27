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
<head><title>NFT - Admin</title>
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
	<table width="100%" border="0" cellpadding="0px" cellspacing="0px" style="font-size:16px">
	
	<tr>
	  <td colspan="7" align="center"><img src="../images/comp.png" width="200" height="30"></td>
	  </tr>
	<tr>
	  <td colspan="7" align="left" style="padding-left:25px">
	  <a href="employee.php" style="text-decoration:none"></a>	  &nbsp;</td>
	  </tr>
	<tr>
	  <td colspan="6" align="right" ><strong>Complaint Type :&nbsp; 
	    <select name="comptype" id="comptype" onChange="check(this.value)">
		<option value="">Select Type</option>
		<option value="All">ALL</option>
		<option value="General">GENERAL</option>
	      </select>
	  </strong> </td>
	  <td width="53%" align="left" >&nbsp;</td>
	</tr>
	<tr>
	  <td colspan="7" align="center"><div id="compdiv"></div></td>
	</tr>
	<tr><td colspan="7">&nbsp;</td>
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