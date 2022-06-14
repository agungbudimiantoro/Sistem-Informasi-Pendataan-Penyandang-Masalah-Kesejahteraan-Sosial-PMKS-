<?php
$array_sts_tmp_tgl = array('orang tua', 'saudara/keluarga', 'kost', 'sewa rmh', 'tdk tetap');
$array_akte = array('ya', 'tidak', 'tidak tau');
?>
<div class="row border">
    <div class="col-md-8 border">
        <p style="text-transform:capitalize;">Saat ini tinggal bersama:</p>
        <?php for ($i = 0; $i < count($array_sts_tmp_tgl); $i++) : ?>
            <?php $data_for = $array_sts_tmp_tgl[$i]; ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sts_tmp_tgl" id="sts_tmp_tgl" required value="<?= $data_for ?>">
                <label class="form-check-label" style="text-transform:capitalize;" for="sts_tmp_tgl"><?= $data_for ?></label>
            </div>
        <?php endfor; ?>
    </div>
    <div class="col-md-4 border">
        <p style="text-transform:capitalize;">Apakah kamu memiliki salinan akta kelahiran:</p>
        <?php for ($i = 0; $i < count($array_akte); $i++) : ?>
            <?php $data_for = $array_akte[$i]; ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="akte" required id="akte" value="<?= $data_for ?>">
                <label class="form-check-label" style="text-transform:capitalize;" for="akte"><?= $data_for ?></label>
            </div>
        <?php endfor; ?>
    </div>
</div>