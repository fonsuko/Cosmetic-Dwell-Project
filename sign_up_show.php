<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The Cosmetic</title>
</head>
<style type="text/css">
.subheader{font-family:prototype;font-size:36px;text-align: left;color:#212121;}
.subcontent{font-family:prototype;font-size:20px;text-align: left;color:#FFFFFF;}
.anscontent{font-family:qontra;font-size:20px;text-align: left;color:#212121;}
.setcenter{font-family:qontra;text-align: center;color:#F66;}
.grayinfo{font-family:qontra;text-align:left;color:#212121;}
</style>
<body>
<table width="1034" border="0" align="center" frame="void">
  <tr>
    <th colspan="5"><img src="images/main_01.png" width="1023" height="51" usemap="#MapMap" border="0" /></th>
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
    <table width="1024" align="center" bgcolor="212121" >
  		<tr>
    		<th colspan="4" height="15px">&nbsp;</th>
  		</tr>
      	<tr>
           	<td rowspan="19" width="15"></td>               
			<td rowspan"10"class="subcontent">&nbsp;</td>              	
            <td rowspan="19" width="604"align="center"><img src="images/test2.png" width="619" height="750" /></td>
            <td rowspan="19" width="10"></td>
       	</tr>
        <tr>  
        	<td class="subcontent">Title : <?php echo $_POST['title'];?></td>                               		 
        </tr>
        <tr>
    		<th>&nbsp;</th>
  		</tr>                         
        <tr>           	  	              
			<td class="subcontent">First Name : <?php echo $_POST['firstname'];?> </td>				 
        </tr>            
        <tr>
    		<th>&nbsp;</th>
  		</tr>
        <tr>
            <td class="subcontent">Last Name : <?php echo $_POST['lastname'];?> </td>              	
        </tr>
        <tr>
    		<th>&nbsp;</th>
  		</tr>
        <tr>
            <td class="subcontent">Email : <?php echo $_POST['email'];?> </td>                
        </tr>
        <tr>
    		<th>&nbsp;</th>
  		</tr>
        <tr>
            <td class="subcontent">Phone : <?php echo $_POST['phone'];?> </td>
        </tr>
        <tr>
    		<th>&nbsp;</th>
  		</tr>
       	<tr>
            <td class="subcontent">Date of Birth :<?php echo $_POST['date'];?></td>
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
        
  	</tr>   
</table>

<map name="Map" id="Map">
     <area shape="rect" coords="983,6,1019,42" href="sign_in.php" />
     <area shape="rect" coords="927,6,968,43" href="cart.php" />
  	 <area shape="rect" coords="806,7,912,42" href="contact_us.php" />
</map>

</body>
</html>