<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="title">
  <h1>Welcome to Page 2</h1>
  <p>Click the button to go back to Page 1.</p>
</div>

<div class="button-container">
  <!-- Button that redirects back to Page 1 -->
  <a href="/page-one">
    <button class="btn-redirect">Go to Page 1</button>
  </a>
</div>

<?= $this->endSection(); ?>
