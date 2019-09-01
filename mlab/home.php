<?php 
session_start();
if (isset($_SESSION['username']))
{
 echo '<h5>WELCOME'.$_SESSION['username'];
}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Home</title>
 </head>
 <body>
 	<div>
 	<form action="registration.php" method="POST">
          <button type="submit" >signup</button>
 	</form>
 	<form action="login.php" method="POST">
          <button type="submit" >login</button>
 	</form>

 </body>
 </html>

 <!-- <?xml version="1.0" encoding="UTF-8"?>
<?xml-stylesheet type="text/xsl" href="xml1.xslt"?>
<student>
  <info>
    <id>01</id>
    <name>Ashutosh Tiwari</name>
    <country>India</country>
    <email>ashutoshtiwari3309@gmail.com</email>
    <phone>9034363309</phone>
    <branch>IT</branch>
  </info>
  <info>
    <id>02</id>
    <name>Gagan Dhillon</name>
    <country>Canada</country>
    <email>Gagan8867@gmail.com</email>
    <phone>+4545633489</phone>
    <branch>Aerospace</branch>
  </info>
  <info>
    <id>03</id>
    <name>Raghav Taneja</name>
    <country>Brazil</country>
    <email>raghaa70@rediff.com</email>
    <phone>+7569833432</phone>
    <branch>Nanotechnology</branch>
  </info>
   <info>
    <id>04</id>
    <name>Keshav Sharma</name>
    <country>India</country>
    <email>kesh9_av@gmail.com</email>
    <phone>9677676352</phone>
    <branch>Mechanical</branch>
  </info>
  <info>
  <id>05</id>
    <name>John Cena</name>
    <country>California</country>
    <email>ucme_no@gmail.com</email>
    <phone>+4277676352</phone>
    <branch>EEE</branch>
  </info>
  <info>
  <id>06</id>
    <name>Meraj Mehta</name>
    <country>USA</country>
    <email>meraj_9_av@gmail.com</email>
    <phone>+42677676352</phone>
    <branch>Medical Science</branch>
  </info>
  </student>
 -->