<?php
ob_start();
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['usr_id']) == "") {
  header("Location: \\reg-system\index.php");

}


?>

<!DOCTYPE html>
<html>
<head>
  <head>
  <title>Result</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="login_files/bootstrap.min.css">
  <script src="login_files\jquery.min.js"></script>
  <script src="login_files\bootstrap.min.js"></script>
</head>

<style>
    body {
        background-color = #93B874;
        background-image: url("image/34.jpg");
    }
        
  </style> 
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Online Registration Form</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="home.php">Portfolio</a></li>
        
        </li>
        <li><a href="#">Registration</a></li>
        <li class="active"><a href="result.php">Result</a></li>
        <li><a href="about.php">About Us</a></li>
        

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php
            echo $_SESSION['usr_name']; ?>
         </a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>
  


</body>
</head>
<body>

<div class="container">
  <div class="info">
    <h1>Online Registration System</h1>
    <h3>CSE Discipline, Khulna University</h3>
  </div>
</div>

<div class="container">
  <div class="info">
    <table width="100%" border="1">
        <tr> 
          <td><strong><font color="#000000" size = "7">Course Id</font></strong></td>
          <td><strong><font color="#000000" size = "7">Year</font></strong></td>
          <td><strong><font color="#000000" size = "7">Term</font></strong></td>
          <td><strong><font color="#000000" size = "7">Gpa</font></strong></td>
  
    
        </tr>

        <?php
        $sql = "SELECT * FROM student, takes where st_id = s_id and email = '" .$_SESSION['usr_name']. "'";
    //echo $sql;exit;
    $result = mysqli_query($connection, $sql);
    while($row=mysqli_fetch_array($result))
    {
    ?>
        <tr> 
          <td><font color="#ffffff" size = "5"><?php echo $row['c_id']; ?></font></td>
          <td><font color="#ffffff" size = "5"><?php echo (($row['term_code'] -($row['term_code'] %10))/ 10); ?></font></td>
          <td><font color="#ffffff" size = "5"><?php echo ($row['term_code'] % 10); ?></font></td>
          <td><font color="#ffffff" size = "5"><?php echo $row['grade']; ?></font></td>
        
        </tr>
      <?php
    }
    ?>
  </div>
</div>

</body>
</html>