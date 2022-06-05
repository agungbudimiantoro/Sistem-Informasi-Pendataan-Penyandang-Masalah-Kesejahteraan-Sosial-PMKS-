<?php
$array_org_mlk_kkrs_es = array('orang tua', 'anggota keluarga lain', 'tetangga', 'teman', 'pacar');

?>

<div class="row border">
    <div class="col-md-12 border">
        <p style="text-transform:capitalize;">siapa (saja) orang atau pihak yang pernah melakukan kekerasan seksual:</p>

        <?php for ($i = 0; $i < count($array_org_mlk_kkrs_es); $i++) : ?>
            <?php $data_for = $array_org_mlk_kkrs_es[$i]; ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="org_mlk_kkrs_es[]" id="inlineCheckbox2" value="<?= $data_for ?>">
                <label class="form-check-label" for="inlineCheckbox2"><?= $data_for ?></label>
            </div>
        <?php endfor; ?>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="org_mlk_kkrs_es[]" id="inlineCheckbox1" value="">
            <label class="form-check-label" for="inlineCheckbox1">lainnya</label>
            <input type="text" name="org_mlk_kkrs_es[]">
        </div>
    </div>
</div>