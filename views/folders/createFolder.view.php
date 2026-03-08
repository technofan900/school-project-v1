<?php
require base_path("views/partials/header.php");
require base_path("views/partials/nav.php");
?>

<div class="container">
    <dialog id="modal" open>
      <article>
        <header>
          <h1>Create folder</h1>
        </header>

        <form method="POST" action="/folder">
            <label for="folder_name">Name</label>
            <input type="text" name="folder_name" id="folder_name" value="<?= htmlspecialchars($_POST['folder_name'] ?? '') ?>">
            <button type="submit">Submit</button>
            <a class="button" href="/passwords">Cancel</a>
        </form>

      </article>
    </dialog>
</div>

<?php
require base_path("views/partials/footer.php");
?>