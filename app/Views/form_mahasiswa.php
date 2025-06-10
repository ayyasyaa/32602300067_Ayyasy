<!DOCTYPE html>
    <title>Form Mahasiswa</title>
</head>
<body>
    <h2>Form Tambah Mahasiswa</h2>
    <form action="/simpan" method="post">
        <label>NIM</label><br>
        <input type="text" name="nim" required><br><br>

        <label>Nama</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Prodi</label><br>
        <input type="text" name="prodi" required><br><br>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>
