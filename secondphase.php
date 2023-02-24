<?php
   include("conn2.php");
   session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST") {

      $college = mysqli_real_escape_string($conn,$_POST['college']);
	  $branch = mysqli_real_escape_string($conn,$_POST['branch']);
      $qualification = mysqli_real_escape_string($conn,$_POST['qualification']);
      $address = mysqli_real_escape_string($conn,$_POST['address']);
      $state= mysqli_real_escape_string($conn,$_POST['state']);
	  $country= mysqli_real_escape_string($conn,$_POST['country']);
	  $fname=$_SESSION['fname'];
	  $email=$_SESSION['email'];
      $phone=$_SESSION['phone'];
      $sql = "UPDATE registered
				SET college = '$college', qualification = '$qualification',
				branch='$branch', address='$address', state='$state', country='$country'
				WHERE name = '$fname' and email ='$email'";
	  
      $result = mysqli_query($conn,$sql);

         
         header("location: https://pages.razorpay.com/pl_GI9KOv07EGEygW/view/?email=$email&phone=$phone&name=$fname");
         exit();
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
                        <p>You are 30 seconds away from completing your registration!</p>
                        <input type="submit" name="" value="Login"/><br/>
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">SecondPhase</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#home" role="tab" aria-controls="profile" aria-selected="false">Registration</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Complete Your Profile</h3>
								<form action="" method="post">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="college" placeholder="College Name *" value="" />
                                        </div>
                                       
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="branch" placeholder="Branch *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control"  name="address" placeholder="Permanent address *" value="" />
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-6">
									    <div class="form-group">
                                            <select class="form-control" name="qualification" id="qualification">
                                                <option class="hidden"  selected disabled>Your qulaification</option>
                                                <option value="B.Tech">B.Tech</option>
                                                <option value="M.Tech">M.Tech</option>
                                                <option value="PhD">PhD</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="state" placeholder="Your State *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="country" placeholder="Your Nation *" value="" />
                                        </div>
                                        
                                        <input type="submit" class="btnRegister"  value="Proceed"/>
                                    </div>
                                </div>
								</form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
		
</body>
