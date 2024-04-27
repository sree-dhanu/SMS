<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include 'connection1.php';
    include 'query1.php';
    $table="student_reg";
    $obj=new sql1();
    $val=$obj->studentview($table);
    ?>
    <style>
        body{
        background-image:url("Bblue.avif");
        background-size:cover;
        }
    </style>
</head>
<body>
<h2 style="color:black;background-color:white;text-align:center">VIEW STUDENTS</h2>
    <table>
<tr>
    <th>ID</th>
    <th>NAME</th>
    <th>CLASS</th>
    <th>SUBJECT</th>
    <th>USERNAME</th>
    <th>PASSWORD</th>
</tr>
<tr>
    <?php
    while($value=mysqli_fetch_array($val))
    {
        ?>
        <td><?php echo $value['id'];?></td>
        <td><?php echo $value['name'];?></td>
        <td><?php echo $value['class'];?></td>
        <td><?php echo $value['subject'];?></td>
        <td><?php echo $value['username'];?></td>
        <td><?php echo $value['password'];?></td>
    </tr>
    <?php
     } 
    ?>
</table>
</body>
</html>