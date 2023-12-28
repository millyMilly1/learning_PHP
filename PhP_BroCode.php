<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order page</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for=""> quantity:</label>
        <input type="text" name="quantity">
        <input type="submit" value="total">
    </form>
</body>
</html>
<?php

    $item = "shirt";
    $price = 12;
    $quantity = $_POST["quantity"];
    $total = null;

    $total = $quantity * $price;


    echo "you have ordered this {$quantity} of {$item} <br>";
    echo "this is the total amount \${$total}";

    //MATH_FUNCTIONS 

    $val = $_POST["x"];
    $total1 = null;

    $total1 = abs($val);
    $total1 = floor($val);

    echo "{$total}";


    //IF STATEMENTS 
    $age = 112;

    if ($age >= 18 ) {
        echo "You may enter this site";
    }
    elseif($age <= 0) {
        echo "that wasn't a valid age";
    }
    elseif($age == 100) {
        echo "you are too old for this site";
    }
    else {
        echo "you must be 18+ to visit not {$age}";
    }

    //FOR LOOPS 

    for($i = 10; $i > 0; $i-=2){
        echo $i . "<br>";
    }

    //WHILE LOOPS

    $counter = 0;

    while ($counter <= 10){
        $counter++;
        echo $counter . "<br>";
    }
?>