<?php
$id = $_GET['id'];
?>
<h3 class="text-center text-capitalize mb-3">edit password User</h3>
<form action="?p=user_proses" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <input type="text" name="id" value="<?= $id ?>" hidden class="form-control" id="nama_user" aria-describedby="emailHelp" required>
                <label style="text-transform:capitalize;" for="password" class="form-label">password</label>
                <input type="password" name="pass" class="form-control" id="password" aria-describedby="emailHelp" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label style="text-transform:capitalize;" for="password" class="form-label">konfirmasi password</label>
                <input type="password" name="pass1" class="form-control" id="password1" aria-describedby="emailHelp" required>
            </div>
        </div>
    </div>
    <button type="submit" name="edit_pass" class="btn btn-primary">edit password</button>
    <a href="?p=user_data" class="btn btn-success">kembali</a>
    </div>

</form>


<script type="text/javascript">
    window.onload = function() {
        document.getElementById("password").onchange = validatePassword;
        document.getElementById("password1").onchange = validatePassword;
    }

    function validatePassword() {
        var pass1 = document.getElementById("password").value;
        var pass2 = document.getElementById("password1").value;
        if (pass1 != pass2)
            document.getElementById("password1").setCustomValidity("Passwords Tidak Sama, Coba Lagi");
        else
            document.getElementById("password1").setCustomValidity('');
    }
</script>