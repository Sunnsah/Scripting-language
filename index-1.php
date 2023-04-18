<!-- SHIFT + ! and ENTER-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <div class="container">
        This is my first PHP Website. 
        <?php
        define('PI', 3.14); // Constant variable as Indentifier
        echo("PHP is an open source scripting language. makes secure website at the backend which is not seen by
        clients cause the code is converted to html,css and js. Quick to make small websites with backend.");
        //Single line comment
        /*Multiline 
        comment
        lorem3
        */
        // PHP is a dynamically type language, that means we dont have to specify what kind of datatype it  is
        $variable1 = 34;
        $variable2 = 1;
        // echo $variable1;
        // echo $variable2;
        // echo $variable1 + $variable2; 
        // //PHP is not a case sensitive language
        // Echo $variable1 + $variable2;

        // // Operators
        echo "<h1> <br><u>Operators </u><br></h1>";
        // // Arithmetic
        echo "<h1> Arithemetic Operators </h1>";
        echo "<br>";
        echo "The value of variable1 + variable2 is:";
        Echo $variable1 + $variable2;
        echo "<br>";
        echo "The value of variable1 - variable2 is:";
        Echo $variable1 - $variable2;
        echo "<br>";
        echo "The value of variable1 * variable2 is:";
        Echo $variable1 * $variable2;
        echo "<br>";
        echo "The value of variable1 / variable2 is:";
        Echo $variable1 / $variable2;
        

        // Assignment
        echo "<h1> Assignment Operators </h1>";
        echo "<br>";
        $myVar = $variable1;
        $myVar += 1;
        $myVar -= 1;
        $myVar *= 2;
        $myVar /= 2;
        echo "The value of new variable is: $myVar";

        // Comparison
        echo "<h1> Comparison Operators </h1>";
        // Boolean datatypes are for comaparison operator
        // vardump is used to tell the variables values and type
        // is used in if-else statement
        echo var_dump('1'=='4');
        echo "<br>";
        echo var_dump('1'!='4');
        echo "<br>";
        echo var_dump('1'>='4');
        echo "<br>";
        echo var_dump('1'<='4');
        // Increment/decrement
        echo "<h1>Increment/Decrement Operator</h1>";
        echo $variable1++;
        echo "<br>";
        echo $variable1;
        echo "<br>";
        // echo $variable1--;//34
        // echo $variable1;//33
        echo "<br>";
        // echo ++$variable1;//increases and prints the value
        echo "<br>";
        // echo --$variable1;

        // Logical
        echo "<h1>Logical Operators:</h1>";
        // and (&&)
        // or(||)
        // xor //if both are same than false else true
        // !
        //  $myVar2 = (false and true);
         $myVar2 = (false  or true);
         echo var_dump($myVar2);

         //Data Types
         echo "<h1> <br><u>Data Types </u><br></h1>";
        
         echo "<h1> String </h1>";
         $var = "My name is Asish";
         echo var_dump($var);
         echo "<h1> Integer </h1>";
         $var = 1;
         echo var_dump($var);
         echo "<h1> Float </h1>";
         $var = 1.1;
         echo var_dump($var);
         echo "<h1> Boolean </h1>";
         $var = true;
         echo var_dump($var);
         echo "<h1> Constant <br></h1>";
         echo var_dump(PI);
         

         //Primary Datatypes
        //  1. String
        //  2. Integer
        //  3. Float
        //  4. Boolean
        //  5. Array
        //  6. Object
        //  7. Resource
        //  8. NULL

        ?>
    </div>
    
</body>
</html>