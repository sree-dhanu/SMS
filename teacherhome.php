<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         body{
        background-image:url("flower3.jpg");
        background-size:cover;
        }
        *{
            box-sizing:border-box;
        }
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 25%;
  background-color: lightpink;
  opacity: 0.4;
  position: fixed;
  height: 15%;
  overflow: auto;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color: #04AA6D;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
}
</style>
</head>
<body>
<h1 style="color:greenish blue;background-color:white;text-align:center">TEACHER HOME PAGE</h1>

<ul>
  <li><a class="active" href="teacheredit.php">TEACHERS EDIT PAGE</a></li>
  <li><a href="uploadnotes_view.php">UPLOAD AND VIEW</a></li>
  <li><a href="view_student.php">VIEW STUDENT</a></li>
  <li><a href=" teacherlogout.php">LOGOUT</a></li>
</ul>
    
</body>
</html>