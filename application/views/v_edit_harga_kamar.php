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
                        <form class="form-horizontal" action="<?= base_url('aksi-edit-harga-kamar') ?>" method="post">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Lantai</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="lantai" value="<?= $kamar->lantai ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">No. Kamar</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="no_kamar" value="<?= $kamar->no_kamar ?>" readonly>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Harga Awal per Bulan</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="harga_awal" value="<?= 'Rp'.number_format($kamar->harga, 2, ',', '.') ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Harga Baru per Bulan</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="number" name="harga" placeholder="Harga Baru" max=10000000 required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-9 ml-sm-auto">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                    <button class="btn btn-danger" type="button" onclick="window.history.back()">Batal</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT-->
