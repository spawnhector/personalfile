
<html>
<head>
<title>PHP Program To find Square and Cube of a number</title>
</head>
<body>
<form method="post">
<table border="1">
<tr>
<td><input type="text" name="num1" value="" placeholder="Enter a value"/></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="Submit" /></td>
</tr>
</table>
</form>
<?php
if(isset($_POST['submit']))
{
$a = $_POST['num1'];
$square = $a * $a; // Square of a number
$cube = $a * $a * $a; //Cube of a number
echo "Square of number " .$a." is "." = ".$square;
echo "Cube of number " .$a." is "." = ".$cube;
return 0;
}
?>
</body>
</html>