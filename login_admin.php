<?php 
session_start();
if(isset($_SESSION['admin_id'])){
    echo "<script>location.href='admin.php';</script>";
}?>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="extassets/login.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
				<form method="post" action="a_proseslogin.php">
					<label for="chk" aria-hidden="true">BankSampah</label>
					<input required name="admin_id" type="text" placeholder="ID">
					<input required name="admin_password" type="password" placeholder="Password">
                    <button type="submit">Login</button>
				</form>
			</div>


			
	</div>
</body>
</html>