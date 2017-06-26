<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The Cosmetic</title>
<link rel="stylesheet" href="header.css">
</head>
<style type="text/css">
.subheader{font-family:prototype;font-size:36px;text-align: left;color:#FFFFFF;}
.subcontent{font-family:prototype;font-size:20px;text-align: right;color:#212121;}
.anscontent{font-family:qontra;font-size:20px;text-align: left;color:#212121;}
.setcenter{font-family:qontra;text-align: center;color:#F66;}
.error{color:#900;text-align:center;font-family:qontra;font-size:36px;}
.pass{color:#090;text-align:center;font-family:qontra;font-size:36px;}
</style>
<body>
<table width="1034" border="0" align="center" frame="void">
  <tr>
    <th colspan="5"><img src="images/main_01.png" width="1023" height="51" usemap="#MapMap" border="0" />
      <map name="MapMap" id="MapMap"><area shape="rect" coords="927,6,968,43" href="cart.php" /><area shape="rect" coords="806,7,912,42" href="contact_us.php" />
        <area shape="rect" coords="983,6,1019,42" href="sign_in.php" />
    </map></th>
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
  	<td>&nbsp;</td>
  </tr>
  <tr>  
  	<table width="512" border="0" align="center">
    <form action="" method="post" name="contact">
        <tr>
        	<td rowspan="6" width="5px" bgcolor="#212121"></td>
        	<th colspan="2" bgcolor="#212121" class="subheader">&nbsp;SIGN IN</th>
            <td rowspan="6" width="5px" bgcolor="#212121"></td>
        </tr>
    	<tr>         	       	
            <td class="subcontent"><ul></ul>Email Address :</td> 
            <td><input type="text" name="email" class="anscontent"/></td>            
        </tr>
        <tr>
        	<td class="subcontent"><ul></ul>Password :</td>
            <td><input type="password" name="pass"class="anscontent"/></td>
            
        </tr>
        <tr>
        	<td colspan="2"><br></br></td>                    	
        </tr>
        <tr>
        	<td colspan="2" class="setcenter";>No account? <a href="sign_up.php">Create one!</a></td>        	
        </tr>
        <tr>
        	<td colspan="2" class="setcenter"><input type="image" name="send" value="Send" img src="images/buttonLogin_01.png"/></td>        	
        </tr>        
        <tr>
        	<td colspan="4" height="5px" bgcolor="#212121"></td>
        </tr>      
    </table>
    </form>
  </tr>
  <tr>
      <td colspan="4" >                
                <?php
                    if(isset($_POST["send"])){				
                    $email = $_POST["email"];
                    $pass = $_POST["pass"];						
                    if(empty($email)OR empty($pass))
                        {echo "<div class='error'>Username and password do not match or you do not have an account yet.</div>";}				
                    else
                        {echo "<div class='pass'>Login success</div>";}			
                }?>      
            </td>
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