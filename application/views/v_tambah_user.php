<body>
    <h1 class="text-light">Menambah Akun User</h1>
    <div class=" w3l-login-form">
        <h2 class="text-danger">Tambah Akun</h2>
        <?php if ($pesan == 'gagal_tambah_user') echo '<div class="flash-message">Username sudah digunakan. Coba yang lain.</div>' ?>
        <form id="register-form" action="<?= base_url('aksi-tambah-user') ?>" method="post" novalidate="novalidate">
            <div class=" w3l-form-group">
                <label>Nama Admin :</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Admin" minlength="4" required>
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Username :</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Password :</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input class="form-control" id="password" type="password" name="password" placeholder="Password">
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Konfirmasi Password :</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input class="form-control" type="password" name="konfirmasi_password" placeholder="Konfirmasi Password">
                </div>
            </div>
            <div class=" w3l-form-group">
                <div class="form-group">
                    <button class="btn " type="submit"><strong>Buat Akun</strong></button>
                </div>
            </div>
            <div class=" w3l-form-group">
                <div class="form-group">
                    <button class="btn " type="button" onclick="window.history.back()"><strong>Kembali</strong></button>
                </div>
            </div>
        </form>