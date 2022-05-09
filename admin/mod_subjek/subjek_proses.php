<?php
print("<pre>" . print_r($_POST, true) . "</pre>");

function checkBox($nilai)
{
    $jumlah = count($nilai);
    $alasan = array();
    for ($i = 0; $i < $jumlah; $i++) {
        $alasan[] = $nilai[$i];
    }
    return $alasan;
}






if (isset($_POST['add'])) {
    $nm_lkp = $_POST['nm_lkp'];
    $tmpt_lahir = $_POST['tmpt_lahir'];
    $almt = $_POST['almt'];
    $kecamatan = $_POST['kecamatan'];
    $nm_pgl = $_POST['nm_pgl'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $cr_fisik = $_POST['cr_fisik'];
    $jk = $_POST['jk'];
    $umur = $_POST['umur'];
    $wrn_rmbt = $_POST['wrn_rmbt'];
    $btk_rmbt = $_POST['btk_rmbt'];
    $sts_tmp_tgl =    $_POST['sts_tmp_tgl'];
    $akte =     $_POST['akte'];
    $pmpln =     $_POST['pmpln'];
    $kmp_bcr =     $_POST['kmp_bcr'];
    $aks_tbh =     $_POST['aks_tbh'];
    $aks_tbh1 =     $_POST['aks_tbh1'];
    $bks_lk =     $_POST['bks_lk'];
    $bks_lk1 =     $_POST['bks_lk1'];
    $cct_tbh =     $_POST['cct_tbh'];
    $cct_tbh1 =     $_POST['cct_tbh1'];
    $nm_ayah = $_POST['nm_ayah'];
    $nm_pgl_ayah = $_POST['nm_pgl_ayah'];
    $pkj_ayah = $_POST['pkj_ayah'];
    $nm_ibu = $_POST['nm_ibu'];
    $nm_pgl_ibu = $_POST['nm_pgl_ibu'];
    $pkj_ibu = $_POST['pkj_ibu'];
    $sts_ayah = $_POST['sts_ayah'];
    $sts_ibu = $_POST['sts_ibu'];
    $trhir_ktm_klg = $_POST['trhir_ktm_klg'];
    $sts_sklh = $_POST['sts_sklh'];
    $niat_ljt_sklh = $_POST['niat_ljt_sklh'];

    $als_pts_sklh = serialize(checkBox($_POST['als_pts_sklh']));

    if ($aks_tbh1 != '') {
        $aks_tbh = $aks_tbh1;
    }
    if ($cct_tbh1 != '') {
        $cct_tbh = $cct_tbh1;
    }
    if ($bks_lk1 != '') {
        $bks_lk = $bks_lk1;
    }



    $query = ("INSERT into subjek(
        id_subjek, id_user, nm_lkp, nm_pgl, 
        jk, tmpt_lahir, tgl_lahir, cr_fisik, umur, sts_tmp_tgl, 
        akte, almt, kecamatan, wrn_rmbt, btk_rmbt, 
        kmp_bcr, pmpln, aks_tbh, bks_lk, cct_tbh,
        nm_ayah,nm_pgl_ayah,nm_pgl_ibu,nm_ibu,
          sts_ayah,sts_ibu,pkj_ayah,pkj_ibu,trhir_ktm_klg,sts_sklh,niat_ljt_sklh,als_pts_sklh
      ) 
      values 
        (
          '', '1', '$nm_lkp', '$nm_pgl', '$jk', 
          '$tmpt_lahir', '$tgl_lahir','$cr_fisik', '$umur', 
          '$sts_tmp_tgl', '$akte', '$almt', 
          '$kecamatan', '$wrn_rmbt', '$btk_rmbt', 
          '$kmp_bcr', '$pmpln', '$aks_tbh', 
          '$bks_lk', '$cct_tbh',
          '$nm_ayah','$nm_pgl_ayah','$nm_pgl_ibu','$nm_ibu',
          '$sts_ayah','$sts_ibu','$pkj_ayah','$pkj_ibu','$trhir_ktm_klg','$sts_sklh','$niat_ljt_sklh','$als_pts_sklh'
        )");

    if (mysqli_query($conn, $query)) {

        echo "
    <script language=javascript>
      alert('Data Baru Berhasil Ditambah');
      document.location.href='?p=subjek_data';
    </script>";
    } else {
        echo "
      <script language=javascript>
        alert('Data Gagal Ditambah');
        document.location.href='?p=subjek_data';
      </script>";
    }
}
