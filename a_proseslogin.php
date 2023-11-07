<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.all.min.js"></script>
    <script>
        function peringatan(){
            Swal.fire({
  icon: 'error',
  title: 'Login Gagal',
  text: 'Periksa ID Dan Kata Sandi',
  confirmButtonText: 'Login Ulang',
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    Swal.fire(window.location.assign('login_admin.php'))
        }})}
    </script>
    </head>
<body>
<?php

$admin_id = $_POST['admin_id'];
$admin_password = $_POST['admin_password'];

include 'koneksi.php';

$sql = "SELECT*FROM admin WHERE admin_id='$admin_id' AND admin_password=md5('$admin_password')";
$query = mysqli_query($koneksi, $sql);

if(mysqli_num_rows($query)>0){

session_start();
$_SESSION['admin_id'] = $admin_id;
$data = mysqli_fetch_array($query);

$_SESSION['admin_nama'] = $data['admin_nama'];



header('location:admin.php');
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