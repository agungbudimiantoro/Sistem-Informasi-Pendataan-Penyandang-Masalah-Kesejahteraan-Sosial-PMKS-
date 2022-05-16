   <h3 class="text-center text-capitalize mb-3">edit Data pmks</h3>
   <form action="?p=pmks_proses" method="POST" enctype="multipart/form-data">
       <?php
        $no = 1;
        $id_dt_pmks = $_GET['id'];
        $query = mysqli_query($conn, "SELECT * FROM dt_pmks, subjek, subjek_kedua where subjek.id_subjek = dt_pmks.id_subjek and subjek_kedua.id_subjek_kedua = dt_pmks.id_subjek_kedua and dt_pmks.id_dt_pmks = '$id_dt_pmks'");
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
        include  "mod_pmks/pmks/submit.php";
        // // end

        ?>
       </div>

       </div>

   </form>