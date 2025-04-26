<footer class="content-footer footer bg-footer-theme">
    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
        <div class="mb-2 mb-md-0">
            ©
            <script>
                document.write(new Date().getFullYear());
            </script>
            , made with ❤️ by
            <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
        </div>
        <div>
            <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
            <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

            <a
                href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                target="_blank"
                class="footer-link me-4">Documentation</a>

            <a
                href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                target="_blank"
                class="footer-link me-4">Support</a>
        </div>
    </div>
</footer>
<!-- / Footer -->

<div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->



<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="<?= base_url() ?>/template/assets/vendor/libs/jquery/jquery.js"></script>
<script src="<?= base_url() ?>/template/assets/vendor/libs/popper/popper.js"></script>
<script src="<?= base_url() ?>/template/assets/vendor/js/bootstrap.js"></script>
<script src="<?= base_url() ?>/template/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="<?= base_url() ?>/template/assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="<?= base_url() ?>/template/assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="<?= base_url() ?>/template/assets/js/main.js"></script>
<!-- <script src="<?= base_url() ?>/template/assets/js/tables-datatables-basic.js"></script>
<script src="<?= base_url() ?>/template/assets/js/tables-datatables-advanced.js"></script> -->

<!-- Page JS -->
<script src="<?= base_url() ?>/template/assets/js/dashboards-analytics.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="https://cdn.datatables.net/2.1.6/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.6/js/dataTables.bootstrap5.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>



<script>
    new DataTable('#example');
    new DataTable('#example1');
    new DataTable('#verifikasi');
    new DataTable('#lulus');
    new DataTable('#lulus2');
    new DataTable('#guru');
    new DataTable('#kelas');
    new DataTable('#rinciankelas');
</script>



<<<<<<< HEAD
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- DatTables -->

<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["excel", "pdf", "print"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": false,
            "autoWidth": true,
            "responsive": true,
        });
        $('#tbl_peserta').DataTable({
            // "order": [],
            "processing": true,
            "serverSide": true,
            "searching": true,
            "ordering": true,
            "ajax": {
                "url": "<?= base_url('Datatables/data_siswa'); ?>",
                "type": "POST",
                // "data": {
                //     "csrf_test_name": $('.input[name=csrf_test_name]').val()
                // },
                // "data": function(data) {
                //     data.jenis_kelamin = $('#Jk').val();
                //     // data.csrf_test_name = $('.input[name=csrf_test_name]').val();
                // }
            },
            "columnDefs": [{
                "targets": [0],
                "orderable": false
            }]
        });

        // $('#Jk').change(function() {
        //     table.draw();
        // });
    });
</script>

<script>
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', {
            'placeholder': 'dd/mm/yyyy'
        })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', {
            'placeholder': 'mm/dd/yyyy'
        })

        $('#datemask3').inputmask('yyyy/mm/dd', {
            'placeholder': 'yyyy/mmmm/dd'
        })
        //Money Euro
        $('[data-mask]').inputmask()

        //Date picker

        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            locale: {
                format: 'MM/DD/YYYY hh:mm A'
            }
        })


    })
</script>
=======
>>>>>>> 7b172d997c0f581332306c4fe724ea1378fa7a15

<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideDown(500, function() {
            $(this).remove();
        });
    }, 2000);
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.date').mask('0000/00/00');
        $('.time').mask('00:00:00');
        $('.date_time').mask('00/00/0000 00:00:00');
    });
</script>





</body>

</html>