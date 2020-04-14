<?php 
    $this->load->view('layouts_mahasiswa/top');
  ?>

  <!-- Begin Page Content -->
         <div class="container-fluid">
           <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash');?>"></div>

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Data Pasien Klinik</h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <div class="col-md-3" >
                <a href="<?php echo base_url().'mahasiswa/add_pasien'?>" class="btn btn-facebook btn-block"><i class="fa fa-plus"></i> Tambah Data Pasien</a>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Pasien</th>
                      <th>Tempat, TTL</th>
                      <th>Alamat</th>
                      <th>Jenis Kelamin</th>
                      <th>No Telepon</th>
                      <th>Tanggal Ditambah</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                       <?php
                        $no = 1;
                        foreach($pasien as $ps){
                        ?>
                        <tr>
                          <td><?php echo $no++ ?></td>
                          <td><?php echo $ps->nama;?></td>
                          <td><?php echo $ps->tempat;?>, <?php echo $ps->ttl;?></td>
                          <td><?php echo $ps->alamat;?></td>
                          <td><?php echo $ps->kelamin;?></td>
                          <td><?php echo $ps->no_telepon;?></td>
                          <td><?php echo $ps->tanggal;?></td>
                          <td>
                              <a href="<?php echo site_url('mahasiswa/edit_pasien/'.$ps->id);?>" class="fas fa-edit"></a>
                              <a href="<?php echo site_url('mahasiswa/delete_pasien/'.$ps->id);?>" class="fa fa-trash tombol-hapus"></a>
                              <a href="<?php echo site_url('mahasiswa/perawatan_pasien/'.$ps->id);?>" class="fa fa-wheelchair "></a>
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