<?php
$array_sts_sklh = array('ya', 'tidak', 'belum pernah');
$array_niat_ljt_sklh = array('ya', 'tidak', 'belum pernah');
?>

<div class="row border">
    <h5 style="text-transform:uppercase;">V. situasi perlingunan khusus</h5>
    <p style="text-transform:capitalize;"><b>A. yang berkonflik dengan hukum</b></p>
    <div class="col-md-12 border">
        <p style="text-transform:capitalize;">apakah saudara/i pernah melakukan tindakan kekerasan yang dianggap melanggar hukum:</p>
        <?php for ($i = 0; $i < count($array_sts_sklh); $i++) : ?>
            <?php $data_for = $array_sts_sklh[$i]; ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sts_tdk" id="sts_tdk" value="<?= $data_for ?>">
                <label class="form-check-label" style="text-transform:capitalize;" for="sts_tdk"><?= $data_for ?></label>
            </div>
        <?php endfor; ?>

    </div>
</div>