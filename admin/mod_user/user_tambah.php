   <h3 class="text-center text-capitalize mb-3">input Data User</h3>
   <form action="?p=user_proses" method="POST">
       <div class="row">
           <div class="col-md-6">
               <div class="mb-3">
                   <label style="text-transform:capitalize;" for="nama_user" class="form-label">nama user</label>
                   <input type="text" name="nm_user" class="form-control" id="nama_user" aria-describedby="emailHelp" required>
               </div>
               <div class="mb-3">
                   <label style="text-transform:capitalize;" for="tgl_lahir" class="form-label">tanggal lahir</label>
                   <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" aria-describedby="emailHelp" required>
               </div>
               <div class="mb-3">
                   <label style="text-transform:capitalize;" for="exampleInputPassword1" class="form-label">jenis kelamin</label>
                   <select class="form-select" aria-label="Default select example" name="jk" required>
                       <option value="" diasabled selected>pilih jenis kelamin</option>
                       <option value="laki-laki">laki-laki</option>
                       <option value="perempuan">perempuan</option>
                   </select>
               </div>
               <div class="mb-3">
                   <label style="text-transform:capitalize;" for="tlpon" class="form-label">no telepon</label>
                   <input type="text" name="tlpon" class="form-control" id="tlpon" aria-describedby="emailHelp" required>
               </div>
               <div class="mb-3">
                   <label style="text-transform:capitalize;" for="alamat" class="form-label">alamat</label>
                   <input type="text" name="almt" class="form-control" id="almt" aria-describedby="emailHelp" required>
               </div>
               <div class="mb-3">
                   <label style="text-transform:capitalize;" for="foto" class="form-label">foto</label>
                   <input type="file" name="foto" class="form-control" id="foto" aria-describedby="emailHelp" required>
               </div>
           </div>
           <div class="col-md-6">
               <div class="mb-3">
                   <label style="text-transform:capitalize;" for="exampleInputPassword1" class="form-label">jabatan</label>
                   <select class="form-select" aria-label="Default select example" name="jbtn" required>
                       <option value="" diasabled selected>pilih jabatan</option>
                       <option value="kepala dinas">Kepala dinas</option>
                       <option value="kepala bidang rehabilitas sosial">Kepala bidang rehabilitas sosial</option>
                       <option value="kasi subbid resos anak dan lanjut usia">Kasi subbid resos anak dan lanjut usia</option>
                       <option value="kasi subbid resos penyandang disabilitas">Kasi subbid resos penyandang disabilitas</option>
                       <option value="kasi subbid resos tuna sosial dan perdagangan orang">Kasi subbid resos tuna sosial dan perdagangan orang</option>
                       <option value="petugas">petugas</option>
                   </select>
               </div>
               <div class="mb-3">
                   <label style="text-transform:capitalize;" for="exampleInputPassword1" class="form-label">status</label>
                   <select class="form-select" aria-label="Default select example" name="sts" required>
                       <option value="" diasabled selected>pilih status</option>
                       <option value="aktif">aktif</option>
                       <option value="tidak aktif">tidak aktif</option>
                   </select>
               </div>
               <div class="mb-3">
                   <label style="text-transform:capitalize;" for="username" class="form-label">username</label>
                   <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" required>
               </div>
               <div class="mb-3">
                   <label style="text-transform:capitalize;" for="password" class="form-label">password</label>
                   <input type="text" name="pass" class="form-control" id="password" aria-describedby="emailHelp" required>
               </div>
               <div class="mb-3">
                   <label style="text-transform:capitalize;" for="exampleInputPassword1" class="form-label">Level</label>
                   <select class="form-select" aria-label="Default select example" name="level" required>
                       <option value="" diasabled selected>pilih Level</option>
                       <option value="admin">Admin</option>
                       <option value="pimpinan">Pimpinan</option>
                   </select>
               </div>
           </div>
       </div>
       <button type="submit" name="add" class="btn btn-primary">tambah</button>
       <a href="?p=user_data" class="btn btn-success">kembali</a>
       </div>

   </form>