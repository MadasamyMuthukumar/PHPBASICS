<?php
session_start();
// session_destroy();
if(!isset($_SESSION['name'])){
    header("location:form.php?mes=<h2>LOGIN FIRST</h2>"); 
}
echo $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Files</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data" id="frm">
    <h2>Upload your files here..</h2>
    <label for="file">Select files to upload</label>
    <input type="file" id="file" name="file[]"  multiple="multiple">
    <input name="submit" type="submit" id="submit" value="Submit">
    </form>
<?php

$flag=false;
if(isset($_POST["submit"])){
  
    // echo "submited";
    // $count=count($_FILES["file"]["name"]);
    if(count($_FILES['file']['name'])>0){
        // echo  $_FILES['file']['name'][1];
        for($i=0;$i<count($_FILES['file']['name']);$i++){
            // echo  "inside2";
            $tmp=$_FILES['file']['tmp_name'][$i];
            if($tmp!=""){
                // echo  "inside3";
                $name=$_FILES['file']['name'][$i];
                $path="C:xampp/htdocs/store/".$_FILES['file']['name'][$i];
                if(move_uploaded_file($tmp,$path)){
                    // echo  "inside4";
                    $files[]=$name;
                    $flag=true;
                }
            }
        }
        // echo print_r($_FILE['file']['name']);
    }
    if($flag){
        echo "File uploaded succesffully";
        $flag=false;
    }
}
// echo __DIR__;
// mkdir(__DIR__."/data.json");

?>
    
</body>
</html>