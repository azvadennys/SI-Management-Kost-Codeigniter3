            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title"><?= $judul_halaman ?></div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form class="form-horizontal" action="<?= base_url('aksi-edit-pembayaran') ?>" method="post">
                                <input type="hidden" name="id_pembayaran" value="<?= $pembayaran->id_pembayaran ?>">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">No. Kamar</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="no_kamar"  placeholder="No. Kamar" value="<?= $pembayaran->no_kamar ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Penghuni</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="nama" value="<?= $pembayaran->nama ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">No. KTP</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="no_ktp" value="<?= $pembayaran->no_ktp ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row" id="tgl_bayar">
                                    <label class="col-sm-3 col-form-label">Tanggal Transaksi</label>
                                    <div class="col-sm-9 input-group date">
                                        <input class="form-control" type="text" name="tgl_bayar" id="form_tgl_bayar" placeholder="Pilih Tanggal Transaksi" value="<?= $pembayaran->tgl_bayar ?>" autocomplete="off" required>
                                        <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Jumlah Pembayaran</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="number" name="bayar" placeholder="Masukkan Jumlah Pembayaran" value="<?= $pembayaran->bayar ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Keterangan</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="ket" placeholder="Keterangan Pembayaran" value="<?= $pembayaran->ket ?>">
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
            <!-- END PAGE CONTENT-->
