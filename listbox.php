<html>

<head>
<title>Reading data from list bgoxes </title>
</head>
<body>
<h1>REading dat into listboxes </h1>
Your ice-cream flavour is :
<br>
<?php
foreach ($_REQUEST["ice-cream"]as $flavour)
{
echo $flavour,"<br>";
}
?>
</body>
</html>