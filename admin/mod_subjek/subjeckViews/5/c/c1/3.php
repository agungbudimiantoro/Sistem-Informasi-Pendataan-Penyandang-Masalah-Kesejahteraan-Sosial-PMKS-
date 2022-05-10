<?php
$array_org_mlk_kkrs = array('ortu', 'keluarga', 'teman', 'polisi', 'tentara', 'pol PP', 'preman');
$org_mlk_kkrs = unserialize($data['org_mlk_kkrs']);
$result_org_mlk_kkrs = array_diff($org_mlk_kkrs, $array_org_mlk_kkrs);
?>
<div class="row border">
    <div class="col-md-12 border">
        <p style="text-transform:capitalize;">siapa saja orang-orang yang pernah melakukan kekerasan terhadap saudara/i? (jawaban boleh lebih dari satu):</p>

        <?php for ($i = 0; $i < count($array_org_mlk_kkrs); $i++) : ?>
            <?php $data_for = $array_org_mlk_kkrs[$i]; ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="org_mlk_kkrs[]" <?php if (in_array($data_for, $org_mlk_kkrs)) {
                                                                                            echo "checked";
                                                                                        };
                                                                                        fungsiDisabled($p, 'disabled'); ?> id="inlineCheckbox2" value="<?= $data_for ?>">
                <label class="form-check-label" for="inlineCheckbox2"><?= $data_for ?></label>
            </div>
        <?php endfor; ?>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" <?php if ($result_org_mlk_kkrs != '') {
                                                                foreach ($result_org_mlk_kkrs as $row) {
                                                                    if ($row != '') {
                                                                        echo "checked";
                                                                    }
                                                                }
                                                            };
                                                            fungsiDisabled($p, 'disabled'); ?> name="org_mlk_kkrs[]" id="inlineCheckbox1" value="lainnya">
            <label class="form-check-label" for="inlineCheckbox1">lainnya</label>
            <input type="text" name="org_mlk_kkrs[]" value="<?php if ($result_org_mlk_kkrs != '') {
                                                                foreach ($result_org_mlk_kkrs as $row) {
                                                                    echo $row;
                                                                }
                                                            }; ?>" <?php fungsiDisabled($p, 'disabled'); ?>>
        </div>
    </div>
</div>