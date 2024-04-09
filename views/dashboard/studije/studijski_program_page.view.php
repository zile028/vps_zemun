<?php require_once __DIR__ . "/../partials/top.php"; ?>
<?php require_once __DIR__ . "/../partials/sidebar.php"; ?>
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <h4>СТУДИЈСКИ ПРОГРАМ - <?php echo $sp->naziv; ?></h4>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <div class="card">
        <div class="row">
            <div class="col-md-6">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        Студијски програм: <span class="fw-bold"><?php echo $sp->naziv; ?></span></li>
                    <li class="list-group-item">
                        Модул: <span class="fw-bold"><?php echo $sp->modul; ?></span></li>
                    <li class="list-group-item">Ниво: <span class="fw-bold"><?php echo $sp->nivo; ?></span></li>
                    <li class="list-group-item">Трајање: <span class="fw-bold"><?php echo $sp->trajanje; ?></span></li>
                </ul>
                <h6>Опис</h6>
                <p><?php echo $sp->opis; ?></p>
            </div>
            <div class="col-md-6">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Број ЕСПБ: <span class="fw-bold"><?php echo $sp->espb; ?></span></li>
                    <li class="list-group-item">Звање: <span class="fw-bold"><?php echo $sp->zvanje; ?></span></li>
                    <li class="list-group-item">
                        Образовно поље: <span class="fw-bold"><?php echo $sp->polje; ?></span></li>
                    <li class="list-group-item">
                        Година акредитације: <span class="fw-bold"><?php echo $sp->akreditovan; ?></span></li>
                </ul>
                <h6>Циљ</h6>
                <p><?php echo $sp->cilj; ?></p>
            </div>
        </div>
    </div>
<?php if (count($predmeti) > 0): ?>
    <?php require_once "predmeti_table.php" ?>
<?php else: ?>
    <p>Тренутно нема предмета.</p>
<?php endif; ?>
    <!--  -->
<?php require_once __DIR__ . "/../partials/bottom.php"; ?>