<?php

$mode = "dark";
$greeting = "Hello";
$name = "Ben";
// data types

#integer
$num = 42;
#double
$dub = 42.02;
#boolean
$boo = true;
#arrays
$arr = array('a', 'b', 'c');
#objects


// constants in php

define('DAYS_IN_YEAR', 365);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro to PHP</title>
    <link rel="stylesheet" href="">
    
    
</head>
<body <?php if($mode === "dark"):?>class = "dark" <?php endif ?>>
<h1>
<?php echo $greeting . ", " . $name . "!" ?>
</h1>

<h1>
    <?php $greeting .= ", how are you?";
    echo $greeting . " " . $name . "!"
    ?>
</h1>

<p>
    <?php echo $arr[2]; ?>
</p>

<p>
    <?php echo DAYS_IN_YEAR ?>
</p>

<p>Change for git test</p>

</body>
</html>