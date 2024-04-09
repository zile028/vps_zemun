<?php require_once __DIR__ . "/../partials/top.php"; ?>
<?php require_once __DIR__ . "/../partials/sidebar.php"; ?>
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <h4>ПРЕДМЕТИ</h4>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    
<?php if (count($predmeti) > 0): ?>
    <?php require_once "predmeti_table.php" ?>
<?php else: ?>
    <p>Тренутно нема предмета.</p>
<?php endif; ?>
    <!--  -->
<?php require_once __DIR__ . "/../partials/bottom.php"; ?>