<?php
$array_btk_proses = array('ditanggakp', 'ditahan', 'disidang', 'dipenjara');
$btk_proses = unserialize($data['btk_proses']);
$result_btk_proses = array_diff($btk_proses, $array_btk_proses);
?>
<div class="row border">
    <div class="col-md-12 border">
        <p style="text-transform:capitalize;">bila pernah, apakah tindakan terhadap pelakunya? (jawaban boleh dari satu):</p>

        <?php for ($i = 0; $i < count($array_btk_proses); $i++) : ?>
            <?php $data_for = $array_btk_proses[$i]; ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="btk_proses[]" <?php if (in_array($data_for, $btk_proses)) {
                                                                                        echo "checked";
                                                                                    };
                                                                                    fungsiDisabled($p, 'disabled'); ?> id="inlineCheckbox2" value="<?= $data_for ?>">
                <label class="form-check-label" for="inlineCheckbox2"><?= $data_for ?></label>
            </div>
        <?php endfor; ?>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" <?php if ($result_btk_proses != '') {
                                                                foreach ($result_btk_proses as $row) {
                                                                    if ($row != '') {
                                                                        echo "checked";
                                                                    }
                                                                }
                                                            };
                                                            fungsiDisabled($p, 'disabled'); ?> name="btk_proses[]" id="inlineCheckbox1" value="">
            <label class="form-check-label" for="inlineCheckbox1">lainnya</label>
            <input type="text" name="btk_proses[]" value="<?php if ($result_btk_proses != '') {
                                                                foreach ($result_btk_proses as $row) {
                                                                    echo $row;
                                                                }
                                                            }; ?>" <?php fungsiDisabled($p, 'disabled'); ?>>
        </div>
    </div>
</div>