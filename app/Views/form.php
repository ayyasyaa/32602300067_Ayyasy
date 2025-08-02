<!DOCTYPE html>
<html>
<head>
    <title>Form Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        form {
            max-width: 100%;
        }
        input[type="text"] {
            width: 100%; /* Ini yang bikin kolom full sampai pojok */
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }
        button {
            padding: 10px 20px;
        }
    </style>
</head>
<body>
    <h2>Form Input Data Mahasiswa</h2>
    <form method="post" action="<?= base_url('submit') ?>">
        <label>Nama:</label>
        <input type="text" name="nama" required>

        <label>NIM:</label>
        <input type="text" name="nim" required>

        <label>Kelas:</label>
        <input type="text" name="kelas" required>

        <label>Mata Kuliah:</label>
        <input type="text" name="matakuliah" required>

        <label>Dosen:</label>
        <input type="text" name="dosen" required>

        <label>Asisten:</label>
        <input type="text" name="asisten" required>

        <button type="submit">Kirim</button>
    </form>
</body>
</html>
