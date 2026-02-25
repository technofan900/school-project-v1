<?php
require base_path("views/partials/header.php");
require base_path("views/partials/nav.php");

$noteId = $note['id'] ?? ($_GET['id'] ?? null);
?>

<div class="container">
    <dialog id="modal" open>
      <article>
        <header>
          <h1>Are you sure?</h1>
        </header>

        <p>This will permanently delete "<?= htmlspecialchars($note['name'] ?? '') ?>".</p>

        <form method="POST" action="/passwords">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= htmlspecialchars($noteId) ?>">
            <button type="submit" class="danger">Delete</button>
            <a class="button" href="/password?id=<?= htmlspecialchars($noteId) ?>">Cancel</a>
        </form>

      </article>
    </dialog>
</div>

<?php
require base_path("views/partials/footer.php");
?>