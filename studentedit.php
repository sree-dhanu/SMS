<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include 'connection1.php';
    include 'query1.php';
    // $id=$_GET['id'];
    // echo $id;
    session_start();
    $id=$_SESSION['session_id'];
    $table='student_reg';
    $obj=new sql1();
    $value=$obj->edit2($table,$id);
    $row=mysqli_fetch_array($value);
    ?>
    <style>
    body{
        background-image:url("Bblue.avif");
        background-size:cover;
        }
        *{
            box-sizing:border-box;
        }
        input[type=text],
        select,textarea{
            width:87%;
            padding:12px;
            border:none;
            box-shadow:10px 5px 5px lightgrey;
            border-radius:8px;
            background-color::#C1E3FF;
        }
        input[type=password],
        select,textarea{
            width:67%;
            padding:12px;
            border:none;
            border-radius:8px;
            box-shadow:10px 5px 5px lightgrey;
            background-color:#C1E3FF;
        }
        input[type=username],
        select,textarea{
            border-radius:8px;
            border:none;
            width:87%;
            background-color:#C1E3FF;
            box-shadow:10px 5px 5px lightgrey;
            padding:10px;
        }
        label{
            padding:12px 12px 12px 0;
            display:inline-block;
            color:black;
         }
         .container{
            border-radius:8px;
            background-color:#ffffff;
            opacity:0.7;
            padding:80px;
            margin-left:300px;
            width:50%;
            margin-top:100px;
         }
        input[type=submit]{
            background-color:#009FC2;
            color:black;
            padding:20px 20px;
            padding-top:10px;
            width:200px;
            border-radius:20px;
            height:10px;
            border:none;
            float:left;
            cursor:pointer;
            margin-top:30px;
            margin-left:150px;
        }
        .col-1{
            float:left;
            width:25%;
            margin-top:6px;
            color:black;
        }
        .col-2{
            float:left;
            width:75%;
            margin-top:6px;
        }
        .row::after{
            content:"";
            display:table;
            clear: both;
        }
        .form{
            color:blue;
            text-align:center;
            margin-bottom:60px;
            text-decoration:none;
        }
        </style>
</head>
<body>
<div class="container">
        <form action="" method="post">
            <div class="form">
            <h2>STUDENT EDIT PAGE</h2>   
        </div>
        <div class="row">
            <div class="col-1">
                <label for="name">NAME:</label>
            </div>
            <div class="col-2">
                <input type="text" id="name" name="name" value="<?php echo $row['name'];?>"><br>
            </div>
        </div>
        <div class="row">
            <div class="col-1">
                <label for="class">CLASS:</label>
            </div>
            <div class="col-2">
                <input type="text" id="class" name="class" value="<?php echo $row['class'];?>"><br>
            </div>
        </div>
        <div class="row">
            <div class="col-1">
                <label for="subject">SUBJECT:</label>
            </div>
            <div class="col-2">
                <input type="text" id="subject" name="subject" value="<?php echo $row['subject'];?>"><br>
            </div>
        </div>
        <div class="row">
            <div class="col-1">
                <label for="username">USERNAME:</label>
            </div>
            <div class="col-2">
                <input type="text" id="username" name="username" value="<?php echo $row['username'];?>"><br>
            </div>
        </div>
        <div class="row">
            <div class="col-1">
                <label for="password">PASSWORD:</label>
            </div>
            <div class="col-2">
                <input type="text" id="password" name="password" value="<?php echo $row['password'];?>"><br>
            </div>
        </div>
                <input type="submit" value="UPDATE" name="update">
            </div>
        </div>
</form>
<?php
if(isset($_POST['update']))
{
    $name=$_POST['name'];
    $class=$_POST['class'];
    $subject=$_POST['subject'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $field="name='$name',class='$class',subject='$subject',username='$username',password='$password'";
    $result=$obj->update2($table,$field,$id);
    if ($result ==true)
    {
        echo "success";
    }
    else{
        echo "fail";
    }
    // header("location:http://localhost/annatask_php/teacherhome.php");
}
?>
</body>
</html>