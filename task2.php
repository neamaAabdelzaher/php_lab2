<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task2</title>



    <style>

       body{
         text-align: center;
        }
        h3{
            color:blue
        }
    </style>
</head>

<body>
    
<h1 >Task 2 PHP</h1>
<!--  to check if the number is  positive ,negative or zero and also check if not a numerica value -->

<h3 >

<?php

$num=10;

if($num <0 && is_numeric($num))
{
    echo " $num is a negative number ";
}
elseif($num==0 && is_numeric($num))
{
    echo "the number is zero";

}
elseif($num >0 && is_numeric($num))
{

    echo "$num is a positive number ";
}

else{
    echo "$num is not a numerica value ";

}




?>

</h3>
</body>
</html>