<div class="row border p-2">
    <table>
        <tr>
            <td colspan="8">
                <h5 style="text-transform:uppercase;">I. Identitas Subjek</h5>
                <input value="<?= $data['id_subjek'] ?>" hidden type="text" name="id" class="form-control" id="id" aria-describedby="emailHelp">
            </td>
        </tr>
        <tr>
            <td style="padding-top:20px;"> <label style="text-transform:capitalize;" for="nm_lkp" class="form-label">nama lengkap</label></td>
            <td> <input value="<?= $data['nm_lkp'] ?>" <?php fungsiDisabled($p, 'readonly'); ?> type="text" name="nm_lkp" class="form-control" id="nm_lkp" aria-describedby="emailHelp"></td>

            <td> <label style="text-transform:capitalize;" for="tmpt_lahir" class="form-label">tempat lahir</label></td>
            <td> <input value="<?= $data['tmpt_lahir'] ?>" <?php fungsiDisabled($p, 'readonly'); ?> type="text" name="tmpt_lahir" class="form-control" id="tmpt_lahir" aria-describedby="emailHelp"></td>

            <td><label style="text-transform:capitalize;" for="almt" class="form-label">alamat</label></td>
            <td><input value="<?= $data['almt'] ?>" <?php fungsiDisabled($p, 'readonly'); ?> type="text" name="almt" class="form-control" id="almt" aria-describedby="emailHelp"></td>
            <td>
                <label style="text-transform:capitalize;" for="exampleInputPassword1" class="form-label">kecamatan</label>
            </td>
            <td>
                <select class="form-select" <?php fungsiDisabled($p, 'disabled'); ?> aria-label="Default select example" name="kecamatan">
                    <option value="" diasabled selected>pilih kecamatan</option>
                    <option value="lubuklinggau barat 1" <?php if ($data['kecamatan'] == 'lubuklinggau barat 1') {
                                                                echo "selected";
                                                            }; ?>>lubuklinggau barat 1</option>
                    <option value="lubuklinggau barat 2" <?php if ($data['kecamatan'] == 'lubuklinggau barat 2') {
                                                                echo "selected";
                                                            }; ?>>lubuklinggau barat 2</option>
                    <option value="lubuklinggau timur 1" <?php if ($data['kecamatan'] == 'lubuklinggau timur 1') {
                                                                echo "selected";
                                                            }; ?>>lubuklinggau timur 1</option>
                    <option value="lubuklinggau timur 2" <?php if ($data['kecamatan'] == 'lubuklinggau timur 2') {
                                                                echo "selected";
                                                            }; ?>>lubuklinggau timur 2</option>
                    <option value="lubuklinggau utara 1" <?php if ($data['kecamatan'] == 'lubuklinggau utara 1') {
                                                                echo "selected";
                                                            }; ?>>lubuklinggau utara 1</option>
                    <option value="lubuklinggau utara 2" <?php if ($data['kecamatan'] == 'lubuklinggau utara 2') {
                                                                echo "selected";
                                                            }; ?>>lubuklinggau utara 2</option>
                    <option value="lubuklinggau selatan 1" <?php if ($data['kecamatan'] == 'lubuklinggau selatan 1') {
                                                                echo "selected";
                                                            }; ?>>lubuklinggau selatan 1</option>
                    <option value="lubuklinggau selatan 2" <?php if ($data['kecamatan'] == 'lubuklinggau selatan 2') {
                                                                echo "selected";
                                                            }; ?>>lubuklinggau selatan 2</option>
                </select>
            </td>
        </tr>
        <tr>
            <td style="padding-top:20px;"> <label style="text-transform:capitalize;" for="nm_pgl" class="form-label">nama panggilan</label></td>
            <td> <input value="<?= $data['nm_pgl'] ?>" <?php fungsiDisabled($p, 'readonly'); ?> type="text" name="nm_pgl" class="form-control" id="nm_pgl" aria-describedby="emailHelp"></td>
            <td> <label style="text-transform:capitalize;" for="tgl_lahir" class="form-label">tanggal lahir</label></td>
            <td> <input value="<?= $data['tgl_lahir'] ?>" <?php fungsiDisabled($p, 'readonly'); ?> type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" aria-describedby="emailHelp"></td>
            <td> <label style="text-transform:capitalize;" for="cr_fisik" class="form-label">ciri-ciri fisik</label></td>
            <td colspan="3"><input value="<?= $data['cr_fisik'] ?>" <?php fungsiDisabled($p, 'readonly'); ?> type="text" name="cr_fisik" class="form-control" id="cr_fisik" aria-describedby="emailHelp"></td>
        </tr>
        <tr>
            <td style="padding-top:20px;"> <label style="text-transform:capitalize;" for="exampleInputPassword1" class="form-label">jenis kelamin</label></td>
            <td>
                <select class="form-select" <?php fungsiDisabled($p, 'disabled'); ?> aria-label="Default select example" name="jk">
                    <option value="" diasabled selected>pilih jenis kelamin</option>
                    <option value="laki-laki" <?php if ($data['jk'] == 'laki-laki') {
                                                    echo "selected";
                                                }; ?>>laki-laki</option>
                    <option value="perempuan" <?php if ($data['jk'] == 'perempuan') {
                                                    echo "selected";
                                                }; ?>>perempuan</option>
                </select>
            </td>
            <td> <label style="text-transform:capitalize;" for="umur" class="form-label">umur</label></td>
            <td> <input value="<?= $data['umur'] ?>" <?php fungsiDisabled($p, 'readonly'); ?> type="number" name="umur" class="form-control" id="umur" aria-describedby="emailHelp"></td>
            <td> <label style="text-transform:capitalize;" for="wrn_rmbt" class="form-label">warna rambut</label></td>
            <td> <input value="<?= $data['wrn_rmbt'] ?>" <?php fungsiDisabled($p, 'readonly'); ?> type="text" name="wrn_rmbt" class="form-control" id="wrn_rmbt" aria-describedby="emailHelp"></td>
            <td><label style="text-transform:capitalize;" for="btk_rmbt" class="form-label">bentuk rambut</label></td>
            <td> <input value="<?= $data['btk_rmbt'] ?>" <?php fungsiDisabled($p, 'readonly'); ?> type="text" name="btk_rmbt" class="form-control" id="btk_rmbt" aria-describedby="emailHelp"></td>
        </tr>
    </table>
</div>