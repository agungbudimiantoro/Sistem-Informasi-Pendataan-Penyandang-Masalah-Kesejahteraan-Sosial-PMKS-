   <h3 class="text-center text-capitalize mb-3">view Data subjek</h3>
   <form action="?p=subjek_proses_edit" method="POST" target="_blank" enctype="multipart/form-data">
       <?php
        $no = 1;
        $id = $_GET['id'];
        $query = mysqli_query($conn, "SELECT subjek.*, subjek_kedua.* FROM subjek, subjek_kedua where subjek.id_subjek = subjek_kedua.id_subjek and subjek.id_subjek = '$id'");
        $data = mysqli_fetch_assoc($query);


        include "mod_subjek/fungsi.php";

        // 1
        include  "mod_subjek/subjeckViews/1/1.php";
        include  "mod_subjek/subjeckViews/1/2.php";
        include  "mod_subjek/subjeckViews/1/3.php";
        include  "mod_subjek/subjeckViews/1/4.php";
        // 2
        include  "mod_subjek/subjeckViews/2/1.php";
        include  "mod_subjek/subjeckViews/2/2.php";
        include  "mod_subjek/subjeckViews/2/3.php";
        // 3
        include  "mod_subjek/subjeckViews/3/1.php";
        include  "mod_subjek/subjeckViews/3/2.php";
        // 4
        include  "mod_subjek/subjeckViews/4/1.php";
        include  "mod_subjek/subjeckViews/4/2.php";
        // 5
        include  "mod_subjek/subjeckViews/5/a/1.php";
        include  "mod_subjek/subjeckViews/5/a/2.php";
        include  "mod_subjek/subjeckViews/5/a/3.php";
        include  "mod_subjek/subjeckViews/5/b/1.php";
        include  "mod_subjek/subjeckViews/5/b/2.php";
        include  "mod_subjek/subjeckViews/5/b/3.php";
        include  "mod_subjek/subjeckViews/5/c/c1/1.php";
        include  "mod_subjek/subjeckViews/5/c/c1/2.php";
        include  "mod_subjek/subjeckViews/5/c/c1/3.php";
        include  "mod_subjek/subjeckViews/5/c/c2/1.php";
        include  "mod_subjek/subjeckViews/5/c/c2/2.php";
        include  "mod_subjek/subjeckViews/5/c/c2/3.php";
        include  "mod_subjek/subjeckViews/5/c/c2/4.php";
        include  "mod_subjek/subjeckViews/5/d/1.php";
        include  "mod_subjek/subjeckViews/5/d/2.php";
        include  "mod_subjek/subjeckViews/5/d/3.php";

        ?>
       </div>

       </div>

   </form>