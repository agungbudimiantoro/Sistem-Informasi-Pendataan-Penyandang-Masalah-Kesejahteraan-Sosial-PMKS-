<h3 class="text-center" style="text-transform: capitalize;">data user</h3>
<div class="row">
    <label for="username" class="form-label">Tambah jenis PMKS</label>
    <div class="col-md-4">
        <form action="?p=jenis_proses" method="POST">
            <input type="text" name="jns_pmks" class="form-control" id="username" aria-describedby="emailHelp" required>
    </div>
    <div class="col-md-2">
        <button type="submit" name="add" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
<br>
<br>
<div class="border p-2">
    <table class="table align-items-center mb-0 display" id="table_id">
        <thead>
            <tr>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">jenis PMKS</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $query = mysqli_query($conn, "SELECT * FROM jns_pmks");
            while ($data = mysqli_fetch_assoc($query)) {
            ?><tr>
                    <td>
                        <?= $no++ ?>
                    </td>

                    <td>
                        <?= $data['jns_pmks'] ?>
                    </td>
                    <td>
                        <a href="?p=jenis_edit&id=<?= $data['id_jns_pmks'] ?>" class="btn btn-warning">Ubah</a>
                        <a href="?p=jenis_proses&id=<?= $data['id_jns_pmks'] ?>" onclick="return confirm('anda yakin ingin menghapus data?')" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php }; ?>
        </tbody>
    </table>
</div>