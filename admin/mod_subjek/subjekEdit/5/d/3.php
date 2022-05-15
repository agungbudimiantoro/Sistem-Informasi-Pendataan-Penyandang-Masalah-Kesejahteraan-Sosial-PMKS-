<div class="row border">
    <div class="col-md-4 border">
        <table>
            <tr>
                <td colspan="2">
                    <p style="text-transform:capitalize;">apakah alasan saudara/i mengkonsumsi NAPZA:</p>
                    <input type="text" value="<?= $data['als_mks_npz'] ?>" <?php fungsiDisabled($p, 'disabled'); ?> class="mb-2" name="als_mks_npz" id="als_mks_npz" required>
                </td>
            </tr>
            <tr>
                <td style="padding-top:20px;">
                    <img src="../assets/img/subjek/<?= $data['foto'] ?>" alt="" width="100px" height="100px">
                    <label style="text-transform:capitalize;" for="foto" class="form-label">foto</label>
                </td>
            </tr>
            <tr>

                <td style="padding-top:20px;">
                    <p style="text-transform:capitalize;" for="foto" class="form-label">foto</p>
                    <small>jangan pilih foto untuk menggunakan foto lama</small>
                    <input type="file" name="file" class="form-control" id="foto" aria-describedby="emailHelp">
                </td>
                </td>
            </tr>

        </table>
    </div>
    <div class="col-md-8">
        <table>
            <tr>
                <td style="padding-top:20px;" align="right"> <label style="text-transform:capitalize;" for="sts_penertipan" class="form-label">status penertipan</label></td>
                <td> <input type="text" value="<?= $data['sts_penertipan'] ?>" <?php fungsiDisabled($p, 'disabled'); ?> name="sts_penertipan" class="form-control" id="sts_penertipan" aria-describedby="emailHelp" required></td>
                <td style="padding-top:20px;" align="right"> <label style="text-transform:capitalize;" for="sts_tndk" class="form-label">status tindakan</label></td>
                <td>
                    <select class="form-select" aria-label="Default select example" <?php fungsiDisabled($p, 'disabled'); ?> name="sts_tndk" required>
                        <option value="" diasabled selected>pilih status tindakan</option>
                        <option value="peringatan" <?php if ($data['sts_tndk'] == 'peringatan') {
                                                        echo 'selected';
                                                    } ?>>peringatan</option>
                        <option value="tindak lanjuti" <?php if ($data['sts_tndk'] == 'tindak lanjuti') {
                                                            echo 'selected';
                                                        } ?>>tindak lanjuti</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td style="padding-top:20px;" align="right"> <label style="text-transform:capitalize;" for="sts_jns_pmks" class="form-label">status jenis PMKS</label></td>
                <td> <input type="text" value="<?= $data['sts_jns_pmks'] ?>" readonly name="sts_jns_pmks" class="form-control" id="sts_jns_pmks" aria-describedby="emailHelp" required></td>
                <td style="padding-top:20px;" align="right"> <label style="text-transform:capitalize;" for="petugas" class="form-label">petugas</label></td>
                <td> <input type="text" value="<?= $nm_user ?>" <?php fungsiDisabled($p, 'disabled'); ?> name="petugas" class="form-control" id="petugas" aria-describedby="emailHelp" required></td>

            </tr>
            <tr>

                <td style="padding-top:20px;" align="right"> <label style="text-transform:capitalize;" for="tgl_pendataan" class="form-label">tanggal</label></td>
                <td> <input type="date" value="<?= $data['tgl_pendataan'] ?>" <?php fungsiDisabled($p, 'disabled'); ?> name="tgl_pendataan" class="form-control" id="tgl_pendataan" aria-describedby="emailHelp" required></td>
                <td style="padding-top:20px;" align="right"> <label style="text-transform:capitalize;" for="jam" class="form-label">jam</label></td>
                <td> <input type="time" value="<?= $data['jam'] ?>" <?php fungsiDisabled($p, 'disabled'); ?> name="jam" class="form-control" id="jam" aria-describedby="emailHelp" required></td>

            </tr>
            <?php if ($p == 'subjek_edit') {
                include "mod_subjek/subjekEdit/5/d/submit.php";
            } ?>
        </table>
    </div>