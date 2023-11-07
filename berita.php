
<!DOCTYPE html>
<html>
<head>
  <title>Item Card Grid</title>
  <style>
    .card {
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      margin: 10px;
      padding: 10px;
      width: calc(33.33% - 20px);
    }

    .card img {
      border-radius: 5px;
      width: 100%;
    }

    .card h3 {
      font-size: 20px;
      margin-bottom: 5px;
    }

    .card p {
      font-size: 16px;
      margin-top: 5px;
    }

    .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }
    .button {
      background-color: #cf5a14;
      border: none;
      color: white;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 14px;
      border-radius: 5px;
      cursor: pointer;
      margin-right: 35px;
      margin-left: 35px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="card">
      <img src="extassets/sampah01.jpg" alt="Item Image">
      <center><h3>Inilah waktu yang di perlukan botol plastik untuk terurai</h3></center>
      <br>
      <a href="https://www.example.com" class="button">Click Here</a>
    </div>
    <div class="card">
      <img src="extassets/sampah02.jpg" alt="Item Image">
      <center><h3>Judul Berita</h3></center>
      <p>Ringkasan Berita</p>
      <a href="https://www.example.com" class="button">Click Here</a>
    </div>
    <div class="card">
      <img src="extassets/sampah03.jpg" alt="Item Image">
      <center><h3>Judul Berita</h3></center>
      <p>Ringkasan Berita</p>
      <a href="https://www.example.com" class="button">Click Here</a>
    </div>
  </div>
</body>
</html>