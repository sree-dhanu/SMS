<?php
class sql1{
    public function teacherreg($table,$field,$values)
    {
      include 'connection1.php';
      $query1="insert into $table($field) values($values)";
      $exe1=mysqli_query($connection1,$query1);
    if($exe1==true)
    {
      echo "succesfull";
    }
    else{
      echo "fail";
    }
  }
  public function studentreg($table,$field,$values)
    {
      include 'connection1.php';
      $query1="insert into $table($field) values($values)";
      $exe2=mysqli_query($connection1,$query1);
    if($exe2==true)
    {
      echo "succesfull";
    }
    else{
      echo "fail";
    }
  }
  public function adminlogin1($table,$username,$password)
    {
      include 'connection1.php';
      $query1="select * from $table where username='$username' and password='$password'";
      $exe3=mysqli_query($connection1,$query1);
      $row=mysqli_fetch_array($exe3);
      if(mysqli_num_rows($exe3)==1){
        $_SESSION['session_id']=$row['id'];
        return $exe3;
      }
    }
    public function view($table)
     {
     include 'connection1.php';
     $query1="select * from $table";
     $exe4=mysqli_query($connection1,$query1);
     return $exe4;
     if($exe4==true)
     {
      echo "success";
     }
     else{
      echo "fail";
     }
    }
    public function approveupdate($table,$id)
    {
      include 'connection1.php';
      $query1="update $table set status='approve' where status='registered' and id='$id'";
      $exe5=mysqli_query($connection1,$query1);
      return $exe5;
    }
    public function delete1($table,$id)
    {
      include 'connection1.php';
      $query1="delete from $table where id='$id'";
      $exe6=mysqli_query($connection1,$query1);
      return $exe6;
    }
    public function teacherlog($table,$username,$password)
    {
      include 'connection1.php';
      $query1="select * from $table where username='$username' and password='$password'";
      $exe7=mysqli_query($connection1,$query1);
      $row=mysqli_fetch_array($exe7);
      if(mysqli_num_rows($exe7)==1){
        $_SESSION['session_id']=$row['id'];
        return $exe7;
      }
    }
    public function statusupdate($table,$id)
    {
      include 'connection1.php';
      $query1="update $table set status='approve' where status='registered' and id='$id'";
      $exe5=mysqli_query($connection1,$query1);
      return $exe5;
    }
    public function edit1($table,$id)
    {
      include 'connection1.php';
      $query1="select * from $table where id='$id'";
      $exe9=mysqli_query($connection1,$query1);
      return $exe9;
      
    }
    public function update1($table,$field,$id)
    {
      include 'connection1.php';
      $query1="update $table set $field where id='$id'";
      $exe8=mysqli_query($connection1,$query1);
      return $exe8;
    }
    public function upload($field,$values)
    {
      include 'connection1.php';
      $query1="insert into file_upload($field) values($values)";
      $execute=mysqli_query($connection1,$query1);
      return $execute;
    }
    public function studentlog($table,$username,$password)
    {
      include 'connection1.php';
      $query1="select * from $table where username='$username' and password='$password'";
      $exec=mysqli_query($connection1,$query1);
      $row=mysqli_fetch_array($exec);
      if(mysqli_num_rows($exec)==1){
        $_SESSION['session_id']=$row['id'];
        $_SESSION['session_name']=$row['name'];
        return $exec;
      }
    }
    public function edit2($table,$id)
    {
      include 'connection1.php';
      $query1="select * from $table where id='$id'";
      $execute1=mysqli_query($connection1,$query1);
      return $execute1;
      
    }
    public function update2($table,$field,$id)
    {
      include 'connection1.php';
      $query1="update $table set $field where id='$id'";
      $execute2=mysqli_query($connection1,$query1);
      return $execute2;
    }
    public function view1($table)
    {
     include 'connection1.php';
     $query1="select * from $table";
     $execute4=mysqli_query($connection1,$query1);
     return $execute4;
     if($execute4==true)
     {
      echo "success";
     }
     else{
      echo "fail";
     }
    }
    public function statusupdate1($table,$id)
    {
      include 'connection1.php';
      $query1="update $table set statusf='approve_files' where statusf='upload' and id='$id'";
      $execute5=mysqli_query($connection1,$query1);
      return $execute5;
    }
    public function statusupdate2($table,$id)
    {
      include 'connection1.php';
      $query1="update $table set statusf='decline_files' where statusf='upload' and id='$id'";
      $execute6=mysqli_query($connection1,$query1);
      return $execute6;
    }
    public function adminlogout()
    {
      include 'connection1.php';
      session_start();
    session_destroy();
    header("location:http://localhost/annatask_php/adminlogin.php");
    }
    public function studentview($table)
     {
     include 'connection1.php';
     $query1="select * from $table";
     $execute7=mysqli_query($connection1,$query1);
     return $execute7;
     if($execute7==true)
     {
      echo "success";
     }
     else{
      echo "fail";
     }
    }
    public function teacherlogout()
    {
      include 'connection1.php';
      session_start();
    session_destroy();
    header("location:http://localhost/annatask_php/teacherlogin.php");
    }
    public function studentlogout()
    {
      include 'connection1.php';
    session_start();
    session_destroy();
    header("location:http://localhost/annatask_php/studentlogin.php");
    }
    public function viewnotes($table,$sid)
     {
     include 'connection1.php';
     $query1="select * from $table"; 
     $execute7=mysqli_query($connection1,$query1);
     return $execute7;
     }
     public function nameselector($table)
     {
      include 'connection1.php';
      $query1="select id,name from $table";
      $execute8=mysqli_query($connection1,$query1);
      return $execute8;
     }
    }
?>
</body>
</html>