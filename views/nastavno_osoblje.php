<?php require_once "partials/top.php" ?>
<?php require_once "partials/hero_pages.php" ?>
    <!-------- TEACHER -------->

    <section class="teacher container py">
        <article class="title-section">
            <h2>Предавачи струковних студија</h2>
        </article>
        <article class="row">
            <?php for ($i = 0; $i < 6; $i++) : ?>
                <div class="card">
                    <img src="upload/jasmina_radonjic.jpg" alt="">
                    <div class="card-body">
                        <h4>Јасмина<br>Радоњић</h4>
                        <p>Profesor engleskog jezika</p>

                        <a class="email" href="mailto:jasmina@vpsbeograd.edu.rs">jasmina@vpsbeograd.edu
                            .rs</a>

                        <p>631-239-8818</p>
                        <a href="nastavno_osoblje/<?php echo $i; ?>" class="btn btn-sm">View
                            profile</a>
                    </div>
                </div>
            <?php endfor; ?>
        </article>
    </section>

<?php require_once "partials/bottom.php" ?>