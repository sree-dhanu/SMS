<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include 'connection1.php';
    include 'query1.php';
    $obj=new sql1(); 
    $table="student_reg";
    $result=$obj->nameselector($table);
    // $sname=$row['sname'];
    //select student id from student table. and it will pass to this upload function
    //create a field in the upload table named sid
    ?>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
       class: <input type="text" name="class" id="class">
       subject: <input type="text" name="subject" id="subject">
       file_upload: <input type="file" name="file_upload">
       <label for="sname">Select Name:</label>
  <select name="sname" id="sname">
    <?php
    while($row=mysqli_fetch_array($result))
    {
      ?>
    
    <option>
      <?php
       echo $row['name'];
       ?>
    </option>
    <?php } ?>
  </select>
        <input type="submit" name="fup" value="upload">
</form>
<?php
if(isset($_POST['fup']))
    {
      $sname=$_POST['sname'];
      $class=$_POST['class'];
      $subject=$_POST['subject'];
      $document=basename($_FILES['file_upload']['name']);
      $path="files/".$document;
      move_uploaded_file($_FILES['file_upload']['tmp_name'],$path);
      $field="class,subject,file_upload,sname";
      $values="'$class','$subject','$document','$sname'";
      $value1=$obj->upload($field,$values);
      if ($value1==true)
      {
       echo "success";
      }
      else{
       echo "fail";
      }
    }
    ?>
</body>
</html>