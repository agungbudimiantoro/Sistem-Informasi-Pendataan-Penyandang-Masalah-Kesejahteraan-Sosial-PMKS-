<div class="row border p-2">
    <table>
        <tr>
            <td colspan="8">
                <h5 style="text-transform:uppercase;">I. Identitas Subjek</h5>
            </td>
        </tr>
        <tr>
            <td style="padding-top:20px;"> <label style="text-transform:capitalize;" for="nm_lkp" class="form-label">nama lengkap</label></td>
            <td> <input type="text" name="nm_lkp" require class="form-control" id="nm_lkp" aria-describedby="emailHelp"></td>

            <td> <label style="text-transform:capitalize;" for="tmpt_lahir" class="form-label">tempat lahir</label></td>
            <td> <input type="text" name="tmpt_lahir" require class="form-control" id="tmpt_lahir" aria-describedby="emailHelp"></td>

            <td><label style="text-transform:capitalize;" for="almt" class="form-label">alamat</label></td>
            <td><input type="text" name="almt" require class="form-control" id="almt" aria-describedby="emailHelp"></td>
            <td>
                <label style="text-transform:capitalize;" for="exampleInputPassword1" class="form-label">kecamatan</label>
            </td>
            <td>
                <select class="form-select" aria-label="Default select example" name="kecamatan" require>
                    <option value="" diasabled selected>pilih kecamatan</option>
                    <option value="lubuklinggau barat 1">lubuklinggau barat 1</option>
                    <option value="lubuklinggau barat 2">lubuklinggau barat 2</option>
                    <option value="lubuklinggau timur 1">lubuklinggau timur 1</option>
                    <option value="lubuklinggau timur 2">lubuklinggau timur 2</option>
                    <option value="lubuklinggau utara 1">lubuklinggau utara 1</option>
                    <option value="lubuklinggau utara 2">lubuklinggau utara 2</option>
                    <option value="lubuklinggau selatan 1">lubuklinggau selatan 1</option>
                    <option value="lubuklinggau selatan 2">lubuklinggau selatan 2</option>
                </select>
            </td>
        </tr>
        <tr>
            <td style="padding-top:20px;"> <label style="text-transform:capitalize;" for="nm_pgl" class="form-label">nama panggilan</label></td>
            <td> <input type="text" require name="nm_pgl" class="form-control" id="nm_pgl" aria-describedby="emailHelp"></td>
            <td> <label style="text-transform:capitalize;" for="tgl_lahir" class="form-label">tanggal lahir</label></td>
            <td> <input type="date" require name="tgl_lahir" class="form-control" id="tgl_lahir" aria-describedby="emailHelp"></td>
            <td> <label style="text-transform:capitalize;" for="cr_fisik" class="form-label">ciri-ciri fisik</label></td>
            <td colspan="3"><input require type="text" name="cr_fisik" class="form-control" id="cr_fisik" aria-describedby="emailHelp"></td>
        </tr>
        <tr>
            <td style="padding-top:20px;"> <label style="text-transform:capitalize;" for="exampleInputPassword1" class="form-label">jenis kelamin</label></td>
            <td>
                <select class="form-select" aria-label="Default select example" name="jk" require>
                    <option value="" diasabled selected>pilih jenis kelamin</option>
                    <option value="laki-laki">laki-laki</option>
                    <option value="perempuan">perempuan</option>
                </select>
            </td>
            <td> <label style="text-transform:capitalize;" for="umur" class="form-label">umur</label></td>
            <td> <input type="number" require name="umur" class="form-control" id="umur" aria-describedby="emailHelp"></td>
            <td> <label style="text-transform:capitalize;" for="wrn_rmbt" class="form-label">warna rambut</label></td>
            <td> <input type="text" require name="wrn_rmbt" class="form-control" id="wrn_rmbt" aria-describedby="emailHelp"></td>
            <td><label style="text-transform:capitalize;" for="btk_rmbt" class="form-label">bentuk rambut</label></td>
            <td> <input type="text" require name="btk_rmbt" class="form-control" id="btk_rmbt" aria-describedby="emailHelp"></td>
        </tr>
    </table>
</div>