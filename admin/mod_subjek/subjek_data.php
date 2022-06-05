<h3 class="text-center" style="text-transform: capitalize;">data subjek</h3>
<br>
<a href="?p=subjek_tambah" class="btn btn-primary">Tambah Data</a>
<br>
<br>
<div class="">
    <table class="table align-items-center mb-0 display" id="table_id">
        <thead>
            <tr>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">foto</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nama lengkap</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nama panggilan</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">jenis kelamin</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">tanggal lahir</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">alamat</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nama ayah</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nama ibu</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">status penertipan</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">status jenis pmks</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">satus tindakan</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nama petugas</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $query = mysqli_query($conn, "SELECT subjek.*, subjek_kedua.* FROM subjek, subjek_kedua where subjek.id_subjek = subjek_kedua.id_subjek");
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
                        <?= $data['nm_pgl'] ?>
                    </td>
                    <td>
                        <?= $data['jk'] ?>
                    </td>
                    <td>
                        <?= $data['tgl_lahir'] ?>
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
                        <?= $data['sts_penertipan'] ?>
                    </td>
                    <td>
                        <?= $data['sts_jns_pmks'] ?>
                    </td>
                    <td>
                        <?= $data['sts_tndk'] ?>
                    </td>
                    <td>
                        <?= $data['nm_ptgs'] ?>
                    </td>
                    <td>
                        <a href="?p=subjek_views&id=<?= $data['id_subjek'] ?>" class="btn btn-primary">Views</a>
                        <a href="?p=subjek_edit&id=<?= $data['id_subjek'] ?>" class="btn btn-warning">Ubah</a>
                        <a href="?p=subjek_proses_hapus&id=<?= $data['id_subjek'] ?>" onclick="return confirm('anda yakin ingin menghapus data?')" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php }; ?>
        </tbody>
    </table>
</div>