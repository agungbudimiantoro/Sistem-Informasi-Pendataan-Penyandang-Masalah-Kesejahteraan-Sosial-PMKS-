<?php
// if (isset($_POST['laporan'])) {
//     $laporan = $_POST['laporan'];
//     echo "
//     <script language=javascript>
//       document.location.href='?p=user_data';
//     </script>";
// }
?>
<div class="row">
    <div class="col-md-3">
        <div class="card border-success mb-3">
            <div class="card-header">Total User</div>
            <div class="card-body text-success">
                <?php
                $query = mysqli_query($conn, "SELECT COUNT(id_user) as total from user");
                $data = mysqli_fetch_assoc($query);
                ?>
                <h1 class="card-title"><?= $data['total']; ?></h2>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card border-warning mb-3">
            <?php
            $query = mysqli_query($conn, "SELECT COUNT(id_jns_pmks) as total from jns_pmks");
            $data = mysqli_fetch_assoc($query);
            ?>
            <div class="card-header">Total jenis pmks</div>
            <div class="card-body text-warning">
                <h1 class="card-title"><?= $data['total']; ?></h2>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card border-primary mb-3">
            <div class="card-header">Total subjek</div>
            <?php
            $query = mysqli_query($conn, "SELECT COUNT(id_subjek) as total from subjek");
            $data = mysqli_fetch_assoc($query);
            ?>
            <div class="card-body text-primary">
                <h1 class="card-title"><?= $data['total']; ?></h2>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card border-danger mb-3">
            <div class="card-header">Total tindakan</div>
            <div class="card-body text-danger">
                <?php
                $query = mysqli_query($conn, "SELECT COUNT(id_tindakan) as total from tindakan");
                $data = mysqli_fetch_assoc($query);
                ?>
                <h1 class="card-title"><?= $data['total']; ?></h2>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card border-danger mb-3">
            <canvas id="barChart" style="max-height: 500px; max-width: 100%;"></canvas>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card border-danger mb-3">
            <canvas id="barChart1" style="max-height: 500px; max-width: 100%;"></canvas>
        </div>
    </div>

</div>