<?php
$array_org_mlk_kkrs_es = array('orang tua', 'anggota kluarga lain', 'tetangga', 'teman', 'pacar');
$org_mlk_kkrs_es = unserialize($data['org_mlk_kkrs_es']);
$result_org_mlk_kkrs_es = array_diff($org_mlk_kkrs_es, $array_org_mlk_kkrs_es);
?>

<div class="row border">
    <div class="col-md-12 border">
        <p style="text-transform:capitalize;">siapa (saja) orang atau pihak yang pernah melakukan kekerasan seksual:</p>

        <?php for ($i = 0; $i < count($array_org_mlk_kkrs_es); $i++) : ?>
            <?php $data_for = $array_org_mlk_kkrs_es[$i]; ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="org_mlk_kkrs_es[]" <?php if (in_array($data_for, $org_mlk_kkrs_es)) {
                                                                                                echo "checked";
                                                                                            };
                                                                                            fungsiDisabled($p, 'disabled'); ?> id="inlineCheckbox2" value="<?= $data_for ?>">
                <label class="form-check-label" for="inlineCheckbox2"><?= $data_for ?></label>
            </div>
        <?php endfor; ?>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" <?php if ($result_org_mlk_kkrs_es != '') {
                                                                foreach ($result_org_mlk_kkrs_es as $row) {
                                                                    if ($row != '') {
                                                                        echo "checked";
                                                                    }
                                                                }
                                                            };
                                                            fungsiDisabled($p, 'disabled'); ?> name="org_mlk_kkrs_es[]" id="inlineCheckbox1" value="">
            <label class="form-check-label" for="inlineCheckbox1">lainnya</label>
            <input type="text" name="org_mlk_kkrs_es[]" value="<?php if ($result_org_mlk_kkrs_es != '') {
                                                                    foreach ($result_org_mlk_kkrs_es as $row) {
                                                                        echo $row;
                                                                    }
                                                                }; ?>" <?php fungsiDisabled($p, 'disabled'); ?>>
        </div>
    </div>
</div>