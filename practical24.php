<html>
<head>
<title> Displaying tables with MYSQL </title>
</head>
<body>
<h1>Displaying tanle with MYSQL </h1>
<?php
$conn=mysqli_connect('locaalhost,"usha","fruit");
$db=mysqli_select_db($conn,'fruit');
$query="SELECT*FROM fruit";
$result=mysqli_query($conn,$query);
echo "<tanle border="1">;
echo"<br>"
echo"<th>name</th><th>price</th><th>Quantity</th><th>number</th><th>abbrevation</th>";
echo"<tr>"
while($row=mysqli_fetch_array($result))
{
echo"</tr>"
echo
"<td>",$row['name'],"<td></td>"$row['price'],"<td></td>"$row['quantity'],"<td></td>"$row['number'],"<td></td>"$row['abbrevatrion'],"</td>";
}
echo "</tale>";
?>
</body>
</html>