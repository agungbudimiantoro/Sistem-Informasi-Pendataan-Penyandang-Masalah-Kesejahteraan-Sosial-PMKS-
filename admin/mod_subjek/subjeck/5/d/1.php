<?php
$array_nm_kms_npz = array('merokok', 'minuman keras', 'pil ekstasi', 'ngelem', 'sabu-sabu');
?>
<div class="row border">
    <p style="text-transform:capitalize;"><b>D. Penggunaan NAPZA</b></p>
    <div class="col-md-12 border">
        <p style="text-transform:capitalize;">apakah saudara/i mengkonsumsi NAPZA ? (jawaban boleh lebih dari satu):</p>
        <?php for ($i = 0; $i < count($array_nm_kms_npz); $i++) : ?>
            <?php $data_for = $array_nm_kms_npz[$i]; ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="nm_kms_npz[]" id="inlineCheckbox2" value="<?= $data_for ?>">
                <label class="form-check-label" for="inlineCheckbox2"><?= $data_for ?></label>
            </div>
        <?php endfor; ?>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="nm_kms_npz[]" id="inlineCheckbox1" value="">
            <label class="form-check-label" for="inlineCheckbox1">lainnya</label>
            <input type="text" name="nm_kms_npz[]">
        </div>
    </div>
</div>