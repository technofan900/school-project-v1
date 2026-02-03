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
        </label>

        <label>
          Password
          <input id="password" name="password" type="password" placeholder="******" required>
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