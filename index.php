

<?php

include('config.php');


if(isset($_POST['login'])){
            
	

	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = "select password from admin where username = '$username'";
		$query_run = mysqli_query($mysqli,$query);
		$num_rows = mysqli_num_rows($query_run);
		if($num_rows>0){
			$data = mysqli_fetch_assoc($query_run);
			if(password_verify($password, $data['password'])){
				session_destroy();
				session_start();
				$_SESSION['username'] = $username;
				echo' 
				<script>
				alert("Anda Berhasil Login");
				</script>'  ; 
				header("refresh:1; url=dashboard.php");
			}else{
			 echo' 
			 <script>
			 alert("Password atau Nama akun salah");
			 </script>'  ;    
			}

		}else{
		 echo' 
		 <script>
		 alert("Password atau Nama akun salah");
		 </script>'  ;   
		}
  
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Hitung.In</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/img-02.jpg');">
			<div class="wrap-login100 p-t-10 p-b-30">


			<form action="index.php" method="POST">
			<div class="login100-form-avatar">
						<img src="images/image001.png" alt="avatar"  href="index.html">
					</div>

					<span class="login100-form-title p-t-10 p-b-45">
						HITUNG.IN
					</span>

					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input type="text" class="form-control" name="username" placeholder="Username" required="required">
							
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-lock"></i></span>
							<input type="password" class="form-control" name="password" placeholder="Password" required="required">
						</div>
					</div>
					<div class="form-group">
						<button type="submit" name ="login" class="btn btn-primary btn-block btn-lg">Sign In</button>
          </div>

          
				</form>



			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>