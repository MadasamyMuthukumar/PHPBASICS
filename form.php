<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $("#field1").on("keyup", function() {
      var inputValue = $(this).val();
      $.post("process.php", { inputField: inputValue }, function(response) {
        // Handle the response from the PHP file here
        // console.log(response);
        $("#spans").text(response);
      });
    });
  });
</script>
</head>
<body>
<form id="myFrm" action="form.php" method="post">
    <span id="spans"></span>
        <!-- Input Field 1 -->
        <label for="field1">Field 1:</label>
        <input type="text" name="field1" id="field1"><br><br>

        <!-- Input Field 2 -->
        <label for="field2">Field 2:</label>
        <input type="text" name="field2" id="field2"><br><br>

        <!-- Input Field 3 -->
        <label for="field3">Field 3:</label>
        <input type="text" name="field3" id="field3"><br><br>

        <!-- Input Field 4 -->
        <label for="field4">Field 4:</label>
        <input type="text" name="field4" id="field4"><br><br>

        <!-- Input Field 5 -->
        <label for="field5">Field 5:</label>
        <input type="text" name="field5" id="field5"><br><br>

        <!-- Submit Button -->
        <input type="submit" name="submit" value="Submit">
    </form>
    <form action="form.php" method="post">
    <label for="field1">Field 1:</label>
        <input type="text" name="col1" id="field1"><br><br>

        <!-- Input Field 2 -->
        <label for="field2">Field 2:</label>
        <input type="text" name="col5" id="field2"><br><br>
        <input type="submit" name="form2Submit" value="Submit">
    </form>
    <?php
    
    include ("config.php");
    // include ("uploadfiles.php");
    include ("getfromdb.php");
    if(isset($_GET["mes"])){
        echo $_GET["mes"];
    }
       
    ?>
</body>
</html>