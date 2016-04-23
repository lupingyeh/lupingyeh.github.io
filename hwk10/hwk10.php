<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Sign-Up Sheet</title>
    <style>
    .container {
    	width:90%;
    	margin:auto;
    	text-align: center;
    }
    table {
    	margin:10px auto;
    }
    </style>
</head>

<body>
<div class = "container">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>">
        <table border="1" width="40%">
            <h1>Sign-Up Sheet</h1>
            <tr>
                <th>Time</th>
                <th>Name</th>
            </tr>
            <?php 
       
            for ($i=1;$i<11;$i++){
                $signName[$i] = '';
                $signName[$i] = $_POST[$i];                           
                if (($signName != "") && ($i == '1')) {
                    file_put_contents("./signup.txt", str_replace("8:00 am,", "8:00 am,".$signName[$i], file_get_contents("./signup.txt")), LOCK_EX); 
                    
                }
                elseif (($signName != "") && ($i == '2')) {
                    file_put_contents("./signup.txt", str_replace("9:00 am,", "9:00 am,".$signName[$i], file_get_contents("./signup.txt")), LOCK_EX);  
                  
                }
                elseif (($signName != "") && ($i == '3')) {
                    file_put_contents("./signup.txt", str_replace("10:00 am,", "10:00 am,".$signName[$i], file_get_contents("./signup.txt")), LOCK_EX);  
                   
                }
                elseif (($signName != "") && ($i == '4')) {
                    file_put_contents("./signup.txt", str_replace("11:00 am,", "11:00 am,".$signName[$i], file_get_contents("./signup.txt")), LOCK_EX);  
                   
                }
                elseif (($signName != "") && ($i == '5')) {
                    file_put_contents("./signup.txt", str_replace("12:00 pm,", "12:00 pm,".$signName[$i], file_get_contents("./signup.txt")), LOCK_EX); 
                   
                }
                elseif (($signName != "") && ($i == '6')) {
                    file_put_contents("./signup.txt", str_replace("1:00 pm,", "1:00 pm,".$signName[$i], file_get_contents("./signup.txt")), LOCK_EX);  
                   
                }
                elseif (($signName != "") && ($i == '7')) {
                    file_put_contents("./signup.txt", str_replace("2:00 pm,", "2:00 pm,".$signName[$i], file_get_contents("./signup.txt")), LOCK_EX); 
                   
                }
                elseif (($signName != "") && ($i == '8')) {
                    file_put_contents("./signup.txt", str_replace("3:00 pm,", "3:00 pm,".$signName[$i], file_get_contents("./signup.txt")), LOCK_EX);
                  
                }
                elseif (($signName != "") && ($i == '9')) {
                    file_put_contents("./signup.txt", str_replace("4:00 pm,", "4:00 pm,".$signName[$i], file_get_contents("./signup.txt")), LOCK_EX);  
                   
                }
                elseif (($signName != "") && ($i == '10')) {
                    file_put_contents("./signup.txt", str_replace("5:00 pm,", "5:00 pm,".$signName[$i], file_get_contents("./signup.txt")), LOCK_EX); 
                   
                }
            }  
            
            $file=fopen("./signup.txt",'r');
            $i=0;
            while($line = fgets($file)){
                list($time,$name) = explode(',',$line);
                $i=$i+1;

                if(trim($name) == '') 
                {
                    echo "<tr><td>$time</td><td><input type='text' name = '$i'></td>\n"; 
                }
                else 
                {
                    echo "<tr><td>$time</td><td>$name</td>\n";
                }
            }
                       
            ?>
        </table>
        <br><br>
        
        <input type="reset" value="Reset" /><span></span>
        <input type="submit" name="submit" value="Submit">
    </form>
</div>

</body>

</html>