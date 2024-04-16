<?php require_once __DIR__ . "/../controllers/vesti/last_news.php" ?>
<?php require_once "partials/top.php" ?>
<?php require_once "partials/hero_index.php" ?>
    <!-------- ABOUT -------->
    <section class="about container py">
        <article>
            <div class="title-section">
                <h2>О нама</h2>
            </div>
            <div>
                <p>Одлучити о томе где наставити школовање после средње школе или где се дошколовати
                    уз рад, једна је од највећих животних одлука. Она ће пресудно утицати на ваш
                    даљи живот. ВПШ Земун вам помаже да стекнете неопходна знања и квалификације
                    које су потребне за успех у каријери.
                    Без обзира на то да ли школовање настављате после средње школе или сте одлучили
                    да студирате уз рад или промените каријеру, ми имамо програме који вам могу
                    помоћи да то остварите. Наша предавања почињу од 17 часова и остављају времена и
                    за професионални и за приватни живот.
                    Пет разлога да изаберете ВПШ Београд:</p>
                <ul>
                    <li>Школа се налази у самом срцу Земуна, на два минута од центра и у непосредној
                        близини компанија које запошљавају наше стручне кадрове.
                    </li>
                    <li>Наши школски програми се заснивају на практичном раду и знању које је одмах
                        употребљиво.
                    </li>
                    <li>Професорски кадар обилује пословним и менаџерским искуством које несебично
                        дели са својим студентима кроз примере и практичне задатке.
                    </li>
                    <li>Ми сарађујемо са водећим компанијама како би смо обезбедили да наши програми
                        увек буду у складу са потребама компанија и законодавством.
                    </li>
                    <li>Кроз разраду и анализу примера пословања домаћих и страних компанија,
                        усмеравамо вас ка оним пословима на којима ће те се најбоље показати и који
                        вама највише одговарају.
                    </li>
                </ul>

            </div>
        </article>
        <article>
            <img src="upload/about_us.jpg" alt="o nama VPS Zemun">
        </article>
    </section>

<?php require_once "partials/features.php" ?>

    <section class="courses container py">
        <article class="title-section">
            <h2>Најновије вести</h2>
        </article>

        <article class="wrapper">
            <?php foreach ($najnovije as $vest): ?>
                <div class="card">
                    <img src="<?php uploadPath($vest->storeName); ?>" alt="">
                    <div class="card-body">
                        <span><?php dateDDMMYYY($vest->createdAt); ?></span>
                        <h6><?php echo $vest->naslov; ?></h6>
                        <div><?php echo getExcerpt($vest->description, 10,); ?></div>
                    </div>
                    <div class="card-footer">
                        <a href="/vesti/<?php echo $vest->id; ?>" class="btn btn-sm">Више</a>
                    </div>
                </div>
            <?php endforeach; ?>

        </article>

        <article class="wrapper">
            <a href="/vesti" class="btn">Све вести</a>
        </article>

    </section>

<?php require_once "partials/map.php" ?>


<?php require_once "partials/bottom.php" ?>