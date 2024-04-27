<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    session_start();
    include 'connection1.php';
    include 'query1.php';
    $table="file_upload";
    $obj=new sql1();
    $sid=$_SESSION['session_name'];
    // echo $sid;
    $val=$obj->viewnotes($table,$sid);
    // $tab1="student_reg";
    // $tab2="file_upload";
    // $field="$tab1.name,$tab2.class,$tab2.subject,$tab2.file_upload";
    // $notes=$obj->viewnotes($tab1,$tab2,$field,$sid);

    // if($notes==true)
    // {echo "success";}
    // else{echo "failed";}
    ?>
</head>
<body>
<h2 style="color:black;background-color:white;text-align:center">VIEW NOTES</h2>
    <table>
<tr>
    <th>ID</th>
     <th>NAME</th> 
    <th>CLASS</th>
    <th>SUBJECT</th>
    <th>FILE_UPLOAD</th>
</tr>
    <!-- <th>STUDENT NAME</th> -->
    <tr>
    <?php
    while($value=mysqli_fetch_array($val))
    {
        ?>
        <td><?php echo $value['id'];?></td>
        <td><?php echo $value['sname'];?></td>
        <td><?php echo $value['class'];?></td>
        <td><?php echo $value['subject'];?></td>
        <td><?php echo $value['file_upload'];?></td>
       
        </tr>
    <?php
 }
    ?>
</body>
</html>