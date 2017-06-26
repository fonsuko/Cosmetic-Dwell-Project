<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The Cosmetic</title>
<link rel="stylesheet" href="header.css">
</head>
<style type="text/css">
.bigfont{text-align:center;font-family:prototype;color:#FFFFFF;font-size:24px;}
.smallfont{text-align:center;font-family:prototype;color:#212121;font-size:24px;}
</style>
<body>

<table width="1024" border="0" align="center" frame="void">
  <tr>
    <th colspan="5"><img src="images/main_01.png" width="1023" height="51" usemap="#Map" border="0" /></th>
  </tr>
  <tr>
    <th colspan="5"><a href="TheCosmetic.php"><img src="images/main_04.png" width="1024" height="153" /></a></th>
  </tr>
  <tr>
    <th width="203"><a href="blush.php"><img src="images/main_05.png" width="203" height="47" /></a></th>
    <td width="204"><a href="eyebrow.php"><img src="images/main_06.png" width="203" height="47" /></a></td>
    <td width="204"><a href="eyeshadow.php"><img src="images/main_07.png" width="203" height="47" /></a></td>
    <td width="204"><a href="lipstick.php"><img src="images/main_08.png" width="203" height="47" /></a></td>
    <td width="200"><a href="powder.php"><img src="images/main_09.png" width="200" height="47" /></a></td>
  </tr>
  <tr>
    <th colspan="5" ><img src="images/main_10.png" width="1024" height="4" /></th>
  </tr>
  <tr>
  	<td colspan="5"class="bigfont">&nbsp;</td>
  </tr>
  <tr>
  	<td >&nbsp;</td>
  	<td colspan="3" bgcolor="#212121" class="bigfont">Total</td>
    <td >&nbsp;</td>
  </tr>    
  <tr>
  	<td >&nbsp;</td>
  	<td colspan="3" bgcolor="#efefef" class="smallfont" >
    <?php	
	if (isset($_POST['price'])&& isset($_POST['quantity']))
	{	$price=(float)($_POST['price']);
		 $quantity=(float)($_POST['quantity']);
		 (float)$total=$price*$quantity;
		 echo "$".$total;		 	
	}		
	?>    
	</td>  
  <tr>
  	<td colspan="5" >&nbsp;</td>
  </tr>
  <tr>
  	<td >&nbsp;</td>
  	<td colspan="3"  class="bigfont"><a href="https://www.paypal.com/home"><img src="images/button_confirm.png"/></a></td>
    <td >&nbsp;</td>  	
  </tr>
  <tr>
  	<td colspan="5"class="bigfont">&nbsp;</td>
  </tr>  
</table>
</form>
<map name="Map" id="Map"><area shape="rect" coords="927,6,968,43" href="cart.php" /><area shape="rect" coords="806,7,912,42" href="contact_us.php" />
     <area shape="rect" coords="983,6,1019,42" href="sign_in.php" />
     <area shape="rect" coords="927,6,968,43" href="cart.php" />
  	 <area shape="rect" coords="806,7,912,42" href="contact_us.php" />
</map>
<div id="footer1">
		<center>
		&nbsp;
		</center>
	</div>
	<div id="footer2">
		<center>
		The Cosmetic&copy; Tel. 02-3456789 E-mail:thecosmetic@gmail.com
		</center>
	</div>
</body>
</html>