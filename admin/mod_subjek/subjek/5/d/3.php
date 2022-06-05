<div class="row border">
    <table>
        <tr>
            <td colspan="2" class="border">
                <p style="text-transform:capitalize;">apakah alasan saudara/i mengkonsumsi NAPZA:</p>
                <input type="text" class="mb-2" name="als_mks_npz" id="als_mks_npz">
            </td>
            <td style="padding-top:20px;" align="right"> <label style="text-transform:capitalize;" for="foto" class="form-label">foto</label></td>
            <td> <input type="file" name="file" class="form-control" id="foto" aria-describedby="emailHelp" required></td>
            <td style="padding-top:20px;" align="right"> <label style="text-transform:capitalize;" for="sts_jns_pmks" class="form-label">status jenis PMKS</label></td>
            <td> <input type="text" name="sts_jns_pmks" value="belum ditetapkan" readonly class="form-control" id="sts_jns_pmks" aria-describedby="emailHelp"></td>
        </tr>
        <tr>
            <td style="padding-top:20px;" align="right"> <label style="text-transform:capitalize;" for="petugas" class="form-label">petugas</label></td>
            <td> <input type="text" name="petugas" value="<?= $nm_user ?>" readonly class="form-control" id="petugas" aria-describedby="emailHelp"></td>
            <td style="padding-top:20px;" align="right"> <label style="text-transform:capitalize;" for="sts_penertipan" class="form-label">status penertipan</label></td>
            <td> <input type="text" name="sts_penertipan" class="form-control" id="sts_penertipan" aria-describedby="emailHelp"></td>
            <td style="padding-top:20px;" align="right"> <label style="text-transform:capitalize;" for="sts_tndk" class="form-label">status tindakan</label></td>
            <td>
                <select class="form-select" aria-label="Default select example" name="sts_tndk" required>
                    <option value="" diasabled selected>pilih status tindakan</option>
                    <option value="peringatan">peringatan</option>
                    <option value="tindak lanjuti">tindak lanjuti</option>
                </select>
            </td>
        </tr>
        <tr>
            <td style="padding-top:20px;" align="right"> <label style="text-transform:capitalize;" for="tgl_pendataan" class="form-label">tanggal</label></td>
            <td> <input type="date" name="tgl_pendataan" value="<?= date("Y-m-d") ?>" readonly class=" form-control" id="tgl_pendataan" aria-describedby="emailHelp"></td>
            <td style="padding-top:20px;" align="right"> <label style="text-transform:capitalize;" for="jam" class="form-label">jam</label></td>
            <td> <input type="time" value="<?= date("H:i") ?>" readonly name="jam" class="form-control" id="jam" aria-describedby="emailHelp"></td>