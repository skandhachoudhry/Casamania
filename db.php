<?php
$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="CASAMANIA";

$con=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else{
	//echo "Sucessfully database connected...";
}
 
mysql_select_db("CASAMANIA", $con);
$sql="INSERT INTO contact                     
(Name, Mail, Contact,Feedback)      
VALUES ('$_POST[t1]',              
'$_POST[e1]',
'$_POST[t2]',
'$_POST[a1]')"
if (!mysql_query($sql,$con))
	die('Error: ' . mysql_error())
echo "1 record added";
mysql_close($con)
?>