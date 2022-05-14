<?php
$p             = empty($_GET['p']) ? "" : $_GET['p'];
if ($p == "") {
    $nav     = "Dashboard";
    $judul     = "Dashboard";
    $ambil     = "dashboard.php";
} elseif ($p == "user_data") {
    //user 
    $nav     = "User";
    $judul     = "User data";
    $ambil     = "mod_user/$p.php";
} elseif ($p == "user_tambah") {
    $nav     = "User";
    $judul     = "User tambah";
    $ambil     = "mod_user/$p.php";
} elseif ($p == "user_edit") {
    $nav     = "User";
    $judul     = "User edit";
    $ambil     = "mod_user/$p.php";
} elseif ($p == "user_proses") {
    $nav     = "User";
    $judul     = "User proses";
    $ambil     = "mod_user/$p.php";
} elseif ($p == "user_edit_foto") {
    $nav     = "User";
    $judul     = "User edit foto";
    $ambil     = "mod_user/$p.php";
} elseif ($p == "user_edit_pass") {
    $nav     = "User";
    $judul     = "User ganti password";
    $ambil     = "mod_user/$p.php";
} elseif ($p == "jenis_data") {
    //jenis 
    $nav     = "jenis";
    $judul     = "jenis data";
    $ambil     = "mod_jenis/$p.php";
} elseif ($p == "jenis_tambah") {
    $nav     = "jenis";
    $judul     = "jenis tambah";
    $ambil     = "mod_jenis/$p.php";
} elseif ($p == "jenis_edit") {
    $nav     = "jenis";
    $judul     = "jenis edit";
    $ambil     = "mod_jenis/$p.php";
} elseif ($p == "jenis_proses") {
    $nav     = "jenis";
    $judul     = "jenis proses";
    $ambil     = "mod_jenis/$p.php";
} elseif ($p == "subjek_data") {
    //subjek 
    $nav     = "subjek";
    $judul     = "subjek data";
    $ambil     = "mod_subjek/$p.php";
} elseif ($p == "subjek_tambah") {
    $nav     = "subjek";
    $judul     = "subjek tambah";
    $ambil     = "mod_subjek/$p.php";
} elseif ($p == "subjek_edit") {
    $nav     = "subjek";
    $judul     = "subjek edit";
    $ambil     = "mod_subjek/$p.php";
} elseif ($p == "subjek_views") {
    $nav     = "subjek";
    $judul     = "subjek views";
    $ambil     = "mod_subjek/$p.php";
} elseif ($p == "subjek_proses") {
    $nav     = "subjek";
    $judul     = "subjek proses";
    $ambil     = "mod_subjek/$p.php";
} elseif ($p == "subjek_proses_tambah") {
    $nav     = "subjek";
    $judul     = "subjek proses";
    $ambil     = "mod_subjek/$p.php";
} elseif ($p == "subjek_proses_edit") {
    $nav     = "subjek";
    $judul     = "subjek proses";
    $ambil     = "mod_subjek/$p.php";
} elseif ($p == "subjek_proses_hapus") {
    $nav     = "subjek";
    $judul     = "subjek proses";
    $ambil     = "mod_subjek/$p.php";
} elseif ($p == "pmks_data") {
    //pmks 
    $nav     = "pmks";
    $judul     = "pmks data";
    $ambil     = "mod_pmks/$p.php";
} elseif ($p == "pmks_tambah") {
    $nav     = "pmks";
    $judul     = "pmks tambah";
    $ambil     = "mod_pmks/$p.php";
} elseif ($p == "pmks_tambah_form") {
    $nav     = "pmks";
    $judul     = "pmks tambah";
    $ambil     = "mod_pmks/$p.php";
} elseif ($p == "pmks_edit") {
    $nav     = "pmks";
    $judul     = "pmks edit";
    $ambil     = "mod_pmks/$p.php";
} elseif ($p == "pmks_proses") {
    $nav     = "pmks";
    $judul     = "pmks proses";
    $ambil     = "mod_pmks/$p.php";
} else {
    $nav     = "Dashboard";
    $judul     = "dashboard";
    $ambil     = "dashboard.php";
}
