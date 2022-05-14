   <h3 class="text-center text-capitalize mb-3">input Data pmks</h3>
   <form action="?p=pmks_proses" method="POST" enctype="multipart/form-data">
       <?php
        $no = 1;
        $query = mysqli_query($conn, "SELECT subjek.*, subjek_kedua.* FROM subjek, subjek_kedua where subjek.id_subjek = subjek_kedua.id_subjek and subjek_kedua.sts_jns_pmks='belum ditetapkan'");
        $data = mysqli_fetch_assoc($query);

        // 1
        include  "mod_pmks/fungsi.php";
        include  "mod_pmks/pmks/1/1.php";
        include  "mod_pmks/pmks/1/2.php";
        include  "mod_pmks/pmks/1/3.php";
        // // 2
        include  "mod_pmks/pmks/2/1.php";
        include  "mod_pmks/pmks/2/2.php";
        // // 3
        include  "mod_pmks/pmks/3/1.php";
        // // 4
        include  "mod_pmks/pmks/4/1.php";
        // // 5
        include  "mod_pmks/pmks/5/a/1.php";
        include  "mod_pmks/pmks/5/b/1.php";
        include  "mod_pmks/pmks/5/b/2.php";
        include  "mod_pmks/pmks/5/c/c1/1.php";
        include  "mod_pmks/pmks/5/c/c2/1.php";
        include  "mod_pmks/pmks/5/c/c2/2.php";
        include  "mod_pmks/pmks/5/d/1.php";
        include  "mod_pmks/pmks/5/d/2.php";
        // // end

        ?>
       </div>

       </div>

   </form>