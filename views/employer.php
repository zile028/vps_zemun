<?php require_once "partials/top.php" ?>
<?php require_once "partials/hero_pages.php" ?>
    <!-- TEACHER SINGLE -->
    <section class="single container py">
        <article class="courses">
            <h2><?php echo $nastavnik["title"] . " " . $nastavnik["firstName"] . " " .
                    $nastavnik["lastName"]; ?></h2>
            <cite><?php echo $nastavnik["rank"]; ?></cite>
            <?php echo $nastavnik["description"]; ?>
        </article>
        <aside class="teacher">
            <div class="card">
                <img src="<?php uploadPath($nastavnik["image"]); ?>"
                     alt="<?php echo $nastavnik["title"] ?>">
                <div class="card-body">
                    <a href="<?php echo $nastavnik["email"]; ?>"><i class="fas
                    fa-envelope"></i>
                        <?php echo $nastavnik["email"]; ?>
                    </a>
                </div>
            </div>
        </aside>
    </section>
<?php require_once "partials/bottom.php" ?>