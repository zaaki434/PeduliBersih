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
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database connection
    include 'koneksi.php';

    // Form data
    $detail_permintaan = $_POST['detail_permintaan'];
    $alamat_permintaan = $_POST['alamat_permintaan'];
    $coordinates = $_POST['coordinates'];
    $tgl_permintaan = $_POST['tgl_permintaan'];

    // File upload
    $foto_permintaan = [];
    for ($i = 0; $i < count($_FILES['foto_permintaan']['name']); $i++) {
        $tmp_name = $_FILES['foto_permintaan']['tmp_name'][$i];
        $name = $_FILES['foto_permintaan']['name'][$i];
        $folder = "foto";

        if (move_uploaded_file($tmp_name, $folder.'/'.$name)) {
            $foto_permintaan[] = $name;
        } else {
            echo "Failed to upload file: " . $name;
            exit;
        }
    }

    // Convert the array of filenames to a string
    $foto_permintaan = implode(",", $foto_permintaan);

    // SQL query
    $sql = "INSERT INTO permintaan(detail_permintaan, foto_permintaan, alamat_permintaan, coordinates, tgl_permintaan)
            VALUES('$detail_permintaan', '$foto_permintaan', '$alamat_permintaan', '$coordinates', '$tgl_permintaan')";

    // Execute the query
    if (mysqli_query($koneksi, $sql)) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>


</body>
</html>
