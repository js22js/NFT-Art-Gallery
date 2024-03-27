<?php
error_reporting(0);
ob_start(); 
session_start();
include_once "db/db.php"; 

?>

<html>
<head><title>Art-Gallery ( NFT )</title>
</head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link href="style.css" rel="stylesheet"> 
<script src="js/jquery.js"></script>  
<script src="js/bootstrap-transition.js"></script>  
<script src="js/bootstrap-alert.js"></script>  
<script src="js/bootstrap-modal.js"></script>  
<script src="js/bootstrap-dropdown.js"></script>  
<script src="js/bootstrap-scrollspy.js"></script>  
<script src="js/bootstrap-tab.js"></script>  
<script src="js/bootstrap-tooltip.js"></script>  
<script src="js/bootstrap-popover.js"></script>  
<script src="js/bootstrap-button.js"></script>  
<script src="js/bootstrap-collapse.js"></script>  
<script src="js/bootstrap-carousel.js"></script>  
<script src="js/bootstrap-typeahead.js"></script> 
<body>
<div id="total">
<form id="form1" name="form1" method="post" action="index.php" enctype="multipart/form-data">

<table width="100%" border="0" cellpadding="0px" cellspacing="0px" height="505" style="font-family:Arial, Helvetica, sans-serif;font-size:14px">

<tr>
<td>
<div class="navbar navbar-fixed-top">  
		<div class="navbar-inner">  
		<div class="container">  

		<img src="./images/logo.png" style="height:50px;width:70px;float:left;"> 
		<div class="nav-collapse">  
		<ul class="nav">  
		<li ><a href="index.php">Home</a></li>
		<li class="divider-vertical"></li>    
		<li><a href="wallets.php">Wallets Trusted Us</a></li>  
		<li class="divider-vertical"></li>
		</ul>
		<ul class="nav pull-right">
				
	            <li><a href="admin/index.php">Admin</a></li>
                           <li class="divider-vertical"></li>
				<li class="dropdown" id="accountmenu"> 
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Create<b class="caret"></b></a>
				 <ul class="dropdown-menu">
				<li><a href="./admin/employee.php">Sign up</a></li>  
				 <li><a href="employee/index.php">Sign in</a></li></ul>
				<li class="divider-vertical"></li>
				<li class="dropdown" id="accountmenu"> 
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Buy<b class="caret"></b></a>
				 <ul class="dropdown-menu">   
				<li><a href="customer/register.php">Sign Up</a></li>
				<li><a href="customer/index.php">Sign in</a></li>   </ul>  
				
				</li></ul>
		</div>
		</div>  
		</div>  
		</div>  
		
</td>
</tr>
 <tr><td><img src="nft.jpg" width="100%"></td></tr>
<tr>
<td height="160" width="100%" align="center" valign="top">
<table width="100%" height="100%" border="0" cellpadding="5px" cellspacing="0px" style="font-family:Arial, Helvetica, sans-serif;" >
	
	<tr>
	  <td colspan="3" align="left">
	  <h1 style="color:#FF5500;font-size:40px;">Non-Fungible Tokens ( NFT ) :</h1>  <br><br>
                <h1 font-size:40px;">What is an NFT?</h1>  <br>
<p style="font-size:18px">Non-Fungible Tokens, also known as NFT, and Cryptoart are emerging terms in the digital world. <br></br>An NFT is a Non Fungible Token or a cryptographic token that represents something unique. It is a unique and non-interchangeable unit of data that can’t be replaced with something else. <br><br>NFTs don’t have to be an art,somethings like the followings can be NFT's too:


<ol><li><a href="https://www.cnbc.com/2021/03/22/twitter-ceo-jack-dorseys-first-tweet-nft-sells-for-2point9-million.html">  Twitter CEO Jack Dorsey selling his first Tweet</a></li>
<li><a href="https://www.business2community.com/nft-news/will-smith-slap-nfts-02462290"> Will Smith's Slap in Oscar event</a></li>
<li><a href="https://hypebeast.com/2021/8/spider-man-marvel-first-official-nft-release-date"> Marvel's First ever NFT</a></li></ol><br><br>

 A new market for Cryptoart has opened up off the back of the development of NFTs.
<br><br></p>
<h1 font-size:40px;">What is NFT art?</h1>
<p style="font-size:18px">Cryptoart is a digital art form that is "minted" using NFT technology. Its value is in the blockchain, which allows the art to have a digital certificate, this certificate allows:<br>
<ul><li>Transparency: you can know every buyer who has owned the artistic work over time.</li><li>Ownership: the owner of the art piece can guarantee the work is authentic and they are the sole owner.</li>
<li>Copyrights: The artist or creator of the work may receive a share of each sale of the work over time.</li></ul><br><br></p>
<p style="font-size:18px">This means that you can own the original code for a digital artwork. In a similar way that if you own an original Picasso it still retains its value even if copies are made, NFT technology allows artists and collectors to have proof of authenticity for online digital artworks, and thus enables the digital art to retain its value.<br>
	</p><br><br>
<p style="font-size:18px">An NFT can only have one owner at a time. Ownership is managed through the uniqueID and metadata that no other token can replicate. NFTs are minted through smart contracts that assign ownership and manage the transferability of the NFT's. When someone creates or mints an NFT, they execute code stored in smart contracts that conform to different standards, such as ERC-721. This information is added to the blockchain where the NFT is being managed. The minting process, from a high level, has the following steps that it goes through:<br>
</p><ul><li>Creating a new block</li>
    <li>Validating information</li>
    <li>Recording information into the blockchain</li></ul><br>
<p style="font-size:18px">NFT's have some special properties:</p><br>
<ul><li>Each token minted has a unique identifier that is directly linked to one Ethereum address.</li>
    <li>They're not directly interchangeable with other tokens 1:1. For example 1 ETH is exactly the same as another ETH. This isn't the case with NFTs.</li>
    <li>Each token has an owner and this information is easily verifiable.</li>
    <li>They live on Ethereum and can be bought and sold on any Ethereum-based NFT market.</li></ul><br>
</p></td></tr>
 <tr><td><img src="certify.jpg" width="100%" ></td></tr>
	<tr>
	  <td align="center" valign="middle">&nbsp;</td>
	  <td align="center" valign="middle">&nbsp;</td>
	  <td align="center" valign="middle">&nbsp;</td>
	  </tr>
<tr>
<td colspan="3" align="left">
 <h1 font-size:40px;">What can be a NFT?</h1>
<p style="font-size:18px"><ol><li>Digital Art:</li><br>
<ul><li>GIFs</li>
    <li>Collectibles</li>
    <li>Music</li>
    <li>Videos</li></ul><br>
<li>Real World Items:</li><br>
<ul><li>Deeds to a car</li>
    <li>Tickets to a real world event</li>
    <li>Tokenized invoices</li>
    <li>Legal documents</li>
    <li>Signatures</li></ul><br>
<li>Lots and lots more options to get creative with!</li></ol></p></td></tr>

<p style="font-size:18px"> 
	</table>
</td>
</tr>


<tr><td colspan="2"><hr color="#CCCCCC"></td>
  
 

  <tr style="border-top:thick;color:#999999">
    <td height="35" colspan="2" align="center" style="font-size:12px"><strong></strong></td>
  </tr>
  

</table>
</form>
</div>
</body>
</html>
<?php
if(isset($_REQUEST['submit']))
{
$user_type=$_REQUEST['user_type'];
$user_id=$_REQUEST['user_name'];
$user_pwd=$_REQUEST['user_pwd'];
$_SESSION['user_name']=$_POST['user_name'];


if($user_id=='')
{
	echo "<script type='text/javascript'> alert('Enter User Name');</script>";
}

elseif($user_pwd=='')
{
	echo "<script type='text/javascript'> alert('Enter Password');</script>";
}
elseif($user_type=='')
{
	echo "<script type='text/javascript'> alert('Select Access Type');</script>";
}
elseif($user_type=='staff')
{

$sqlup="Select user_name,user_pwd from staff
	where user_name='".$user_id."' AND user_pwd='".$user_pwd."'";
	//echo $sqlup;
	
	$we=mysql_query($sqlup);
	$res=mysql_fetch_object($we);

if($res->user_name==$user_id && $res->user_pwd ==$user_pwd)
{
	echo "<script type='text/javascript'> alert('Successful Login');</script>";

	echo "<meta http-equiv='refresh' content='0;url=staff/profile.php'>";
}

}
elseif($user_type=='student')
{

$sqlup="Select user_name,user_pwd from student
	where user_name='".$user_id."' AND user_pwd='".$user_pwd."'";
	//echo $sqlup;
	
	$we=mysql_query($sqlup);
	$res=mysql_fetch_object($we);

if($res->user_name==$user_id && $res->user_pwd ==$user_pwd)
{
	echo "<script type='text/javascript'> alert('Successful Login');</script>";

	echo "<meta http-equiv='refresh' content='0;url=student/profile.php'>";
}

}
else
{
	echo "<script type='text/javascript'> alert('Invalid Login');</script>";
}
}
?>