<?php 
    $this->load->view('layouts_admin/top');
  ?>

  <!-- Begin Page Content -->
         <div class="container-fluid">
           <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash');?>"></div>

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Data Pengguna Mahasiswa</h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <div class="col-md-3" >
                <a href="<?php echo base_url().'admin/add_mahasiswa'?>" class="btn btn-facebook btn-block"><i class="fa fa-plus"></i> Tambah Mahasiswa</a>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>NIM</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                       <?php
                        $no = 1;
                        foreach($mahasiswa as $mhs){
                        ?>
                        <tr>
                          <td><?php echo $no++ ?></td>
                          <td><?php echo $mhs->nama;?></td>
                          <td><?php echo $mhs->nim;?></td>
                          <td><?php echo $mhs->username;?></td>
                          <td><?php echo $mhs->password;?></td>
                          <td>
                              <a href="<?php echo site_url('admin/edit_mahasiswa/'.$mhs->id);?>" class="fas fa-edit"></a>
                              <a href="<?php echo site_url('admin/delete_mahasiswa/'.$mhs->id);?>" class="fa fa-trash tombol-hapus"></a>
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
    $this->load->view('layouts_admin/footer');
  ?>