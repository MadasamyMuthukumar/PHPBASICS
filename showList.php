<?php
include ("functions.php");
$userar=showUsers();
// var_dump($userar);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($userar as $user){
echo $user['id']." ";
echo $user['age']." ";
echo $user['name']." ";
echo "<br>";
    }
        
        ?>
</body>
</html>