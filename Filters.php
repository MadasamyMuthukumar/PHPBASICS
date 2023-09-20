<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filters</title>
</head>
<body>
    <?php
    $s1="<p>p tag will be removed</p>";
    $sfiltered=filter_var($s1,FILTER_SANITIZE_STRING);
    echo $sfiltered;
    $no=23;
    echo "<BR>";
    if(filter_var($no,FILTER_VALIDATE_INT)){
        echo "23 is a number";
    }
    echo "<BR>";
    $ip="127.0.0.1";
    if(filter_var($ip,FILTER_VALIDATE_IP)){
        echo "it is a ip";
    }
    //EMAIL CHECKING
    echo "<BR>";
    $email="abcd</<@gmail.com";
    $filtered=filter_var($email,FILTER_SANITIZE_EMAIL);
    echo ($filtered);
    echo "<BR>";
    if(filter_var($filtered,FILTER_VALIDATE_EMAIL)){
        echo "valid email";
    }
    //IP v6 chekcing
    echo "<BR>";
    $ipv6="2001:0db8:3c4d:0015:0000:0000:1a2f:1a2b";
    if(filter_var($ipv6,FILTER_VALIDATE_IP,FILTER_FLAG_IPV6)){
        echo "valid ip v6";
    }
    //to check a number within a range
    echo "<BR>";
    if(filter_var(10,FILTER_VALIDATE_INT,array("options"=>array("min_range"=>5,"max_range"=>20)))){
        echo "within a range";
    }

    //VALIDATE URL
    echo "<BR>";
    $url="http://localhost/phpbasics/Filters.php";
    $urls=filter_var($url,FILTER_SANITIZE_URL);
    // echo $urls;
    echo "<BR>";
    if(filter_var($urls,FILTER_VALIDATE_URL)){
        echo "valid url";
    }
    //STRIP HIGH
    echo "<BR>";
    echo filter_var("\0aä\x80", FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
//FILTERINF ARRAY
$data=array("email1"=>"abc@gmail.com","email2"=>"cdf@gmail.com");
$datas=filter_var_array($data,FILTER_SANITIZE_EMAIL);
 echo var_dump($datas);

 //RETURN THE RESULT AS SPECIFIED DATA TYPE
 function add($a,$b):string{
    return $a+$b;
 }
 echo add(1,2);

    ?>
</body>
</html>