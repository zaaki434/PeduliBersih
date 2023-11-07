    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.all.min.js"></script>
    <script>
        function peringatan4(){
            Swal.fire({
  icon: 'error',
  title: 'Gagal Membuat Permintaan',
  confirmButtonText: 'Buat Ulang',
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    Swal.fire(window.location.assign('request.php'))
        }})}

        function peringatan5(){
            Swal.fire({
  icon: 'success',
  title: 'Berhasil Membuat Permintaan',
  confirmButtonText: 'Selesai',
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    Swal.fire(window.location.assign('user.php'))
        }})}
    </script>
    </head>
<body>

<?php


session_start();
$user_id = $_SESSION ['user_id'];
$asal_foto = $_FILES['foto']['tmp_name'];
$nama_foto = $_FILES['foto']['name'];
$folder = "foto";
$detail_permintaan = $_POST['detail_permintaan'];
$alamat_permintaan = $_POST['alamat_permintaan'];
$coordinates = $_POST['coordinates'];
$tgl_permintaan = $_POST['tgl_permintaan'];
$status_permintaan = 'belum';

if(move_uploaded_file($asal_foto, $folder.'/'.$nama_foto)) {

include 'koneksi.php';
$sql = "INSERT INTO permintaan(user_id,foto,detail_permintaan,alamat_permintaan,coodinates,tgl_permintaan,status_permintaan)
VALUES('$user_id','$nama_foto','$detail_permintaan','$alamat_permintaan','$coordinates','$tgl_permintaan','$status_permintaan')";

if(mysqli_query($koneksi, $sql)) {
    echo"
    <script>
        peringatan5();
    </script>";


} else {

    print mysqli_error($koneksi); 

}

} else {
    echo"
    <script>
        peringatan4();
    </script>";


}


?>
</body>
</html>
