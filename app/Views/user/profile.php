<?= $this->extend('layout'); ?>

<?= $this->section('content'); ?>
    <div class="ps-2">
        <h2 class="mb-4" style="color: #012970; font-weight: 700;">Detail Profil</h2>
        
        <ul style="list-style-type: disc; line-height: 2.5; padding-left: 20px; font-size: 16px; color: #444;">
            <li><strong>Username:</strong> <?= esc($user['username']) ?></li>
            <li><strong>Role:</strong> <?= esc($user['role']) ?></li>
            <li><strong>Email:</strong> <?= esc($user['email']) ?></li>
            <li><strong>Waktu Login:</strong> <?= esc($user['waktu_login']) ?></li>
            <li><strong>Status Login:</strong> <?= esc($user['status']) ?></li>
        </ul>
    </div>
<?= $this->endSection(); ?>