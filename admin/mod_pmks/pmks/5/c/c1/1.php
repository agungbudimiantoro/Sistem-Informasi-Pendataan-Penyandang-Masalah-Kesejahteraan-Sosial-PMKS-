<div class="row border p-2">
    <p style="text-transform:capitalize;"><b>C. pengalaman kekerasan</b></p>
    <p style="text-transform:capitalize;"><b>C1. kekesaran fisin dan mental</b></p>
    <div class="col-md-4 border p-2 ">
        <label style="text-transform:capitalize;" for="dpt_kkrs_fm" class="form-label">pernah mendapatkan kekerasan:</label>
        <input value="<?= $data['dpt_kkrs_fm'] ?>" readonly type="text" name="dpt_kkrs_fm" class="form-control" id="dpt_kkrs_fm" aria-describedby="emailHelp" required>
    </div>
    <div class="col-md-4 border p-2 ">
        <label style="text-transform:capitalize;" for="btk_kkrs_fm" class="form-label">bentuk kekesaran yang pernah di alami:</label>
        <input value="<?php
                        $btk_kkrs_fm = unserialize($data['btk_kkrs_fm']);
                        foreach ($btk_kkrs_fm as $row) {
                            if ($row == 'lainnya') {
                            } else {
                                echo $row;
                                echo ', ';
                            }
                        }
                        ?>" readonly type="text" name="btk_kkrs_fm" class="form-control" id="btk_kkrs_fm" aria-describedby="emailHelp" required>
    </div>
    <div class="col-md-4 border p-2 ">
        <label style="text-transform:capitalize;" for="org_mlk_kkrs" class="form-label">orang-orang yang pernah melakukan kekerasan:</label>
        <input value="<?php
                        $org_mlk_kkrs = unserialize($data['org_mlk_kkrs']);
                        foreach ($org_mlk_kkrs as $row) {
                            if ($row == 'lainnya') {
                            } else {
                                echo $row;
                                echo ', ';
                            }
                        }
                        ?>" readonly type="text" name="org_mlk_kkrs" class="form-control" id="org_mlk_kkrs" aria-describedby="emailHelp" required>
    </div>
    </table>
</div>