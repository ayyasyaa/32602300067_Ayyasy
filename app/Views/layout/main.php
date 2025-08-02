<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?? 'Halaman Saya' ?></title>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <!-- CSS Lokal -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

    <style>
        body { font-family: Arial; margin: 0; padding: 0; }
        header, nav, footer { background: #f0f0f0; padding: 10px; }
        main { padding: 20px; }
        nav a { margin-right: 10px; text-decoration: none; }
    </style>
</head>
<body>
    <header>
        <h1><i class="fas fa-laptop-code"></i> Website Saya</h1>
    </header>
    <nav>
        <a href="<?= base_url('profil') ?>"><i class="fas fa-user"></i> Profil</a>
        <a href="<?= base_url('pengalaman') ?>"><i class="fas fa-briefcase"></i> Pengalaman</a>
    </nav>
    <main>
        <?= $this->renderSection('content') ?>
    </main>
    <footer>
        <p>
            <i class="far fa-copyright"></i> 
            <?= date('Y') ?> - Dibuat oleh Ayyasy 
            <span style="float:right;">
                <i class="fab fa-github"></i> 
                <i class="fab fa-instagram"></i>
            </span>
        </p>
    </footer>
</body>
</html>
