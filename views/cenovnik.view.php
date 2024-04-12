<?php require_once "partials/top.php" ?>
<?php require_once "partials/hero_pages.php" ?>
    <section class="container py">
        <?php if (count($cenovnik) > 0): ?>
            <table class="table table-document">
                <thead>
                <tr>
                    <th>Р.Б.</th>
                    <th>Услуга</th>
                    <th>Цена</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($cenovnik as $index => $stavka): ?>
                    <tr>
                        <td>
                            <?php echo $index + 1; ?>
                        </td>
                        <td class=""><?php echo $stavka->service; ?></td>
                        <td class=""><?php echo $stavka->price; ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Нема тренутно ценовника.</p>
        <?php endif; ?>

    </section>
<?php require_once "partials/bottom.php" ?>