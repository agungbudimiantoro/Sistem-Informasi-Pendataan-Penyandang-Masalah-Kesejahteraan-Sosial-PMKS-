<?php

$array_pmpln = array('terawat', 'tidak terawat');
$array_kmp_bcr = array('lancar', 'kurang lancar (terbata/bata)', 'pasif');
?>
<div class="row border">
    <div class="col-md-6 border">
        <p style="text-transform:capitalize;">penampilan:</p>
        <?php for ($i = 0; $i < count($array_pmpln); $i++) : ?>
            <?php $data_for = $array_pmpln[$i]; ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pmpln" id="pmpln" value="<?= $data_for ?>">
                <label class="form-check-label" style="text-transform:capitalize;" for="pmpln"><?= $data_for ?></label>
            </div>
        <?php endfor; ?>

    </div>
    <div class="col-md-6 border">
        <p style="text-transform:capitalize;">kemampuan bicara:</p>
        <?php for ($i = 0; $i < count($array_kmp_bcr); $i++) : ?>
            <?php $data_for = $array_kmp_bcr[$i]; ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kmp_bcr" id="kmp_bcr" value="<?= $data_for ?>">
                <label class="form-check-label" style="text-transform:capitalize;" for="kmp_bcr"><?= $data_for ?></label>
            </div>
        <?php endfor; ?>
    </div>
</div>