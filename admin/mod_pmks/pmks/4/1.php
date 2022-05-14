<div class="row border p-2">

    <h5 style="text-transform:uppercase;">IV. kesehatan</h5>
    <div class="col-md-6 border p-2 ">
        <label style="text-transform:capitalize;" for="rwt_pnykt" class="form-label">selama tiga bulan terakhir, jenis penyakit apa saja yang pernah diderita:</label>
        <input value="<?= $data['rwt_pnykt'] ?>" readonly type="text" name="rwt_pnykt" class="form-control" id="rwt_pnykt" aria-describedby="emailHelp" required>
    </div>

    <div class="col-md-6 border p-2 ">
        <label style="text-transform:capitalize;" for="pengobatan" class="form-label">pengobatan yang biasa dilakukan:</label>
        <input value="<?php
                        $pengobatan = unserialize($data['pengobatan']);
                        foreach ($pengobatan as $row) {
                            if ($row == 'lainnya') {
                            } else {
                                echo $row;
                                echo ', ';
                            }
                        }
                        ?>" readonly type="text" name="pengobatan" class="form-control" id="pengobatan" aria-describedby="emailHelp" required>
    </div>

    </table>
</div>