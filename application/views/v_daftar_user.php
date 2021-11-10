            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">
                            <a class="btn btn-block btn-primary active tambah-user "href="<?= base_url('tambah-user') ?>">
                                <span class="fa fa-user"></span> Tambah User
                            </a>

                        </div>
                    </div>
                    <div class="ibox-body">
                        <table class="table table-striped table-bordered table-hover" id="tabel-user" cellspacing="0" width="100%">
                            <thead class="thead-default">
                                <tr>
                                    <th class="text-center" style="width: 24.5px">No.</th>
                                    <th class="text-center">Nama Admin</th>
                                    <th class="text-center">Username</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($user as $user) { ?>
                                    <tr>
                                        <td class="text-center"><?= $no++ ?></td>
                                        <td class="text-center"><?= $user->nama ?></td>
                                        <td class="text-center"><?= $user->username ?></td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-danger active hapus-user" id="<?= $user->username ?>">
                                                <span class="fa fa-trash"></span> Hapus
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