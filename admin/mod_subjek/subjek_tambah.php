   <h3 class="text-center text-capitalize mb-3">input Data subjek</h3>
   <form action="?p=subjek_proses" method="POST" enctype="multipart/form-data">
       <?php include  "mod_subjek/subjeck/1.php"; ?>
       <?php include  "mod_subjek/subjeck/2.php"; ?>
       <?php include  "mod_subjek/subjeck/3.php"; ?>
       <?php include  "mod_subjek/subjeck/4.php"; ?>
       <?php include  "mod_subjek/subjeck/5.php"; ?>

       </div>
       <button type="submit" name="add" class="btn btn-primary">tambah</button>
       <a href="?p=user_data" class="btn btn-success">kembali</a>
       </div>

   </form>