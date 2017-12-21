<?php include 'header.php'; ?>


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

		<form action = "../controller/index.php"  method = "post">

		<fieldset>
        <center><h3><b><font color = "#4CAF50">IS218/Login Form - TO DO LIST</h3></b></center>

        <div class="container">


            <div class="form-group">

                <label>Email:</label>
                <input type="text" class="form-control"   placeholder="Enter Email" name="email">
            </div>

            <div class="form-group">

                <label>Password:</label>
                <input type="text" class="form-control" placeholder="Enter Password" name="pass">
            </div>

			<center><input type="submit" button class="button button1" value="Log In"> <br>
 </div>
        </div>

    </fieldset>
</form>
	
      <center><a href="https://web.njit.edu/~erc7/IS218P2/view/register.php" class="link2">Create an Account</a></center>
	

</body>
</html>

<?php include 'footer.php'; ?>