<?php require_once __DIR__ . "/../partials/top.php"; ?>
<?php require_once __DIR__ . "/../partials/sidebar.php"; ?>
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <h4>СТУДИЈСКИ ПРОГРАМ - <?php echo $sp->naziv; ?></h4>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <div class="card container-fluid">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            Студијски програм: <span
                                    class="fw-bold"><?php echo $sp->naziv; ?></span>
                        </li>
                        <li class="list-group-item">
                            Модул: <span class="fw-bold"><?php echo $sp->modul; ?></span></li>
                        <li class="list-group-item">Ниво: <span
                                    class="fw-bold"><?php echo $sp->nivo; ?></span></li>
                        <li class="list-group-item">Трајање: <span
                                    class="fw-bold"><?php echo $sp->trajanje; ?></span></li>
                    </ul>
                    <h6>Опис</h6>
                    <p><?php echo $sp->opis; ?></p>
                </div>
                <div class="col-md-6">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Број ЕСПБ: <span
                                    class="fw-bold"><?php echo $sp->espb; ?></span></li>
                        <li class="list-group-item">Звање: <span
                                    class="fw-bold"><?php echo $sp->zvanje; ?></span></li>
                        <li class="list-group-item">
                            Образовно поље: <span class="fw-bold"><?php echo $sp->polje; ?></span>
                        </li>
                        <li class="list-group-item">
                            Година акредитације: <span
                                    class="fw-bold"><?php echo $sp->akreditovan; ?></span></li>
                    </ul>
                    <h6>Циљ</h6>
                    <p><?php echo $sp->cilj; ?></p>
                </div>
                <div class="col-md-12">
                    <h6>Исход</h6>
                    <p><?php echo $sp->ishod; ?></p>
                </div>
            </div>
        </div>
    </div>
<?php if (count($slobodniPredmeti) > 0): ?>
    <div class="card">
        <div class="card-body">
            <h6>Додај предмет</h6>
            <form action="/dashboard/studije/sp/<?php echo $sp->id; ?>/predmet" class="row"
                  method="post">
                <input type="hidden" name="_method" value="put">
                <input type="hidden" name="redniBroj" value="<?php echo count($predmeti) + 1; ?>">
                <div class="col-md-5">
                    <select id="predmetID" class="form-control" name="predmetID">
                        <?php foreach ($slobodniPredmeti as $predmet) : ?>
                            <option value="<?php echo $predmet->id; ?>">
                                <?php echo $predmet->predmet; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md d-flex gap-2 align-items-center">
                    <input class="form-control" type="text" name="semestar" placeholder="Семестар">
                </div>
                <div class="col-md d-flex gap-2 align-items-center">
                    <label for="izborni" class="form-check-label mb-0 pb-0">Изборни</label>
                    <input type="checkbox" class="form-check-input" value="1" name="izborni">
                </div>
                <div class="col-md">
                    <button class="btn btn-primary form-control" type="submit">ДОДАЈ ПРЕДМЕТ
                    </button>
                </div>
            </form>
        </div>
    </div>
<?php endif; ?>
<?php if (count($predmeti) > 0): ?>
    <?php require_once "predmeti_table.php" ?>
<?php else: ?>
    <p>Тренутно нема предмета.</p>
<?php endif; ?>
    <!--  -->
<?php require_once __DIR__ . "/../partials/bottom.php"; ?>