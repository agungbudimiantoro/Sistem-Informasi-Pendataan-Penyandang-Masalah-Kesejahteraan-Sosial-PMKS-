<div class="row border p-2">
    <p style="text-transform:capitalize;"><b>C2. kekerasan dan eksplitasi seksual (bagi perempuan)</b></p>
    <div class="col-md-4 border p-2 ">
        <label style="text-transform:capitalize;" for="dpt_kkrs_es" class="form-label">pernah mendapatkan kekerasan seksual:</label>
        <input value="<?= $data['dpt_kkrs_es'] ?>" readonly type="text" name="dpt_kkrs_es" class="form-control" id="dpt_kkrs_es" aria-describedby="emailHelp" required>
    </div>
    <div class="col-md-4 border p-2 ">
        <label style="text-transform:capitalize;" for="btk_kkrs_es" class="form-label">apa saja bentuk-bentuk kekerasan seksual yang dialami:</label>
        <input value="<?php
                        $btk_kkrs_es = unserialize($data['btk_kkrs_es']);
                        foreach ($btk_kkrs_es as $row) {
                            if ($row == 'lainnya') {
                            } else {
                                echo $row;
                                echo ', ';
                            }
                        }
                        ?>" readonly type="text" name="btk_kkrs_es" class="form-control" id="btk_kkrs_es" aria-describedby="emailHelp" required>
    </div>

    <div class="col-md-4 border p-2 ">
        <label style="text-transform:capitalize;" for="org_mlk_kkrs_es" class="form-label">orang atau pihak yang pernah melakukan kekerasan seksual:</label>
        <input value="<?php
                        $org_mlk_kkrs_es = unserialize($data['org_mlk_kkrs_es']);
                        foreach ($org_mlk_kkrs_es as $row) {
                            if ($row == 'lainnya') {
                            } else {
                                echo $row;
                                echo ', ';
                            }
                        }
                        ?>" readonly type="text" name="org_mlk_kkrs_es" class="form-control" id="org_mlk_kkrs_es" aria-describedby="emailHelp" required>
    </div>

    </table>
</div>