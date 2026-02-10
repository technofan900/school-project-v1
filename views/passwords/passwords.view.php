<?php
require base_path ("views/partials/header.php");
require base_path ("views/partials/nav.php");
?>
<div class="container">
    <h2>Saved passwords:</h2>
        <?php foreach ($notes as $note) : ?>
            <li>
                <a <?=$note['id'] ?> class="text-blue-500 hover:underline">
                    <?= htmlspecialchars($note['name']) ?>
                </a>
            </li>
        <?php endforeach; ?>
    <a role="button" href="/passwords/create">Create</a>
</div>


<?php
require base_path("views/partials/footer.php");
?>