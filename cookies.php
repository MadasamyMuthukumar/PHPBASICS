<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $key="name";
    $value="kumar";
    setcookie($key,$value,time()+3600,"/");  // "/" for the cookie will set for all pages
    setcookie("age",20,time()-3600,"/"); //to delete cookie make minus
    if(isset($_COOKIE[$key])){
        echo "<br>cookie set";
    }else{
        echo "<br>cookie not set";
    }
    if(count($_COOKIE)>0){
        echo "<br>cokkie enabled ".count($_COOKIE);

    }else{
        echo "<br>cookie not enabled";
    }

    ?>
</body>
</html>