<?php
$array_btk_kkrs_fm = array('diejek/dihina', 'dimaki', 'diasingkan', 'dilempar dgn alat', 'dipukul', 'ditendang');
?>

<div class="row border">
    <div class="col-md-12 border">
        <p style="text-transform:capitalize;">bila pernah, bentuk kekesaran yang pernah di alami saudara/i?:</p>

        <?php for ($i = 0; $i < count($array_btk_kkrs_fm); $i++) : ?>
            <?php $data_for = $array_btk_kkrs_fm[$i]; ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="btk_kkrs_fm[]" id="inlineCheckbox2" value="<?= $data_for ?>">
                <label class="form-check-label" for="inlineCheckbox2"><?= $data_for ?></label>
            </div>
        <?php endfor; ?>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="btk_kkrs_fm[]" id="inlineCheckbox1" value="">
            <label class="form-check-label" for="inlineCheckbox1">lainnya</label>
            <input type="text" name="btk_kkrs_fm[]">
        </div>
    </div>
</div>