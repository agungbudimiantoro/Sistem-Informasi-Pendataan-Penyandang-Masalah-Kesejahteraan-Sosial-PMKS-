<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="assets/Bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <style></style>
  <title>Login</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <h3 class="nav-link active" aria-current="page">Halaman Login</h3>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end of navbar -->
  <div class="container mt-5 mb-5" style="min-height: 480px;">
    <div class="row border p-2">
      <h3 class="text-center">Sistem Informasi Pendataan Penyandang Masalah</h3>
      <h3 class="text-center">Kesejahteraan Sosial (PMKS) pada Dinas Sosial</h3>
      <h3 class="text-center">Kota Lubuklinggau</h3>
      <br>
      <br>
      <br>
      <div class="d-flex justify-content-center">
        <img src="assets/img/logo/logo.png" width="100px" height="100px" alt="">
      </div>
      <h3 class="text-center">Login</h3>
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <p class=""> <?php
                      // var_dump($_GET);
                      if (isset($_GET['pesan'])) {
                        if ($_GET['pesan'] == "gagal") {
                          echo "Username dan Password tidak sesuai !";
                        }
                        if ($_GET['pesan'] == "gagal1") {
                          echo "Akun tidak ditemukan !";
                        }
                        if ($_GET['pesan'] == "belum_login") {
                          echo "Anda Harus Login Terlebih Dahulu !";
                        }
                        if ($_GET['pesan'] == "gagal10") {
                          echo "masukan username dan password !";
                        }
                      } else {
                        echo "masukan username dan password";
                      }
                      ?> </p>
        <form action="validasi_login.php" method="POST">
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" required>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Level</label>
            <select class="form-select" aria-label="Default select example" name="level" required>
              <option disabled selected>Level</option>
              <option value="admin">Admin</option>
              <option value="pimpinan">Pimpinan</option>
            </select>
          </div>

          <button type="submit" class="btn btn-primary">Login</button>
        </form>
      </div>
    </div>
  </div>
  <script src="assets/Bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>