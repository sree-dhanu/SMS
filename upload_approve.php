<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include 'connection1.php';
    include 'query1.php';
    $table="file_upload";
    $obj=new sql1();
    $id=$_GET['id'];
    echo $id;
    $result=$obj->statusupdate1($table,$id);
    header("location:http://localhost/annatask_php/view_notes.php");
    ?>
</head>
<body>
    
</body>
</html>