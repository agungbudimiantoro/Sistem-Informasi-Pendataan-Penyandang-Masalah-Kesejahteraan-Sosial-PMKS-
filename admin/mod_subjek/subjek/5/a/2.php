<?php
$array_btk_tdk = array('pencurian', 'perkelahian', 'pemerasan', 'penganiayaan', 'pencabulan', 'pemerkosaan');
?>
<div class="row border">
    <div class="col-md-12 border">
        <p style="text-transform:capitalize;">bila ada , apa bentuk-bentuk tindakan yang saudara/i lakukan:</p>
        <?php for ($i = 0; $i < count($array_btk_tdk); $i++) : ?>
            <?php $data_for = $array_btk_tdk[$i]; ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="btk_tdk[]" id="inlineCheckbox2" value="<?= $data_for ?>">
                <label class="form-check-label" for="inlineCheckbox2"><?= $data_for ?></label>
            </div>
        <?php endfor; ?>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="btk_tdk[]" id="inlineCheckbox1" value="">
            <label class="form-check-label" for="inlineCheckbox1">lainnya</label>
            <input type="text" name="btk_tdk[]">
        </div>
    </div>
</div>