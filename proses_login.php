<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.all.min.js"></script>
    <script>
        function peringatan(){
            Swal.fire({
  icon: 'error',
  title: 'Login Gagal',
  text: 'Periksa NIK Dan Kata Sandi',
  confirmButtonText: 'Login Ulang',
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    Swal.fire(window.location.assign('index.php'))
        }})}
    </script>
    </head>
<body>
<?php

$user_id = $_POST['user_id'];
$user_password = $_POST['user_password'];

include 'koneksi.php';

$sql = "SELECT*FROM user WHERE user_id='$user_id' AND user_password=md5('$user_password')";
$query = mysqli_query($koneksi, $sql);

if(mysqli_num_rows($query)>0){

session_start();
$_SESSION['user_id'] = $user_id;
$data = mysqli_fetch_array($query);

$_SESSION['user_nama'] = $data['user_nama'];



header('location:user.php');
}else{
        echo"
    <script>
    peringatan();
    </script>
    ";
}
 ?>
</body>


</html>