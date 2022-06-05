<?php
$array_als_pts_sklh = array('tidak ada biaya', 'disuruh ortu', 'jaraknya jauh pernah', 'sudah bekerja', 'dikeluarkan', 'malas sekolah');
$als_pts_sklh = unserialize($data['als_pts_sklh']);
$result_als_pts_sklh = array_diff($als_pts_sklh, $array_als_pts_sklh);
?>
<div class="row border">
    <div class="col-md-12 border">
        <p style="text-transform:capitalize;">bila saudara/i tidak pernah sekolah atau putus sekolah, apa alasanya? (jawaban bisa lebih dari satu):</p>
        <?php for ($i = 0; $i < count($array_als_pts_sklh); $i++) : ?>
            <?php $data_for = $array_als_pts_sklh[$i]; ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" <?php if (in_array($data_for, $als_pts_sklh)) {
                                                                    echo "checked";
                                                                };
                                                                fungsiDisabled($p, 'disabled'); ?> name="als_pts_sklh[]" id="inlineCheckbox2" value="<?= $data_for ?>">
                <label class="form-check-label" for="inlineCheckbox2"><?= $data_for ?></label>
            </div>
        <?php endfor; ?>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" <?php if ($result_als_pts_sklh != '') {
                                                                foreach ($result_als_pts_sklh as $row) {
                                                                    if ($row != '') {
                                                                        echo " checked";
                                                                    }
                                                                }
                                                            };
                                                            fungsiDisabled($p, 'disabled'); ?> name="als_pts_sklh[]" id="inlineCheckbox1" value="">
            <label class="form-check-label" for="inlineCheckbox1">lainnya</label>
            <input type="text" name="als_pts_sklh[]" value="<?php if ($result_als_pts_sklh != '') {
                                                                foreach ($result_als_pts_sklh as $row) {
                                                                    echo $row;
                                                                }
                                                            }; ?>" <?php fungsiDisabled($p, 'disabled'); ?>>
        </div>
    </div>
</div>