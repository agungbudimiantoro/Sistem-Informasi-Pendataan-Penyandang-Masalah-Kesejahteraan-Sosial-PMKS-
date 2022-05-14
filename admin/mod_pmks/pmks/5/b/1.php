<div class="row border p-2">

    <p style="text-transform:capitalize;"><b>B. pengalaman dijalan</b></p>
    <div class="col-md-4 border p-2 ">
        <label style="text-transform:capitalize;" for="kpn_mjln" class="form-label">melakukan aktivitas dijalan sejak:</label>
        <input value="<?= $data['kpn_mjln'] ?>" readonly type="text" name="kpn_mjln" class="form-control" id="kpn_mjln" aria-describedby="emailHelp" required>
    </div>
    <div class="col-md-4 border p-2 ">
        <label style="text-transform:capitalize;" for="btk_kgt" class="form-label">bentuk kegiatan di jalanan :</label>
        <input value="<?= $data['btk_kgt'] ?>" readonly type="text" name="btk_kgt" class="form-control" id="btk_kgt" aria-describedby="emailHelp" required>
    </div>

    <div class="col-md-4 border p-2 ">
        <label style="text-transform:capitalize;" for="als_mlk_kgt" class="form-label">alasan berada atau melakukan kegiatan dijalan? :</label>
        <input value="<?= $data['als_mlk_kgt'] ?>" readonly type="text" name="als_mlk_kgt" class="form-control" id="als_mlk_kgt" aria-describedby="emailHelp" required>
    </div>
    </table>
</div>