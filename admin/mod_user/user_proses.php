<?php include '../../koneksi.php'; ?>

<?php
// tambah data
if (isset($_POST['add'])) {

  $username       = htmlspecialchars($_POST['username']);
  $ssql = mysqli_query($conn, "SELECT * FROM user where username='$username'");
  $daata = mysqli_fetch_assoc($ssql);
  if ($daata) {
    echo "
    <script language=javascript>
      alert('username Sudah ada');
      document.location.href='?p=user_data';
    </script>";
    die;
  }
  $tgl_lahir       = htmlspecialchars($_POST['tgl_lahir']);
  $jk       = htmlspecialchars($_POST['jk']);
  $tlpon       = htmlspecialchars($_POST['tlpon']);
  $almt       = htmlspecialchars($_POST['almt']);
  $foto       = '';
  $jbtn       = htmlspecialchars($_POST['jbtn']);
  $sts       = htmlspecialchars($_POST['sts']);
  $pass       = htmlspecialchars($_POST['pass']);
  $nm_user       = htmlspecialchars($_POST['nm_user']);
  $level       = htmlspecialchars($_POST['level']);

  $query = ("INSERT into user values('','" . $nm_user . "','" . $tgl_lahir . "','" . $jk . "','" . $tlpon . "'
  ,'" . $almt . "','" . $jbtn . "','" . $sts . "','" . $foto . "','" . $username . "','" . $pass . "','" . $level . "')");
  if (mysqli_query($conn, $query)) {

    echo "
    <script language=javascript>
      alert('Data Baru Berhasil Ditambah');
      document.location.href='?p=user_data';
    </script>";
  } else {
    echo "
      <script language=javascript>
        alert('Data Gagal Ditambah');
        document.location.href='?p=user_data';
      </script>";
  }
}
?>

<?php
// edit data
if (isset($_POST['edit'])) {

  $username       = htmlspecialchars($_POST['username']);
  $id       = htmlspecialchars($_POST['id']);
  $ssql = mysqli_query($conn, "SELECT * FROM user where username='$username'");
  $daata = mysqli_fetch_assoc($ssql);

  if ($daata) {
    if ($id != $daata['id_user']) {
      echo "
      <script language=javascript>
      alert('Data Sudah ada');
      document.location.href='?p=user_data';
      </script>";
      die;
    }
  }

  $tgl_lahir       = htmlspecialchars($_POST['tgl_lahir']);
  $jk       = htmlspecialchars($_POST['jk']);
  $tlpon       = htmlspecialchars($_POST['tlpon']);
  $almt       = htmlspecialchars($_POST['almt']);
  $jbtn       = htmlspecialchars($_POST['jbtn']);
  $sts       = htmlspecialchars($_POST['sts']);
  $nm_user       = htmlspecialchars($_POST['nm_user']);
  $level       = htmlspecialchars($_POST['level']);

  $query = ("UPDATE user SET username='" . $username . "', tgl_lahir='" . $tgl_lahir . "',
   jk='" . $jk . "',
   tlpon='" . $tlpon . "',
   almt='" . $almt . "',
   jbtn='" . $jbtn . "',
   sts='" . $sts . "',
   nm_user='" . $nm_user . "',
   level='" . $level . "' WHERE id_user='" . $id . "'");

  if (mysqli_query($conn, $query)) {

    echo "
    <script language=javascript>
      alert('Data Berhasil Dirubah');
      document.location.href='?p=user_data';
    </script>";
  } else {
    echo "
      <script language=javascript>
        alert('Data Gagal Dirubah');
        document.location.href='?p=user_data';
      </script>";
  }
}
?>

<?php
//if (isset($_POST['del'])) {
// hapus data
$id    = htmlspecialchars($_GET['id']);
$query = ("DELETE from user where id_user='" . $id . "'");
if (mysqli_query($conn, $query)) {
  echo "
        <script language=javascript>
          alert('Data Berhasil Dihapus');
          document.location.href='?p=user_data';
        </script>";
} else {
  echo "
        <script language=javascript>
          alert('Data Gagal Dihapus');
          document.location.href='?p=user_data';
        </script>";
  //}
} ?>
