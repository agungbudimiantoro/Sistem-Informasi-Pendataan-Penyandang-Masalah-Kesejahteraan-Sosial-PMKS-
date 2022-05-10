<?php
$array_dpt_npz = array('membeli', 'dikasih teman');
$dpt_npz = unserialize($data['dpt_npz']);
$result_dpt_npz = array_diff($dpt_npz, $array_dpt_npz);
?>
<div class="row border">
    <div class="col-md-12 border">
        <p style="text-transform:capitalize;">biasanya, dari barang tersebut didapatkan:</p>
        <?php for ($i = 0; $i < count($array_dpt_npz); $i++) : ?>
            <?php $data_for = $array_dpt_npz[$i]; ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="dpt_npz[]" <?php if (in_array($data_for, $dpt_npz)) {
                                                                                        echo "checked";
                                                                                    };
                                                                                    fungsiDisabled($p, 'disabled'); ?> id="inlineCheckbox2" value="<?= $data_for ?>">
                <label class="form-check-label" for="inlineCheckbox2"><?= $data_for ?></label>
            </div>
        <?php endfor; ?>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" <?php if ($result_dpt_npz != '') {
                                                                foreach ($result_dpt_npz as $row) {
                                                                    if ($row != '') {
                                                                        echo "checked";
                                                                    }
                                                                }
                                                            };
                                                            fungsiDisabled($p, 'disabled'); ?> name="dpt_npz[]" id="inlineCheckbox1" value="">
            <label class="form-check-label" for="inlineCheckbox1">lainnya</label>
            <input type="text" name="dpt_npz[]" value="<?php if ($result_dpt_npz != '') {
                                                            foreach ($result_dpt_npz as $row) {
                                                                echo $row;
                                                            }
                                                        }; ?>" <?php fungsiDisabled($p, 'disabled'); ?>>
        </div>
    </div>
</div>