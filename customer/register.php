<?php
error_reporting(0);
ob_start(); 
session_start();
include_once "../db/db.php"; 

?>

<html>
<head><title>NFT- Customer</title>
</head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../menu.css" />
<link rel="stylesheet" type="text/css" href="../style.css" />
<link rel="stylesheet" type="text/css" media="all" href="../js/jsDatePick_ltr.min.css" />
<script type="text/javascript" src="../js/jsDatePick.min.1.3.js"></script>
<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"inputField",
			dateFormat:"%d-%M-%Y"
	
		});
	};
</script>
<body>
<div id="total">
<table width="100%" border="0" cellpadding="0px" cellspacing="0px" height="505" style="font-family:Arial, Helvetica, sans-serif;font-size:14px">

<tr>
<td>
<div class="navbar navbar-fixed-top">  
		<div class="navbar-inner">  
		<div class="container">  

		<img src="../images/logo.png" style="height:50px;width:70px;float:left;"> 
		<div class="nav-collapse">  
		<ul class="nav">  
		<li ><a href="#">Hello there, Newbie.</a></li>
		<li class="divider-vertical"></li>    
		<li><a href="../index.php">Cancel Registration</a></li>  
		
		</ul>
		
		</div>
		</div>  
		</div>  
		</div>  
		
</td>
</tr>
 
<tr>
 
<tr>
<td height="350" colspan="2" align="center" valign="top">
		<div class="container"  >  
<div class="well">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">Register</a></li>
    </ul>
      <div class="tab-pane active in" id="home" align="left">
 <form id="form1" name="form1" method="post" onSubmit="return valid()" action="process.php" enctype="multipart/form-data">
   <label> &nbsp;</label>

 <label>Name</label>
 <label>
 <input type="text" name="cust_name" id="cust_name" class="input-xlarge">
 </label>
 <label>Id
  </label>
 <label>
  <input type="text" name="cust_id" id="cust_id" onBlur="check(this.value)" class="input-xlarge" >
</label>

	   <label id="checkId"><div id="custdiv"></div></label>
	   
<label>User Name
 </label>
 <label>
<input type="text" name="cust_uname" id="cust_uname" onBlur="check2(this.value)" class="input-xlarge" >
</label>

	   <label id="checkId"><div id="custdiv2"></div></label>
<label>
Password
 </label>
 <label>
<input type="password" name="cust_pwd" id="cust_pwd" class="input-xlarge" >
</label>
<label>Date of Birth</label>
 <label>
<input type="text" name="cust_age" id="inputField" placeHolder="DD-MON-YYYY">
</label>

<label>Gender
 </label>
 <label>
<select name="cust_gender" id="cust_gender" class="input-xlarge" >
				       <option value="">Select Gender</option>
					   <option value="Male">Male</option>
					   <option value="Female">Female</option>
	    </select>	 
</label>		

<label>Phone No
 </label>
 <label>
<input type="text" name="cust_phone" id="cust_phone" class="input-xlarge" >
</label>
<label>
Address
</label>
 <label>
 <textarea name="cust_address" id="cust_address" class="input-xlarge" ></textarea>
</label>
<label>Email - id
</label>
 <label>
	  <input type="text" name="cust_email" id="cust_email" class="input-xlarge" >
</label>	  
<label>
	<input type="submit" name="submit" id="submit" value="Register" class="btn btn-primary">
	  					<input type="hidden" name="submit" id="submit" value="regSubmit">
</label>
	</form>
	</div></div></div>
	</td>
</tr>

  <tr>
<td align="center" style="font-size:12px; color:#999999"><hr color="#CCCCCC">
<strong>Copy Rights @ 2013 All Rights Reserved</strong></td>
  </tr>
</table>

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

if(frm.cust_name.value =="") { alert("Please Enter Name"); frm.cust_name.focus(); return false }

if(frm.cust_id.value =="") { alert("Please Enter ID"); frm.cust_id.focus(); return false }

if(frm.customer_id.value !="") { alert("Please Enter Valid ID"); frm.cust_id.focus(); return false }

if(frm.cust_uname.value =="") { alert("Please Enter User Name"); frm.cust_uname.focus(); return false }

if(frm.customer_name.value !="") { alert("Please Enter Valid User Name"); frm.cust_uname.focus(); return false }

if(frm.cust_pwd.value =="") { alert("Please Enter Password"); frm.cust_pwd.focus(); return false }

if(frm.cust_age.value =="") { alert("Please Enter Age"); frm.cust_age.focus(); return false }

if(frm.cust_gender.value =="") { alert("Please Select Gender"); frm.cust_gender.focus(); return false }

if(frm.cust_phone.value =="") { alert("Please Enter Phone No"); frm.cust_phone.focus(); return false }

if(frm.cust_address.value =="") { alert("Please Enter Address"); frm.cust_address.focus(); return false }

if(frm.cust_email.value =="") { alert("Please Enter E mail Id"); frm.cust_email.focus(); return false }
}


</script>

