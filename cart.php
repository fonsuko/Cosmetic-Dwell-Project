<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The Cosmetic</title>
<link rel="stylesheet" href="header.css">
</head>
<style type="text/css">
.bigfont{font-family:HelveticaNeue;color:#FFFFFF;font-size:24px;}
</style>
<body>
<?php
	$price=0;
	if ($_POST['add']=='SUNKISS RIBBON')
		{$price='70';}
	else if ($_POST['add']=='MINERALIZE BLUSH')
		$price='28';
	else if ($_POST['add']=='BLUSH AND BRONZER')
		$price='9';
	else if ($_POST['add']=='NARSISSIST DUAL-INTENSITY BLUSH PALETTE')
		$price='59';
	else if ($_POST['add']=='MOSAIC POWDER BLUSH')
		$price='7';
	else if ($_POST['add']=='NAKED FLUSHED')
		$price='32';
		
	else if ($_POST['add']=='LA PALETTE SOURCILS DE CHANEL')
		$price='50';
	else if ($_POST['add']=='BIG BROW PENCIL LINGERING')
		$price='21';
	else if ($_POST['add']=='BROW DRAMA POMADE CRAYON')
		$price='9.99';
	else if ($_POST['add']=='BROW GEL')
		$price='20';
	else if ($_POST['add']=='PUSH-UP BRA')
		$price='10';	
	else if ($_POST['add']=='BROW BEATER')
		$price='20';
		
	else if ($_POST['add']=='LA PALETTE SOURCILS DE CHANEL')
		$price='50';
	else if ($_POST['add']=='BIG BROW PENCIL LINGERING')
		$price='21';
	else if ($_POST['add']=='BROW DRAMA POMADE CRAYON')
		$price='9.99';
	else if ($_POST['add']=='BROW GEL')
		$price='20';
	else if ($_POST['add']=='PUSH-UP BRA')
		$price='10';	
	else if ($_POST['add']=='BROW BEATER')
		$price='20';
	
	else if ($_POST['add']=="L'INTEMPOREL DE CHANEL EYE SHADOW PALETTE")
		$price='80';
	else if ($_POST['add']=='MINERALIZE EYE SHADOW(QUAD)')
		$price='22';
	else if ($_POST['add']=='THE NUDES EYE SHADOW PALETTE')
		$price='11.99';
	else if ($_POST['add']=="INOUBLIABLE COUPD'OEIL EYE SHADOW PALETTE")
		$price='48';
	else if ($_POST['add']=='ULTIMATE SHADOW PALETTE')
		$price='18';	
	else if ($_POST['add']=='NAKED SMOKY EYE SHADOW PALETTE')
		$price='54';
	
	else if ($_POST['add']=="ROUGE ALLURE VELVET")
		$price='37';
	else if ($_POST['add']=='LIPSTICK / VIVA GLAM ARIANA GRANDE')
		$price='17';
	else if ($_POST['add']=='COLOR SENSATIONAL VIVID MATTE LIQUID')
		$price='7.99';
	else if ($_POST['add']=="SHEER LIPSTICK")
		$price='28';
	else if ($_POST['add']=='MATTE LIPSTICK')
		$price='7';	
	else if ($_POST['add']=='VICE LIPSTICK')
		$price='17';
	
	else if ($_POST['add']=="POUDRE UNIVERSELLE LIBRE")
		$price='52';
	else if ($_POST['add']=='BLOT POWDER / LOOSE')
		$price='27';
	else if ($_POST['add']=='FIT ME SET + SMOOTH POWDER')
		$price='7.99';
	else if ($_POST['add']=="SOFT VELET LOOSE POWDER")
		$price='37';
	else if ($_POST['add']=='MINERAL FINISHING POWDER')
		$price='10';	
	else if ($_POST['add']=='NAKED SKIN')
		$price='34';
?>
<form action="cart_show.php" method="POST">
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
  	<td bgcolor="#212121" colspan="3"class="bigfont">&nbsp;Product name</td>
    <td bgcolor="#212121" class="bigfont">Price</td>
    <td bgcolor="#212121" class="bigfont">Quantity</td>    
  </tr>
  <tr>
  	<td colspan="3">&nbsp;&nbsp;<?php echo $_POST['add']?></td>
    <td ><?php echo "$".$price?></td>
    <td >    	        
    	<select name="quantity">
        	<option value=1 selected="true">1</option>
            <option value=2>2</option>
            <option value=3>3</option>
            <option value=4>4</option>
        </select>                    
    </td> 
  </tr>
  <tr>
  	<td colspan="5"class="bigfont">&nbsp;</td>
  </tr>
  <tr>
  	<td colspan="4"class="bigfont">&nbsp;</td>
    <td align="center"><input type="image" name="price" value="<?php echo $price ?>" img src="images/button_buy.png"/></td>
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