<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<title>Login - Library Management</title>
</head>
<body style="background: linear-gradient( rgba(0, 51, 102,0.6) 100%, rgba(0, 51, 102,0.6)100%),url(image/Engineering-Colleges-in-Rajasthan.jpg); background-size: cover;">
<div class="navbar-nav">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2">
			<a href="http://www.vyaseducation.org/index.php">
				<img src="image/logo.png" class="head-logo">
			</a>
			</div>
			<div class="col-md-6 head-logo-text"><a href="#">LIBRARY MANAGEMENT SYSTEM</a></div>
			<div class="col-md-4"></div>
		</div>
	</div>
</div>
<div class="container font-color">
	<div class="row">
		<div class="col-md-6">
			<br>
			<h2 class="h2 text-center">Login Here</h2>
			<p class="text-center" style="color: white;">(Librarian)</p>
			<form method="post">
				<div class="form-group">
					<label>Username:</label>
					<input type="text" name="username" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Password:</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<input type="submit" value="Login" class="btn btn-danger center-block" name="login">
			</form>
		</div>
		<div class="col-md-2"></div>
		<div class="col-md-3"></div>
	</div>
</div>

<footer style="padding-top: 185px; color: red; text-align: center;"><a href="developer.php">Meet to the developer team</a></footer>
<?php
	$servername = "localhost";
	$user = "root";
	$password = "";
	$dbname = "lms";
	
	$conn = mysqli_connect($servername,$user,$password,$dbname);
	session_start();
?>

<?php
	if(isset($_POST['login']))
	{
		$sel = "SELECT * FROM librarian WHERE username = '".$_POST['username']."' AND password = '".$_POST['password']."'";
		$exe = mysqli_query($conn,$sel);
		$total = mysqli_num_rows($exe);
		if ($total == 1) {
			$fetch = mysqli_fetch_array($exe);
			$_SESSION['username'] = $fetch['username'];
			echo '<script>window.location = "home.php"</script>';
		}
		else
		{
			echo '<script>alert ("Invalid username & password")</script>';
		}
	}
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>
</html>