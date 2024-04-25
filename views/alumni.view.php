<?php require_once __DIR__ . "/partials/top.php" ?>
<?php require_once __DIR__ . "/partials/hero_pages.php" ?>
    <section class="alumni teacher container py">
        <article class="">
            <?php foreach ($alumnisti as $student) : ?>
                <div class="card">
                    <img src="<?php is_null($student->storeName) ? uploadPath("avatar.png") : uploadPath($student->storeName); ?>"
                         alt="<?php echo
                         $student->firstName; ?>">
                    <div class="card-body">
                        <h5><?php echo "$student->firstName $student->lastName"; ?></h5>
                        <p><?php echo $student->spNaziv; ?></p>
                        <p><?php echo $student->nivo; ?></p>
                        <a href="/alumni?poslodavac=<?php echo $student->poslodavac; ?>"><?php echo
                            $student->poslodavac; ?></a>
                    </div>
                    <div class="card-footer">
                        <a href="/alumni/<?php echo $student->id; ?>" class="btn btn-sm">Више</a>
                    </div>
                </div>
            <?php endforeach; ?>

        </article>
    </section>
<?php require_once __DIR__ . "/partials/bottom.php" ?>