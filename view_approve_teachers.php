<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include 'connection1.php';
    include 'query1.php';
    $table="teacher_reg";
    $obj=new sql1();
    $val=$obj->view($table);
    ?>
    <style>
        body{
        background-image:url("Bblue.avif");
        background-size:cover;
        }
    </style>
</head>
<body>
    <h2 style="color:black;background-color:white;text-align:center">VIEW $ APPROVE TEACHERS </h2>
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
        <td><a href="approve_teach.php/?id=<?php echo $value['id'];?>"> registered</a></td>
        <td><a href="decline_teach.php/?id=<?php echo $value['id'];?>">decline</a></td>
        <td><a href="status_teach.php/?id=<?php echo $value['id'];?>">status</a></td>
    </tr>
    <?php
     } 
    ?>
</table>
<a href="logout.php">LOGOUT</a>

</body>
</html>