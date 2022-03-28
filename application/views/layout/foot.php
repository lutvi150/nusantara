    <!-- Jquery JS-->
    <script src="<?=base_url();?>assets/vendor/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap JS-->
    <script src="<?=base_url();?>assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?=base_url();?>assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>

    <!-- Vendor JS-->
    <script src="<?=base_url();?>assets/vendor/animsition/animsition.min.js"></script>
    <script src="<?=base_url();?>assets/vendor/select2/select2.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs4/dt-1.10.24/datatables.min.js"></script>

    <!-- Main JS-->
    <script src="<?=base_url();?>assets/js/main.js"></script>
    <script src="<?=base_url();?>assets/js/filter.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#dataTable').DataTable();

            // On text click
            $('.editxt').click(function() {
                // Hide input element
                $('.txtedit').hide();

                // Show next input element
                $(this).next('.txtedit').show().focus();

                // Hide clicked element
                $(this).hide();
            });

            $('#checknama').change(function() {
                document.getElementById("namaproduk").disabled = false;
            });

            $('#nontunai').change(function() {
                document.getElementById("id_kategori").disabled = false;
            });

            $('#tunai').change(function() {
                document.getElementById("id_kategori").disabled = true;
            });
        });

    </script>