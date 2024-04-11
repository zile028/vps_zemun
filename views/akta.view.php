<?php require_once "partials/top.php" ?>
<?php require_once "partials/hero_pages.php" ?>
    <section class="container py">
        <?php if (count($dokumenta) > 0): ?>
            <table class="curiculum-table">
                <thead>
                <tr>
                    <th>Р.Б.</th>
                    <th>Документ</th>
                    <th>Датум објаве</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($dokumenta as $index => $dokument): ?>
                    <tr>
                        <td>

                            <?php echo $index + 1; ?>
                            
                        </td>
                        <td class=""><?php echo $dokument->title; ?></td>
                        <td class=""><?php dateDDMMYYY($dokument->createdAt); ?></td>
                        <td class=""><a href="<?php echo $dokument->attachment; ?>">LINK</a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Нема тренутно докумената.</p>
        <?php endif; ?>

    </section>
<?php require_once "partials/bottom.php" ?>