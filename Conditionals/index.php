<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP conditionals</title>
</head>
<body>

<?php 

// php data types

    $name = "Ben";
    $num = 42;
    $dub = 42.02;
    $boo = true;
    $arr = array('a', 'b', 'c');
    $amount = 500;




?>
<h1>
<!-- <?php 
// if ($name === "Ben") {
//     echo "Equal!";
// } else {
//     echo "Not Equal";
// } 
// ?>

// <?php 

// if (gettype($num) === "integer" && $num > 40) {
//     echo "is is an integer greater than 40";
// }

?> -->

<?php 

if (empty($amount) || !is_numeric($amount) || $amount <= 0) {
    $message = "Amount must be greater than 0 and be an integer";
} else {
    if ($amount > 300) {
        $message = "Notify customer of large transactions";
    } else {
        $message = "Valid Charge.";
    }
}
?>
<?php
echo $message
?>

</h1>    
</body>
</html>