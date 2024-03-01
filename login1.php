<html>
    <body>
    <?php
        $n=$_GET['t1'];
        $m=$_GET['t2'];
        $d=$_GET['d'];
        $a=$_GET['a'];
        $e=$_GET['e'];
        

        $can=mysqli_connect('localhost','root','','employee');
        $j="insert into registerlogin value('$n',$m,'$d','$a','$e')";
        $rs=mysqli_query($can,$j);
        if($rs) {
            echo"save";
            } else
            echo"error";
        ?>

</body>
</html>