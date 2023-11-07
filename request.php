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
    <title>Request</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    
</head>
<body>
<div><?php include'navbar.php';?></div>
<br>
<script src="extjs/lokasi.js"></script>
<script>
        $(document).ready(function(){
            if(navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var latlong = position.coords.latitude+","+position.coords.longitude;
                    var link = "https://maps.google.com/maps?q="+latlong+"&t=&z=13&ie=UTF8&iwloc=&output=embed";
                    $("#user_location").prop("src",link);
                    $("#coordinates").val(position.coords.latitude+","+position.coords.longitude);
                    $("#user_long").val(position.coords.longitude);
                });
            } else {
                alert("Sorry your browse does not support HTML5 Geolocation.");
            }
        });
        
        function getLocation()
{
    if(navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var latlong = position.coords.latitude+","+position.coords.longitude;
            var link = "https://maps.google.com/maps?q="+latlong+"&t=&z=13&ie=UTF8&iwloc=&output=embed";
            $("#user_location").prop("src",link);
        });
    }else{
        alert("Sorry, your browser does not support HTML5 GeoLocation");
    }
}


    </script>

<style>

.container {
  max-width:600px;
  margin:0 auto;
  text-align:center;
  -webkit-border-radius:6px;
  -moz-border-radius:6px;
  border-radius:6px;
  background-color: #cf5a14;
}
.head {
  -webkit-border-radius:6px 6px 0px 0px;
  -moz-border-radius:6px 6px 0px 0px;
  border-radius:6px 6px 0px 0px;
  background-color:#241c1c;
  color:#cf5a14;
}
.judul_form {
  text-align:center;
  padding:18px 0 18px 0;
  font-size: 1.4em;
}
input {
  margin-bottom:10px;
}
textarea {
  height:100px;
  margin-bottom:10px;
}
input:first-of-type
{
  margin-top:35px;
}
input, textarea {
  font-size: 1em;
  padding: 15px 10px 10px;
  font-family: 'Source Sans Pro',arial,sans-serif;
  border: 1px solid #cecece;
  background: white;
  color:Black;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  width: 80%;

}
::-webkit-input-placeholder {
   color: black;
}
:-moz-placeholder {
   color: black;  
}
::-moz-placeholder {
   color: black; 
}
:-ms-input-placeholder {  
   color: black;  
}
button {
  margin-top:15px;
  margin-bottom:25px;
  background-color:#241c1c;
  padding: 12px 45px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  border-radius: 5px;
  -webkit-transition: .5s;
  transition: .5s;
  display: inline-block;
  cursor: pointer;
  width:30%;
  color:#cf5a14;
}
button:hover, .button:hover {
  background:white;
}
label.error {
    font-family:'Source Sans Pro',arial,sans-serif;
    font-size:1em;
    display:block;
    padding-top:10px;
    padding-bottom:10px;
    background-color:#d89c9c;
    width: 80%;
    margin:auto;
    color: #FAFAFA;
    -webkit-border-radius:6px;
    -moz-border-radius:6px;
    border-radius:6px;
}
/* media queries */
@media (max-width: 700px) {
  label.error {
    width: 90%;
  }
  input, textarea {
    width: 90%;
  }
  button {
    width:90%;
  }
  body {
  padding-top:10px;
  }  
}
.message {
    font-family:'Source Sans Pro',arial,sans-serif;
    font-size:1.1em;
    display:none;
    padding-top:10px;
    padding-bottom:10px;
    background-color:#2ABCA7;
    width: 80%;
    margin:auto;
    color: #FAFAFA;
    -webkit-border-radius:6px;
    -moz-border-radius:6px;
    border-radius:6px;
}
</style>
<form method="post" action="proses_request.php" id="contact">
  <div class="container">
    <div class="head">
      <h2 class="judul_form">Buat Permintaan</h2>
    </div>
    <input type="file" name="foto" placeholder="Foto" accept="image/*" multiple/><br />
    <textarea type="text" name="detail_permintaan" placeholder="Keterangan"></textarea><br/>
    <textarea type="text" name="alamat_permintaan" placeholder="Alamat Pengambilan"></textarea>
   <input type="text" placeholder="Tanggal" name="tgl_permintaan" readonly value="<?= date('d-m-y');?>">
   <input type="text" id="coordinates" name="coordinates">
   <button id="submit" type="submit">
      Kirim
    </button>
  </div>
</form>
<br>
</body>
</html>