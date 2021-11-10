            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Tambah Penghuni</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form class="form-horizontal" action="<?= base_url('aksi-tambah-penghuni') ?>" method="post">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">No. Kamar</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="no_kamar" value="<?= $kamar->no_kamar ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Harga Kamar per Bulan</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="harga" value="<?= $kamar->harga ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap Penghuni" maxlength="200" oninput="this.value = this.value.replace(/[^a-z A-Z ' .]/g, '');" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">No. KTP</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="no_ktp" placeholder="No. KTP Penghuni" maxlength="50" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Alamat Asal</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="alamat" placeholder="Alamat Asal Penghuni" maxlength="200" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">No. Telp/HP</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="no" placeholder="No. Telp/HP Penghuni" maxlength="30" oninput="this.value = this.value.replace(/[^0-9 +]/g, '');" required>
                                </div>
                            </div>
                            <div class="form-group row" id="tgl_huni">
                                <label class="col-sm-3 col-form-label">Masa Huni</label>
                                <div class="col-sm-9 input-daterange input-group" id="datepicker">
                                    <input class="input-sm form-control" type="text" name="tgl_masuk" id="tgl_masuk" placeholder="Pilih Tanggal Masuk" autocomplete="off"  required>
                                    <span class="input-group-addon p-l-10 p-r-10">s.d.</span>
                                    <input class="input-sm form-control" type="text" name="tgl_keluar" id="tgl_keluar" placeholder="Pilih Tanggal Keluar" value="<?= '31' . '-' . '12' . '-' . date('Y'); ?>"  required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Jumlah Harus Dibayar</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="number" name="biaya" placeholder="Jumlah Harus Dibayar" value="hasil" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-9 ml-sm-auto">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                    <button class="btn btn-danger" type="button" onclick="window.history.back()">Batal</button>
                                    <button class="btn btn-warning" type="reset" value="Reset">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <script>
                $('#biaya').val(hasil);
                function parseDate(str) {
                    var mdy = str.split('/');
                    return new Date(mdy[2], mdy[0] - 1, mdy[1]);
                }

                function datediff(first, second) {
                    // Take the difference between the dates and divide by milliseconds per day.
                    // Round to nearest whole number to deal with DST.
                    return Math.round((second - first) / (1000 * 60 * 60 * 24));
                }

                    var first = document.getElementById("tgl_masuk");
                    var second = document.getElementById("tgl_keluar");
                    var hari = datediff(parseDate(first.value), parseDate(second.value));
                    var harga = <?= $kamar->harga / 30 ?> ;
                    var hasil = hari * harga;
                    document.getElementsByName("biaya").value = hasil;
                
            </script>
            <!-- END PAGE CONTENT-->