<html>
<body >
<?php
$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('banking management') or die (mysql_error());

$Cus_name=$_REQUEST['Cus_Name'];



$query="delete from Customer where Cus_Name='$Cus_Name'";
$result=mysql_query($query) or die(mysql_error());
echo "data deleted successfully!!!!";

$var=mysql_query("SELECT * from Customer");
echo"<table border size=1>";
echo"<tr><th>Cus_Name</th> <th>Cus_Street</th> <th>Cus_City</th> <th>Cus_Occupation</th>  </tr>";
while ($arr=mysql_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> ></tr>";
}
echo"</table>";

?>

<h4><font color="cyan"><a href="Customerdel.html">click here to delete the Customer details</a></font></h4>
<h4><font color="cyan"><a href="down.html">click here to go back to the home page </a></font></h4>
</body>
</html>