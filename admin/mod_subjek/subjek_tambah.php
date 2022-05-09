   <h3 class="text-center text-capitalize mb-3">input Data subjek</h3>
   <form action="?p=subjek_proses" method="POST" enctype="multipart/form-data">
       <!-- 1-->
       <?php include  "mod_subjek/subjeck/1/1.php"; ?>
       <?php include  "mod_subjek/subjeck/1/2.php"; ?>
       <?php include  "mod_subjek/subjeck/1/3.php"; ?>
       <?php include  "mod_subjek/subjeck/1/4.php"; ?>
       <!-- 2-->
       <?php include  "mod_subjek/subjeck/2/1.php"; ?>
       <?php include  "mod_subjek/subjeck/2/2.php"; ?>
       <?php include  "mod_subjek/subjeck/2/3.php"; ?>
       <!--3-->
       <?php include  "mod_subjek/subjeck/3/1.php"; ?>
       <?php include  "mod_subjek/subjeck/3/2.php"; ?>
       <!-- 4-->
       <?php include  "mod_subjek/subjeck/4/1.php"; ?>
       <?php include  "mod_subjek/subjeck/4/2.php"; ?>
       <!-- 5-->
       <?php include  "mod_subjek/subjeck/5/1.php"; ?>
       <?php include  "mod_subjek/subjeck/5/2.php"; ?>
       <?php include  "mod_subjek/subjeck/5/3.php"; ?>

       </div>
       <button type="submit" name="add" class="btn btn-primary">tambah</button>
       <a href="?p=user_data" class="btn btn-success">kembali</a>
       </div>

   </form>