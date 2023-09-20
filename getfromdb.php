<?php
// session_start();
if(isset($_POST["form2Submit"])){
    $a=$_POST["col1"];
    $b=$_POST["col5"];
    if($a!="" && $b!=""){
        $sql="select * from demotable where column1='$a' and column5=$b";
        // echo print_r($con->query($sql));
        $result=$con->query($sql);
        if($result->num_rows>=1){
            // echo "User inside";
            $_SESSION['name']=$a;
            header("location:uploadfiles.php");  //if username password matches then go to this page
             }else{
                echo "user not inside";
             } 
        
        // if($con->query($sql)){
        //     echo "User inside";
        // }else{
        //     echo "user not inside";
        // }
        
    }
}
?>