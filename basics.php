<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basics</title>
</head>
<body>
<form action="#" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">Message:</label>
        <input type="text" id="message" name="message"><br><br>

        <input type="submit" value="Submit">
    </form>
    <?php

    if($_GET){
        echo print_r($_GET);
    }else if($_POST){
        echo print_r($_POST);
    }
    $name="maddy";
    $name="sdhlk";
    $view_name= "<h1> $name </h1>";
    echo $view_name,"hello Maddy";
    $apostrope="Murugans's";
    echo $apostrope;
    echo "<br>";
    echo "$apostrope bike";
    // print "hii";   using print we cant print more than one variable but in echo

    //CONCAT STIRNG
    $name1="ajith";
    $name2="kumar";
    $name3=$name1." ".$name2;
    echo $name3;
    echo "<br>";
    //HANDLING ARRAY
    $num_array=[]; //Initializing array
    $num_array[]=1;
    $num_array[]=2;
    $num_array[]=3;

    print_r($num_array);
    echo"<br>";
    // print $num_array[0];

    //ASSOCIATE ARRAY
    $no=[
        "no1"=>1,
        "no2"=>2
    ];
    $no["no3"]=3;
    print_r($no);
    echo "<br> {$no['no1']} number 1 printed";

    //MATHEMATICAL OPERATIONS
    $x=10;
    $y=5;
    $z=$x+$y." ";
    $z.=$x-$y;
    echo $z." result";
    //TERNARY OPERATOR
    echo ($x>$y)?"true":"False";
    $c='';
    echo "<br>";
    echo $c?:15;
    
    //SWITCH CASE
    switch($x){
        case ($x>20):
            echo "true one";
            break;
            case 10:
                echo "true two";
                break;
                default :
                echo "fail";

    }
    //FOR LOOP
    for($i=0;$i<3;$i++){
        echo $num_array[$i]."<br>";
    }

    //LINK PHP FILE
    include "toLink.php";

    //ANONYMOUS FUNCTION
    $country=function($c_name){
        return "<br> Hello $c_name";
    };
    echo $country("India");

    //NORMAL FUNCTION
    function add($x,$y){
        return $x+$y;
    }
    echo "<br>".add(10,20);

    //FOR EACH
    $str_arr=["fdf","fdf",'dfdf',"fgsf"];
    foreach($str_arr as $i){
        echo "<li>$i</li>";
    }
    //TWO DIMENSIONAL ARRAY
    $two_d=array(array(10,20)
    ,array(30,40));
    echo $two_d[0][1];

    //PHP WITH JSON
    //CONVERT ASSOCIATIVE ARRAY TO JSON FILE
    $ass=array("no1"=>1,"no2"=>2,"no3"=>3,"no4"=>4);
    $jsobObj=json_encode($ass);
    echo "<br>";
    echo $jsobObj;

    //CONVERT INDEXED ARRAY TO JSON ARRAY
    echo "<br>";
    $arr=[1,2,3,4];
    $jsonArr=json_encode($arr);
    echo $jsonArr;

    //CONVERT JSON TO PHP OBJECT
    echo "<br>";
    $json='{
        "name":"kumar",
        "age":60
    }';
    $phpObj=json_decode($json);
    echo $phpObj->name;

    // ?CONVERT JSON TO ASSOCIATE ARRAY
    echo "<br>";
    $assAr=json_decode($jsobObj,true);
    foreach($assAr as $key=>$value){
        echo $key." ".$value;
        echo "<br>";
    }

    //GET EXTERNAL JSON FILE
    echo "<br>";
   $getJson=json_decode(file_get_contents('data.json'),true);
//    echo $getJson->quiz->sport->q1->question;
var_dump($getJson);
// foreach($getJson as $key=>$value){
//     echo $key." ".$value;
//     echo "<br>";
// }
    ?>

    



<!-- Forecah -->
</body>
</html>