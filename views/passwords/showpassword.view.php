<?php
require base_path("views/partials/header.php");
require base_path("views/partials/nav.php");
?>

<div class="container">
    <div>
        <h1><?= $note['name'] ?></h1>
        <h1><?= $note['login_data'] ?></h1>
        <h1><?= $note['password'] ?></h1>
    </div>
    <div class="buttons">
        <a href="/password/edit?id=<?= $note['id'] ?>">Edit</a>
        <a href="password/delete">Delete</a>
    </div>
</div>

<?php
require base_path("views/partials/footer.php");
?>