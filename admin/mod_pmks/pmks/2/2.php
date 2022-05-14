<div class="row border p-2">
    <div class="col-md-4 border p-2 ">
        <label style="text-transform:capitalize;" for="pkj_ayah" class="form-label">pekerjaan ayah:</label>
        <input value="<?= $data['pkj_ayah'] ?>" readonly type="text" name="pkj_ayah" class="form-control" id="pkj_ayah" aria-describedby="emailHelp" required>
    </div>
    <div class="col-md-4 border p-2 ">
        <label style="text-transform:capitalize;" for="pkj_ibu" class="form-label">pekerjaan ibu</label>
        <input value="<?= $data['pkj_ibu'] ?>" readonly type="text" name="pkj_ibu" class="form-control" id="pkj_ibu" aria-describedby="emailHelp" required>
    </div>
    <div class="col-md-4 border p-2 ">
        <label style="text-transform:capitalize;" for="trhir_ktm_klg" class="form-label">terakhir pulang atau bertemu dengan orang tua mu:</label>
        <input value="<?= $data['trhir_ktm_klg'] ?>" readonly type="text" name="trhir_ktm_klg" class="form-control" id="trhir_ktm_klg" aria-describedby="emailHelp" required>
    </div>
    </table>
</div>