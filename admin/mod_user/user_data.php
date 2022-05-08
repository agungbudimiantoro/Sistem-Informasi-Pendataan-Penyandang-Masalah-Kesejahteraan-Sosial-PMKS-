<?php
$query_hitung = mysqli_query($conn, "SELECT MAX(id_user) as id FROM user");
$data_hitung = mysqli_fetch_array($query_hitung);
$id_hitung = $data_hitung['id'];
$urt = (int) substr($id_hitung, 3, 4);
$urt++;
$hrf = "US";
$id_hitung = $hrf . sprintf("%03s", $urt);
?>

<h3 class="text-center" style="text-transform: capitalize;">data user</h3>
<br>
<a href="?p=user_tambah" class="btn btn-primary">Tambah Data</a>
<br>
<br>
<div class="border p-2">
    <table class="table align-items-center mb-0 display" id="table_id">
        <thead>
            <tr>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">foto</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nm user</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">tgl lhr</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">jk</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">tlpo</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">almt</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">jbt</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Username</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">level</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">sts</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $query = mysqli_query($conn, "SELECT * FROM user");
            while ($data = mysqli_fetch_assoc($query)) {
            ?><tr>
                    <td>
                        <?= $no++ ?>
                    </td>
                    <td>
                        <img src="../assets/img/avatar/<?= $data['foto'] ?>" alt="" width="50px" height="50px">
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
                        <?= $data['username'] ?>
                    </td>
                    <td>
                        <?= $data['level'] ?>
                    </td>
                    <td>
                        <?= $data['sts'] ?>
                    </td>
                    <td>
                        <a href="?p=user_edit_pass&id=<?= $data['id_user'] ?>" class="btn btn-primary">Edit Password</a>
                        <a href="?p=user_edit_foto&id=<?= $data['id_user'] ?>" class="btn btn-success">edit foto</a>
                        <a href="?p=user_edit&id=<?= $data['id_user'] ?>" class="btn btn-warning">Ubah</a>
                        <a href="?p=user_proses&id=<?= $data['id_user'] ?>" onclick="return confirm('anda yakin ingin menghapus data?')" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php }; ?>
        </tbody>
    </table>
</div>