<html>
<body bgcolor = 'grey'>
<?php
$dbh = mysql_connect ('localhost','root','') or die (mysql_error());
mysql_select_db('banking management') or die (mysql_error());
$Cus_Name = $_REQUEST['Cus_Name'];
$Acc_no = $_REQUEST['Acc_no'];
$query = "insert into Depositor values('$Cus_Name','$Acc_no')";
$result = mysql_query($query) or die(mysql_error());
echo "data inserted SUCCESSFULLY!!!";
$var = mysql_query("select * from Depositor");
echo "<table border size = 1>";
echo "<tr><th>Cus_Name</th><th>Acc_no</th></tr>";
while($arr=mysql_fetch_row($var))
{
echo"<tr><td> $arr[0]</td><td>$arr[1]</td></tr>";
}
echo"</table>";
?>
<a href="index.html" /a> click here for homepage
</body>
</html>