<?php
$array_pengobatan = array('dibiarkan saja', 'obat tradisional', 'obat ringan', 'pijat', 'ke dokter', 'ke dukun');
?>
<div class="row border">
    <div class="col-md-12 border">
        <p style="text-transform:capitalize;">pengobatan saudara/i yang biasa dilakukan:</p>
        <?php for ($i = 0; $i < count($array_pengobatan); $i++) : ?>
            <?php $data_for = $array_pengobatan[$i]; ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="pengobatan[]" id="inlineCheckbox2" value="<?= $data_for ?>">
                <label class="form-check-label" for="inlineCheckbox2"><?= $data_for ?></label>
            </div>
        <?php endfor; ?>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="pengobatan[]" id="inlineCheckbox1" value="">
            <label class="form-check-label" for="inlineCheckbox1">lainnya</label>
            <input type="text" name="pengobatan[]">
        </div>
    </div>
</div>