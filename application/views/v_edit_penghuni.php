            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Edit Penghuni</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">

                        <form class="form-horizontal" action="<?= base_url('aksi-edit-penghuni') ?>" method="post">
                                <input type="hidden" name="id_penghuni" value="<?= $penghuni->id ?>">
                                <div class="form-group row pk">
                                    <label class="col-sm-3 col-form-label">No. Kamar</label>
                                    <div class="col-sm-9">
                                        <select class="form-control select2_kamar form_pindah" name="no_kamar" required>
                                            <?php foreach ($kamar as $kamar){ ?>
                                            <option value="<?= $kamar->no_kamar ?>" <?php if ($kamar->no_kamar == $penghuni->no_kamar) echo 'selected'?> <?php if ($kamar->no_kamar != $penghuni->no_kamar and $kamar->jml_penghuni == '1') echo 'disabled' ?>><?= $kamar->no_kamar ?> <?php if ($kamar->no_kamar != $penghuni->no_kamar and $kamar->jml_penghuni == '1') echo '(Sudah Terisi)' ?> <?php if ($kamar->no_kamar == $penghuni->no_kamar) echo '(Kamar Sekarang)' ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="nama" id="nama" placeholder="Nama Lengkap Penghuni" value="<?= $penghuni->nama ?>" maxlength="200" oninput="this.value = this.value.replace(/[^a-z A-Z ' .]/g, '');" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">No. KTP</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="no_ktp" id="no_ktp" placeholder="No. KTP Penghuni" value="<?= $penghuni->no_ktp ?>" maxlength="50" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Alamat Asal</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="alamat" placeholder="Alamat Asal Penghuni" value="<?= $penghuni->alamat ?>" maxlength="200">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">No. Telp/HP</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="no" placeholder="No. Telp/HP Penghuni" value="<?= $penghuni->no ?>" maxlength="30" oninput="this.value = this.value.replace(/[^0-9 +]/g, '');">
                                    </div>
                                </div>
                                <div class="form-group row" id="tgl_huni">
                                    <label class="col-sm-3 col-form-label">Masa Huni</label>
                                    <div class="col-sm-9 input-daterange input-group" id="datepicker">
                                        <input class="input-sm form-control" type="text" name="tgl_masuk" id="tgl_masuk" placeholder="Pilih Tanggal Masuk" value="<?= $penghuni->tgl_masuk ?>" autocomplete="off">
                                        <span class="input-group-addon p-l-10 p-r-10">s.d.</span>
                                        <input class="input-sm form-control" type="text" name="tgl_keluar" id="tgl_keluar" placeholder="Pilih Tanggal Keluar" value="<?= $penghuni->tgl_keluar ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Jumlah Harus Dibayar</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="biaya" value="<?= $penghuni->biaya ?>">
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
