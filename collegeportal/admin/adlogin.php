<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BVM Group of Colleges</title>
<link rel="shortcut icon" href="Images/logo.jpg" />
<link href="stylesheet.css" type="text/css" rel="stylesheet">
<link href="homestyle.css" type="text/css" rel="stylesheet">
<style type="text/css">
<!--
.style8 {
	font-size: 18px;
	color: #003333;
}
-->
</style>
</head>

<body>
<div class="wrapper">
	<div class="head">
		<div class="layer" align="right"></div>
		<div class="layer1">
			<table width="100%">
    			<tr>
      				<td width="25%">
						<div align="right">
							<input type="image" src="Images/logo.jpg" align="middle" width="100" height="80" />&nbsp;&nbsp;
						</div>
					</td>
					<td width="75%" valign="middle">
						<div align="left">
							<span class="logo">BVM Group of Colleges</span>
						</div>
					</td>
				</tr>
				<tr>
					<td width="25%"><!--<div align="left"><a href="https://www.facebook.com/bvmcme" title="FaceBook"><img src="../images/fb.png" height="15" width="15" /></a>&nbsp;<a href="www.gmail.com" title="Gmail"><img src="../images/gmail.png" height="17" width="17" /></a>&nbsp;<a href="#" title="Admin"><img src="../images/lock.gif" height="15" width="15" /></a></div>--></td>
					<td width="75%">
						<div align="center">YOUR VISION OUR MISSION........</div>
						</td></tr>
			</table>
			<span style="color: #B7B7B7">
				<marquee behavior="scroll" direction="left" style="background-color:#990000;">
					<span class="style44" style="font-family: &quot;Courier New&quot;, Courier, monospace">Admin Login | 24 x 7 Helpline:9301129088/9303714455 </span>
				</marquee>
			</span>
		</div>
		<div class="layer2"></div>
	</div>


<form action="chkadlogin.php" method="post">
<!--<div align="center"><img src="images/bvm.jpg" height="200" width="600" /></div>-->
<table width="30%" align="center" bordercolor="#003333" class="pagefont">
	<tr>
		<td align="center" colspan="9">
			<h3 class="style13 style8">LOGIN HERE<hr /> </h3>
		</td>
	</tr>
	<tr>
		<td align="center" colspan="9">
			<tr>
				<td width="19%">
					<div align="left" class="style8">Login</div>
				</td>
				<td width="30%">
                   	<input name="fileno" type="text" id="fileno" maxlength="10"  />
                   </td>
			</tr>
            <tr>
               	<td width="19%"><div align="left" class="style8">Password</div></td>
                   	<td width="30%">
                       	<input name="pwd" type="password" id="pwd" maxlength="10"  />
                    </td>
			</tr>
			<tr>
				<td colspan="9" align="center">
					<div align="center" class="style31">
                    	<input name="ok" type="submit" class="style30" value="Sign In" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../index.php"><span class="style14 style13">Home</span></a></div>
				</td>
			</tr>
		</td>
	</tr>
</table>
<div align="center">
	<?php
		if(@$_REQUEST['msg']=='success')
		{
			echo "Password Changed Successfully";
		}
		else if(@$_REQUEST['msg']=='error')
		{
			echo "File No or Password is incorrect";
		}
	?>
</div>
<!--<div align="center"><img src="images/bvm.jpg" height="100" width="200" /></div>-->

</form></div>

</body>
</html>
