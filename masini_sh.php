<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Masini Rulate</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="outer">
	<div id="logo-bg">
		<h1>DRIVING PLEASURE</h1>
		<span class="tag"></span>
	</div>
	<div id="business"></div>
	<div class="clear"></div>
	<div id="bg">
		<div class="toplinks"><a href="index.php">Acasa</a></div><div class="sap">|</div>
		<div class="toplinks"><a href="masini_noi.php">Masini noi</a></div><div class="sap">|</div>
		<div class="toplinks"><a href="masini_sh.php">masini rulate</a></div><div class="sap">|</div>
		<div class="toplinks"><a href="contact.php">Contact</a></div><div class="sap">|</div>
		<?php
		//error_reporting (E_ALL ^ E_NOTICE);
session_start();
if (isset($_SESSION['user']))
    {?>
     <div class="toplinks"><a href="comm_logat.php">Comentarii</a></div><div class="sap">|</div>  
<?php
    }
	else
	{
?>
		<div class="toplinks"><a href="comm.php">Comentarii</a></div><div class="sap">|</div>
<?php
	}
	?>
		<div class="toplinks"><a href="admin.php">Scurt istoric</a></div>
	</div>
	<div class="clear"></div>
	<div id="outer2"><div class="inner_copy"></div>
		<div id="left-nav">
			<h2>Ultimele stiri
			</h2><div id="showcase">
				<div class="stxt-bg">
					<h3>Noul BMW iDrive</h3>
					<div class="smaltext"><a href="idrive.php"><img src="images/idrive.jpg" alt="" width="150" height="95" border="0"/></a>
						<div class="clear"></div>
						BMW a prezentat la CES 2015 coceptul viitorului sau sistem multimedia iDrive. 
						Acesta va fi capabil sa recunoasca gesturi si va avea si functie tactila.</div>
					<div style="clear:right; height:25px;">
					<span class="read-more"><a href="idrive.php">Citeste tot...</a></span></div>
				</div>
			</div>
			<div id="showcase">
				<div class="stxt-bg">
					<h3>BMW i3</h3>
					<div class="smaltext">
						<a href="i3.php"><img src="images/i3.jpg" alt="" width="150" height="95" border="0"/></a><br/>
						BMW i3 a fost imbunatatit cu ocazia inceputului de an. Modelul electric poate
						parca fara sofer si poate chiar sa evite singur obstacolele.
				  </div>
				  <div style="clear:right; height:25px;"><span class="read-more"><a href="i3.php">Citeste tot...</a></span></div>
				</div>
			</div>
<div id="showcase">
<div class="stxt-bg">
<h3>BMW M4 Coupe modficat</h3>
<div class="smaltext"><a href="mpack.php"><img src="images/mpack.jpg" alt="" width="150" height="95" border="0"/></a>
	<div class="clear"></div>G-Power a pregatit un pachet special pentru BMW M4 Coupe. 
	Modelul german vine acum cu un look mult mai agresiv multumita unei caroserii de 
	culoare neagra, dar si datorita jantelor de 20 de inch HURRICANE RS.</div>
<div style="clear:right; height:25px;">
<span class="read-more"><a href="mpack.php">Citeste tot...</a></span></div>
</div>
</div>
</div>
<div id="content2">
<h2>Masini Rulate</h2>
<div id="main">
  <p><h4>1.Compacte</h4>
  <table width="680px" align="left">
    <tr>
    <td align="center">
    <a href="r11.php"><img src="images/r11.jpg" /></a> <br>
    <a href="r11.php"><font align="center" color="white">BMW Z4 sDrive20i<br />
    Pret: de la 42.500 Euro <br />
    Kilometraj:	39.090 km </font> </a>
    </td>
    <td align="center">
    <a href="r12.php"><img src="images/r12.jpg" /></a><br>
    <a href="r12.php"> <font align="center"color="white">BMW 420d Cabrio Luxury Line <br />
    Pret: de la 50.500 Euro <br />
    Kilometraj:44.374 km </font> </a>
    </td>
    <td align="center">
    <a href="r13.php"><img src="images/r13.jpg" /></a> <br>
     <a href="r13.php"><font align="center"color="white">BMW 430d xDrive Coup� <br />
    Pret: de la 59.500 Euro <br />
    Kilometraj:28.359 km </font> </a>
    </td>
   </tr>
  </table></p>
  <br><br><br><br><br><br><br><br><br><br><br><br><br>
  <p><h4>2.SUV/Crossover</h4>
  <table width="680px" align="left">
    <tr>
    <td align="center">
    <a href="r21.php"><img src="images/r21.jpg" /></a> <br>
    <a href="r21.php"><font align="center"color="white">BMW X5 xDrive30d<br />
    Pret: de la 24.500 Euro <br />
    Kilometraj:100.100 km </font> </a>
    </td>
   </tr>
  </table></p>
</div>
<div class="clear"></div>
</div>

<div class="clear"></div>

<div class="footer"><a href="index.php">Acasa</a></div>
<div class="footer"><a href="masini_noi.php">Masini Noi</a></div>
<div class="footer"><a href="masini_sh.php">masini rulate</a></div>
<div class="footer"><a href="contact.php">Contact</a></div>
<?php
		//error_reporting (E_ALL ^ E_NOTICE);
//session_start();
if (isset($_SESSION['user']))
    {?>
     <div class="footer"><a href="comm_logat.php">Comentarii</a></div> 
<?php
    }
	else
	{
?>
		<div class="footer"><a href="comm.php">Comentarii</a></div>
<?php
	}
	?>
<div class="footer"><a href="admin.php">Scurt istoric</a></div>
<div class="clear"></div>
        <div id="footer"><div class="fleft">� 2017 Cristi Birla & Ionut Dondera. Toate drepturile rezervate.</div>
            <div class="fcenter">Design by ID &amp; CB ///coded by ID & CB</div></div></div>
</div>
</body>
</html>
