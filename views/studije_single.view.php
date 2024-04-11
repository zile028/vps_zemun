<?php require_once "partials/top.php" ?>
<?php require_once "partials/hero_pages.php" ?>

<!-- COURSE SINGLE -->
<section class="single container py">
    <article class="courses">
        <div class="card">
            <img src="img/course-02.jpg" alt="">
            <div class="card-body">
                <h6><?php echo $studije->nivo; ?></h6>
                <h3><?php echo $studije->naziv; ?></h3>
                <h6>Опис</h6>
                <p><?php echo $studije->opis; ?></p>
                <h6>Циљ</h6>
                <p><?php echo $studije->cilj; ?></p>

            </div>
        </div>
    </article>
    <aside class="teacher">
        <div class="card">
            <div class="card-body">
                <ul>
                    <li><span>ЕСПБ</span><span><?php echo $studije->espb; ?></span></li>
                    <li><span>Трајање студија</span><span><?php echo $studije->trajanje; ?></span></li>
                    <li><span>Звање</span><span><?php echo $studije->zvanje; ?></span></li>
                    <li><span>Научно поље</span><span><?php echo $studije->polje; ?></span></li>
                    <li><span>Година акредитације</span><span><?php echo $studije->akreditovan; ?></span></li>
                </ul>
            </div>
        </div>
    </aside>
</section>
<section class="curiculum container">
    <h5>Предмети</h5>
    <?php if (count($predmeti) > 0): ?>
        <table class="curiculum-table">
            <thead>
            <tr>
                <th>Р.Б.</th>
                <th>Шифра</th>
                <th>Предмет</th>
                <th>С</th>
                <th>П + В</th>
                <th>О/И</th>
                <th>ЕСПБ</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($predmeti as $index => $predmet): ?>
                <tr class="<?php echo !$predmet->obavezan_izborni ? "highlight" : ""; ?>">
                    <td>
                        <?php ?>
                        <?php echo $index + 1; ?>
                        <?php ?>
                    </td>
                    <td class="">
                        <?php echo $predmet->sifra; ?>
                    </td>
                    <td class=""><?php echo $predmet->predmet; ?></td>
                    <td class=""><?php echo $predmet->semestar; ?></td>
                    <td class=""><?php echo $predmet->predavanja; ?>+<?php echo $predmet->vezbe; ?></td>
                    <td class=""><?php echo $predmet->obavezan_izborni ? "Обавезан" : "Изборни"; ?></td>
                    <td class=""><?php echo $predmet->espb; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Нема тренутно предмета.</p>
    <?php endif; ?>
</section>

<?php require_once "partials/bottom.php" ?>
