   <h3 class="text-center text-capitalize mb-3">input Data subjek</h3>
   <form action="?p=subjek_proses_tambah" method="POST" enctype="multipart/form-data">

       <?php
        // 1
        include  "mod_subjek/subjeck/1/1.php";
        include  "mod_subjek/subjeck/1/2.php";
        include  "mod_subjek/subjeck/1/3.php";
        include  "mod_subjek/subjeck/1/4.php";
        // 2
        include  "mod_subjek/subjeck/2/1.php";
        include  "mod_subjek/subjeck/2/2.php";
        include  "mod_subjek/subjeck/2/3.php";
        // 3
        include  "mod_subjek/subjeck/3/1.php";
        include  "mod_subjek/subjeck/3/2.php";
        // 4
        include  "mod_subjek/subjeck/4/1.php";
        include  "mod_subjek/subjeck/4/2.php";
        // 5
        include  "mod_subjek/subjeck/5/a/1.php";
        include  "mod_subjek/subjeck/5/a/2.php";
        include  "mod_subjek/subjeck/5/a/3.php";
        include  "mod_subjek/subjeck/5/b/1.php";
        include  "mod_subjek/subjeck/5/b/2.php";
        include  "mod_subjek/subjeck/5/b/3.php";
        include  "mod_subjek/subjeck/5/c/c1/1.php";
        include  "mod_subjek/subjeck/5/c/c1/2.php";
        include  "mod_subjek/subjeck/5/c/c1/3.php";
        include  "mod_subjek/subjeck/5/c/c2/1.php";
        include  "mod_subjek/subjeck/5/c/c2/2.php";
        include  "mod_subjek/subjeck/5/c/c2/3.php";
        include  "mod_subjek/subjeck/5/c/c2/4.php";
        include  "mod_subjek/subjeck/5/d/1.php";
        include  "mod_subjek/subjeck/5/d/2.php";
        include  "mod_subjek/subjeck/5/d/3.php";
        // end
        include  "mod_subjek/subjeck/5/d/submit.php"; ?>
       </div>

       </div>

   </form>

   <script>
       var _validFileExtensions = [".jpg", ".png"];

       function validate(file) {
           if (file.type == "file") {
               var sFileName = file.value;
               if (sFileName.length > 0) {
                   var blnValid = false;
                   for (var j = 0; j < _validFileExtensions.length; j++) {
                       var sCurExtension = _validFileExtensions[j];
                       if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                           blnValid = true;
                           break;
                       }
                   }

                   if (!blnValid) {
                       alert("Maaf, Hanya File yang Berextensi : " + _validFileExtensions.join(", "));
                       file.value = "";
                       return false;
                   }
               }
           }
           return true;
       }
   </script>