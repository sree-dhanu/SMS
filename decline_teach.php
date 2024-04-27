<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2  style="color:red;background-color:grey;text-align:center">DECLINE PAGE</h2>
    <?php
    include 'connection1.php';
    include 'query1.php';
    $table="teacher_reg";
    $obj=new sql1();
    $id=$_GET['id'];
    echo $id;
    $result=$obj->delete1($table,$id);
    header("location:http://localhost/annatask_php/view_approve_teachers.php");
    ?>
</body>
</html>