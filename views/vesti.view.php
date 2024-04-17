<?php require_once "partials/top.php" ?>
<?php require_once "partials/hero_pages.php" ?>
    <!-------- NEWS -------->

    <section class="single container py">
        <article class="news">
            <?php foreach ($vesti as $vest) : ?>
                <div class="card">
                    <img src="<?php uploadPath($vest->storeName); ?>" alt="">
                    <div class="card-body">
                        <h4><?php echo $vest->naslov; ?></h4>
                        <span><?php dateDDMMYYY($vest->createdAt); ?> | </span>
                        <span><?php echo $vest->autor; ?></span>
                        <div>
                            <?php echo getExcerpt($vest->description); ?>
                        </div>
                        <a href="vesti/<?php echo $vest->id; ?>" class="btn btn-sm">Више</a>
                    </div>
                </div>
            <?php endforeach; ?>

        </article>
        <aside class="categories">
            <?php include "partials/last_news.php" ?>
        </aside>
    </section>
<?php require_once "partials/bottom.php" ?>