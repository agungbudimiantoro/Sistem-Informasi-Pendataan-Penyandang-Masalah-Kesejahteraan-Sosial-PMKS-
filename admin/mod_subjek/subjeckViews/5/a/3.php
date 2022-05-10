<?php
$array_proses_tdk = array('ditangkap', 'ditahan', 'disidang', 'dipenjara');
$proses_tdk = unserialize($data['proses_tdk']);
$result_proses_tdk = array_diff($proses_tdk, $array_proses_tdk);
?>
<div class="row border">
    <div class="col-md-12 border">
        <p style="text-transform:capitalize;">bila ada , apa bentuk-bentuk tindakan yang saudara/i lakukan:</p>
        <?php for ($i = 0; $i < count($array_proses_tdk); $i++) : ?>
            <?php $data_for = $array_proses_tdk[$i]; ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="proses_tdk[]" <?php if (in_array($data_for, $proses_tdk)) {
                                                                                        echo "checked";
                                                                                    };
                                                                                    fungsiDisabled($p, 'disabled'); ?> id="inlineCheckbox2" value="<?= $data_for ?>">
                <label class="form-check-label" for="inlineCheckbox2"><?= $data_for ?></label>
            </div>
        <?php endfor; ?>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" <?php if ($result_proses_tdk != '') {
                                                                foreach ($result_proses_tdk as $row) {
                                                                    if ($row != '') {
                                                                        echo "checked";
                                                                    }
                                                                }
                                                            };
                                                            fungsiDisabled($p, 'disabled'); ?> name="proses_tdk[]" id="inlineCheckbox1" value="lainnya">
            <label class="form-check-label" for="inlineCheckbox1">lainnya</label>
            <input type="text" name="proses_tdk[]" value="<?php if ($result_proses_tdk != '') {
                                                                foreach ($result_proses_tdk as $row) {
                                                                    echo $row;
                                                                }
                                                            }; ?>" <?php fungsiDisabled($p, 'disabled'); ?>>
        </div>
    </div>
</div>