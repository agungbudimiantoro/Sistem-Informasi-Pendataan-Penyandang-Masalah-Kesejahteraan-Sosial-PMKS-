<div class="row border p-2">
    <h5 style="text-transform:uppercase;">V. situasi perlingunan khusus</h5>
    <p style="text-transform:capitalize;"><b>A. yang berkonflik dengan hukum</b></p>
    <div class="col-md-4 border p-2 ">
        <label style="text-transform:capitalize;" for="sts_tdk" class="form-label">pernah melakukan tindakan kekerasan yang dianggap melanggar hukum:</label>
        <input value="<?= $data['sts_tdk'] ?>" readonly type="text" name="sts_tdk" class="form-control" id="sts_tdk" aria-describedby="emailHelp" required>
    </div>
    <div class="col-md-4 border p-2 ">
        <label style="text-transform:capitalize;" for="btk_tdk" class="form-label">bentuk-bentuk tindakan yang lakukan:</label>
        <input value="<?php
                        $btk_tdk = unserialize($data['btk_tdk']);
                        foreach ($btk_tdk as $row) {
                            if ($row == '') {
                            } else {
                                echo $row;
                                echo ', ';
                            }
                        }
                        ?>" readonly type="text" name="btk_tdk" class="form-control" id="btk_tdk" aria-describedby="emailHelp" required>
    </div>

    <div class="col-md-4 border p-2 ">
        <label style="text-transform:capitalize;" for="proses_tdk" class="form-label">tindakan yang dilakukan terhadap saudara/i yg pernah diproses secara hukum</label>
        <input value="<?php
                        $proses_tdk = unserialize($data['proses_tdk']);
                        foreach ($proses_tdk as $row) {
                            if ($row == '') {
                            } else {
                                echo $row;
                                echo ', ';
                            }
                        }
                        ?>" readonly type="text" name="proses_tdk" class="form-control" id="proses_tdk" aria-describedby="emailHelp" required>
    </div>
    </table>
</div>