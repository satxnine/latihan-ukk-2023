 <!-- jQuery -->
 <script src="../../assets/plugins/jquery/jquery.min.js"></script>
 <!-- jQuery UI 1.11.4 -->
 <script src="../../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
 <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
 <script>
     $.widget.bridge('uibutton', $.ui.button)
 </script>
 <!-- Bootstrap 4 -->
 <script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- Sparkline -->
 <script src="../../assets/plugins/sparklines/sparkline.js"></script>
 <!-- jQuery Knob Chart -->
 <script src="../../assets/plugins/jquery-knob/jquery.knob.min.js"></script>
 <!-- daterangepicker -->
 <script src="../../assets/plugins/moment/moment.min.js"></script>
 <script src="../../assets/plugins/daterangepicker/daterangepicker.js"></script>
 <!-- Tempusdominus Bootstrap 4 -->
 <script src="../../assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
 <!-- Summernote -->
 <script src="../../assets/plugins/summernote/summernote-bs4.min.js"></script>
 <!-- overlayScrollbars -->
 <script src="../../assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
 <!-- AdminLTE App -->
 <script src="../../assets/dist/js/adminlte.js"></script>
 <!-- SweetAlert2 -->
 <script src="../../assets/plugins/sweetalert2/sweetalert2.min.js"></script>
 <!-- Toastr -->
 <script src="../../assets/plugins/toastr/toastr.min.js"></script>
 <?php @session_start();
    if (!empty($_SESSION['username'])) { ?>
     <!-- DataTables  & Plugins -->
     <script src="../../assets/plugins/datatables/jquery.dataTables.min.js"></script>
     <script src="../../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
     <script src="../../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
     <script src="../../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
     <script src="../../assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
     <script src="../../assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
     <script src="../../assets/plugins/jszip/jszip.min.js"></script>
     <script src="../../assets/plugins/pdfmake/pdfmake.min.js"></script>
     <script src="../../assets/plugins/pdfmake/vfs_fonts.js"></script>
     <script src="../../assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
     <script src="../../assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
     <script src="../../assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
     <script>
         $(function() {
             $("#dataTablesNya").DataTable({
                 "responsive": true,
                 "lengthChange": false,
                 "autoWidth": false,
                 "buttons": ["excel", "pdf", "print"]
             }).buttons().container().appendTo('#dataTablesNya_wrapper .col-md-6:eq(0)');
             $('#example2').DataTable({
                 "paging": true,
                 "lengthChange": false,
                 "searching": false,
                 "ordering": true,
                 "info": true,
                 "autoWidth": false,
                 "responsive": true,
             });
         });
     </script>
 <?php } ?>