<?php 
    $this->load->view('layouts_admin/top');
  ?>

  <?php
    $tgl_input = date("d-m-Y");
  ?>

  <!-- Begin Page Content -->
         <div class="container-fluid">

                   <div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Tambah Data Mahasiswa</h1>
              </div>
              <form action="<?php echo site_url('admin/save_mahasiswa');?>" method="post">
                <input type="hidden" name="tanggal" value="<?= $tgl_input; ?>">
                <div class="form-group">
                  <label for="exampleFormControlInput1">Nama Lengkap</label>
                  <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Lengkap" required="">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">NIM Mahasiswa</label>
                  <input type="text" name="nim" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan NIM Mahasiswa" required="">
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputCity">Tempat</label>
                    <input type="text" name="tempat" class="form-control"  placeholder="Tempat Lahir" required="">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="inputZip">Tanggal Lahir</label>
                    <input type="date" name="ttl" class="form-control" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">No Telepon</label>
                  <input type="number" name="no_telepon" class="form-control" placeholder="Masukkan No Telepon" required="">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Alamat</label>
                  <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" required="" rows="3"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Jenjang Kuliah</label>
                  <select class="form-control" name="jenjang" id="exampleFormControlSelect1">
                    <option>D3</option>
                    <option>D4</option>
                    <option>S1</option>
                  </select>
                </div>
                <br>
                <hr class="sidebar-divider">
                <div class="form-group">
                  <label for="exampleFormControlInput1">Username</label>
                  <input type="text" name="username" class="form-control"  placeholder="Username Mahasiswa" required="">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Password</label>
                  <input type="password" name="password" class="form-control"  placeholder="Password Mahasiswa" required="">
                </div>
                <br>
                <button type="submit" class="btn btn-primary mb-2 float-right">Submit</button>
                <br>
              </form>
              <hr>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

      </div>
      <!-- End of Main Content -->

<?php 
    $this->load->view('layouts_admin/footer');
  ?>