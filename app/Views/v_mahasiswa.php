<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <table border="1" cellpadding="5">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
        </tr>
        <?php foreach ($mahasiswa as $mhs): ?>
        <tr>
            <td><?= $mhs->nim ?></td>
            <td><?= $mhs->nama ?></td>
            <td><?= $mhs->prodi ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
