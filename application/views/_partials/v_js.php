    <!-- CORE PLUGINS-->
    <script src="<?= base_url('assets/vendors/jquery/dist/jquery.min.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/vendors/popper.js/dist/umd/popper.min.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/vendors/bootstrap/dist/js/bootstrap.min.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/vendors/metisMenu/dist/metisMenu.min.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js') ?>" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="<?= base_url('assets/js/app.min.js') ?>" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="<?= base_url('assets/vendors/DataTables/datatables.min.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/vendors/DataTables/ColReorderWithResize.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/vendors/sweetalert2/sweetalert2.all.min.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/vendors/jquery.maskedinput/dist/jquery.maskedinput.min.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/vendors/select2/dist/js/select2.full.min.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/vendors/moment/moment.min.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/vendors/moment/datetime-moment.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/vendors/toastr/toastr.js') ?>" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#tabel-responsif').DataTable({
                pageLength: 25,
                'sDom': 'R<"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>><"row"<"col-sm-12"rt>><"row"<"col-sm-12 col-md-5"i><"col-sm-12 col-md-7"p>>',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
    <script type="text/javascript">
        //semua halaman
        $(document).ready(function() {
            $('#logout-alert').click(function() {
                Swal.fire({
                    title: 'Keluar dari Sistem',
                    text: 'Apakah Anda yakin ingin keluar dari sistem?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#dd3333',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, Keluar',
                    cancelButtonText: 'Batal',
                }).then((result) => {
                    if (result.value) {
                        //form.submit();
                        window.location.href = '<?= base_url("logout") ?>';
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#tabel-user').DataTable({
                pageLength: 25,
                'sDom': 'R<"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>><"row"<"col-sm-12"rt>><"row"<"col-sm-12 col-md-5"i><"col-sm-12 col-md-7"p>>',
            });
            $(".hapus-user").click(function() {
                var username = $(this).attr('id');
                var namaTerpilih = $(this).closest("tr");
                var namaUser = namaTerpilih.find("td:eq(1)").html();
                Swal.fire({
                    title: 'Hapus Data User',
                    text: 'Apakah Anda yakin ingin menghapus user ' + namaUser + '?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#dd3333',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, Hapus',
                    cancelButtonText: 'Batal',
                }).then((result) => {
                    if (result.value) {
                        window.location.href = '<?= base_url("aksi-hapus-user/") ?>' + username;
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".hapus-pembayaran").click(function() {
                var id_pembayaran = $(this).attr('id');
                var invoiceTerpilih = $(this).closest("tr");
                var namaPenghuni = invoiceTerpilih.find("td:eq(2)").html();
                var invoiceTanggal = invoiceTerpilih.find("td:eq(3)").html();
                Swal.fire({
                    title: 'Hapus Data Pembayaran',
                    text: 'Apakah Anda yakin ingin hapus pembayaran ' + namaPenghuni + ' pada ' + invoiceTanggal + ' ?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#dd3333',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, Hapus',
                    cancelButtonText: 'Batal',
                }).then((result) => {
                    if (result.value) {
                        window.location.href = '<?= base_url("aksi-hapus-pembayaran/") ?>' + id_pembayaran;
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        //daftar penghuni
        $(document).ready(function() {
            $.fn.dataTable.moment('D-M-YYYY');
            $('#tabel-penghuni').DataTable({
                pageLength: 25,
                'sDom': 'R<"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>><"row"<"col-sm-12"rt>><"row"<"col-sm-12 col-md-5"i><"col-sm-12 col-md-7"p>>',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
            $(".hapus-penghuni").click(function() {
                var id_penghuni = $(this).attr('id');
                var namaTerpilih = $(this).closest("tr");
                var namaPenghuni = namaTerpilih.find("td:eq(2)").html();
                Swal.fire({
                    title: 'Hapus Data Penghuni',
                    text: 'Apakah Anda yakin ingin menghapus data penghuni ' + namaPenghuni + '?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#dd3333',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, Hapus',
                    cancelButtonText: 'Batal',
                }).then((result) => {
                    if (result.value) {
                        //form.submit();
                        window.location.href = '<?= base_url("aksi-hapus-penghuni/") ?>' + id_penghuni;
                    }
                });
            });
        });
        $(document).on("click", ".detail-penghuni", function() {
            var id_penghuni = $(this).attr("id");
            $.ajax({
                url: "<?= base_url('get-detail-penghuni') ?>",
                method: "POST",
                data: {
                    id_penghuni: id_penghuni
                },
                dataType: "json",
                cache: false,
                success: function(data) {
                    Swal.fire({
                        width: 700,
                        html: `<div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td width="30%"><label>No. Kamar</label></td>
                                            <td width="70%">` + data.no_kamar + `</td>
                                        </tr>
                                        <tr>
                                            <td width="30%"><label>Nama</label></td>
                                            <td width="70%">` + data.nama + `</td>
                                        </tr>
                                        <tr>
                                            <td width="30%"><label>No. KTP</label></td>
                                            <td width="70%">` + data.no_ktp + `</td>
                                        </tr>
                                        <tr>
                                            <td width="30%"><label>Alamat Asal</label></td>
                                            <td width="70%">` + data.alamat + `</td>
                                        </tr>
                                        <tr>
                                            <td width="30%"><label>No. Telp/HP</label></td>
                                            <td width="70%">` + data.no + `</td>
                                        </tr>
                                        <tr>
                                            <td width="30%"><label>Tanggal Huni</label></td>
                                            <td width="70%">` + data.tgl_masuk + ` s/d ` + data.tgl_keluar + `</td>
                                        </tr>
                                        <tr>
                                            <td width="30%"><label>Jumlah Harus Dibayar</label></td>
                                            <td width="70%"> Rp` + data.biaya + `</td>
                                        </tr>
                                        <tr>
                                            <td width="30%"><label>Jumlah Telah Dibayar</label></td>
                                            <td width="70%"> Rp` + data.bayar + `</td>
                                        </tr>
                                        <tr>
                                            <td width="30%"><label>Sisa Piutang</label></td>
                                            <td width="70%"> Rp` + data.piutang + `</td>
                                        </tr>
                                    </table>
                                </div>`
                    });
                }
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            // Select 2
            $(".select2_kamar").select2({
                placeholder: "Pilih Kamar Baru",
                allowClear: true
            });
            // Form Masks
            $("#form_tgl_lahir").mask("99-99-9999", {
                placeholder: "dd-mm-yyyy"
            });
            $("#form_tgl_bayar").mask("99-99-9999", {
                placeholder: "dd-mm-yyyy"
            });
            $("#tgl_masuk").mask("99-99-9999", {
                placeholder: "dd-mm-yyyy"
            });
            $("#tgl_keluar").mask("99-99-9999", {
                placeholder: "dd-mm-yyyy"
            });
            // Bootstrap datepicker
            $("#tgl_lahir .input-group.date").datepicker({
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                format: "dd-mm-yyyy"
            });
            $("#tgl_bayar .input-group.date").datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                format: "dd-mm-yyyy"
            });
            $("#tgl_huni .input-daterange").datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                format: "dd-mm-yyyy"
            });
        });
    </script>
    <script type="text/javascript">
        $('.carousel').carousel({
            interval: 4000
        });
    </script>
    <script type="text/javascript">
        window.onload = function() {
            <?php if (isset($pesan)) echo $pesan ?>
        }
    </script>
    </body>

    </html>