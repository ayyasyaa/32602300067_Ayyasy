<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Layouting' ?></title>

    <!-- Google Font + Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

    <div class="navbar">
        <div class="navbar-page">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Me</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="navbar-sosmed">
            <ul>
                <li><i class="fa-brands fa-linkedin"></i> LinkedIn</li>
                <li><i class="fa-brands fa-instagram"></i> Instagram</li>
                <li><i class="fa-brands fa-facebook"></i> Facebook</li>
                <li><i class="fa-brands fa-whatsapp"></i> WhatsApp</li>
            </ul>
        </div>
    </div>

    <?= $this->renderSection('content') ?>

</body>
</html>
