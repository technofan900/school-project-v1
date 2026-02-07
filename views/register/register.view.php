<?php
require base_path ("views/partials/header.php");
require base_path ("views/partials/nav.php");
?>
    <div>
      <h2>Register</h2>
      <form method="POST" action="/register">
        <label>
          Username
          <input name="username" type="text" placeholder="" required>
        </label>

        <label>
          E-pasts
          <input name="email" type="email" placeholder="epasts@example.com" required>
          <?php if (isset($errors['email'])) : ?>
            <p class="text-red-400 text-sm"><?= $errors['email'] ?></p>
          <?php endif; ?>
        </label>

        <label>
          Password
          <input id="password" name="password" type="password" placeholder="******" required>
          <?php if (isset($errors['password'])) : ?>
            <p class="text-red-400 text-sm"><?= $errors['password'] ?></p>
          <?php endif; ?>
          <button id="togglePassword" type="button">Show</button>
        </label>

        <button type="submit" name="submit">Nosūtīt</button>
        
      </form>
    </div>
    <div>
      <form method="GET" action="/login">
        <div class="btn-center">
          <h2 class="text-center">Log In</h2>
          <button type="submit" name="log-in">Login</button>
        </div>
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