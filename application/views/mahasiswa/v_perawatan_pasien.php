<?php 
    $this->load->view('layouts_mahasiswa/top');
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
                <h1 class="h4 text-gray-900 mb-4">Perawatan Pasien</h1>
              </div>
              <form action="<?php echo site_url('mahasiswa/save_perawatan');?>" method="post">
                <input type="hidden" name="id_mahasiswa" value="<?php echo $this->session->userdata('ses_id');?>" >
                <input type="hidden" name="tanggal" value="<?= $tgl_input; ?>">
                <div class="form-group">
                  <label for="exampleFormControlInput1">Nama Dosen</label>
                  <select class="form-control" name="id_dosen" id="exampleFormControlSelect1">
                    <option value="" disabled selected>-- Pilih Nama Dosen --</option>
                    <?php                                
                      foreach ($dosen as $row) {  
                    echo "<option value='".$row->id."'>".$row->nama."</option>";
                    }
                  ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Nama Pasien</label>
                  <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Pasien" required="" value="<?php echo $nama;?>" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Diagnosa</label>
                  <select class="form-control" name="diagnosa" id="exampleFormControlSelect1">
                    <option value="" disabled selected>-- Pilih Diagnosa --</option>
                    <?php                                
                      foreach ($diagnosa as $row) {  
                    echo "<option value='".$row->id."'>".$row->nama."</option>";
                    }
                  ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Keluhan</label>
                  <input type="text" name="keluhan" class="form-control" placeholder="Masukkan Keluhan" required="">
                </div>
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="inputCity">Kode Gigi</label>
                    <select class="form-control" name="kode_gigi" id="exampleFormControlSelect1" required="">
                    <option value="" disabled selected>-- Pilih Kode Gigi --</option>
                    <?php                                
                      foreach ($kode as $row) {  
                    echo "<option value='".$row->id."'>".$row->kode_gigi."</option>";
                    }
                  ?>
                  </select>
                  </div>
                  <div class="form-group col-md-8">
                    <label for="inputZip">'</label>
                    <input type="text" id="deskripsi" name="deskripsi" class="form-control" required="" placeholder="Deskripsi Kode Gigi" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Tindakan</label>
                  <input type="text" name="tindakan" class="form-control" placeholder="Masukkan Tidakan" required="">
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
    $this->load->view('layouts_mahasiswa/footer');
  ?>