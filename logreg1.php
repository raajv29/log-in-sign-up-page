<html>
    <body>
        
        <?php
        $u=$_GET['u'];
        $p=$_GET['p'];
        $can=mysqli_connect('localhost','root','','employee');
        $l="select*from registerlogin";
        $rs=mysqli_query($can,$l);
        echo"<table border=2><tr><td>Name</td><td>phonenumber</td><td>Department</td><td>Address</td><td>email</td></tr>";
while($row = mysqli_fetch_array($rs))
{
    if($row['username']==$u && $row['password']==$p){
    echo"<tr><td>$row[username]</td>
    <td>$row[password]</td>
    <td>$row[Department]</td>
    <td>$row[Address]</td>
    <td>$row[email]</td></tr>";
    }
}
echo"</table>";
        ?>
    </body>
<html>