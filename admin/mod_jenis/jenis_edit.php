<?php
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM jns_pmks where id_jns_pmks='$id'");
$data = mysqli_fetch_assoc($query);
?>
<h3 class="text-center text-capitalize mb-3">edit Data jenis pmks</h3>
<form action="?p=jenis_proses" method="POST">
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label style="text-transform:capitalize;" for="nama_jenis" class="form-label">jenis pmks</label>
                <input type="text" name="id" value="<?= $id ?>" hidden class="form-control" id="nama_jenis" aria-describedby="emailHelp" required>
                <input type="text" name="jns_pmks" value="<?= $data['jns_pmks'] ?>" class="form-control" id="nama_jenis" aria-describedby="emailHelp" required>
            </div>

        </div>
    </div>
    <button type="submit" name="edit" class="btn btn-primary">Ubah</button>
    <a href="?p=jenis_data" class="btn btn-success">Kembali</a>
</form>
</div>
</div>