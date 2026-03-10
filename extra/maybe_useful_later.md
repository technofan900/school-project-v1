nav.container {
display: flex;
align-items: center;
justify-content: space-between;
}
nav.container ul {
display: flex;
gap: 1rem;
margin: 0;
padding: 0;
list-style: none;
}


                <?php foreach ($notes as $note) : ?>
                    <li class="password-list">
                        <button class="outline contrast">
                            <a href="/password?id=<?=$note['id'] ?>">
                                <?= htmlspecialchars($note['name']) ?>
                            </a>
                        </button>
                    </li>
                <?php endforeach; ?>