<?php include 'header.php'; ?>

<body> 

	<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="main.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="dist/jquery.simple-popup.settings.css" rel="stylesheet" type="text/css" />


</head>
<body>

<form action = "../controller/register.php" class = "form-signin" method = "post"> 

<fieldset>
<font color = "#4CAF50">

<div class="container">
  
  
    <div class="form-group">
    
      <label>First name:</label>
      <input width="text" class="form-control"   placeholder="Enter First name" name="fname">
    </div>
    
    <div class="form-group">
    
      <label>Last name:</label>
      <input type="text" class="form-control" placeholder="Enter Last name" name="lname">
    </div>
    
    <div class="form-group">
    
      <label>Email Address:</label>
      <input type="text" class="form-control"  placeholder="Enter Email Address" name="email">
    </div>
    
     <div class="form-group">
     <label>Password:</label>
      <input type="text" class="form-control" placeholder="Enter Password" name="password">
    </div>
    
    
     <div class="form-group">
    
      <label>Phone Number:</label>
      <input type="text" class="form-control"  placeholder="Enter Phone Number" name="phone">
    </div>
 
 <div class="form-group">
    
      <label>Birthday:</label>
      <input type="date" class="form-control"  placeholder="Enter Birthday" name="birthday">
    </div>

<div class="form-group">
   
					<label for="dropdown">Gender:</label>
					<select name="choice">
						<option disabled selected>Choose one</option>
						<option value="M">Male</option>
						<option value="F">Female</option>
					</select>
				</div>

			<center><input type="submit" button class="button button1" value="Sign Up" class="register" ></button></center>
			<center><a href="signin.php" class="link2" >Already have an Account? Sign in! </a></center>
    </form>
 </div>
    </div>
  
  </fieldset>


</body>
</html>

<?php include 'footer.php'; ?>
