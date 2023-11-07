
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
    <title>Riwayat Permintaan</title>
</head>
<body>
<div><?php include'navbar.php';?></div>
<br>
<center><div class="judul-berita">Riwayat Permintaan</div></center>

<?php
$sql = "SELECT * FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Permission</th><th>Date</th><th>Location</th><th>Coordinates</th><th>Status</th><th>User ID</th><th>Action</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["permission"]."</td><td>".$row["date"]."</td><td>".$row["location"]."</td><td>".$row["coordinates"]."</td><td>".$row["status"]."</td><td>".$row["user_id"]."</td>";
        echo "<td><button type='button'>Action</button></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
?>

<br>
</body>
</html>
