<?php
session_start();
include ("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
    <label for="field4">Field 4:</label>
<input type="text" name="field4" id="field4" readonly value="<?php echo $_SESSION['name']; ?>"><br><br>

<!-- Input Field 5 -->
<label for="field5">Field 5:</label>
<input type="text" name="field5" id="field5"><br><br>
<input type="submit" name="submit" value="Submit">
    </form>
<?php
if(isset($_POST["submit"])){
$name=$_SESSION["name"];
$com=$_POST["field5"];
$sql="insert into comments(name,comment,Date) values('$name','$com',now())";
$con->query($sql);
}
$sql="select * from comments";
$result=$con->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "<p>{$row['name']} <br> {$row['comment']} <br> {$row['Date']} </p>";

    }
}else{
    echo "no rows";
}

?>
</body>
</html>