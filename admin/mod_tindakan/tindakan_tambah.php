<h3 class="text-center" style="text-transform: capitalize;">tambah data tindakan</h3>
<br>

<br>
<div class="mr-3">
    <table class="table align-items-center mb-0 display" id="table_id">
        <thead>
            <tr>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">foto</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nama</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">jenis kelamin</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">tanggal lahir</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">umur</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">alamat</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nama ayah</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nama ibu</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">faktor</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">jenis pmks</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">tgl</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nama petugas</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $query = mysqli_query($conn, "SELECT * FROM subjek, subjek_kedua, dt_pmks where dt_pmks.id_subjek = subjek.id_subjek and subjek_kedua.id_subjek_kedua = dt_pmks.id_subjek_kedua
            and subjek_kedua.sts_tndk='tindak lanjuti'");
            while ($data = mysqli_fetch_assoc($query)) {
            ?><tr>
                    <td>
                        <?= $no++ ?>
                    </td>
                    <td>
                        <img src="../assets/img/subjek/<?= $data['foto'] ?>" alt="" width="70px" height="70px">
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
                        <?= $data['nm_ayah'] ?>
                    </td>
                    <td>
                        <?= $data['nm_ibu'] ?>
                    </td>
                    <?php
                    $id_dt_pmks = $data['id_dt_pmks'];
                    $query1 = mysqli_query($conn, "SELECT * FROM dt_pmks where id_dt_pmks='$id_dt_pmks'");
                    $data1 = mysqli_fetch_assoc($query1);
                    ?>
                    <td>
                        <?= $data1['faktor'] ?>
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
                    <td>
                        <a href="?p=tindakan_tambah_form&id=<?= $data['id_subjek'] ?>" class="btn btn-primary">Proses</a>
                    </td>
                </tr>
            <?php }; ?>
        </tbody>
    </table>
</div>