<script>
    var data = {
        datasets: [{
            data: [<?php
                    $query_data = mysqli_query($conn, "SELECT COUNT(id_tindakan) as total from tindakan");
                    $data_data = mysqli_fetch_assoc($query_data);
                    echo $data_data['total'];
                    echo ',';
                    $query_data2 = mysqli_query($conn, "SELECT COUNT(id_jns_pmks) as total from jns_pmks");
                    $data_data2 = mysqli_fetch_assoc($query_data2);
                    echo $data_data2['total'];
                    echo ',';
                    $query_data3 = mysqli_query($conn, "SELECT COUNT(id_subjek) as total from subjek");
                    $data_data3 = mysqli_fetch_assoc($query_data3);
                    echo $data_data3['total'];
                    ?>],
            backgroundColor: ['rgba(190, 55, 55,1.0)', 'rgba(22,21, 122,1.0)', 'rgba(242,221, 122,1.0)']
        }],
        labels: [
            'Tindakan',
            'PMKS',
            'Subjek',
        ],

    };

    //-------------
    //- BAR CHART -
    //-------------
    var barChart = $('#barChart');
    var barChartData = jQuery.extend(true, {}, data)

    var barChartOptions = {}

    var barChart = new Chart(barChart, {
        type: 'pie',
        data: barChartData,
        options: barChartOptions
    })
</script>


<script>
    var data = {
        datasets: [{
            data: [<?php
                    $query_data = mysqli_query($conn, "SELECT COUNT(IF(jk='laki-laki',1, NULL)) as total from user");
                    $data_data = mysqli_fetch_assoc($query_data);
                    echo $data_data['total'];
                    echo ',';
                    $query_data2 = mysqli_query($conn, "SELECT COUNT(IF(jk='perempuan',1, NULL)) as total from user");
                    $data_data2 = mysqli_fetch_assoc($query_data2);
                    echo $data_data2['total'];
                    ?>],
            backgroundColor: ['rgba(190, 55, 55,1.0)', 'rgba(22,21, 122,1.0)', 'rgba(242,221, 122,1.0)']
        }],
        labels: [
            'Laki-laki',
            'Perempuan',
        ],

    };

    //-------------
    //- BAR CHART -
    //-------------
    var barChart = $('#barChart1');
    var barChartData = jQuery.extend(true, {}, data)

    var barChartOptions = {}

    var barChart = new Chart(barChart, {
        type: 'pie',
        data: barChartData,
        options: barChartOptions
    })
</script>

<?php
