<?php include '../../koneksi.php';

?>

<?php
// tambah data
if (isset($_POST['add'])) {


  $id_jns_pmks       = htmlspecialchars($_POST['id_jns_pmks']);
  $faktor       = htmlspecialchars($_POST['faktor']);
  $tgl       = htmlspecialchars($_POST['tgl']);
  $id_subjek       = htmlspecialchars($_POST['id_subjek']);


  $query = ("INSERT into dt_pmks values('','$id_user','$id_jns_pmks','$id_subjek','$id_subjek','$faktor','$tgl')");
  if (mysqli_query($conn, $query)) {

    echo "
    <script language=javascript>
      alert('Data Baru Berhasil Ditambah');
      document.location.href='?p=pmks_data';
    </script>";
  } else {
    echo "
      <script language=javascript>
        alert('Data Gagal Ditambah');
        document.location.href='?p=pmks_data';
      </script>";
  }
}
?>

<?php
// edit data
if (isset($_POST['edit'])) {

  $id       = htmlspecialchars($_POST['id']);
  $jns_pmks       = htmlspecialchars($_POST['jns_pmks']);

  $query = ("UPDATE jns_pmks SET jns_pmks='" . $jns_pmks . "' WHERE id_jns_pmks='" . $id . "'");

  if (mysqli_query($conn, $query)) {

    echo "
    <script language=javascript>
      alert('Data Berhasil Dirubah');
      document.location.href='?p=pmks_data';
    </script>";
  } else {
    echo "
      <script language=javascript>
        alert('Data Gagal Dirubah');
        document.location.href='?p=pmks_data';
      </script>";
  }
}
?>





<?php
//if (isset($_POST['del'])) {
// hapus data
$id    = htmlspecialchars($_GET['id']);
$query = ("DELETE from jns_pmks where id_jns_pmks='" . $id . "'");
if (mysqli_query($conn, $query)) {
  echo "
        <script language=javascript>
          alert('Data Berhasil Dihapus');
          document.location.href='?p=pmks_data';
        </script>";
} else {
  echo "
        <script language=javascript>
          alert('Data Gagal Dihapus');
          document.location.href='?p=pmks_data';
        </script>";
  //}
} ?>
