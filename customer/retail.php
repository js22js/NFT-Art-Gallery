<?php
error_reporting(0);
ob_start(); 
session_start();

include_once "../db/db.php"; 
include "function.php";
$sql="select * from customer where user_name='".$_SESSION['user_name']."'";
$sqls=mysql_query($sql);
$rees=mysql_fetch_object($sqls);
?>


<html>
<head>
<title>NFT - Customer</title>
</head>

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../menu.css" />
<link rel="stylesheet" type="text/css" href="../style.css" />
<link href="../css/lightbox.css" rel="stylesheet" />
<link href="../css/align.css" rel="stylesheet" />
<script src="../js/jquery-1.7.2.min.js"></script>
<script src="../js/lightbox.js"></script>

<link rel="stylesheet" type="text/css" href="../pagination/pagination.css" />
<body>
<div id="total">
<form id="form1" name="form1" method="post" onSubmit="return valid()" action="process.php" enctype="multipart/form-data">
 <table width="100%" border="0" cellpadding="0px" cellspacing="0px" height="623" style="font-family:Arial, Helvetica, sans-serif;font-size:14px"> 
    <tr>
      <td width="91%" >
	  
	  
	   <div class="navbar navbar-fixed-top">  
		<div class="navbar-inner">  
		<div class="container">  
		<img src="../images/logo.png" style="height:50px;width:70px;float:left;"> 
		<div class="nav-collapse">  
		<ul class="nav">  
		
		<li ><a href="retail.php">Products</a></li> 
		<li class="divider-vertical"></li>
        
		<li><a href="profile.php">My Profile</a></li> 
		</ul>
	<ul class="nav pull-right">
	<li class="divider-vertical"></li>
	<li><a href="logout.php">Sign Out</a></li></ul>
		</div>
		</div>  
		</div>  
		</div>	  </td>
    </tr>
	<tr>
<td valign="top" align="right" style="color:#0088cc;font-size:14px;padding-right:20px">
Welcome&nbsp;<?php echo $rees->cust_name; ?></td>
</tr>
   
          
      <td height="350" colspan="2" align="center" valign="top">
	  <table width="100%" border="0" cellpadding="0px" cellspacing="0px">
        
          <tr>
            <td colspan="7" align="center">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="7" align="center"><img src="../images/product list 1.png" width="289" height="43"></td>
          </tr>
        
           <tr>
            <td colspan="7" align="center">
			<table width="95%" border="1" cellpadding="5px" cellspacing="1px">
               <tr bgcolor="#333333" style="color:#FFFFFF">
			    <?php
		 
   $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit =8;
		
    	$startpoint = ($page * $limit) - $limit;
        
        //to make pagination
        $statement = "`product` ";
		$where = "`prod_status` = 'ON'";
		
$sqlup="Select * from {$statement}
        where {$where} ORDER BY prod_name LIMIT {$startpoint},{$limit}";

	$we=mysql_query($sqlup);
	$cut=0;
  	$end=4;
	while($res=mysql_fetch_object($we))
{ 	
?>
    <?php if($cut ==$end){ ?></tr><tr bgcolor="#333333" style="color:#FFFFFF"><?php } ?>                     
				
                 <br> <td width="25%" align="center"><strong> <br>Prod Name:<?php echo $res->prod_name; ?><br>
                   Creator :<?php echo $res->prod_code; ?></strong><br>	
					<div class="single">	
		<br>			
  				  <img src="../products/<?php echo $res->prod_image; ?>" width="127" height="109" alt=""></div>
                <br>
<?php if( $res->prod_qty==1){?> 
<img src="../images/coins.png" width="45" height="45"> 
<span> <a href="cart.php?id=<?php echo $res->prod_id ?>&amp;Mode=Cart"> 
 <button type="button"><strong><?php echo $res->prod_rate; ?></strong></button></a></span>
<?php } else{?> <button type="button"><strong>SOLD OUT</strong></button><?php }?>
                   
					
</td>
                  
                <?php if($cut == $end) { $end+4; } $cut++; } ?>
				</tr>
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
  </tr>
  </table>
</form>
</div>
</body>


