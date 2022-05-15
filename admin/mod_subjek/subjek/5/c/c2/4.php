<?php
$array_btk_proses = array('ditanggakp', 'ditahan', 'disidang', 'dipenjara');
?>
<div class="row border">
    <div class="col-md-12 border">
        <p style="text-transform:capitalize;">bila pernah, apakah tindakan terhadap pelakunya? (jawaban boleh dari satu):</p>

        <?php for ($i = 0; $i < count($array_btk_proses); $i++) : ?>
            <?php $data_for = $array_btk_proses[$i]; ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="btk_proses[]" id="inlineCheckbox2" value="<?= $data_for ?>">
                <label class="form-check-label" for="inlineCheckbox2"><?= $data_for ?></label>
            </div>
        <?php endfor; ?>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="btk_proses[]" id="inlineCheckbox1" value="">
            <label class="form-check-label" for="inlineCheckbox1">lainnya</label>
            <input type="text" name="btk_proses[]">
        </div>
    </div>
</div>