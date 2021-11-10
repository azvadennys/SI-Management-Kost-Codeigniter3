            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">
                            <a class="btn btn-block btn-primary active tambah-kamar " href="<?= base_url('tambah-kamar') ?>">
                                <span class="fa fa-home"></span> Tambah Kamar
                            </a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <table class="table table-striped table-bordered table-hover" id="tabel-responsif" cellspacing="0" width="100%">
                            <thead class="thead-default">
                                <tr>
                                    <th class="text-center" style="width: 24.5px">No.</th>
                                    <th class="text-center">Lantai</th>
                                    <th class="text-center">No. Kamar</th>
                                    <th class="text-center">Harga per Bulan</th>
                                    <th class="text-center">Harga per Tahun</th>
                                    <th class="text-center">Status Kamar</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($kamar as $kamar) { ?>
                                    <tr>
                                        <td class="text-center"><?= $no++ ?></td>
                                        <td class="text-center"><?= 'Lantai ' . $kamar->lantai ?></td>
                                        <td class="text-center"><?= $kamar->no_kamar ?></td>
                                        <td class="text-center"><?= 'Rp' . number_format($kamar->harga, 2, ',', '.') ?></td>
                                        <td class="text-center"><?= 'Rp' . number_format(12 * $kamar->harga, 2, ',', '.') ?></td>
                                        <td class="text-center">
                                            <?= $kamar->jml_penghuni == '1' ? '<span class="badge badge-danger">Sudah Berpenghuni</span>' : '<span class="badge badge-default">Belum Berpenghuni</span>' ?>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-success active edit-huni" href="<?= base_url('tambah-penghuni/' . $kamar->no_kamar) ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tambah Penghuni">
                                                <span class="fa fa-plus"></span>
                                            </a>
                                            <a class="btn btn-sm btn-info active edit-huni" href="<?= base_url('edit-harga-kamar/' . $kamar->no_kamar) ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ubah Harga">
                                                <span class="fa fa-pencil"></span>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT-->