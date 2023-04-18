<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocumePHPnt</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        background-color: rgb(238, 250, 169);
        margin: auto;
        padding: 23px; 
    }

</style>
<body>
    <div class="container">
        <h1>PHP (IF-ELSE)</h1>
        <!-- This is a container -->
        Lorem, ipsum dolor.
        <?php

            $age = 7;
            if($age>18){
                echo "Yo can go to party <br>";
            }
            elseif($age == 7){
                echo "<br> <br> you are 7 years old <br>";
            }
            else{
                echo "Yo are underage!";
            }

        ?>
                <h1><br>PHP (ARRAY)</h1>
        
        <?php
            $arr = array("py", "java", "c++");
            echo "<br>$arr[0]";
            echo "<br>";
            echo count($arr);

        ?>
        <h1><br>PHP (LOOPS)</h1>
        
        <?php
        $a = 0;
        while($a <= 10)
        {
            echo "<br>The value of a is: ";
            echo $a;
            $a++;
        }

        ?>

<h1><br>PHP (Iterating Arrays uisng LOOPS)</h1>
        
        <?php
        $a = 0;
        while($a < count($arr))
        {
            echo "<br>The value of a for $a is: ";
            echo $arr[$a];
            $a++; 
        }

        ?>

<h1><br>PHP (DO-WHILE)</h1>
        
        <?php
        $a = 20;
        do{
            echo "<br>The value of a for is: ";
            echo $a;
            $a++;
        }
        while($a < 10);

        ?>

<h1><br>PHP (FOR)</h1>
        
        <?php
            for ($a=0; $a < 10; $a++) { 
                
            echo "<br>The value of a for is: ";
            echo $a;
            }

        ?>

<h1><br>PHP (FOR-EACH) FOR ARRAY ITERATION</h1>
        
<?php
      foreach ($arr as $value) {
        echo "<br>";
        echo "$value";
      }
        ?>

        
<h1><br>PHP (Function)</h1>
        <h2>1. Buildin</h2>
        <h2>2. UserDefined</h2>
        <?php
        function print10(){
            echo "TEN";
        }
        print10();
        print10();
        print10();
        print10();
        print10();
        print10();
        print10();
        print10();
        print10();

        function print_num($num){
            echo "<br> Your number is: ";
            echo $num;
        }
        print_num(77);
                ?>
    </div>    
</body>
</html>