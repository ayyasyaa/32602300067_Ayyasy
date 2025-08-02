<!DOCTYPE html>
<html>
<head>
    <title>Hasil Form</title>
</head>
<body>
    <h2>Hasil Form:</h2>
    <ul>
        <li><strong>Nama:</strong> <?= esc($nama) ?></li>
        <li><strong>NIM:</strong> <?= esc($nim) ?></li>
        <li><strong>Kelas:</strong> <?= esc($kelas) ?></li>
        <li><strong>Mata Kuliah:</strong> <?= esc($matakuliah) ?></li>
        <li><strong>Dosen:</strong> <?= esc($dosen) ?></li>
        <li><strong>Asisten:</strong> <?= esc($asisten) ?></li>
    </ul>
</body>
</html>
