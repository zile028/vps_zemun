<?php require __DIR__ . "/../../controllers/vesti/last_news.php" ?>
<aside class="last-news">
    <h3>
        Најновије вести
    </h3>
    <ul>
        <?php foreach ($najnovije as $vest) : ?>
            <li>
                <a href="/vesti/<?php echo $vest->id; ?>">
                    <?php echo $vest->naslov; ?>
                </a>
            </li>

        <?php endforeach; ?>
    </ul>
</aside>