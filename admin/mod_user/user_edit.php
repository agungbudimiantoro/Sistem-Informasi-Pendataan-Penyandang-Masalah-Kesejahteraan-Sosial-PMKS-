<?php
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM user where id_user='$id'");
$data = mysqli_fetch_assoc($query);
?>
<h3 class="text-center text-capitalize mb-3">edit Data User</h3>
<form action="?p=user_proses" method="POST">
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label style="text-transform:capitalize;" for="nama_user" class="form-label">nama user</label>
                <input type="text" name="id" value="<?= $id ?>" hidden class="form-control" id="nama_user" aria-describedby="emailHelp" required>
                <input type="text" name="nm_user" value="<?= $data['nm_user'] ?>" class="form-control" id="nama_user" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label style="text-transform:capitalize;" for="tgl_lahir" class="form-label">tanggal lahir</label>
                <input type="date" name="tgl_lahir" value="<?= $data['tgl_lahir'] ?>" class="form-control" id="tgl_lahir" aria-describedby="emailHelp" required>
            </div>

            <div class="mb-3">
                <label style="text-transform:capitalize;" for="exampleInputPassword1" class="form-label">jenis kelamin</label>
                <select class="form-select" aria-label="Default select example" name="jk" required>
                    <option value="" diasabled selected>pilih jenis kelamin</option>
                    <option value="laki-laki" <?php if ($data['jk'] == 'laki-laki') {
                                                    echo "selected";
                                                }; ?>>laki-laki</option>
                    <option value="perempuan" <?php if ($data['jk'] == 'perempuan') {
                                                    echo "selected";
                                                }; ?>>perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label style="text-transform:capitalize;" for="tlpon" class="form-label">no telepon</label>
                <input type="text" name="tlpon" value="<?= $data['tlpon'] ?>" class="form-control" id="tlpon" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label style="text-transform:capitalize;" for="alamat" class="form-label">alamat</label>
                <input type="text" name="almt" value="<?= $data['almt'] ?>" class="form-control" id="almt" aria-describedby="emailHelp" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label style="text-transform:capitalize;" for="exampleInputPassword1" class="form-label">jabatan</label>
                <select class="form-select" aria-label="Default select example" name="jbtn" required>
                    <option value="" diasabled selected>pilih jabatan</option>
                    <option value="kepala dinas" <?php if ($data['jbtn'] == 'kepala dinas') {
                                                        echo "selected";
                                                    }; ?>>Kepala dinas</option>
                    <option value="kepala bidang rehabilitas sosial" <?php if ($data['jbtn'] == 'kepala bidang rehabilitas sosial') {
                                                                            echo "selected";
                                                                        }; ?>>Kepala bidang rehabilitas sosial</option>
                    <option value="kasi subbid resos anak dan lanjut usia" <?php if ($data['jbtn'] == 'kasi subbid resos anak dan lanjut usia') {
                                                                                echo "selected";
                                                                            }; ?>>Kasi subbid resos anak dan lanjut usia</option>
                    <option value="kasi subbid resos penyandang disabilitas" <?php if ($data['jbtn'] == 'kasi subbid resos penyandang disabilitas') {
                                                                                    echo "selected";
                                                                                }; ?>>Kasi subbid resos penyandang disabilitas</option>
                    <option value="kasi subbid resos tuna sosial dan perdagangan orang" <?php if ($data['jbtn'] == 'kasi subbid resos tuna sosial dan perdagangan orang') {
                                                                                            echo "selected";
                                                                                        }; ?>>Kasi subbid resos tuna sosial dan perdagangan orang</option>
                    <option value="petugas" <?php if ($data['jbtn'] == 'petugas') {
                                                echo "selected";
                                            }; ?>>petugas</option>
                </select>
            </div>
            <div class="mb-3">
                <label style="text-transform:capitalize;" for="exampleInputPassword1" class="form-label">status</label>
                <select class="form-select" aria-label="Default select example" name="sts" required>
                    <option value="" diasabled selected>pilih status</option>
                    <option value="aktif" <?php if ($data['sts'] == 'aktif') {
                                                echo "selected";
                                            }; ?>>aktif</option>
                    <option value="tidak aktif" <?php if ($data['sts'] == 'tidak aktif') {
                                                    echo "selected";
                                                }; ?>>tidak aktif</option>
                </select>
            </div>
            <div class="mb-3">
                <label style="text-transform:capitalize;" for="username" class="form-label">username</label>
                <input type="text" value="<?= $data['username'] ?>" name="username" class="form-control" id="username" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Level</label>
                <select class="form-select" aria-label="Default select example" name="level" required>

                    <option value="admin" <?php if ($data['level'] == 'admin') {
                                                echo "selected";
                                            }; ?>>Admin</option>
                    <option value="pimpinan" <?php if ($data['level'] == 'pimpinan') {
                                                    echo "selected";
                                                }; ?>>Pimpinan</option>
                </select>
            </div>
        </div>
    </div>
    <button type="submit" name="edit" class="btn btn-primary">Ubah</button>
    <a href="?p=user_data" class="btn btn-success">kembali</a>
</form>
</div>
</div>