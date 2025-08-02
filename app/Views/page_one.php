<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="title">
  <h1>Welcome to Page 1</h1>
  <p>Click the button to go to Page 2.</p>
</div>

<div class="button-container">
  <!-- Button that redirects to Page 2 -->
  <a href="/page-two">
    <button class="btn-redirect">Go to Page 2</button>
  </a>
</div>

<?= $this->endSection(); ?>
