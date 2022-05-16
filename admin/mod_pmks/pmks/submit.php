<div class="row border">
    <div class="col-md-4 border">
        <table>
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
                    <input readonly type="file" name="file" class="form-control" id="foto" aria-describedby="emailHelp">
                </td>
                </td>
            </tr>

        </table>
    </div>
    <div class="col-md-8">
        <table>
            <tr>
                <td style="padding-top:20px;" align="right"> <label style="text-transform:capitalize;" for="sts_penertipan" class="form-label">status penertipan</label></td>
                <td> <input type="text" value="<?= $data['sts_penertipan'] ?>" disabled name="sts_penertipan" class="form-control" id="sts_penertipan" aria-describedby="emailHelp" required></td>
                <td style="padding-top:20px;" align="right"> <label style="text-transform:capitalize;" for="sts_tndk" class="form-label">status tindakan</label></td>
                <td>
                    <select class="form-select" aria-label="Default select example" disabled name="sts_tndk" required>
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
                <td> <input type="text" value="<?= $data['sts_jns_pmks'] ?>" disabled name="sts_jns_pmks" class="form-control" id="sts_jns_pmks" aria-describedby="emailHelp" required></td>
                <td style="padding-top:20px;" align="right"> <label style="text-transform:capitalize;" for="petugas" class="form-label">petugas</label></td>
                <td> <input type="text" value="<?= $nm_user ?>" disabled name="petugas" class="form-control" id="petugas" aria-describedby="emailHelp" required></td>

            </tr>
            <tr>

                <td style="padding-top:20px;" align="right"> <label style="text-transform:capitalize;" for="faktor" class="form-label">faktor</label></td>
                <td> <input type="text" value="<?php if (isset($data['faktor'])) {
                                                    echo $data['faktor'];
                                                } ?>" name="faktor" class="form-control" id="faktor" aria-describedby="emailHelp" required></td>
                <td style="padding-top:20px;" align="right"> <label style="text-transform:capitalize;" for="id_jns_pmks" class="form-label">tanggal</label></td>
                <td> <input type="date" name="tgl" value="<?= date("Y-m-d") ?>" readonly class="form-control" id="tgl" aria-describedby="emailHelp" required></td>
            </tr>
            <tr>
                <td style="padding-top:20px;" align="right"> <label style="text-transform:capitalize;" for="id_jns_pmks" class="form-label">jenis pmks</label></td>
                <td>
                    <select class="form-select" aria-label="Default select example" name="id_jns_pmks" required>
                        <option value="" diasabled selected>pilih jenis pmks</option>
                        <?php
                        if (isset($data['id_jns_pmks'])) {
                            $id_jns_pmks = $data['id_jns_pmks'];
                        } else {
                            $id_jns_pmks = '';
                        }
                        $query_jenis_pmks = mysqli_query($conn, 'SELECT * FROM jns_pmks');
                        while ($data_jenis_pmks = mysqli_fetch_assoc($query_jenis_pmks)) {
                        ?>
                            <option value="<?= $data_jenis_pmks['id_jns_pmks'] ?>" <?php
                                                                                    if ($id_jns_pmks == $data_jenis_pmks['id_jns_pmks']) {
                                                                                        echo " selected";
                                                                                    };
                                                                                    ?>><?= $data_jenis_pmks['jns_pmks'] ?></option>
                        <?php } ?>
                    </select>
                </td>
                <?php if (isset($_GET['edit'])) : ?>
                    <td colspan="4" align="right"> <button type="submit" name="edit" class="btn btn-primary">edit</button>
                    <?php else : ?>
                    <td colspan="4" align="right"> <button type="submit" name="add" class="btn btn-primary">simpan</button>
                    <?php endif; ?>
                    <button onclick="history.back()" class="btn btn-success">Kembali</button>
                    </td>
            </tr>
        </table>
    </div>