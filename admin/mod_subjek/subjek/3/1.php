<?php
$array_sts_sklh = array('ya', 'tidak', 'belum pernah');
$array_niat_ljt_sklh = array('ya', 'tidak', 'tidak tau');
?>

<div class="row border">
    <h5 style="text-transform:uppercase;">III. status pendidikan</h5>
    <div class="col-md-4 border">
        <p style="text-transform:capitalize;">apakah saudara/i masih bersekolah:</p>
        <?php for ($i = 0; $i < count($array_sts_sklh); $i++) : ?>
            <?php $data_for = $array_sts_sklh[$i]; ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sts_sklh" id="sts_sklh" value="<?= $data_for ?>">
                <label class="form-check-label" style="text-transform:capitalize;" for="sts_sklh"><?= $data_for ?></label>
            </div>
        <?php endfor; ?>
    </div>
    <div class="col-md-8 border">
        <p style="text-transform:capitalize;">menurut saudara/i, apakah memiliki niat untuk melanjutkan sekolah:</p>
        <?php for ($i = 0; $i < count($array_niat_ljt_sklh); $i++) : ?>
            <?php $data_for = $array_niat_ljt_sklh[$i]; ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="niat_ljt_sklh" id="niat_ljt_sklh" value="<?= $data_for ?>">
                <label class="form-check-label" style="text-transform:capitalize;" for="niat_ljt_sklh"><?= $data_for ?></label>
            </div>
        <?php endfor; ?>
    </div>
</div>