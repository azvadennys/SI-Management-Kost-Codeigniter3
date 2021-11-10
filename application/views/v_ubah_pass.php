<body>
    <h1 class="text-light">Mengubah Password Akun "<?= "<strong>$username</strong>" ?>"</h1>
    <div class=" w3l-login-form">
        <h2 class="text-danger">Ubah Password</h2>
        <?php if ($pesan == 'gagal_ubah_pass') echo '<div class="flash-message">Password lama tidak benar.</div>' ?>
        <form id="login-form" action="<?= base_url('aksi-ubah-pass') ?>" method="post" novalidate="novalidate">
            <div class=" w3l-form-group">
                <label>Username :</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" value="<?= $username ?>" class="form-control" placeholder="Username" minlength="4" maxlength="16" required readonly>
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Password Lama :</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" name="password" class="form-control" placeholder="Password Lama">
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Password Baru :</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" name="password_baru" class="form-control" placeholder="Password Baru">
                </div>
            </div>
            <div class=" w3l-form-group">
                <div class="form-group">
                    <button class="btn " type="submit"><strong>Submit</strong></button>
                </div>
            </div>
            <div class=" w3l-form-group">
                <div class="form-group">
                    <button class="btn " type="button" onclick="window.history.back()"><strong>Kembali</strong></button>
                </div>
            </div>
    </div>
    </form>
    </div>