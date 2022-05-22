<?php
$array_dpt_kkrs_es = array('pernah', 'tidak pernah', 'tidak tau');
?>

<?php
$array_btk_kkrs_es = array('pelecehan', 'pencabulan', 'sodomi', 'perkosaan');
$btk_kkrs_es = unserialize($data['btk_kkrs_es']);
var_dump($data['btk_kkrs_es']);
?>
<div class="row border">
    <p style="text-transform:capitalize;"><b>C2. kekerasan dan eksplitasi seksual (bagi perempuan)</b></p>
    <div class="col-md-6 border">
        <p style="text-transform:capitalize;">apakah saudara/i pernah mendapatkan kekerasan seksual:</p>
        <?php for ($i = 0; $i < count($array_dpt_kkrs_es); $i++) : ?>
            <?php $data_for = $array_dpt_kkrs_es[$i]; ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" <?php if ($data['dpt_kkrs_es'] == $data_for) {
                                                                    echo "checked";
                                                                };
                                                                fungsiDisabled($p, 'disabled'); ?> name="dpt_kkrs_es" id="dpt_kkrs_es" value="<?= $data_for ?>">
                <label class="form-check-label" style="text-transform:capitalize;" for="dpt_kkrs_es"><?= $data_for ?></label>
            </div>
        <?php endfor; ?>
    </div>
    <div class="col-md-6 border">
        <p style="text-transform:capitalize;">bila perna, apa saja bentuk-bentuk kekerasan seksual yang dialami:</p>
        <?php for ($i = 0; $i < count($array_btk_kkrs_es); $i++) : ?>
            <?php $data_for = $array_btk_kkrs_es[$i]; ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="btk_kkrs_es[]" <?php if (in_array($data_for, $btk_kkrs_es)) {
                                                                                            echo "checked";
                                                                                        };
                                                                                        fungsiDisabled($p, 'disabled'); ?> id="inlineCheckbox2" value="<?= $data_for ?>">
                <label class="form-check-label" for="inlineCheckbox2"><?= $data_for ?></label>
            </div>
        <?php endfor; ?>
    </div>
</div>