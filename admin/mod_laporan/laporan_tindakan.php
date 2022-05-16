<h3 class="text-center" style="text-transform: capitalize;">laporan data tindakan</h3>
<br>
<br>
<form action="mod_print/laporan_tindakan.php" target="_blank" method="POST">
    <div class="row">
        <div class="col-md-4">
            <div class="mb-3">
                <label style="text-transform:capitalize;" for="nama_user" class="form-label">cetak berdasarkan jenis pmks</label>

                <select class="form-select" aria-label="Default select example" name="id_jns_pmks">
                    <option value="" diasabled selected>-- pilih jenis pmks --</option>
                    <?php

                    $query_jenis_pmks = mysqli_query($conn, 'SELECT * FROM jns_pmks');
                    while ($data_jenis_pmks = mysqli_fetch_assoc($query_jenis_pmks)) {
                    ?>
                        <option value="<?= $data_jenis_pmks['id_jns_pmks'] ?>"><?= $data_jenis_pmks['jns_pmks'] ?></option>
                    <?php } ?>
                </select>

            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label style="text-transform:capitalize;" for="nama_user" class="form-label">dari tanggal</label>
                <input type="date" name="dari" class="form-control" id="nama_user" aria-describedby="emailHelp">
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label style="text-transform:capitalize;" for="nama_user" class="form-label">sampai tanggal</label>
                <input type="date" name="sampai" class="form-control" id="nama_user" aria-describedby="emailHelp">
            </div>
        </div>
    </div>
    <hr>

    <br>
    <br>
    <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-2">
            <button type="submit" name="cetak" class="btn btn-primary text-center">cetak</button>
            <button onclick="history.back()" class="btn btn-success">Kembali</button>
        </div>
    </div>
</form>