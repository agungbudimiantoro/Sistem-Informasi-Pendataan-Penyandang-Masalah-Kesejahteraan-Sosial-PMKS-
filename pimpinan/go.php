<?php
$p             = empty($_GET['p']) ? "" : $_GET['p'];
if ($p == "") {
    $nav     = "Dashboard";
    $judul     = "Dashboard";
    $ambil     = "dashboard.php";
} elseif ($p == "laporan") {
    //laporan 
    $nav     = "laporan";
    $judul     = "laporan data";
    $ambil     = "laporan/$p.php";
} else {
    $nav     = "Dashboard";
    $judul     = "dashboard";
    $ambil     = "dashboard.php";
}
