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
    $val=$obj->view1($table);
    ?>
</head>
<body>
<h2 style="color:black;background-color:white;text-align:center">VIEW NOTES</h2>
    <table>
<tr>
    <th>ID</th>
    <th>CLASS</th>
    <th>SUBJECT</th>
    <th>FILE_UPLOAD</th>
    <th>STATUS</th>
</tr>
<tr>
<?php
    while($value=mysqli_fetch_array($val))
    {
        ?>
        <td><?php echo $value['id'];?></td>
        <td><?php echo $value['class'];?></td>
        <td><?php echo $value['subject'];?></td>
        <td><?php echo $value['file_upload'];?></td>
        <td><?php echo $value['statusf'];?></td> 
        <td><a href="upload_approve.php/?id=<?php echo $value['id'];?>">uploaded</a></td>
        <td><a href="upload_decline.php/?id=<?php echo $value['id'];?>">declined</a></td>
    </tr>
    <?php
     } 
    ?>
</table>
</body>
</html>