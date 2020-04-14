<!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>&copy; Copyright 2020  Ojik & Iin  <i class="fa fa-heart" aria-hidden="true"></i></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url('index.php/login/logout'); ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url().'assets/backend/vendor/jquery/jquery.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/backend/vendor/bootstrap/js/bootstrap.bundle.min.js'?>"></script>
  
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url().'assets/backend/vendor/jquery-easing/jquery.easing.min.js'?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url().'assets/backend/js/sb-admin-2.min.js'?>"></script>
  <!-- Page level plugins -->
  <script src="<?php echo base_url().'assets/backend/vendor/datatables/jquery.dataTables.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/backend/vendor/datatables/dataTables.bootstrap4.min.js'?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url().'assets/backend/js/demo/datatables-demo.js'?>"></script>
  <script src="<?php echo base_url().'assets/alert/js/sweetalert2.all.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/alert/js/myscript.js'?>"></script>
  <script src="<?php echo base_url().'assets/backend/vendor/bootstrap/js/bootstrap.js'?>"></script>
  
  <script type="text/javascript">
    $(document).ready(function(){
       $('#kode_gigi').on('input',function(){
                
                var kode=$(this).val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('mahasiswa/get_gigi')?>",
                    dataType : "JSON",
                    data : {kode: kode},
                    cache:false,
                    success: function(data){
                        $.each(data,function(kode_gigi, deskripsi){
                            $('[name="deskripsi"]').val(data.deskripsi);
                            
                        });
                        
                    }
                });
                return false;
           });

    });
  </script>
</body>

</html>
