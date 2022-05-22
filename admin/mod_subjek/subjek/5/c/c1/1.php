<?php
$array_dpt_kkrs_fm = array('ya', 'tidak');
?>
<div class="row border">
    <p style="text-transform:capitalize;"><b>C. pengalaman kekerasan</b></p>
    <p style="text-transform:capitalize;"><b>C1. kekesaran fisin dan mental</b></p>
    <div class="col-md-12 border">
        <p style="text-transform:capitalize;">apakah saudara/i pernah mendapatkan kekerasan:</p>
        <?php for ($i = 0; $i < count($array_dpt_kkrs_fm); $i++) : ?>
            <?php $data_for = $array_dpt_kkrs_fm[$i]; ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="dpt_kkrs_fm" id="dpt_kkrs_fm" value="<?= $data_for ?>">
                <label class="form-check-label" style="text-transform:capitalize;" for="dpt_kkrs_fm"><?= $data_for ?></label>
            </div>
        <?php endfor; ?>

    </div>
</div>