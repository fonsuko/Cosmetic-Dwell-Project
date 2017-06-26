<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The Cosmetic</title>
</head>
<link rel="stylesheet" href="header.css">
<style type="text/css">
.subheader{font-family:prototype;font-size:36px;text-align: left;color:#212121;}
.subcontent{font-family:qontra;font-size:24px;text-align: left;color:#FFFFFF;}
.anscontent{font-family:qontra;font-size:24px;text-align: left;color:#FFFFFF;}
.setcenter{font-family:qontra;text-align: center;color:#F66;}
.error{color:#900;font-family:qontra;font-size:36px;}
.pass{color:#090;font-family:qontra;font-size:36px;}

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
    <th colspan="5"><img src="images/main_10.png" width="1024" height="4" /></th>
  </tr>
  <tr>
    <th colspan="5" height="30px">&nbsp;</th>
  </tr>
  <tr>  	
    <th colspan="5"class="subheader">Contact Us</th>
  </tr>  
  <tr>
    <th colspan="5" bgcolor="#FFFFFF">
    <form action="" method="post" name="contact">
    	<table align="left" bgcolor="212121" >
        	<tr>
    			<th colspan="4" height="15px">&nbsp;</th>
  			</tr>            
           	<tr>
           	  	<td rowspan="22" width="15"></td>                
				<td class="subcontent">First Name : </td>
				<td rowspan"15"class="subcontent">&nbsp;</td>              	
                <td rowspan="22" width="604"align="center"><img src="images/test.png" width="619" height="750" /></td>
              	<td rowspan="22" width="10"></td>  
          	</tr>             
            <tr>   
               	<td class="anscontent"><input type="text" name="firstname"  size="50"/></td>
               	<td class="anscontent">&nbsp;</td>
            </tr>
            <tr>
    			<th>&nbsp;</th>
  			</tr>
            <tr>
              	<td class="subcontent">Last Name : </td>              	
            </tr>
            <tr> 
               	<td class="anscontent" ><input type="text" name="lastname" size="50"/></td>               	
			</tr>
            <tr>
    			<th>&nbsp;</th>
  			</tr>
            <tr>
                <td class="subcontent">Email : </td>                
            </tr>
            <tr>
                <td class="anscontent"><input type="text" name="email" size="50"/></td>                
            </tr>
            <tr>
    			<th>&nbsp;</th>
  			</tr>
            <tr>
                <td class="subcontent">Phone : </td>
            </tr>
            <tr>
                <td class="anscontent"><input type="text" name="phone" size="50"/></td>
            </tr>
            <tr>
    			<th>&nbsp;</th>
  			</tr>
            <tr>
               	<td class="subcontent">Order Number : </td>
           	</tr>
           	<tr>
                <td class="anscontent"><input type="text" name="ordernumber" size="50"/></td>
            </tr>
            <tr>
    			<th>&nbsp;</th>
  			</tr>
            <tr>
               	<td class="subcontent">Subject : </td>
            </tr>
            <tr>
              	<td class="anscontent"><input type="text" name="subject" size="50"/></td>
            </tr>
            <tr>
    			<th>&nbsp;</th>
  			</tr>
           	<tr>
                <td class="subcontent" valign=”top”>Comment : </td>
            </tr>            
           	<tr>
            	<td class="anscontent"><textarea name="comment" cols="51" rows="5" ></textarea></td>
            </tr>
            <tr>
    			<th>&nbsp;</th>
  			</tr>
            <tr>
				<td  align="center" ><input type="image" name="send" value="Send" img src="images/button_send.png"/></td>
			</tr>
            <tr>
    			<th>&nbsp;</th>
  			</tr>            
		</table>        
    </form>
    <br></br>
    <?php
		if(isset($_POST["send"])){
		$firstname = $_POST["firstname"];
		$lastname = $_POST["lastname"];
		$email = $_POST["email"];
		$phone = $_POST["phone"];
		$ordernumber=$_POST["ordernumber"];
		$subject = $_POST["subject"];
		$comment = $_POST["comment"];
		$to = "pat_drm@hotmail.com";
		if(empty($firstname)OR empty($lastname)OR empty($email)OR empty($phone)OR empty($ordernumber)OR empty($subject)OR empty($comment))
			{echo "<div class='error'><br>Please fill out all required information.</div>";}
		else
			{@mail($to,$subject,$comment,"From: $firstname <$email>");
			echo "<div class='pass'>Thank you for getting in touch!</div>";}			
		}?>    
    </th>
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