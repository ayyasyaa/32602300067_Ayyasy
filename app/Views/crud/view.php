<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="title">
  <h1>Data Mahasiswa</h1>
  <a href="/crud/tambah">
    <button class="button">Tambah Data</button>
  </a>
</div>

<?php if (session()->getFlashdata('success')): ?>
  <div class="alert alert-success">
    <?= session()->getFlashdata('success'); ?>
  </div>
<?php endif; ?>

<div class="table">
  <table border="1" cellspacing="0" cellpadding="10">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Prodi</th>
        <th>No. HP</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php if (empty($mahasiswa)) : ?>
        <tr>
          <td colspan="7">Tidak ada data</td>
        </tr>
      <?php else : ?>
        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $m) : ?>
          <tr>
            <td><?= $i++; ?></td>
            <td><?= $m['nama']; ?></td>
            <td><?= $m['nim']; ?></td>
            <td><?= $m['prodi']; ?></td>
            <td><?= $m['no_hp']; ?></td>
            <td class="action">
              <a href="/crud/hapus/<?= $m['nim']; ?>" onclick="return confirm('Are you sure to delete NIM <?= $m['nim']; ?>?')">
                <button class="btn-delete">Delete</button>
                  </a>
                  <a href="/crud/edit/<?= $m['nim']; ?>">
                <button class="btn-update">Update</button>
              </a>
            </td>
          </tr>
        <?php endforeach; ?>
      <?php endif; ?>
    </tbody>
  </table>
</div>

<?= $this->endSection(); ?>
