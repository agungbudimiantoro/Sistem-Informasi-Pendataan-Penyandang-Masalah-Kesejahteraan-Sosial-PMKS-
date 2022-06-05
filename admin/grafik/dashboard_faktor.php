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
    <?php
    $array_data = array('ekonomi', 'kurang kesadaran', 'kejiwaan', 'kurangnya pendidikan', 'eksploitasi', 'keterbatasan lapangan kerja');

    ?>
    <?php for ($i = 0; $i < count($array_data); $i++) : ?>
        <div class="col-md-3">
            <div class="card border-success mb-3">
                <div class="card-header"><?php echo $array_data[$i] ?></div>
                <div class="card-body text-success">
                    <?php
                    $query = mysqli_query($conn, "SELECT COUNT(id_dt_pmks) as total from dt_pmks where faktor='$array_data[$i]'");
                    $data = mysqli_fetch_assoc($query);
                    ?>
                    <h1 class="card-title"><?= $data['total']; ?></h2>
                </div>
            </div>
        </div>
    <?php endfor; ?>
    <?php
    $query = mysqli_query($conn, "SELECT COUNT(id_dt_pmks) as total, faktor from dt_pmks group by faktor");
    while ($data = mysqli_fetch_assoc($query)) :
    ?>
        <?php
        $datafaktor = strtolower($data['faktor']);
        if (!in_array($datafaktor, $array_data)) :  ?>
            <div class="col-md-3">
                <div class="card border-success mb-3">
                    <div class="card-header"><?php echo $datafaktor ?></div>
                    <div class="card-body text-success">
                        <?php
                        $query = mysqli_query($conn, "SELECT COUNT(id_dt_pmks) as total from dt_pmks where faktor='$datafaktor'");
                        $data = mysqli_fetch_assoc($query);
                        ?>
                        <h1 class="card-title"><?= $data['total']; ?></h2>
                    </div>
                </div>
            </div>
        <?php endif ?>
    <?php endwhile ?>
    <!-- <div class="col-md-6">
        <div class="card border-danger mb-3">
            <canvas id="barChart" style="max-height: 500px; max-width: 100%;"></canvas>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card border-danger mb-3">
            <canvas id="barChart1" style="max-height: 500px; max-width: 100%;"></canvas>
        </div>
    </div> -->

</div>