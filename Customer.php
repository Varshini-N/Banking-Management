<html>
<body bgcolor = 'grey'>
<?php
$dbh = mysql_connect ('localhost','root','') or die (mysql_error());
mysql_select_db('banking management') or die (mysql_error());
$Cus_Name = $_REQUEST['Cus_Name'];
$Cus_Street = $_REQUEST['Cus_Street'];
$Cus_City = $_REQUEST['Cus_City'];
$cus_Occupation=$_REQUESt['Cus_Occupation'];
$query = "insert into Customer values('$Cus_Name','$Cus_Street','$Cus_City','$Cus_Occupation')";
$result = mysql_query($query) or die(mysql_error());
echo "data inserted SUCCESSFULLY!!!";
$var = mysql_query("select * from Customer");
echo "<table border size = 1>";
echo "<tr><th>Cus_Name</th><th>Cus_Street</th><th>Cus_City</th><th>Cus_Occupation</th></tr>";
while($arr=mysql_fetch_row($var))
{
echo"<tr><td> $arr[0] </td><td>$arr[1]</td><td>$arr[2]</td><td>$arr[3]</td></tr>";
}
echo"</table>";
?>
<a href="index.html" /a> click here for homepage
</body>
</html>