<?php
$array_org_mlk_kkrs = array('ortu', 'keluarga', 'teman', 'polisi', 'tentara', 'pol PP', 'preman');

?>
<div class="row border">
    <div class="col-md-12 border">
        <p style="text-transform:capitalize;">siapa saja orang-orang yang pernah melakukan kekerasan terhadap saudara/i? (jawaban boleh lebih dari satu):</p>

        <?php for ($i = 0; $i < count($array_org_mlk_kkrs); $i++) : ?>
            <?php $data_for = $array_org_mlk_kkrs[$i]; ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="org_mlk_kkrs[]" id="inlineCheckbox2" value="<?= $data_for ?>">
                <label class="form-check-label" for="inlineCheckbox2"><?= $data_for ?></label>
            </div>
        <?php endfor; ?>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="org_mlk_kkrs[]" id="inlineCheckbox1" value="">
            <label class="form-check-label" for="inlineCheckbox1">lainnya</label>
            <input type="text" name="org_mlk_kkrs[]">
        </div>
    </div>
</div>