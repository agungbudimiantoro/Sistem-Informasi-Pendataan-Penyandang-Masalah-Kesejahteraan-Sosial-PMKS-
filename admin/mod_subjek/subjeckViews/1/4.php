<div class="row border">
    <div class="col-md-4 border">
        <p style="text-transform:capitalize;">aksesoris ditubuh:</p>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" <?php if ($data['aks_tbh'] == 'tidak ada') {
                                                                echo "checked";
                                                            };
                                                            fungsiDisabled($p, 'disabled'); ?> name="aks_tbh" id="aks_tbh" value="tidak ada">
            <label class="form-check-label" style="text-transform:capitalize;" for="aks_tbh">tidak ada</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" <?php if ($data['aks_tbh'] != 'tidak ada') {
                                                                echo "checked";
                                                            };
                                                            fungsiDisabled($p, 'disabled'); ?> name="aks_tbh" id="aks_tbh" value="ada di">
            <label class=" form-check-label" style="text-transform:capitalize;" for="aks_tbh">ada di</label>
            <input type="text" name="aks_tbh1" value="<?php if ($data['aks_tbh'] != 'tidak ada') {
                                                            echo $data['aks_tbh'];
                                                        }; ?>" <?php
                                                                fungsiDisabled($p, 'disabled'); ?>>
        </div>
    </div>
    <div class="col-md-4 border">
        <p style="text-transform:capitalize;">bekas luka ditubuh:</p>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" <?php if ($data['bks_lk'] == 'tidak ada') {
                                                                echo "checked";
                                                            };
                                                            fungsiDisabled($p, 'disabled'); ?> name="bks_lk" id="bks_lk" value="tidak ada">
            <label class="form-check-label" style="text-transform:capitalize;" for="bks_lk">tidak ada</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" <?php if ($data['bks_lk'] != 'tidak ada') {
                                                                echo "checked";
                                                            };
                                                            fungsiDisabled($p, 'disabled'); ?> name="bks_lk" id="bks_lk" value="ada di">
            <label class=" form-check-label" style="text-transform:capitalize;" for="bks_lk">ada di</label>
            <input type="text" name="bks_lk1" value="<?php if ($data['bks_lk'] != 'tidak ada') {
                                                            echo $data['bks_lk'];
                                                        }; ?>" <?php
                                                                fungsiDisabled($p, 'disabled'); ?>>
        </div>
    </div>
    <div class="col-md-4 border">
        <p style="text-transform:capitalize;">cacat tubuh:</p>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" <?php if ($data['cct_tbh'] == 'tidak ada') {
                                                                echo "checked";
                                                            };
                                                            fungsiDisabled($p, 'disabled'); ?> name="cct_tbh" id="cct_tbh" value="tidak ada">
            <label class="form-check-label" style="text-transform:capitalize;" for="cct_tbh">tidak ada</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" <?php if ($data['cct_tbh'] != 'tidak ada') {
                                                                echo "checked";
                                                            };
                                                            fungsiDisabled($p, 'disabled'); ?> name="cct_tbh" id="cct_tbh" value="ada di">
            <label class=" form-check-label" style="text-transform:capitalize;" for="cct_tbh">ada di</label>
            <input type="text" name="cct_tbh1" value="<?php if ($data['cct_tbh'] != 'tidak ada') {
                                                            echo $data['cct_tbh'];
                                                        }; ?>" <?php
                                                                fungsiDisabled($p, 'disabled'); ?>>
        </div>
    </div>
</div>