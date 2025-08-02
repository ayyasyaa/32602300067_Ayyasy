<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="title">
  <h1>Tambah Data Mahasiswa</h1>
</div>

<?php if (session()->getFlashdata('success')): ?>
  <div class="alert alert-success">
    <?= session()->getFlashdata('success'); ?>
  </div>
<?php endif; ?>

<?php if (session()->getFlashdata('error')): ?>
  <div class="alert alert-danger">
    <?= session()->getFlashdata('error'); ?>
  </div>
<?php endif; ?>

<div class="form">
  <form action="/crud/tambah" method="post">
    
    <div class="input">
      <label for="nim">NIM</label>
      <input type="text" id="nim" name="nim" required>
    </div>

    <div class="input">
      <label for="nama">Nama</label>
      <input type="text" id="nama" name="nama" required>
    </div>

    <div class="input">
      <label for="prodi">Prodi</label>
      <input type="text" id="prodi" name="prodi" required>
    </div>

    <div class="input">
      <label for="universitas">Universitas</label>
      <input type="text" id="universitas" name="universitas" required>
    </div>

    <div class="input">
      <label for="no_hp">Nomor Handphone</label>
      <input type="text" id="no_hp" name="no_hp" required>
    </div>

    <div class="button">
      <button type="submit">Submit</button>
    </div>

  </form>
</div>

<?= $this->endSection(); ?>
