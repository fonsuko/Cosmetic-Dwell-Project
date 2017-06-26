<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The Cosmetic</title>
</head>
<link rel="stylesheet" href="header.css">
<style type="text/css">
.subheader{font-family:prototype;font-size:36px;text-align: left;color:#212121;}
.subcontent{font-family:prototype;font-size:20px;text-align: left;color:#FFFFFF;}
.anscontent{font-family:qontra;font-size:20px;text-align: left;color:#212121;}
.setcenter{font-family:qontra;text-align: center;color:#F66;}
.grayinfo{font-family:qontra;text-align:left;color:#212121;}
.error{color:#900;text-align:center;font-family:qontra;font-size:36px;}
.pass{color:#090;text-align:center;font-family:qontra;font-size:36px;}
</style>
<body>
<table width="1034" border="0" align="center" frame="void">
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
    <th colspan="5"><img src="images/main_10.png" width="1024" height="4" /></th>
  </tr>  
  <tr>
  	<th colspan="5"class="subheader">&nbsp;&nbsp;Sign up</th>
  </tr>  	
  <tr>
  	<form action="sign_up.php" method="POST">
    <table align="center" bgcolor="212121" >
  		<tr>
    		<th colspan="4" height="15px">&nbsp;</th>
  		</tr>
      	<tr>
           	<td rowspan="25" width="15"></td>                
			<td class="subcontent">Title : </td>
			<td rowspan"16"class="subcontent">&nbsp;</td>              	
            <td rowspan="25" width="604"align="center"><img src="images/test2.png" width="619" height="750" /></td>
            <td rowspan="25" width="10"></td>  
       	</tr>
        <tr>  
        	<td>        	  	              
				<select name="title">
					<option value="Mr.">Mr.</option>
					<option value="Mrs.">Mrs.</option>
					<option value="Ms.">Ms.</option>
				</select>	
            </td>                               		 
        </tr>
        <tr>
    		<th>&nbsp;</th>
  		</tr>                         
        <tr>           	  	              
			<td class="subcontent">First Name : </td>				 
        </tr>             
        <tr>   
            <td class="anscontent"><input type="text" size="50" name="firstname" value="First name" class="grayinfo" /></td>
            <td class="anscontent">&nbsp;</td>
      	</tr>
        <tr>
    		<th>&nbsp;</th>
  		</tr>
        <tr>
            <td class="subcontent">Last Name : </td>              	
        </tr>
        <tr> 
           	<td class="anscontent" ><input type="text" name="lastname" size="50" value="Last name" class="grayinfo"/></td>               	
		</tr>
        <tr>
    		<th>&nbsp;</th>
  		</tr>
        <tr>
            <td class="subcontent">Email : </td>                
        </tr>
        <tr>
            <td class="anscontent"><input type="text" name="email" size="50" value="email@xxx.com" class="grayinfo"/></td>                
        </tr>
        <tr>
    		<th>&nbsp;</th>
  		</tr>
        <tr>
            <td class="subcontent">Phone : </td>
        </tr>
        <tr>
            <td class="anscontent"><input type="text" name="phone" size="50" value="0xx-xxxxxxx" class="grayinfo"/></td>
        </tr>
        <tr>
    		<th>&nbsp;</th>
  		</tr>
       	<tr>
            <td class="subcontent">Date of Birth : </td>
        </tr>
        <tr>
            <td class="anscontent">
             	<input type="date" name="date" size="5" class="grayinfo"/>&nbsp;
            </td>
        </tr>
        <tr>
    		<th>&nbsp;</th>
  		</tr>
        <tr>
           	<td class="subcontent">Password : </td>
        </tr>
        <tr>
            <td class="anscontent"><input type="text" name="password" size="50" value="Password" class="grayinfo"/></td>
        </tr>
        <tr>
    		<th>&nbsp;</th>
  		</tr>
        <tr>
           	<td class="subcontent" valign=”top”>Confirmpass : </td>
        </tr>            
        <tr>
            <td class="anscontent"><input type="text" name="confirmpass" size="50" value="Password" class="grayinfo"/></td>
        </tr>
        <tr>
    		<th>&nbsp;</th>
  		</tr>
        <tr>
			<td  align="center" ><input type="image" name="send" value="Send" img src="images/button_submit.png"/></td>
		</tr>
        <tr>
    		<th>&nbsp;</th>
  		</tr>            
	</table>       
        </form>        	
    		<?php
				if(isset($_POST["send"])){
				$firstname = $_POST["firstname"];
				$lastname = $_POST["lastname"];
				$email = $_POST["email"];
				$phone = $_POST["phone"];		
				$password = $_POST["password"];
				$confirmpass = $_POST["confirmpass"];		
				if(empty($firstname)OR empty($lastname)OR empty($email)OR empty($phone)OR empty($password)OR empty($confirmpass))
					{echo "<div class='error'>Please fill out all required information.</div>";}
				else if ($_POST['password']!=$_POST['confirmpass'])
					{echo "<div class='error'>Your password and confirmation password do not match.</div>";}
				else
					{echo "<div class='pass'>Regist success</div>";}			
			}?>      		 
  	</tr>
</table>
<map name="Map" id="Map">
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