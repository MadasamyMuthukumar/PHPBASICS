<?php
include ("config.php");
if(isset($_POST["inputField"])){
    // echo "yes";
    $name=$_POST["inputField"];
    // echo $name;
    if(strlen($name)>=5){
        $sql="select * from demotable where column1='$name'";
        $result=$con->query($sql);
        if($result->num_rows>0){
            echo "username already taken";
        }else{
            echo "username available";
        }
    }else{
        echo "name must contain 5 characters";
    }

}else{
    header("location:form.php");
}
?>