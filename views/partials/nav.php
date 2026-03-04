
  <header>
    <nav class="container">
      <ul>
        <li><a href="/"><strong>Mana Mājaslapa</strong></a></li>
      </ul>
      <ul>
        <li><a href="/">Sākums</a></li>
        <li><a href="/about">About</a></li>
        <?php if ($_SESSION['user'] ?? false) : ?>
        <li><a href="/passwords">Passwords</a></li>
        <?php endif; ?>
          <?php if ($_SESSION['user'] ?? false) : ?>
            <form action="/login" method="POST">
              <input type="hidden" name="_method" value="DELETE">
              <li><button class="register">Logout</button></li>
            </form>
          <?php else : ?>
            <li><a class="register" href="/register">Register</a></li>
          <?php endif; ?>
          <li>
            <label class="switch" title="Toggle theme">
              <input id="theme-switch" type="checkbox" role="switch" aria-label="Toggle theme">
            </label>
          </li>
      </ul>
    </nav>
  </header> 