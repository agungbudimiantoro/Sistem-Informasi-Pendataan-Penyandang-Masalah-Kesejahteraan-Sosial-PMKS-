
<?php
$id    = htmlspecialchars($_GET['id']);
$query = ("DELETE from subjek where id_subjek='" . $id . "'");

if (mysqli_query($conn, $query)) {
    $query1 = ("DELETE from subjek_kedua where id_subjek_kedua='" . $id . "'");
    if (mysqli_query($conn, $query1)) {
        echo "
            <script language=javascript>
              alert('Data Berhasil Dihapus');
              document.location.href='?p=subjek_data';
            </script>";
    } else {
        echo "
            <script language=javascript>
              alert('Data Gagal Dihapus');
              document.location.href='?p=subjek_data';
            </script>";
        //}
    }
} else {
    echo "
        <script language=javascript>
          alert('Data Gagal Dihapus');
          document.location.href='?p=subjek_data';
        </script>";
    //}
} ?>