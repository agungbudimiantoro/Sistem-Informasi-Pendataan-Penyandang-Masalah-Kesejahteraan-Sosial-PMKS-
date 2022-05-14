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


if (isset($_POST['edit'])) {

  $id = $_POST['id'];

  // subjek
  $id_user = $_SESSION['id_user'];
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
  $trhir_ktm_klg1 = $_POST['trhir_ktm_klg1'];
  $sts_sklh = $_POST['sts_sklh'];
  $niat_ljt_sklh = $_POST['niat_ljt_sklh'];
  $als_pts_sklh = serialize(checkBox($_POST['als_pts_sklh']));




  // subjek 2

  $rwt_pnykt =     $_POST['rwt_pnykt'];
  $sts_tdk =     $_POST['sts_tdk'];
  $kpn_mjln =     $_POST['kpn_mjln'];
  $btk_kgt =     $_POST['btk_kgt'];
  $btk_kgt1 =     $_POST['btk_kgt1'];
  $als_mlk_kgt =     $_POST['als_mlk_kgt'];
  $niat_brht =     $_POST['niat_brht'];
  $cr_brht =     $_POST['cr_brht'];
  $dpt_kkrs_es =     $_POST['dpt_kkrs_es'];
  $plprn_es =     $_POST['plprn_es'];
  $sts_jns_pmks =     $_POST['sts_jns_pmks'];
  $als_mks_npz =     $_POST['als_mks_npz'];
  $sts_penertipan =     $_POST['sts_penertipan'];
  $sts_tndk =     $_POST['sts_tndk'];
  $tgl_pendataan =     $_POST['tgl_pendataan'];
  $jam =     $_POST['jam'];
  $dpt_kkrs_fm = $_POST['dpt_kkrs_fm'];
  $petugas = $_POST['petugas'];

  if ($btk_kgt1 != '') {
    $btk_kgt = $btk_kgt1;
  }
  if ($aks_tbh1 != '') {
    $aks_tbh = $aks_tbh1;
  }
  if ($cct_tbh1 != '') {
    $cct_tbh = $cct_tbh1;
  }
  if ($bks_lk1 != '') {
    $bks_lk = $bks_lk1;
  }

  if ($trhir_ktm_klg1 != '') {
    $trhir_ktm_klg = $trhir_ktm_klg1;
  }

  $pengobatan = serialize(checkBox($_POST['pengobatan']));
  $btk_tdk = serialize(checkBox($_POST['btk_tdk']));
  $btk_kkrs_fm = serialize(checkBox($_POST['btk_kkrs_fm']));
  $proses_tdk = serialize(checkBox($_POST['proses_tdk']));
  $org_mlk_kkrs = serialize(checkBox($_POST['org_mlk_kkrs']));
  $org_mlk_kkrs_es = serialize(checkBox($_POST['org_mlk_kkrs_es']));
  $btk_kkrs_es = serialize(checkBox($_POST['btk_kkrs_es']));
  $btk_proses = serialize(checkBox($_POST['btk_proses']));
  $nm_kms_npz = serialize(checkBox($_POST['nm_kms_npz']));
  $dpt_npz = serialize(checkBox($_POST['dpt_npz']));



  $query = ("UPDATE subjek SET 
  id_user='" . $id_user . "'
  ,nm_lkp='" . $nm_lkp . "'
  ,nm_pgl='" . $nm_pgl . "'
  ,jk='" . $jk . "'
  ,tmpt_lahir='" . $tmpt_lahir . "'
  ,tgl_lahir='" . $tgl_lahir . "'
  ,cr_fisik='" . $cr_fisik . "'
  ,umur='" . $umur . "'
  ,sts_tmp_tgl='" . $sts_tmp_tgl . "'
  ,akte='" . $akte . "'
  ,almt='" . $almt . "'
  ,kecamatan='" . $kecamatan . "'
  ,wrn_rmbt='" . $wrn_rmbt . "'
  ,btk_rmbt='" . $btk_rmbt . "'
  ,kmp_bcr='" . $kmp_bcr . "'
  ,pmpln='" . $pmpln . "'
  ,aks_tbh='" . $aks_tbh . "'
  ,bks_lk='" . $bks_lk . "'
  ,cct_tbh='" . $cct_tbh . "'
  ,nm_ayah='" . $nm_ayah . "'
  ,nm_pgl_ayah='" . $nm_pgl_ayah . "'
  ,nm_pgl_ibu='" . $nm_pgl_ibu . "'
  ,nm_ibu='" . $nm_ibu . "'
  ,sts_ayah='" . $sts_ayah . "'
  ,sts_ibu='" . $sts_ibu . "'
  ,pkj_ayah='" . $pkj_ayah . "'
  ,pkj_ibu='" . $pkj_ibu . "'
  ,trhir_ktm_klg='" . $trhir_ktm_klg . "'
  ,sts_sklh='" . $sts_sklh . "'
  ,niat_ljt_sklh='" . $niat_ljt_sklh . "'
  ,als_pts_sklh='" . $als_pts_sklh . "'
  WHERE id_subjek='" . $id . "'");


  if (mysqli_query($conn, $query)) {


    if ($_FILES['file']['tmp_name'] != '') {
      $temp = "../assets/img/subjek/";
      if (!file_exists($temp)) {
        mkdir($temp);
      }

      $file      = $_FILES['file']['tmp_name'];
      $ImageName       = $_FILES['file']['name'];
      $ImageType       = $_FILES['file']['type'];

      if (!empty($file)) {
        // mengacak angka untuk nama file
        // $acak = rand(00000000, 99999999);
        $acak = rand();
        $tgl  = date('Ymd_His');

        $ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
        $ImageExt       = str_replace('.', '', $ImageExt); // Extension
        $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
        // $NewImageName   = $tgl . '_' . $ImageName . '.' . $ImageExt;
        $foto_baru   = $ImageName . '_' . $acak . '.' . $ImageExt;
        $query = "SELECT * FROM subjek_kedua WHERE foto = '$filelama'";
        if (mysqli_query($conn, $query)) {
          if (file_exists("../assets/img/subjek/" . $file_lama)) {
            unlink("../assets/img/subjek/" . $file_lama);
          }
        }
        move_uploaded_file($_FILES["file"]["tmp_name"], $temp . $foto_baru);
        $query1 = ("UPDATE subjek_kedua SET 
  id_subjek='" . $id . "'
  ,rwt_pnykt='" . $rwt_pnykt . "'
  ,pengobatan='" . $pengobatan . "'
  ,sts_tdk='" . $sts_tdk . "'
  ,btk_tdk='" . $btk_tdk . "'
  ,proses_tdk='" . $proses_tdk . "'
  ,kpn_mjln='" . $kpn_mjln . "'
  ,btk_kgt='" . $btk_kgt . "'
  ,als_mlk_kgt='" . $als_mlk_kgt . "'
  ,niat_brht='" . $niat_brht . "'
  ,cr_brht='" . $cr_brht . "'
  ,dpt_kkrs_fm='" . $dpt_kkrs_fm . "'
  ,btk_kkrs_fm='" . $btk_kkrs_fm . "'
  ,org_mlk_kkrs='" . $org_mlk_kkrs . "'
  ,org_mlk_kkrs_es='" . $org_mlk_kkrs_es . "'
  ,dpt_kkrs_es='" . $dpt_kkrs_es . "'
  ,btk_kkrs_es='" . $btk_kkrs_es . "'
  ,dpt_kkrs_fm='" . $dpt_kkrs_fm . "'
  ,plprn_es='" . $plprn_es . "'
  ,btk_proses='" . $btk_proses . "'
  ,nm_kms_npz='" . $nm_kms_npz . "'
  ,dpt_npz='" . $dpt_npz . "'
  ,sts_jns_pmks='" . $sts_jns_pmks . "'
  ,als_mks_npz='" . $als_mks_npz . "'
  ,sts_penertipan='" . $sts_penertipan . "'
  ,sts_tndk='" . $sts_tndk . "'
  ,tgl_pendataan='" . $tgl_pendataan . "'
  ,jam='" . $jam . "'
  ,foto='" . $foto_baru . "'
  WHERE id_subjek_kedua='" . $id . "'");
      }
    } else {
      $query1 = ("UPDATE subjek_kedua SET 
  id_subjek='" . $id . "'
  ,rwt_pnykt='" . $rwt_pnykt . "'
  ,pengobatan='" . $pengobatan . "'
  ,sts_tdk='" . $sts_tdk . "'
  ,btk_tdk='" . $btk_tdk . "'
  ,proses_tdk='" . $proses_tdk . "'
  ,kpn_mjln='" . $kpn_mjln . "'
  ,btk_kgt='" . $btk_kgt . "'
  ,als_mlk_kgt='" . $als_mlk_kgt . "'
  ,niat_brht='" . $niat_brht . "'
  ,cr_brht='" . $cr_brht . "'
  ,dpt_kkrs_fm='" . $dpt_kkrs_fm . "'
  ,btk_kkrs_fm='" . $btk_kkrs_fm . "'
  ,org_mlk_kkrs='" . $org_mlk_kkrs . "'
  ,org_mlk_kkrs_es='" . $org_mlk_kkrs_es . "'
  ,dpt_kkrs_es='" . $dpt_kkrs_es . "'
  ,btk_kkrs_es='" . $btk_kkrs_es . "'
  ,dpt_kkrs_fm='" . $dpt_kkrs_fm . "'
  ,plprn_es='" . $plprn_es . "'
  ,btk_proses='" . $btk_proses . "'
  ,nm_kms_npz='" . $nm_kms_npz . "'
  ,dpt_npz='" . $dpt_npz . "'
  ,sts_jns_pmks='" . $sts_jns_pmks . "'
  ,als_mks_npz='" . $als_mks_npz . "'
  ,sts_penertipan='" . $sts_penertipan . "'
  ,sts_tndk='" . $sts_tndk . "'
  ,tgl_pendataan='" . $tgl_pendataan . "'
  ,jam='" . $jam . "'
  ,nm_ptgs='" . $petugas . "'
  WHERE id_subjek_kedua='" . $id . "'");
    }



    if (mysqli_query($conn, $query1)) {

      echo "
      <script language=javascript>
        alert('Data Baru Berhasil diubah');
        document.location.href='?p=subjek_data';
      </script>";
    } else {
      echo "
        <script language=javascript>
          alert('Data Gagal diubah');
          document.location.href='?p=subjek_data';
        </script>";
    }
  } else {
    echo "
      <script language=javascript>
        alert('Data Gagal diubah');
        document.location.href='?p=subjek_data';
      </script>";
  }
}
