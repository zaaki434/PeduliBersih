<?php 
session_start();
if(empty($_SESSION['admin_id'])){
    echo"
<script>alert('Maaf Anda Harus Login!!');
window.location.assign('login_admin.php');
</script>
";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Riwayat</title>

</head>
<body>
    <div class="navbar"><?php include'navbar_admin.php';?></div>
<br>
<center><div class="judul-berita">Permintaan</div></center>
<?php
$mysqli = new mysqli("localhost","root","","peduli_bersih");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$sql = "SELECT p.id_permintaan, p.tgl_permintaan, u.user_nama, p.status_permintaan FROM permintaan p INNER JOIN user u ON p.user_id = u.user_id WHERE p.status_permintaan IN ('diproses', 'selesai')";
$result = $mysqli -> query($sql);

if ($result->num_rows > 0) {
    echo "<center><table style='border-collapse: collapse; width: 90%;'><tr style='background-color: brown;'><th style='border: 1px solid black; padding: 10px; text-align: center;'>ID</th><th style='border: 1px solid black; padding: 10px; text-align: center;'>Date</th><th style='border: 1px solid black; padding: 10px; text-align: center;'>User Name</th><th style='border: 1px solid black; padding: 10px; text-align: center;'>Status</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $statusColor = '';
        if ($row["status_permintaan"] == 'menunggu') {
            $statusColor = 'Orange';
        } elseif ($row["status_permintaan"] == 'diproses') {
            $statusColor = 'lightblue';
        } elseif ($row["status_permintaan"] == 'selesai') {
            $statusColor = 'limegreen';
        }
        echo "<tr><td style='border: 1px solid black; padding: 10px; text-align: center;'>".$row["id_permintaan"]."</td><td style='border: 1px solid black; padding: 10px; text-align: center;'>".$row["tgl_permintaan"]."</td><td style='border: 1px solid black; padding: 10px; text-align: center;'>".$row["user_nama"]."</td><td style='border: 1px solid black; padding: 10px; text-align: center; background-color: ".$statusColor.";'>".$row["status_permintaan"]."</td>";
    }
    echo "</table></center>";
} else {
    echo "0 results";
}

$result -> free_result();
$mysqli -> close();
?>







</body>
</html>