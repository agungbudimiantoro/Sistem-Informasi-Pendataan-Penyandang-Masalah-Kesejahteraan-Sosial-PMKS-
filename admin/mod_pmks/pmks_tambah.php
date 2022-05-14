<h3 class="text-center" style="text-transform: capitalize;">data pmks</h3>
<br>

<br>
<div class="mr-3">
    <table class="table align-items-center mb-0 display" id="table_id">
        <thead>
            <tr>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">foto</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nm lkp</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nm pgl</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">jk</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">tgl lahir</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">almt</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nm_ayah</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nm_ibu</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">sts sklh</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">rwyt pnykit</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">sts_tndk</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">als mlk kgt</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">bntk kkrs_fm</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nm_ptgs</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $query = mysqli_query($conn, "SELECT subjek.*, subjek_kedua.* FROM subjek, subjek_kedua where subjek.id_subjek = subjek_kedua.id_subjek and subjek_kedua.sts_jns_pmks='belum ditetapkan'");
            while ($data = mysqli_fetch_assoc($query)) {
            ?><tr>
                    <td>
                        <?= $no++ ?>
                    </td>
                    <td>
                        <img src="../assets/img/subjek/<?= $data['foto'] ?>" alt="" width="70px" height="70px">
                    </td>
                    <td>
                        <?= $data['nm_lkp'] ?>
                    </td>
                    <td>
                        <?= $data['nm_pgl'] ?>
                    </td>
                    <td>
                        <?= $data['jk'] ?>
                    </td>
                    <td>
                        <?= $data['tgl_lahir'] ?>
                    </td>
                    <td>
                        <?= $data['almt'] ?>
                    </td>
                    <td>
                        <?= $data['nm_ayah'] ?>
                    </td>
                    <td>
                        <?= $data['nm_ibu'] ?>
                    </td>
                    <td>
                        <?= $data['sts_sklh'] ?>
                    </td>
                    <td>
                        <?= $data['rwt_pnykt'] ?>
                    </td>
                    <td>
                        <?= $data['sts_tndk'] ?>
                    </td>
                    <td>
                        <?= $data['als_mlk_kgt'] ?>
                    </td>
                    <td>
                        <?php
                        $btk_kkrs_fm = unserialize($data['btk_kkrs_fm']);
                        foreach ($btk_kkrs_fm as $row) {
                            if ($row == 'lainnya') {
                            } else {
                                echo $row;
                                echo ', ';
                            }
                        }
                        ?>
                    </td>
                    <td>
                        <?= $data['nm_ptgs'] ?>
                    </td>
                    <td>
                        <a href="?p=pmks_tambah_form&id=<?= $data['id_subjek'] ?>" class="btn btn-primary">Proses</a>
                    </td>
                </tr>
            <?php }; ?>
        </tbody>
    </table>
</div>