<?php
$array_plprn_es = array('pernah', 'tidak pernah', 'tidak tau');
?>
<div class="row border">

    <div class="col-md-12 border">
        <p style="text-transform:capitalize;">apakah kasus tersebut pernah dilaporkan ke pihak berwajib dan diproses secara hukum:</p>
        <?php for ($i = 0; $i < count($array_plprn_es); $i++) : ?>
            <?php $data_for = $array_plprn_es[$i]; ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="plprn_es" id="plprn_es" value="<?= $data_for ?>">
                <label class="form-check-label" style="text-transform:capitalize;" for="plprn_es"><?= $data_for ?></label>
            </div>
        <?php endfor; ?>
    </div>
</div>