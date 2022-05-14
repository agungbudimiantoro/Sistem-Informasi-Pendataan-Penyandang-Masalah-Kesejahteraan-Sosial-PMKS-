<h3 class="text-center" style="text-transform: capitalize;">data pmks</h3>
<br>
<a href="?p=pmks_tambah" class="btn btn-primary">Tambah Data</a>
<br>
<br>
<div class="">
    <table class="table align-items-center mb-0 display" id="table_id">
        <thead>
            <tr>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">foto</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nm lkp</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">jk</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">tgl lahir</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">umur</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">almt</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nm_ayah</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nm_ibu</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">faktor</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">jns pmks</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">tgl</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nm_ptgs</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $query = mysqli_query($conn, "SELECT * FROM subjek, subjek_kedua, dt_pmks where subjek.id_subjek = subjek_kedua.id_subjek and subjek.id_subjek = dt_pmks.id_subjek");
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
                    <td>
                        <a href="?p=pmks_views&id=<?= $data['id_pmks'] ?>" class="btn btn-primary">Views</a>
                        <a href="?p=pmks_edit&id=<?= $data['id_pmks'] ?>" class="btn btn-warning">Ubah</a>
                        <a href="?p=pmks_proses_hapus&id=<?= $data['id_pmks'] ?>" onclick="return confirm('anda yakin ingin menghapus data?')" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php }; ?>
        </tbody>
    </table>
</div>