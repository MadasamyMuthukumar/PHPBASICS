<?php

$con=new mysqli("localhost","root","","mydemodb");
if($con->connect_error){
echo $con->connect_error;
die("Database not connected!");
}else{
    echo "Database connected!";
}
// if(isset($_POST["submit"])){
//     $a=$_POST["field1"];
//     $b=$_POST["field2"];
//     $c=$_POST["field3"];
//     $d=$_POST["field4"];
//     $e=$_POST["field5"];
//     if($a!="" && $b!="" && $c!="" && $d!="" && $e!=""){
//         $sql="insert into demotable(column1,column2,column3,column4,column5) values('$a','$b','$c',$d,$e)";
//         if($con->query($sql)){
//             echo "<h2> Added to database </h2>";
//         }else{
//             echo "<h2> Sorry some error occured </h2>";
//         }
//     }

// }else{
//     echo "<h3>Please fill all the fields</h3>";
// }


?>