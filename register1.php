<html>
    <body>
    <style>
            .input{
                width:1500px;
                height:500px;
                padding-top:200px;
                text-align:center;
                 }

                
        </style>
        </body>
        
        
        <?php
        $r=$_GET['t1'];
        $n=$_GET['t2'];
        $m=$_GET['t3'];
        $b=$_GET['b'];
        $g=$_GET['g'];
        $d=$_GET['d']."/".$_GET['m']."/".$_GET['y'];
        

        $can=mysqli_connect('localhost','root','','employee');
        $j="insert into register value($r,'$n',$m,'$b','$g','$d')";
        $rs=mysqli_query($can,$j);
        if($rs) {
            echo"save";
            } else
            echo"error";
        ?>
        
    
</html>