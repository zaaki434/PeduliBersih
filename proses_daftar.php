<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.all.min.js"></script>
    <script>
        function peringatan2(){
            Swal.fire({
  icon: 'error',
  title: 'Pendaftaran Gagal',
  text: 'Periksa Data Yg Di Masukkan',
  confirmButtonText: 'Daftar Ulang',
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    Swal.fire(window.location.assign('index.php'))
        }})}

        function peringatansuccess(){
            Swal.fire({
  icon: 'success',
  title: 'Pendaftaran Berhasil',
  text: 'Silahkan Login',
  confirmButtonText: 'Login',
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
$user_nama = $_POST['user_nama'];
$user_password = $_POST['user_password'];
$telp = $_POST['telp'];

include 'koneksi.php';

$sql = "INSERT INTO user(user_id,user_nama,user_password,telp) VALUES('$user_id','$user_nama',md5('$user_password'),'$telp')";
$query = mysqli_query($koneksi,$sql);

if($query){
    echo"
    <script>
        peringatansuccess();
    </script>";


}else{
    echo"
    <script>
        peringatan2();
    </script>";
}

?>
</body>


</html>