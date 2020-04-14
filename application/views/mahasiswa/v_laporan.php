<?php 
    $this->load->view('layouts_mahasiswa/top');
  ?>

  <!-- Begin Page Content -->
         <div class="container-fluid">
           <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash');?>"></div>

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Laporan Perawatan</h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Pasien</th>
                      <th>Diagnosa</th>
                      <th>Keluhan</th>
                      <th>Kode Gigi</th>
                      <th>Tindakan</th>
                      <th>Dosen</th>
                      <th>Tanggal Ditambah</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                       <?php
                        $no = 1;
                        foreach($laporan as $lp){
                        ?>
                        <tr>
                          <td><?php echo $no++ ?></td>
                          <td><?php echo $lp->nama;?></td>
                          <td><?php echo $lp->diagnosaa;?></td>
                          <td><?php echo $lp->keluhan;?></td>
                          <td><?php echo $lp->kode_gigi;?></td>
                          <td><?php echo $lp->tindakan;?></td>
                          <td><?php echo $lp->dosen;?></td>
                          <td><?php echo $lp->tanggal;?></td>
                          <td>
                              <a href="<?php echo site_url('mahasiswa/edit_pasien/'.$lp->id);?>" class="fas fa-edit"></a>
                              <a href="<?php echo site_url('mahasiswa/delete_pasien/'.$lp->id);?>" class="fa fa-trash tombol-hapus"></a>
                          </td>
                        </tr>
                      <?php }?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          

      </div>
      <!-- End of Main Content -->

<?php 
    $this->load->view('layouts_mahasiswa/footer');
  ?>