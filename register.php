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
        
        <form action="register1.php">
            <p class='input'>
            <table border=0 align='center' bgcolor='#CCEEFF' >
            <tr><td align='center' colspan='2'><h2>REGISTRATION FORM</h2></td></tr>
            <tr><td>Roll no</td><td><input type="text" name="t1"><br></td></tr>
            <tr><td>Name</td><td><input type="text" name="t2"><br></td></tr>
           <tr><td> Mobile</td><td><input type="text" name="t3"><br></td></tr>
           <tr><td>Branch</td><td><select name="b">
                <option>CSE</option>
                <option>IT</option>
                <option>IOT</option>
            </select><br></td></tr>
           <tr><td> Gender</td><td><input type="radio" name="g" value="male">male
            <input type="radio" name="g" value="female">female<br></td></tr>
            <tr><td>DOB</td><td><select name="d">
                <?php 
                echo"<option>day</option>";
                for($i=1;$i<=31;$i++){
                    
                    echo"<option>$i</option>";
                }
                ?>
                </select>
                <select name="m">
                <?php
                echo"<option>month</option>";
                for($i=1;$i<=12;$i++){
                    
                    echo"<option>$i</option>";
                }
                ?>
                </select>
                <select name="y">
                <?php
                echo"<option>year</option>";
                for($i=2022;$i>=1920;$i--){
                    
                    echo"<option>$i</option>";
                }
                
                ?>
                </select></td></tr>
            <tr><td align='center' colspan='2'><input type="submit" value="OK"></td></tr>
            </p>
        </form>
     </body>
</html>