<?php require_once "partials/top.php" ?>
<?php require_once "partials/hero_pages.php" ?>

<!-------- COURSES -------->

<section class="courses container py">
    <article>
        <?php foreach ($studije as $sp): ?>
            <div class="card row">
                <div class="card-header">
                    <h2><?php echo $sp->naziv; ?></h2>
                    <p><?php echo $sp->nivo; ?></p>
                </div>
                <div class="card-body">
                    <span>Driving, Road Signs</span>
                    <h3>Rules and requirements </h3>
                    <p><?php echo $sp->opis; ?></p>
                    <h4>$100</h4>
                    <a href="course_single.php" class="btn">read more</a>

                </div>
            </div>
        <?php endforeach; ?>
    </article>

</section>


<?php require_once "partials/bottom.php" ?>
