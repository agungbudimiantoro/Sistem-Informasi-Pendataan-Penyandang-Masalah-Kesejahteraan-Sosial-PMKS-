<?php
if (isset($_POST['tahun'])) {
    $tahun = $_POST['tahun'];
} else {
    $tahun = date('Y');
}
?>
<script>
    var dataSets = [
        <?php
        $query_faktor = mysqli_query($conn, "SELECT * from dt_pmks group by faktor");
        while ($data_faktor = mysqli_fetch_assoc($query_faktor)) :
            $faktor = $data_faktor['faktor'];
        ?> {
                label: '<?= $faktor ?>',
                backgroundColor: 'rgba(214, 48, 49,1.0)',
                borderColor: 'rgba(0,0,0,0.8)',
                pointRadius: false,
                pointColor: '#000',
                pointStrokeColor: 'rgba(0,0,0,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(0,0,0,1)',
                data: [<?php
                        for ($i = 1; $i <= 12; $i++) {
                            $query_bulan = mysqli_query($conn, "SELECT COUNT(dt_pmks.id_dt_pmks) as jumlah FROM dt_pmks, subjek WHERE
                    subjek.id_subjek = dt_pmks.id_subjek and dt_pmks.faktor = '$faktor' and month(tgl) = $i and YEAR(tgl) = $tahun");
                            $pen_line = mysqli_fetch_assoc($query_bulan);
                            if ($pen_line == null) {
                                echo 0;
                            } else {
                                echo $pen_line['jumlah'];
                            }
                            echo ',';
                        } ?>],
            },
        <?php endwhile; ?>
    ];


    var data = {
        labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
        datasets: dataSets
    }

    //-------------
    //- BAR CHART -
    //-------------
    var barChart = $('#grafikPmks');
    var barChartData = jQuery.extend(true, {}, data)

    var barChartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        datasetFill: false,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
    }

    var barChart = new Chart(barChart, {
        type: 'bar',
        data: barChartData,
        options: barChartOptions
    })
</script>