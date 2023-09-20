<!-- r - only read existing file
    w - write existing file(erase all data starts like new file), if no file exist means it will create new file
    a - write existing file with not erasing data(cursor at the end of file) if if no file exist means it will create new file
    x - it creates new file and write (suppose already file exist means it will throw error)
    r+ (like r and both read and write) 
    w+ (like w and both read and write)
    a+ (like a and both read and write)
    x+ (like x and additionaly we can read)-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FileHandling</title>
</head>
<body>
    <?php
    $myfile=fopen("file.txt","a+") or die ("unable to open file");
    // echo fread($myfile,filesize("file.txt"));
  
    // echo fgets($myfile); //reads first line
    while(!(feof($myfile))){
        // echo fgets($myfile)."<br>";
        echo fgetc($myfile)."<br>"; //print characters
    }

    //WRITE INSIDE FILE
fwrite($myfile,"new data\n");
    fclose($myfile);
    ?>
</body>
</html>