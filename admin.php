<?php
$koneksi = mysqli_connect('localhost','root','','admincr');

if(isset($_POST['simpandata'])){
    $namabuku=$_POST['nama'];
    $hargabuku=$_POST['pswd'];

    $query = mysqli_query($koneksi, "insert into emodul (nama,pswd) values ('$nama','$pswd')");

    if($query){
        echo 'berhasil';
    } else {
        echo 'gagal';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container" style="margin-top:50px">
  <h2>Data User</h2>
  <form method="post">
    <div class="form-group">
      <label for="email">Nama:</label>
      <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <button type="submit" name="simpandata" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>

