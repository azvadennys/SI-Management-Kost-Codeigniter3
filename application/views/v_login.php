<body>
    <h1 class="text-light">Login ke Management Kost</h1>
    <div class=" w3l-login-form">
        <h2 class="text-danger">Login Akun</h2>
        <?php
            switch ($pesan) {
                case 'gagal_login':
                    echo '<div class="flash-message gagal-login">Username dan password tidak cocok.</div>';
                    break;
                case 'berhasil_logout':
                    echo '<div class="flash-message berhasil-logout">Berhasil keluar dari sistem.</div>';
                    break;
                case 'berhasil_ubah_pass':
                    echo '<div class="flash-message berhasil-ubah">Berhasil mengubah password. Silakan login lagi.</div>';
                    break;
            }
            ?>
        <form id="login-form" action="<?= base_url('aksi-login') ?>" method="post">
            <div class=" w3l-form-group">
                <label>Username:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" class="form-control" placeholder="Username" minlength="4" maxlength="16" required>
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
            </div>
            
            <div class="forgot">
                <?php echo anchor('auth/forget-password', ' '); ?>
                <p><input type="checkbox" name="remember_me" value="1">Ingat saya</p>
            </div>
            <button type="submit">Login</button>
            <?php echo form_close(); ?>
    </div>

    <footer>
        <p class="copyright-agileinfo"> &copy; 2018 Material Login Form. All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
    </footer>