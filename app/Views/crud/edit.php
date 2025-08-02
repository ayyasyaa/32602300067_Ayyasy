<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<main>
  <div class="title">
    <h1>Edit Data Mahasiswa</h1>
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
    <form action="/crud/editan" method="POST">
      <div class="input">
        <label for="nim">NIM</label>
        <input type="text" name="nim" id="nim" value="<?= $edit['nim']; ?>" readonly>
      </div>

      <div class="input">
        <label for="newNim">NIM yang baru</label>
        <input type="text" name="newNim" id="newNim">
      </div>

      <div class="input">
        <label for="newNama">Nama yang baru</label>
        <input type="text" name="newNama" id="newNama" value="<?= $edit['nama']; ?>">
      </div>

      <div class="input">
        <label for="newProdi">Prodi yang baru</label>
        <input type="text" name="newProdi" id="newProdi" value="<?= $edit['prodi']; ?>">
      </div>

      <div class="input">
        <label for="newUniversitas">Universitas yang baru</label>
        <input type="text" name="newUniversitas" id="newUniversitas" value="<?= $edit['universitas']; ?>">
      </div>

      <div class="input">
        <label for="newNo_hp">Nomor Handphone yang baru</label>
        <input type="text" name="newNo_hp" id="newNo_hp" value="<?= $edit['no_hp']; ?>">
      </div>

      <div class="button">
        <button type="submit">Update</button>
      </div>
    </form>
  </div>
</main>

<?= $this->endSection(); ?>
