<?php
$array_btk_kkrs_fm = array('diejek/dihina', 'dimaki', 'diasingkan', 'dilempar dgn alat', 'dipukul', 'ditendang');
$btk_kkrs_fm = unserialize($data['btk_kkrs_fm']);
$result_btk_kkrs_fm = array_diff($btk_kkrs_fm, $array_btk_kkrs_fm);
?>

<div class="row border">
    <div class="col-md-12 border">
        <p style="text-transform:capitalize;">bila pernah, bentuk kekesaran yang pernah di alami saudara/i?:</p>

        <?php for ($i = 0; $i < count($array_btk_kkrs_fm); $i++) : ?>
            <?php $data_for = $array_btk_kkrs_fm[$i]; ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="btk_kkrs_fm[]" <?php if (in_array($data_for, $btk_kkrs_fm)) {
                                                                                            echo "checked";
                                                                                        };
                                                                                        fungsiDisabled($p, 'disabled'); ?> id="inlineCheckbox2" value="<?= $data_for ?>">
                <label class="form-check-label" for="inlineCheckbox2"><?= $data_for ?></label>
            </div>
        <?php endfor; ?>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" <?php if ($result_btk_kkrs_fm != '') {
                                                                foreach ($result_btk_kkrs_fm as $row) {
                                                                    if ($row != '') {
                                                                        echo "checked";
                                                                    }
                                                                }
                                                            };
                                                            fungsiDisabled($p, 'disabled'); ?> name="btk_kkrs_fm[]" id="inlineCheckbox1" value="lainnya">
            <label class="form-check-label" for="inlineCheckbox1">lainnya</label>
            <input type="text" name="btk_kkrs_fm[]" value="<?php if ($result_btk_kkrs_fm != '') {
                                                                foreach ($result_btk_kkrs_fm as $row) {
                                                                    echo $row;
                                                                }
                                                            }; ?>" <?php fungsiDisabled($p, 'disabled'); ?>>
        </div>
    </div>
</div>