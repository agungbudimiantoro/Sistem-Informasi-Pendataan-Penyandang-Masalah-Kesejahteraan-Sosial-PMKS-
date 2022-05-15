<div class="row border p-2">
    <h5 style="text-transform:uppercase;">III. status pendidikan</h5>
    <div class="col-md-4 border p-2 ">
        <label style="text-transform:capitalize;" for="sts_sklh" class="form-label">masih bersekolah:</label>
        <input value="<?= $data['sts_sklh'] ?>" readonly type="text" name="sts_sklh" class="form-control" id="sts_sklh" aria-describedby="emailHelp" required>
    </div>
    <div class="col-md-4 border p-2 ">
        <label style="text-transform:capitalize;" for="als_pts_sklh" class="form-label">alasasn tidak pernah sekolah atau putus sekolah</label>
        <input value="<?php
                        $als_pts_sklh = unserialize($data['als_pts_sklh']);
                        foreach ($als_pts_sklh as $row) {
                            if ($row == '') {
                            } else {
                                echo $row;
                                echo ', ';
                            }
                        }
                        ?>" readonly type="text" name="als_pts_sklh" class="form-control" id="als_pts_sklh" aria-describedby="emailHelp" required>
    </div>
    <div class="col-md-4 border p-2 ">
        <label style="text-transform:capitalize;" for="niat_ljt_sklh" class="form-label">niat untuk melanjutkan sekolah:</label>
        <input value="<?= $data['niat_ljt_sklh'] ?>" readonly type="text" name="niat_ljt_sklh" class="form-control" id="niat_ljt_sklh" aria-describedby="emailHelp" required>
    </div>

    </table>
</div>