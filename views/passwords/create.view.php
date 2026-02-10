<?php
require base_path("views/partials/header.php");
require base_path("views/partials/nav.php");
?>
<div class="container">
    <h2>Create note</h2>
    <form method="POST" action="/passwords/create">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?= htmlspecialchars($_POST['name'] ?? '') ?>">
        </div>

        <div class="form-group">
            <label for="login-data">Login data</label>
            <input type="text" name="login-data" id="login-data" value="<?= htmlspecialchars($_POST['login-data'] ?? '') ?>">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value="<?= htmlspecialchars($_POST['password'] ?? '') ?>">
        </div>

        <p>
            <button type="submit">Submit</button>
        </p>
    </form>
</div>

<?php
require base_path("views/partials/footer.php");
?>