<?php
$array_proses_tdk = array('ditangkap', 'ditahan', 'disidang', 'dipenjara');
?>
<div class="row border">
    <div class="col-md-12 border">
        <p style="text-transform:capitalize;">tindakan yang dilakukan terhadap saudara/i yg pernah diproses secara hukum:</p>
        <?php for ($i = 0; $i < count($array_proses_tdk); $i++) : ?>
            <?php $data_for = $array_proses_tdk[$i]; ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="proses_tdk[]" id="inlineCheckbox2" value="<?= $data_for ?>">
                <label class="form-check-label" for="inlineCheckbox2"><?= $data_for ?></label>
            </div>
        <?php endfor; ?>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="proses_tdk[]" id="inlineCheckbox1" value="">
            <label class="form-check-label" for="inlineCheckbox1">lainnya</label>
            <input type="text" name="proses_tdk[]">
        </div>
    </div>
</div>