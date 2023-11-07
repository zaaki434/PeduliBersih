<?php 
session_start();
if(empty($_SESSION['user_id'])){
    echo"
<script>alert('Maaf Anda Harus Login!!');
window.location.assign('index.php');
</script>
";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
</head>
<body>
    <div class="navbar"><?php include'navbar.php';?></div>
<br>
<center><div class="judul-berita">NEWS</div></center>
<br>
<div class="berita"><?php include'berita.php';?></div>
</body>
</html>