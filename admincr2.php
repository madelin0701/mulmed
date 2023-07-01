<?php
$koneksi = mysqli_connect('localhost','root','','test_db2');

if(isset($_POST['simpandata'])){
    $username = $_POST['username'];
    $password = $_POST['pswd'];

    $query = mysqli_query($koneksi, "insert into users (user_name,password) values ('$username','$password')");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Akun Siswa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container" style="margin-top:50px">
  <h2>Akun Siswa</h2>
  <form method="post">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Masukkan Username" name="username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Masukkan Password" name="pswd">
    </div>
    <button type="submit" name="simpandata" class="btn btn-primary">Submit</button>
  </form>

<hr>
<br>

<table class="table">
    <thead class='thead'>
        <td><strong>User Name</strong></td>
        <td><strong>Password</strong></td>
<?php
$ambildata = mysqli_query($koneksi,"select * from users");

while($loop = mysqli_fetch_array($ambildata)){
    $nameuser = $loop['user_name'];
    $pass = $loop['password'];

    echo '<tr>
            <td>'.$nameuser.'</td>
            <td>'.$pass.'</td>
            </tr>
            ';
}
?>
</table>

</body>
</html>
