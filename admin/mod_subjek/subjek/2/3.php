<?php
$array_trhir_ktm_klg = array('kurang dari seminggu lalu', 'sebulan lalu', 'tiga bulan lalu', 'setahun lalu');
?>
<div class="row border">
    <div class="col-md-12 border">
        <p style="text-transform:capitalize;">bila tidak tinggal bersama orang tua, kapan terakhir kamu pulang atau bertemu dengan orang tua mu:</p>
        <?php for ($i = 0; $i < count($array_trhir_ktm_klg); $i++) : ?>
            <?php $data_for = $array_trhir_ktm_klg[$i]; ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="trhir_ktm_klg" id="trhir_ktm_klg" value="<?= $data_for ?>">
                <label class="form-check-label" style="text-transform:capitalize;" for="trhir_ktm_klg"><?= $data_for ?></label>
            </div>
        <?php endfor; ?>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="trhir_ktm_klg" id="trhir_ktm_klg" value="">
            <label class="form-check-label" style="text-transform:capitalize;" for="trhir_ktm_klg">lainya, Sebutkan Kapan:</label>
            <input type="text" name="trhir_ktm_klg1" value="">
        </div>
    </div>
</div>