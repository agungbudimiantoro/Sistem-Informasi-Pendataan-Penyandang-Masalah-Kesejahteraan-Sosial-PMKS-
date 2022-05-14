<div class="row border p-2">
    <p style="text-transform:capitalize;"><b>D. Penggunaan NAPZA</b></p>
    <div class="col-md-4 border p-2 ">
        <label style="text-transform:capitalize;" for="nm_kms_npz" class="form-label">mengkonsumsi NAPZA ? (jawaban boleh lebih dari satu):</label>
        <input value="<?php
                        $nm_kms_npz = unserialize($data['nm_kms_npz']);
                        foreach ($nm_kms_npz as $row) {
                            if ($row == '') {
                            } else {
                                echo $row;
                                echo ', ';
                            }
                        }
                        ?>" readonly type="text" name="nm_kms_npz" class="form-control" id="nm_kms_npz" aria-describedby="emailHelp" required>
    </div>
    <div class="col-md-4 border p-2 ">
        <label style="text-transform:capitalize;" for="dpt_npz" class="form-label">barang didapatkan:</label>
        <input value="<?php
                        $dpt_npz = unserialize($data['dpt_npz']);
                        foreach ($dpt_npz as $row) {
                            if ($row == '') {
                            } else {
                                echo $row;
                                echo ', ';
                            }
                        }
                        ?>" readonly type="text" name="dpt_npz" class="form-control" id="dpt_npz" aria-describedby="emailHelp" required>
    </div>

    <div class="col-md-4 border p-2 ">
        <label style="text-transform:capitalize;" for="als_mks_npz" class="form-label">alasan mengkonsumsi NAPZA:</label>
        <input value="<?= $data['als_mks_npz'] ?>" readonly type="text" name="als_mks_npz" class="form-control" id="als_mks_npz" aria-describedby="emailHelp" required>
    </div>

    </table>
</div>