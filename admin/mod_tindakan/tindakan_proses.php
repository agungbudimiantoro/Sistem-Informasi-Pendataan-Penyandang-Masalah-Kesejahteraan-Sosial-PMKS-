<?php include '../../koneksi.php';

?>

<?php
// tambah data
if (isset($_POST['add'])) {


  $id_jns_pmks       = htmlspecialchars($_POST['id_jns_pmks']);
  $tgl       = htmlspecialchars($_POST['tgl']);
  $id_subjek       = htmlspecialchars($_POST['id_subjek']);
  $id_dt_pmks       = htmlspecialchars($_POST['id_dt_pmks']);
  $nik       = htmlspecialchars($_POST['nik']);
  $tgl       = htmlspecialchars($_POST['tgl']);
  $pnpt_tgl       = htmlspecialchars($_POST['pnpt_tgl']);
  $ket       = htmlspecialchars($_POST['ket']);
  $tindakan       = htmlspecialchars($_POST['tindakan']);


  $query = ("INSERT into tindakan values('','$id_user','$id_jns_pmks','$id_subjek','$id_subjek','$id_dt_pmks','$nik','$pnpt_tgl','$ket','$tindakan','$tgl')");
  if (mysqli_query($conn, $query)) {

    echo "
    <script language=javascript>
      alert('Data Baru Berhasil Ditambah');
      document.location.href='?p=tindakan_data';
    </script>";
  } else {
    echo "
      <script language=javascript>
        alert('Data Gagal Ditambah');
        document.location.href='?p=tindakan_data';
      </script>";
  }
}
?>

<?php
// edit data
if (isset($_POST['edit'])) {

  $id       = htmlspecialchars($_POST['id']);
  $id_jns_pmks       = htmlspecialchars($_POST['id_jns_pmks']);
  $tgl       = htmlspecialchars($_POST['tgl']);
  $id_subjek       = htmlspecialchars($_POST['id_subjek']);
  $id_dt_pmks       = htmlspecialchars($_POST['id_dt_pmks']);
  $nik       = htmlspecialchars($_POST['nik']);
  $tgl       = htmlspecialchars($_POST['tgl']);
  $pnpt_tgl       = htmlspecialchars($_POST['pnpt_tgl']);
  $ket       = htmlspecialchars($_POST['ket']);
  $tindakan       = htmlspecialchars($_POST['tindakan']);

  $query = ("UPDATE tindakan SET id_jns_pmks='$id_jns_pmks', 
  nik='$nik', 
  pnpt_tgl='$pnpt_tgl', 
  ket='$ket', 
  tindakan='$tindakan', 
  tgl='$tgl'
  WHERE id_tindakan='" . $id . "'");

  if (mysqli_query($conn, $query)) {

    echo "
    <script language=javascript>
      alert('Data Berhasil Dirubah');
      document.location.href='?p=tindakan_data';
    </script>";
  } else {
    echo "
      <script language=javascript>
        alert('Data Gagal Dirubah');
        document.location.href='?p=tindakan_data';
      </script>";
  }
}
?>





<?php
//if (isset($_POST['del'])) {
// hapus data
$id    = htmlspecialchars($_GET['id']);
$query = ("DELETE from tindakan where id_tindakan='" . $id . "'");
if (mysqli_query($conn, $query)) {
  echo "
        <script language=javascript>
          alert('Data Berhasil Dihapus');
          document.location.href='?p=tindakan_data';
        </script>";
} else {
  echo "
        <script language=javascript>
          alert('Data Gagal Dihapus');
          document.location.href='?p=tindakan_data';
        </script>";
  //}
} ?>
