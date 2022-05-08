<?php include '../../koneksi.php';


?>

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
  $jbtn       = htmlspecialchars($_POST['jbtn']);
  $sts       = htmlspecialchars($_POST['sts']);
  $pass       = htmlspecialchars($_POST['pass']);
  $nm_user       = htmlspecialchars($_POST['nm_user']);
  $level       = htmlspecialchars($_POST['level']);

  $temp = "../assets/img/avatar/";
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

    move_uploaded_file($_FILES["file"]["tmp_name"], $temp . $foto_baru);
  } else {
    echo "
    <script language=javascript>
      alert('Data file tidak di upload');
      document.location.href='?p=bimbingan_data';
    </script>";
    die;
  }



  $query = ("INSERT into user values('','" . $nm_user . "','" . $tgl_lahir . "','" . $jk . "','" . $tlpon . "'
  ,'" . $almt . "','" . $jbtn . "','" . $sts . "','" . $foto_baru . "','" . $username . "','" . $pass . "','" . $level . "')");
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
// edit data
if (isset($_POST['edit_pass'])) {


  $id       = htmlspecialchars($_POST['id']);
  $pass       = htmlspecialchars($_POST['pass']);
  $pass1       = htmlspecialchars($_POST['pass1']);

  $query = ("UPDATE user SET pass='" . $pass . "' WHERE id_user='" . $id . "'");

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
// edit data sts
if (isset($_POST['edit_foto'])) {
  include "../koneksi.php";
  $id      = htmlspecialchars($_POST['id']);
  $file_lama         = mysqli_real_escape_string($conn, $_POST['filelama']);


  $temp = "../assets/img/avatar/";
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
    $query = "SELECT * FROM user WHERE foto = '$filelama'";
    if (mysqli_query($conn, $query)) {
      if (file_exists("../assets/img/avatar/" . $file_lama)) {
        unlink("../assets/img/avatar/" . $file_lama);
      }
    }

    move_uploaded_file($_FILES["file"]["tmp_name"], $temp . $foto_baru);
  } else {
    echo "
      <script language=javascript>
        alert('Data file tidak di upload');
        document.location.href='?p=bimbingan_data';
      </script>";
    die;
  }

  $query = ("UPDATE user  SET foto='" . $foto_baru . "' WHERE id_user='" . $id . "' ");

  if (mysqli_query($conn, $query)) {

    echo "
    <script language=javascript>
      alert('Foto user Berhasil Dirubah');
      document.location.href='?p=user_data';
    </script>";
  } else {
    echo "
      <script language=javascript>
        alert('Foto user Gagal Dirubah');
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
