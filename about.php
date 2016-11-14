<?php
ob_start();
session_start();
include_once 'dbconnect.php';

// if(isset($_SESSION['usr_id']) == "") {
//   header("Location: \\reg-system\index.php");

//}
//else
// header("Location: \\reg-system\index.php");

//check if form is submitted
// if (isset($_POST['login'])) {

//   $email = mysqli_real_escape_string($connection, $_POST['email']);
//   $password = mysqli_real_escape_string($connection, $_POST['password']);
//   $date = date('Y-m-d h:i:s');

//   $result = mysqli_query($connection, "SELECT * FROM users WHERE email = '" . $email. "' and password = '" . sha1($password) . "'");
//  // $update = mysqli_query($connection,"UPDATE users SET last_login= '" . $date. "' WHERE email = '" . $email. "' and password = '" . md5($password) . "' ");

//  // if ($row = mysqli_fetch_array($result)) {
//     $_SESSION['usr_id'] = $row['email'];
//     $_SESSION['usr_name'] = $row['email'];
//     header("Location: \\reg-system\loggedin.php");
//  // } else {
//    // $errormsg = "Incorrect Email or Password!!!";
//   }
//   $sql="select * from student";
//   $result = mysqli_query($connection,"select * from student where email='taohidIslamKu14@gmail.com'");
//      while($rowval = mysqli_fetch_array($result))
// {
//   $accountnumber= $rowval['s_name'];
//   $title= $rowval['email'];
//   $fname= $rowval['edu_year'];
//   $lname= $rowval['phone'];
//   $add1= $rowval['current_term_code'];
//   $add2= $rowval['current_term_code'];
//   $add1= $add1%10;
//   $add2= ($add2-$add1)/10 ;
//   }
// mysqli_close($connection);
 
?>



<!DOCTYPE html>
<html>
<head>
	<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="login_files/bootstrap.min.css">
  <script src="login_files\jquery.min.js"></script>
  <script src="login_files\bootstrap.min.js"></script>
</head>

<style>
    body {
        background-color = #93B874;
        background-image: url("image/colorful.jpg");
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
        <li><a href="result.php">Result</a></li>
        <li class="active"><a href="#">About Us</a></li>
       

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php
            //echo $_SESSION['usr_name']; ?>
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
    <h1 ><font color="#ffffff">Online Registration System</font></h1>
    <h3 ><font color="#ffffff">CSE Discipline, Khulna University</font></h3>
  </div>
</div>

<div class="container">
  <div class="info">
    
    
    <h3 ><font color="#ffffff"></font></h1>
    <h3 ><font color="#ffffff">This Software is Developed By:</font></h3>
    <h4 ><font color="#ffffff">S.M Raisat Ali Akash</font></h1>
    <h4 ><font color="#ffffff">Student ID: 140204</font></h1>
    <h4 ><font color="#ffffff">SK Rahad Mannan</font></h1>
    <h4 ><font color="#ffffff">Student ID: 140214</font></h1>
    <h4 ><font color="#ffffff">&</font></h1>
    <h4 ><font color="#ffffff">Imran Hossain Arif</font></h1>
    <h4 ><font color="#ffffff">Student ID: 140231</font></h1>

    <h3 ><font color="#ffffff">Under The Supervision of</font></h1>
    <h4 ><font color="#ffffff">Debasish Chakrabarti</font></h1>
    <h4 ><font color="#ffffff">Lecturer</font></h3>
    <h4 ><font color="#ffffff">CSE Discipline, Khulna University</font></h3>
    <h4 ><font color="#ffffff">Khulna</font></h1>

    


  </div>
</div>


<div class="container">
  <div class="info">
    
  </div>
</div>


</body>
</html>