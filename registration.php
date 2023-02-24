<?php
   include("conn2.php");
   session_start();
   
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      if($_POST['passwd']!=$_POST['confpasswd']) {
	  echo'passwords does not match. please retry';}
	  else{
      $fname = mysqli_real_escape_string($conn,$_POST['fname']);
	  $_SESSION['fname']=$fname;
      $email = mysqli_real_escape_string($conn,$_POST['email']);
	  $_SESSION['email']=$email;
      $phone = $_POST['phone'];
	  $_SESSION['phone']=$phone;
      $passwd= mysqli_real_escape_string($conn,$_POST['passwd']);
	  $passwd= password_hash($passwd, PASSWORD_DEFAULT);
      $pname=$_SESSION['name'];
      $sql = "INSERT INTO `registered` (`u_id`, `name`,`email`,`phone`,`passwd`) VALUES (NULL, '$fname','$email','$phone','$passwd');";
      $result = mysqli_query($conn,$sql);

         
         header("location: secondphase.php");
         exit();
	  }
   }
 
?>



<!DOCTYPE html>
<html lang="en">
<head>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="registration.css" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>This is the first phase of registration!</p>
                        <input type="submit" name="" value="Login"/><br/>
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">First Phase</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#home" role="tab" aria-controls="profile" aria-selected="false">Registration</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Register for the exam</h3>
								<form action="" method="post">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Full Name *" name="fname" value="" />
                                        </div>
                                       
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="passwd" placeholder="Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  name="confpasswd" placeholder="Confirm Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Your Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text"  name="phone" class="form-control" placeholder="Your Phone *" value="" />
                                        </div>
                                        
                                        <input type="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                </div>
								</form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
</body>