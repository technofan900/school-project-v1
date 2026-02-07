<?php
require base_path("views/partials/header.php");
require base_path("views/partials/nav.php");
?>
    <div>
      <h2>Log In</h2>
      <form method="POST" action="/login">
        <label>
          Username
          <input name="username" type="text" placeholder="" required>
        </label>

        <label>
          Password
          <input id="password" name="password" type="password" placeholder="******" required>
          <?php if (isset($errors['password'])) : ?>
            <p class="text-red-400 text-sm"><?= $errors['password'] ?></p>
          <?php endif; ?>
          <button id="togglePassword" type="button">Show</button>
        </label>

        <button type="submit">Nosūtīt</button>
      </form>
    </div>

<script>
    (function show_password(){
      const toggle = document.getElementById('togglePassword');
      const pwd = document.getElementById('password');
      if (!toggle || !pwd) return;
      toggle.addEventListener('click', function(){
        if (pwd.type === 'password'){
          pwd.type = 'text';
          this.textContent = 'Hide';
        } else {
          pwd.type = 'password';
          this.textContent = 'Show';
        }
      });
    })();
</script>

<?php
require base_path("views/partials/footer.php");
?>