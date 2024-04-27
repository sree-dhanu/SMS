<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include 'connection1.php';
    include 'query1.php';
    $table='student_reg';
    $obj=new sql1();
    session_start();
    ?>
    <style>
        body{
        background-image:url("flower.avif");
        background-size:cover;
        }
        *{
            box-sizing:border-box;
        }
        input[type=username],
        select,textarea{
            border-radius:8px;
            border:10px;
            width:30%;
            background-color:#C1E3FF;
            box-shadow:10px 5px 5px lightgrey;
            padding:10px;
           


        }
        label{
            padding:12px 12px 12px 0;
            display:inline-block;
            color:black;
            margin-left:200px;

            
        }
        input[type=password],
        select,textarea{
            width:30%;
            border:10px;
            padding:10px;
            border-radius:8px;
            box-shadow:10px 5px 5px lightgrey;
            background-color:#C1E3FF;
        }
        input[type=submit]{
            background-color:#009FC2;
            color:black;
            padding:20px 20px;
            padding-top:10px;
            width:100px;
            border-radius:20px;
            height:10px;
            border:none;
            float:left;
            cursor:pointer;
            margin-top:5px;
            margin-left:400px;

        }
        .col-1{
            float:left;
            width:25%;
            margin-top:5px;
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
            color:black;
            text-align:center;
            margin-bottom:60px;
            text-decoration:none;
            margin-right:400px;
        }
        </style>
</head>
<body>
<div class="container">
        <form action="" method="post">
            <div class="form">
            <h2>STUDENT LOGIN</h2>
        </div>
        <div class="row">
            <div class="col-1">
                <label for="username">Username</label>
            </div>
            <div class="col-2">
                <input type="username" id="username" name="username" required>

        </div>
        </div>
        <div class="row">
            <div class="col-1">
                <label for="password">Password</label>
            </div>
            <div class="col-2">
                <input type="password" id="password" name="password" required>
        </div>
        </div>
        <div class="row">
        <div class="col-1">
        <input type="submit" id="login" name="login">
</div>   
</div>
    </form>
    <?php
    if(isset($_POST['login']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $result=$obj->studentlog($table,$username,$password);
        header("location:http://localhost/annatask_php/studenthome.php");
       
    }
    ?>
</body>
</html>