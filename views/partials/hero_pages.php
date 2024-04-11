<!-------- HEADER -------->

<header class="header">
    <img src="upload/<?php echo $heroImage; ?>" alt="">
    <article>
        <h1><?php echo $heroTitle; ?></h1>
        <?php echo isset($heroSubtitle) ? "<h3>$heroSubtitle</h3>" : "" ?>
    </article>
</header>
