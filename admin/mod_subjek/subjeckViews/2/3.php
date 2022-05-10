<?php
$array_trhir_ktm_klg = array('krng dari smnggu lalu', 'sbulan lalu', 'tiga bulan lalu', 'stahun lalu');
?>
<div class="row border">
    <div class="col-md-12 border">
        <p style="text-transform:capitalize;">bila tidak tinggal bersama orang tua, kapan terakhir kamu pulang atau bertemu dengan orang tua mu:</p>
        <?php for ($i = 0; $i < count($array_trhir_ktm_klg); $i++) : ?>
            <?php $data_for = $array_trhir_ktm_klg[$i]; ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" <?php if ($data['trhir_ktm_klg'] == $data_for) {
                                                                    echo "checked";
                                                                };
                                                                fungsiDisabled($p, 'disabled'); ?> name="trhir_ktm_klg" id="trhir_ktm_klg" value="<?= $data_for ?>">
                <label class="form-check-label" style="text-transform:capitalize;" for="trhir_ktm_klg"><?= $data_for ?></label>
            </div>
        <?php endfor; ?>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" <?php if (!in_array($data['trhir_ktm_klg'], $array_trhir_ktm_klg)) {
                                                                echo "checked";
                                                            };
                                                            fungsiDisabled($p, 'disabled'); ?> name="trhir_ktm_klg" id="trhir_ktm_klg" value="lainya, sbutkan kpan:">
            <label class="form-check-label" style="text-transform:capitalize;" for="trhir_ktm_klg">lainya, sbutkan kpan:</label>
            <input type="text" name="trhir_ktm_klg1" value="<?php if (!in_array($data['trhir_ktm_klg'], $array_trhir_ktm_klg)) {
                                                                echo $data['trhir_ktm_klg'];
                                                            } ?>" <?php fungsiDisabled($p, 'disabled'); ?>>
        </div>
    </div>
</div>