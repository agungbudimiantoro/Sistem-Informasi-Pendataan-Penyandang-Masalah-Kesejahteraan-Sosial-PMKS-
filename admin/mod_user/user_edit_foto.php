<?php
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM user where id_user='$id'");
$data = mysqli_fetch_assoc($query);
?>
<h3 class="text-center text-capitalize mb-3">edit foto User</h3>
<form action="?p=user_proses" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <input type="text" name="id" value="<?= $id ?>" hidden class="form-control" id="nama_user" aria-describedby="emailHelp" required>
                <p style="text-transform:capitalize;" for="foto" class="form-label">foto lama</p>
                <img class="border" src="../assets/img/avatar/<?= $data['foto'] ?>" alt="" width="300px" height="300px">
            </div>
            <div class="mb-3">
                <label style="text-transform:capitalize;" for="foto" class="form-label">foto baru</label>
                <small class="form-text text-muted">Extensi File Hanya .DOC, .DOCX, </small>
                <input type="text" name="filelama" value="<?= $data['foto'] ?>" hidden class="form-control" id="nama_user" aria-describedby="emailHelp" required>
                <input type="file" name="file" class="form-control" onchange="validate(this);" id="foto" aria-describedby="emailHelp" required>
            </div>
        </div>
    </div>
    <button type="submit" name="edit_foto" class="btn btn-primary">edit foto</button>
    <a href="?p=user_data" class="btn btn-success">kembali</a>
    </div>

</form>

<script>
    var _validFileExtensions = [".jpg", ".png"];

    function validate(file) {
        if (file.type == "file") {
            var sFileName = file.value;
            if (sFileName.length > 0) {
                var blnValid = false;
                for (var j = 0; j < _validFileExtensions.length; j++) {
                    var sCurExtension = _validFileExtensions[j];
                    if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                        blnValid = true;
                        break;
                    }
                }

                if (!blnValid) {
                    alert("Maaf, Hanya File yang Berextensi : " + _validFileExtensions.join(", "));
                    file.value = "";
                    return false;
                }
            }
        }
        return true;
    }
</script>