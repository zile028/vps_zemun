<?php require_once __DIR__ . "/../partials/top.php"; ?>
<?php require_once __DIR__ . "/../partials/sidebar.php"; ?>
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <h4>ДОДАЈ ПРЕДМЕТ</h4>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <div class="card">
        <form class="form-horizontal" action="/dashboard/studije/predmet/dodaj" method="post"
              enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group row">
                    <label for="predmet" class="col-sm-3 text-end control-label
                    col-form-label">Предмет</label>
                    <div class="col-sm-9">
                        <input
                                type="text"
                                class="form-control"
                                id="predmet"
                                placeholder="Предмет"
                                name="predmet"
                        />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="sifra" class="col-sm-3 text-end control-label
                    col-form-label">Шифра</label>
                    <div class="col-sm-9">
                        <input
                                type="text"
                                class="form-control"
                                id="sifra"
                                placeholder="Шифра"
                                name="sifra"
                        />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="semestar" class="col-sm-3 text-end control-label
                    col-form-label">Семестар</label>
                    <div class="col-sm-9">
                        <input
                                type="text"
                                class="form-control"
                                id="semestar"
                                placeholder="Семестар"
                                name="semestar"
                        />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="predavanje" class="col-sm-3 text-end control-label
                    col-form-label">Предавање</label>
                    <div class="col-sm-9">
                        <input
                                type="text"
                                class="form-control"
                                id="predavanje"
                                placeholder="Предавање"
                                name="predavanje"
                        />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="vezbe" class="col-sm-3 text-end control-label
                    col-form-label">Вежбе</label>
                    <div class="col-sm-9">
                        <input
                                type="text"
                                class="form-control"
                                id="vezbe"
                                placeholder="Вежбе"
                                name="vezbe"
                        />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="espb" class="col-sm-3 text-end control-label
                    col-form-label">ЕСПБ</label>
                    <div class="col-sm-9">
                        <input
                                type="text"
                                class="form-control"
                                id="espb"
                                placeholder="ЕСПБ"
                                name="espb"
                        />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 text-end">Обавезан/Изборни</label>
                    <div class="col-md-9">
                        <div class="form-check">
                            <input type="radio" class="form-check-input"
                                   id="customControlValidation1" name="obavezan_izborni" checked
                                   required="" value="1">
                            <label class="form-check-label mb-0"
                                   for="customControlValidation1">Обавезан</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input"
                                   id="customControlValidation2" name="obavezan_izborni"
                                   required="" value="0">
                            <label class="form-check-label mb-0"
                                   for="customControlValidation2">Изборни</label>
                        </div>
                    </div>
                </div>


                <div class="form-group row">
                    <span class="col-sm-3 text-end control-label col-form-label"
                    >Студијски програм</span>
                    <div class="col-sm-9">
                        <?php foreach ($studije as $index => $sp): ?>
                            <div class="form-group row align-items-center">
                                <input class="col-auto" id="sp<?php echo $sp->id; ?>"
                                       type="checkbox"
                                       name="spID[]"
                                       value="<?php echo $sp->id; ?>"/>
                                <label class="col m-0"
                                       for="sp<?php echo $sp->id; ?>"><?php echo
                                        $sp->nivo . " - " . $sp->naziv .
                                        ($sp->modul ? " - " . $sp->modul : ""); ?></label>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>


            </div>
            <div class="row border-top">

                <div class="col-sm-9 offset-sm-3">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary">
                            ДОДАЈ
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!--  -->
<?php require_once __DIR__ . "/../partials/bottom.php"; ?>