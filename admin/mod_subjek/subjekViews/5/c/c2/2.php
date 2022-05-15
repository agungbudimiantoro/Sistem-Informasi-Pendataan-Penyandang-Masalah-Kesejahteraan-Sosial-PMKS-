<div class="row border p-2">
    <div class="col-md-4 border p-2 ">
        <label style="text-transform:capitalize;" for="plprn_es" class="form-label">kasus tersebut pernah dilaporkan ke pihak berwajib dan diproses secara hukum:</label>
        <input value="<?= $data['plprn_es'] ?>" readonly type="text" name="plprn_es" class="form-control" id="plprn_es" aria-describedby="emailHelp" required>
    </div>
    <div class="col-md-8 border p-2 ">
        <label style="text-transform:capitalize;" for="btk_proses" class="form-label">tindakan terhadap pelakunya:</label>
        <input value="<?php
                        $btk_proses = unserialize($data['btk_proses']);
                        foreach ($btk_proses as $row) {
                            if ($row == '') {
                            } else {
                                echo $row;
                                echo ', ';
                            }
                        }
                        ?>" readonly type="text" name="btk_proses" class="form-control" id="btk_proses" aria-describedby="emailHelp" required>
    </div>

    </table>
</div>