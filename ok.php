<html>
    <body>
<?php
$can=mysqli_connect('localhost','root','','student');
$r=$_GET['t1'];
$q="select*from information where Roll=$r";
$rs=mysqli_query($can,$q);
echo"<table><tr><td>Roll no</td><td>Name</td><td>Marks</td></tr>";
while($row = mysqli_fetch_array($rs))
{
    echo"<tr><td>$row[Roll]</td>
    <td>$row[Name]</td>
    <td>$row[Marks]</td>";
}
echo"</table>";
?>
</body>
</html>