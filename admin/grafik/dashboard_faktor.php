<?php
if (isset($_POST['tahun'])) {
    $tahun = $_POST['tahun'];
} else {
    $tahun = date('Y');
}
?>

<h1>Data Faktor PMKS tahun <?= $tahun ?></h1>
<div class="row m-3">
    <label for="username" class="form-label">Tahun</label>
    <div class="col-md-4">
        <form action="?p=dashboard_faktor" method="POST">
            <select class="form-select" aria-label="Default select example" name="tahun">
                <?php
                $tahun_now = date('Y');
                for ($i = $tahun_now - 5; $i <= $tahun_now; $i++) :
                ?>
                    <option value="<?= $i ?>" <?php if ($i == $tahun) {
                                                    echo "selected";
                                                } ?>><?= $i ?></option>
                <?php endfor; ?>
            </select>
    </div>
    <div class="col-md-2">
        <button type="submit" name="add" class="btn btn-primary">cari</button>
        </form>
    </div>
</div>
<div class="col-md-12">
    <canvas id="grafikPmks" style="min-height: 300px; min-width: 200px; max-width: 100%;"></canvas>
</div>
<br>