<?php
$array_niat_brht = array('ya', 'tidak', 'tidak tau');
?>
<div class="row border">

    <div class="col-md-6 border">
        <p style="text-transform:capitalize;">apakah saudara/i mmiliki niat utk berhenti mlkn khtn dijalan:</p>

        <?php for ($i = 0; $i < count($array_niat_brht); $i++) : ?>
            <?php $data_for = $array_niat_brht[$i]; ?>
            <div class="form-check form-check-inline">
                <input required class="form-check-input" type="radio" name="niat_brht" id="niat_brht" value="<?= $data_for ?>">
                <label class="form-check-label" style="text-transform:capitalize;" for="niat_brht"><?= $data_for ?></label>
            </div>
        <?php endfor; ?>
    </div>
    <div class="col-md-6 border">
        <p style="text-transform:capitalize;">menurut saudara/i bagaimana cara agr saudara/i bisa menghentikan kegiatan di jalan:</p>
        <input type="text" class="mb-2" name="cr_brht" id="cr_brht" size="50" required>
    </div>
</div>