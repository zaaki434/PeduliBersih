<?php 
session_start();
if(isset($_SESSION['user_id'])){
    echo "<script>location.href='user.php';</script>";
}?>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="extassets/login.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
				<form method="post" action="proses_login.php">
					<label for="chk" aria-hidden="true">BankSampah</label>
					<input required name="user_id" type="text" placeholder="ID">
					<input required name="user_password" type="password" placeholder="Password">
                    <button type="submit">Login</button>
				</form>
			</div>


			<div class="login">

            <form method="post" action="proses_daftar.php">
					<label for="chk" aria-hidden="true">Daftar</label>
					<input required type="text" name="user_id" placeholder="buat ID anda">
					<input required type="text" name="user_nama" placeholder="Masukkan Nama Anda">
					<input required type="password" name="user_password" placeholder="Buat Kata Sandi">
					<input required type="text" name="telp" placeholder="Masukkan Nomor Telephone">
					<button required type="submit">Daftar</button>
				</form>
			</div>
	</div>
</body>
</html>