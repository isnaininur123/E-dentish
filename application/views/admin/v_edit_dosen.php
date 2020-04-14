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
                <h1 class="h4 text-gray-900 mb-4">Edit Data Dosen</h1>
              </div>
              <form action="<?php echo site_url('admin/update_dosen');?>" method="post">
                <input type="hidden" name="id" value="<?= $id; ?>">
                <input type="hidden" name="tanggal" value="<?= $tgl_input; ?>">
                <input type="hidden" name="level" value="2">
                <div class="form-group">
                  <label for="exampleFormControlInput1">Nama Lengkap</label>
                  <input type="text" name="nama" class="form-control"  placeholder="Masukkan Nama Lengkap" required="" value="<?php echo $nama;?>">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">NIP Dosen</label>
                  <input type="number" name="nip" class="form-control"  placeholder="Masukkan NIP Dosen" required="" value="<?php echo $nip;?>">
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputCity">Tempat</label>
                    <input type="text" name="tempat" class="form-control"  placeholder="Tempat Lahir" required="" value="<?php echo $tempat;?>">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="inputZip">Tanggal Lahir</label>
                    <input type="date" name="ttl" class="form-control" required="" value="<?php echo $ttl;?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">No Telepon</label>
                  <input type="number" name="no_telepon" class="form-control" placeholder="Masukkan No Telepon" required="" value="<?php echo $no_telepon;?>">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Alamat</label>
                  <input class="form-control" name="alamat"  required="" value="<?php echo $alamat;?>" rows="3"></input>
                </div>
                <br>
                <hr class="sidebar-divider">
                <div class="form-group">
                  <label for="exampleFormControlInput1">Username</label>
                  <input type="text" name="username" class="form-control"  placeholder="Username Dosen" required="" value="<?php echo $username;?>">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Password</label>
                  <input type="password" name="password" class="form-control"  placeholder="Password Dosen" required="" value="<?php echo $password;?>">
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