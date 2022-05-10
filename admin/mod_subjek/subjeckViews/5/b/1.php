<?php
$array_btk_kgt = array('mengamen', 'mengemis');
?>
<div class="row border">
    <p style="text-transform:capitalize;"><b>B. pengalaman dijalan</b></p>
    <div class="col-md-6 border">
        <p style="text-transform:capitalize;">sejak kapan saudara/i melakukan aktivitas dijalan:</p>
        <input type="text" class="mb-2" value="<?= $data['kpn_mjln'] ?>" <?php fungsiDisabled($p, 'disabled'); ?> name="kpn_mjln" id="kpn_mjln" size="50" required>
    </div>
    <div class="col-md-6 border">
        <p style="text-transform:capitalize;">bentuk kegiatan di jalanan yang saudara/i:</p>
        <?php for ($i = 0; $i < count($array_btk_kgt); $i++) : ?>
            <?php $data_for = $array_btk_kgt[$i]; ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" <?php if ($data['btk_kgt'] == $data_for) {
                                                                    echo "checked";
                                                                };
                                                                fungsiDisabled($p, 'disabled'); ?> name="btk_kgt" id="btk_kgt" value="<?= $data_for ?>">
                <label class="form-check-label" style="text-transform:capitalize;" for="btk_kgt"><?= $data_for ?></label>
            </div>
        <?php endfor; ?>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" <?php if (!in_array($data['btk_kgt'], $array_btk_kgt)) {
                                                                echo "checked";
                                                            };
                                                            fungsiDisabled($p, 'disabled'); ?> name="btk_kgt" id="btk_kgt" value="lainnya">
            <label class="form-check-label" style="text-transform:capitalize;" for="btk_kgt">lainnya</label>
            <input type="text" name="btk_kgt1" id="btk_kgt" value="<?php if (!in_array($data['btk_kgt'], $array_btk_kgt)) {
                                                                        echo $data['btk_kgt'];
                                                                    } ?>" <?php fungsiDisabled($p, 'disabled'); ?>>
        </div>
    </div>
</div>