<?php
require base_path("views/partials/header.php");
require base_path("views/partials/nav.php");
?>
<div class="container">
    <div class="filter">
        <details class="dropdown">
            <summary role="button">
                Folders
            </summary>
            <ul>
                <li>
                    <a href="/passwords" <?= empty($currentFolder) ? 'aria-current="true"' : '' //what dis mean??>>All</a> 
                </li>
                <?php foreach ($folders as $folder) : ?>
                    <li>
                        <a href="/passwords?folder_id=<?= $folder['id'] ?>" <?= ($currentFolder && (int)$currentFolder === (int)$folder['id']) ? 'aria-current="true"' : '' //and dis??>>
                            <?= htmlspecialchars($folder['folder_name']) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </details>
    </div>
    <div>
        <h2>Saved passwords:</h2>
            <div>
                <?php foreach ($notes as $note) : ?>
                    <li class="password-list">
                        <button class="outline contrast">
                            <a href="/password?id=<?=$note['id'] ?>">
                                <?= htmlspecialchars($note['name']) ?>
                            </a>
                        </button>
                    </li>
                <?php endforeach; ?>
            </div>
        <a role="button" href="/passwords/create">Create</a>
    </div>
</div>


<?php
require base_path("views/partials/footer.php");
?>