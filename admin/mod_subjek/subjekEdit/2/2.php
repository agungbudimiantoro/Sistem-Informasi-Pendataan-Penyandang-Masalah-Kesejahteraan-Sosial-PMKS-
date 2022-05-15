<div class="row border">
    <div class="col-md-6 border">
        <span style="text-transform:capitalize;">status ayah:</span>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" <?php if ($data['sts_ayah'] == 'masih hidup') {
                                                                echo "checked";
                                                            };
                                                            fungsiDisabled($p, 'disabled'); ?> name="sts_ayah" id="sts_ayah" value="masih hidup">
            <label class="form-check-label" style="text-transform:capitalize;" for="sts_ayah">masih hidup</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" <?php if ($data['sts_ayah'] == 'sdh meninggal') {
                                                                echo "checked";
                                                            };
                                                            fungsiDisabled($p, 'disabled'); ?> name="sts_ayah" id="sts_ayah" value="sdh meninggal">
            <label class="form-check-label" style="text-transform:capitalize;" for="sts_ayah">sdh meninggal</label>
        </div>
    </div>
    <div class="col-md-6 border">
        <span style="text-transform:capitalize;">status ibu:</span>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" <?php if ($data['sts_ibu'] == 'masih hidup') {
                                                                echo "checked";
                                                            };
                                                            fungsiDisabled($p, 'disabled'); ?> name="sts_ibu" id="sts_ibu" value="masih hidup">
            <label class="form-check-label" style="text-transform:capitalize;" for="sts_ibu">masih hidup</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" <?php if ($data['sts_ibu'] == 'sdh meninggal') {
                                                                echo "checked";
                                                            };
                                                            fungsiDisabled($p, 'disabled'); ?> name="sts_ibu" id="sts_ibu" value="sdh meninggal">
            <label class="form-check-label" style="text-transform:capitalize;" for="sts_ibu">sdh meninggal</label>
        </div>
    </div>
</div>