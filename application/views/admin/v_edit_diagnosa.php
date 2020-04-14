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
                <h1 class="h4 text-gray-900 mb-4">Edit Data Diagnosa</h1>
              </div>
              <form action="<?php echo site_url('admin/update_diagnosa');?>" method="post">
                <input type="hidden" name="id" value="<?= $id; ?>">
                <div class="form-group">
                  <label for="exampleFormControlInput1">Kode Diagnosa</label>
                  <input type="text" name="kode" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Lengkap" required="" value="<?php echo $kode;?>">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Nama Diagnosa</label>
                  <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Diagnosa" required="" value="<?php echo $nama;?>">
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