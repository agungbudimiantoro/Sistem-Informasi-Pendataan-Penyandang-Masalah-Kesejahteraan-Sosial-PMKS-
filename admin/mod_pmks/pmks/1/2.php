<div class="row border p-2">
    <div class="col-md-3 border p-2 ">
        <label style="text-transform:capitalize;" for="sts_tmp_tgl" class="form-label">Saat ini tinggal bersama: &nbsp;</label>
        <input value="<?= $data['sts_tmp_tgl'] ?>" readonly type="text" name="sts_tmp_tgl" class="form-control" id="sts_tmp_tgl" aria-describedby="emailHelp" required>
    </div>
    <div class="col-md-3 border p-2 ">
        <label style="text-transform:capitalize;" for="akte" class="form-label">Apakah kamu memiliki salinan akta kelahiran:</label>
        <input value="<?= $data['akte'] ?>" readonly type="text" name="akte" class="form-control" id="akte" aria-describedby="emailHelp" required>
    </div>
    <div class="col-md-3 border p-2 ">
        <label style="text-transform:capitalize;" for="pmpln" class="form-label">penampilan :</label>
        <input value="<?= $data['pmpln'] ?>" readonly type="text" name="pmpln" class="form-control" id="pmpln" aria-describedby="emailHelp" required>
    </div>
    <div class="col-md-3 border p-2 ">
        <label style="text-transform:capitalize;" for="kmp_bcr" class="form-label">kemampuan bicara: </label>
        <input value="<?= $data['kmp_bcr'] ?>" readonly type="text" name="kmp_bcr" class="form-control" id="kmp_bcr" aria-describedby="emailHelp" required>
    </div>
    </table>
</div>