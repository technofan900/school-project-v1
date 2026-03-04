<?php require base_path('views/partials/header.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<div class="container">
  <h1>Laipni lūdzam!</h1>
  <p>
    Šis ir vienkāršs mājaslapas templates, kas izmanto classless CSS dizainu.
  </p>
  <?php if ($_SESSION['user'] ?? false) : ?>
  <?php else : ?>
  <a role="button" href="/login">Log In</a>
  <?php endif; ?>
</div>
<?php require base_path('views/partials/footer.php'); ?>
