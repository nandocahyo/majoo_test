 <!-- Bootstrap core JavaScript-->
 <script src="{{ url('backend/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ url('backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ url('backend/js/sb-admin-2.min.js') }}"></script>

  <!-- Page level plugins -->
  <script src="{{ url('backend/vendor/chart.js/Chart.min.js') }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ url('backend/js/demo/chart-area-demo.js') }}"></script>
  <script src="{{ url('backend/js/demo/chart-pie-demo.js') }}"></script>

  <!-- Page level plugins -->
  <script src="{{ url('backend/vendor/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ url('backend/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ url('backend/js/demo/datatables-demo.js') }}"></script>
  <script src="{{ url('summernote/summernote-bs4.min.js') }}"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
        function confirmDelete(item_id) {
            swal({
                title: "Apa anda yakin ingin menghapus ?",
                text: "Data yang terhapus tidak bisa dikembalikan lagi !",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        $('#'+item_id.closest('#delete-pack').submit());
                    } else {
                        swal("Berhasil dibatalkan");
                    }
                });
        }
    </script> 

<script>
        function confirmStatus(item_id) {
            swal({
                title: "Apa anda yakin ingin mengubah status order ?",
                text: "Data yang diubah tidak bisa dikembalikan lagi !",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        $('#'+item_id.closest('#status-pack').submit());
                    } else {
                        swal("Berhasil dibatalkan");
                    }
                });
        }
    </script> 

  <script src="{{ url('dropify/js/dropify.js') }}"></script>
  <script type="text/javascript">
        $(document).ready(function(){
            $('.dropify').dropify();
        });
    </script>






  
