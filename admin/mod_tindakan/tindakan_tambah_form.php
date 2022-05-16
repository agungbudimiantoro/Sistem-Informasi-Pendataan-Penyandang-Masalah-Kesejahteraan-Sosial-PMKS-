   <h3 class="text-center text-capitalize mb-3">input Data tindakan</h3>
   <form action="?p=tindakan_proses" method="POST" enctype="multipart/form-data">
       <?php
        $no = 1;
        $id = $_GET['id'];

        $query = mysqli_query($conn, "SELECT * FROM subjek, subjek_kedua, dt_pmks where subjek.id_subjek = subjek_kedua.id_subjek and subjek.id_subjek = dt_pmks.id_subjek
        and subjek.id_subjek='$id'");
        $data = mysqli_fetch_assoc($query);

        // 1
        include  "mod_subjek/fungsi.php";
        include  "mod_subjek/subjekViews/1/1.php";
        include  "mod_subjek/subjekViews/1/2.php";
        include  "mod_subjek/subjekViews/1/3.php";
        // // 2
        include  "mod_subjek/subjekViews/2/1.php";
        include  "mod_subjek/subjekViews/2/2.php";
        // // 3
        include  "mod_subjek/subjekViews/3/1.php";
        // // 4
        include  "mod_subjek/subjekViews/4/1.php";
        // // 5
        include  "mod_subjek/subjekViews/5/a/1.php";
        include  "mod_subjek/subjekViews/5/b/1.php";
        include  "mod_subjek/subjekViews/5/b/2.php";
        include  "mod_subjek/subjekViews/5/c/c1/1.php";
        include  "mod_subjek/subjekViews/5/c/c2/1.php";
        include  "mod_subjek/subjekViews/5/c/c2/2.php";
        include  "mod_subjek/subjekViews/5/d/1.php";
        //submit
        include  "mod_tindakan/tindakan/submit.php";
        // // end

        ?>
       </div>

       </div>

   </form>