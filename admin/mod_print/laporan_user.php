<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../../assets/Bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <style></style>
    <title>Laporan User</title>
</head>
<script>
    function cetak() {
        setTimeout(() => {
            window.print();
        }, 1000)
    }
</script>

<body onload="cetak()">
    <br>
    <img src="../../assets/img/logo/logo.png" class="rounded mx-auto d-block" width="100px" height="100px" alt="">
    <div class="container mt-2 mb-5" style="min-height: 480px;">
        <div class="row p-2">
            <h3 class="text-center">Laporan Data User</h3>
            <br>
            <h3 class="text-center">Sistem Informasi Pendataan Penyandang Masalah Kesejahteraan</h3>
            <h3 class="text-center">Sosial (PMKS) pada Dinas Sosial Kota Lubuklinggau</h3>
            <br>
            <p class="text-center">Jl. Depati said No: 49 kel Ulak Lebar Lubuklinggau Barat II</p>
            <br>
            <div class="col-md-2"></div>
            <table class="table align-items-center table-bordered mb-0 display" id="table_id">
                <thead>
                    <tr>
                        <td scope="col">No</td>
                        <td scope="col">Foto</td>
                        <td scope="col">Nama User</td>
                        <td scope="col">Tanggal Lahir</td>
                        <td scope="col">Jenis Kelamin</td>
                        <td scope="col">No Telpon</td>
                        <td scope="col">Alamat</td>
                        <td scope="col">Jabatan</td>
                        <td scope="col">Level</td>
                        <td scope="col">Status</td>
                    </tr>

                </thead>
                <tbody>
                    <?php
                    include "../../koneksi.php";
                    $no = 1;
                    $query = mysqli_query($conn, "SELECT * FROM user");
                    while ($data = mysqli_fetch_assoc($query)) {
                    ?><tr>
                            <td>
                                <?= $no++ ?>
                            </td>
                            <td>
                                <img src="../../assets/img/avatar/<?= $data['foto'] ?>" alt="" width="70px" height="70px">
                            </td>
                            <td>
                                <?= $data['nm_user'] ?>
                            </td>
                            <td>
                                <?= $data['tgl_lahir'] ?>
                            </td>
                            <td>
                                <?= $data['jk'] ?>
                            </td>
                            <td>
                                <?= $data['tlpon'] ?>
                            </td>
                            <td>
                                <?= $data['almt'] ?>
                            </td>
                            <td>
                                <?= $data['jbtn'] ?>
                            </td>

                            <td>
                                <?= $data['level'] ?>
                            </td>
                            <td>
                                <?= $data['sts'] ?>
                            </td>

                        </tr>
                    <?php }; ?>
                </tbody>
            </table>
        </div>
        <br>

        <table>
            <tr>
                <td width="65%"></td>
                <td>
                    <p class="text-center"><small>Lubuklinggau, Tgl</small></p>
                    <p class="text-center"><small>Diketahui oleh,</small></p>
                    <p class="text-center"><small>kepala Dinas Sosial Kota Lubuklinggau</small></p>
                    <br>
                    <br>
                    <br>
                    <p class="text-center"><small>(Nama Kepala Dinas Sosial)</small></p>
                </td>
            </tr>
        </table>



    </div>
    <script src="../../assets/Bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>