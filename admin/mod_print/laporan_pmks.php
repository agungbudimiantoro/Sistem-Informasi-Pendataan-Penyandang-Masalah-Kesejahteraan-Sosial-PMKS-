<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../../assets/Bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <style></style>
    <title>Laporan pmks</title>
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
            <h3 class="text-center">Laporan Data pmks bidang rehabilitas sosial</h3>
            <br>
            <h3 class="text-center">Sistem Informasi Pendataan Penyandang Masalah Kesejahteraan</h3>
            <h3 class="text-center">Sosial (PMKS) pada Dinas Sosial Kota Lubuklinggau</h3>
            <br>
            <p class="text-center">Jl. Depati said No: 49 kel Ulak Lebar Lubuklinggau Barat II</p>
            <br>
            <div class="col-md-2"></div>
            <table class="table align-items-center mb-0 display table-bordered" id="table_id">
                <thead>
                    <tr>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">foto</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nana</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">jenis kelamin</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">tgl lahir</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">umur</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">almt</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">kecamatan</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nama ayah</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nama ibu</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">faktor</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">jenis pmks</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">tgl</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nama petugas</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "../../koneksi.php";
                    $no = 1;
                    if ($_POST['dari'] != null) {
                        $id_jns_pmks = $_POST['id_jns_pmks'];
                        $dari = $_POST['dari'];
                        $sampai = $_POST['sampai'];
                        $kecamatan = $_POST['kecamatan'];
                        $query = mysqli_query($conn, "SELECT * FROM subjek, subjek_kedua, dt_pmks where subjek.id_subjek = subjek_kedua.id_subjek and subjek.id_subjek = dt_pmks.id_subjek 
                        and subjek.kecamatan = '$kecamatan' and dt_pmks.tgl >= '$dari' and dt_pmks.tgl <= '$sampai' and dt_pmks.id_jns_pmks='$id_jns_pmks'");
                    } else {
                        $query = mysqli_query($conn, "SELECT * FROM subjek, subjek_kedua, dt_pmks where subjek.id_subjek = subjek_kedua.id_subjek and subjek.id_subjek = dt_pmks.id_subjek ");
                    }


                    while ($data = mysqli_fetch_assoc($query)) {
                    ?><tr>
                            <td>
                                <?= $no++ ?>
                            </td>
                            <td>
                                <img src="../../assets/img/subjek/<?= $data['foto'] ?>" alt="" width="70px" height="70px">
                            </td>
                            <td>
                                <?= $data['nm_lkp'] ?>
                            </td>
                            <td>
                                <?= $data['jk'] ?>
                            </td>
                            <td>
                                <?= $data['tgl_lahir'] ?>
                            </td>
                            <td>
                                <?= $data['umur'] ?>
                            </td>
                            <td>
                                <?= $data['almt'] ?>
                            </td>
                            <td>
                                <?= $data['kecamatan'] ?>
                            </td>
                            <td>
                                <?= $data['nm_ayah'] ?>
                            </td>
                            <td>
                                <?= $data['nm_ibu'] ?>
                            </td>
                            <td>
                                <?= $data['faktor'] ?>
                            </td>
                            <?php
                            $id_jns_pmks = $data['id_jns_pmks'];
                            $query1 = mysqli_query($conn, "SELECT * FROM jns_pmks where id_jns_pmks='$id_jns_pmks'");
                            $data1 = mysqli_fetch_assoc($query1);
                            ?>
                            <td>
                                <?= $data1['jns_pmks'] ?>
                            </td>
                            <td>
                                <?= $data['tgl'] ?>
                            </td>
                            <td>
                                <?= $data['nm_ptgs'] ?>
                            </td>
                        </tr>
                    <?php }; ?>
                    <tr>
                        <?php
                        $num = mysqli_num_rows($query);
                        ?>
                        <td colspan="2">jumlah data</td>
                        <td colspan="12"><?= $num ?></td>
                    </tr>

                </tbody>
            </table>
        </div>
        <br>

        <table>
            <tr>
                <td width="73%"></td>
                <td>
                    <p class="text-center"><small>Lubuklinggau, <?= date('d-m-Y') ?></small></p>
                    <p class="text-center"><small>Diketahui oleh,</small></p>
                    <p class="text-center"><small>kepala Dinas Sosial Kota Lubuklinggau</small></p>
                    <br>
                    <br>
                    <br>
                    <?php
                    $query = mysqli_query($conn, "SELECT * FROM user where jbtn='kepala dinas'");
                    $kepala_dinas = mysqli_fetch_assoc($query);
                    ?>
                    <p class="text-center"><small>( <?= $kepala_dinas['nm_user'] ?> )</small></p>
                </td>
            </tr>
        </table>



    </div>
    <script src="../../assets/Bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>