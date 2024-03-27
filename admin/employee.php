<?php
error_reporting(0);
ob_start(); 
session_start();
include_once "../db/db.php"; 
$sql="select * from admin where user_name='".$_SESSION['user_name']."'";
$sqls=mysql_query($sql);
$rees=mysql_fetch_object($sqls);



if($_GET['Mode'] =="Edit") {
	$sqlup="Select * from employee
	where emp_id='".$_REQUEST['id']."' ";
	//echo $sqlup;
	//exit;
	$we=mysql_query($sqlup);
	$res=mysql_fetch_object($we);
}

if($_GET['Mode'] =="Delete") {
	$sqldel="Delete from employee
	where emp_id='".$_REQUEST['id']."' ";
	//echo $sqldel;
	//exit;
	mysql_query($sqldel);
	
    
	echo "<meta http-equiv='refresh' content='0;url=./employee/index.php'>";
	}

?>

<html>
<head><title>NFT- Employee</title>
</head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../menu.css" />
<link rel="stylesheet" type="text/css" href="../style.css" />
<link href="../css/align.css" rel="stylesheet" />
<script type="text/javascript" src="../jquery.js"></script>
<script type="text/javascript" src="../menu.js"></script>
<body>
<div id="total">
<form id="form1" name="form1" method="post" onSubmit="return valid()" action="process.php" enctype="multipart/form-data">

<table width="100%" border="0" cellpadding="0px" cellspacing="0px" height="505" style="font-family:Arial, Helvetica, sans-serif;font-size:14px">

<tr>
<td>
<div class="navbar navbar-fixed-top">  
		<div class="navbar-inner">  
		<div class="container">  
		<img src="../images/logo.png" style="height:50px;width:70px;float:left;"> 
		
		<div class="nav-collapse">  
		<ul class="nav">  
		<li><a href="employee.php">WELCOME CREATOR</a></li>  
		
                </li> 
		</ul>
	
		</div>
		</div>  
		</div>  
		</div>  
		
</td>
</tr>

 
<tr>
<td height="350" colspan="2" align="center"> 
	<table width="100%" border="0" cellpadding="0px" cellspacing="0px" style="font-size:14px;" >

	
	<tr>
	  <td colspan="4" align="center">&nbsp;</td>
	  </tr>
	 <tr>
            <td colspan="7" align="center">
			 <font style="font-family:Hobo Std;font-weight:bold;font-size:30px;color:#000000">CREATOR REGISTRATION</font><br>
<strong>NOTE ~ For Creating a NFT and Publishing it for sale in our website will ask you  to pay an amount of :  <img src="../images/coins.png" width="45" height="45"> <span>0.04273 </strong></span> 
			</td>
          </tr>

<tr>
   <td colspan="2" align="right" > </td></tr>
	
	<tr>
	  <td colspan="4" align="center"><input type="hidden" name="id" id="id" value="<?php echo $_REQUEST['id']; ?>">
	    <input type="hidden" name="Mode" id="Mode" value="<?php echo $_REQUEST['Mode']; ?>"></td>
	  </tr>
	<tr>
	  <td width="23%" align="right" valign="middle"><strong> Name :&nbsp;</strong> </td>
	  <td width="22%" align="left" valign="middle">
	  <input type="text" name="emp_name" id="emp_name" value="<?php echo $res->emp_name; ?>"></td>
	  <td width="13%" align="right" valign="middle"><strong>ID:&nbsp;</strong> </td>
	  <td width="42%" align="left" valign="middle">
	  <input type="text" name="emp_code" id="emp_code" onBlur="check(this.value)" value="<?php echo $res->emp_code; ?>"></td>
	</tr>
	<tr>
	  <td align="center">&nbsp;</td>
	  <td align="center">&nbsp;</td>
	  <td align="center">&nbsp;</td>
	  <td align="center"><div id="custdiv"></div></td>
	</tr>
	<tr>
	  <td align="right" valign="middle"><strong>Designation :&nbsp;</strong> </td>
	  <td align="left" valign="middle">
	  <input type="text" name="emp_desc" id="emp_desc" value="<?php echo $res->emp_desc; ?>"></td>
	  <td align="right" valign="middle"><strong>Address :&nbsp;</strong> </td>
	  <td align="left" valign="middle">
	  <textarea name="emp_address" id="emp_address"><?php echo $res->emp_address; ?></textarea>	  </td>
	</tr>
<tr>
	  <td align="center">&nbsp;</td>
	  <td align="center">&nbsp;</td>
	  <td align="center">&nbsp;</td>
	  <td align="center">&nbsp;</td>
	</tr>
	<tr>
	  <td align="right" valign="middle"><strong>Phone No  :&nbsp;</strong> </td>
	  <td align="left" valign="middle">
	  <input type="text" name="emp_phone" id="emp_phone" value="<?php echo $res->emp_phone; ?>"></td>
	  <td align="right" valign="middle"><strong>Email id  :&nbsp;</strong> </td>
	  <td align="left" valign="middle">
	  <input type="text" name="emp_email" id="emp_email" value="<?php echo $res->emp_email; ?>"></td>
	</tr>
<tr>
	  <td align="center">&nbsp;</td>
	  <td align="center">&nbsp;</td>
	  <td align="center">&nbsp;</td>
	  <td align="center">&nbsp;</td>
	</tr>
	<tr>
	  <td align="right" valign="middle"><strong>User Name   :&nbsp;</strong> </td>
	  <td align="left" valign="middle">
	  <input type="text" name="emp_uname" id="emp_uname" onBlur="check2(this.value)" value="<?php echo $res->user_name; ?>"></td>
	  <td align="right" valign="middle"><strong>Password  :&nbsp;</strong> </td>
	  <td align="left" valign="middle">
	  <input type="password" name="emp_pwd" id="emp_pwd" value="<?php echo $res->user_pwd; ?>"></td>
	</tr>



<tr>
   <td align="right" valign="middle"><strong>Choose Wallet :&nbsp;</strong> </td>
   <td colspan="3" align="left">
  <button class="btn btn-success" onclick="window.open('https://metamask.io/download/','_blank')"><strong>Meta Mask</strong></button>
  <button class="btn btn-success" onclick="window.open('https://www.coinbase.com/signin','_blank')"><strong>Coinbase</strong></button>
  <button class="btn btn-success" onclick="window.open('https://rainbow.me/','_blank')"><strong>Rainbow</strong></button>
  <button class="btn btn-success" onclick="window.open('https://authereum.com/login','_blank')"><strong>Authereum</strong></button>
<button class="btn btn-success" onclick="window.open('https://wallet.portis.io/login','_blank')"><strong>Portis</strong></button>	</tr>
	
<tr>
	  <td align="center">&nbsp;</td>
	  <td colspan="3" align="left"><div id="custdiv2"></div></td>
	  </tr>
	<tr >
	<td align="center">&nbsp;</td>
	<td align="center">&nbsp;</td>
	  <td align="center" valign="middle">
  <input type="submit" name="submit"  id="submit" class="btn btn-info btn-block"
  value="<?php if($_GET['Mode'] == "Edit") { echo "Update";} else { echo "Register";} ?>" style="font-weight:bolder"/>
	
  <input type="hidden" name="submit" id="submit" 
  value="<?php if($_GET['Mode'] == "Edit") { echo "empUpdate";} else { echo "empSubmit"; } ?>" /></td>
<td align="center">&nbsp;</td>
	  </tr>
	<tr><td height="55" colspan="7">&nbsp;</td>
	</tr>
	</table></td>
</tr>


 

  <tr style="border-top:thick;color:#999999">
    <td height="35" colspan="2" align="center" style="font-size:12px">
	<hr color="#CCCCCC">
	<strong></strong></td>
  </tr>
  

</table>
</form>
</div>
</body>
</html>
<script type="text/javascript">

function check(custId) {	
	
	xmlhttp=new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

						document.getElementById('custdiv').innerHTML=xmlhttp.responseText;						
				
				}				
			}
			xmlhttp.open("GET","ajax.php?cust_id="+custId, true);
			xmlhttp.send(null);
		}		
		
		function check2(custName) {	
		
	xmlhttp=new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

						document.getElementById('custdiv2').innerHTML=xmlhttp.responseText;						
				
				}				
			}
			xmlhttp.open("GET","ajax.php?cust_name="+custName, true);
			xmlhttp.send(null);
		}		
		
		
var frm = document.form1;

function valid(){

if(frm.emp_name.value =="") { alert("Please Enter  Name"); frm.emp_name.focus(); return false }

if(frm.emp_code.value =="") { alert("Please Enter ID"); frm.emp_code.focus(); return false }

if(frm.customer_id.value !="") { alert("Please Enter Valid ID"); frm.emp_code.focus(); return false }

if(frm.emp_desc.value =="") { alert("Please Enter Designation"); frm.emp_desc.focus(); return false }

if(frm.emp_address.value =="") { alert("Please Enter Address"); frm.emp_address.focus(); return false }

if(frm.emp_phone.value =="") { alert("Please Enter Phone Number"); frm.emp_phone.focus(); return false }

if(frm.emp_email.value =="") { alert("Please Enter Email Id"); frm.emp_email.focus(); return false }

if(frm.emp_uname.value =="") { alert("Please Enter User Name"); frm.emp_uname.focus(); return false }

if(frm.customer_name.value !="") { alert("Please Enter Valid User Name"); frm.emp_uname.focus(); return false }

if(frm.emp_pwd.value =="") { alert("Please Enter Password"); frm.emp_pwd.focus(); return false }

}
</script>
