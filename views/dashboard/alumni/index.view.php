<?php require_once __DIR__ . '/../partials/top.php'; ?>
    <!--  -->
<?php require_once __DIR__ . '/../partials/sidebar.php'; ?>

    <!-- =============================== =============================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <h4>АЛУМНИ КЛУБ</h4>
    <div class="card p-3">
        <form action="/dashboard/alumni" class="row" method="post" enctype="multipart/form-data">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <label for="firstName">Име</label>
                <input class="form-control" id="firstName" type="text" name="firstName"
                       placeholder="Име">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <label for="lastName">Презиме</label>
                <input class="form-control" id="lastName" type="text" name="lastName"
                       placeholder="Презиме">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <label for="spID">Студијски програм</label>
                <select name="spID" id="spID" class="form-control">
                    <?php foreach ($studije as $nivo => $studijski) : ?>
                        <optgroup label="<?php echo $nivo; ?>">
                            <?php foreach ($studijski as $sp) : ?>
                                <option value="<?php echo $sp->id; ?>"><?php echo $sp->spNaziv;
                                    ?></option>
                            <?php endforeach; ?>
                        </optgroup>

                    <?php endforeach; ?>

                </select>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <label for="godina">Година дипломирања</label>
                <input class="form-control" id="godina" type="text"
                       pattern="[1-2][0-9][0-9][0-9]" name="diplomirao"
                       placeholder="0000"
                       inputmode="numeric"
                >
            </div>
            <div class="col-lg-9 col-md-8 col-sm-6">
                <label for="tema">Тема</label>
                <input class="form-control" id="tema" type="text"
                       name="tema"
                       placeholder="Тема"
                >
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <label for="poslodavac">Послодавац</label>
                <input list="listPoslodavac" class="form-control" id="poslodavac" type="text"
                       name="poslodavac"
                       placeholder="Послодавац">
                <datalist id="listPoslodavac">
                    <?php foreach ($poslodavci as $poslodavac) : ?>
                        <option value="<?php echo $poslodavac; ?>"></option>
                    <?php endforeach; ?>
                </datalist>


            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <label for="posao">Посао</label>
                <input class="form-control" id="posao" type="text" name="posao"
                       placeholder="Посао">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <label for="social">Социјалан мрежа</label>
                <input class="form-control" id="social" type="url" name="social"
                       placeholder="Социјалан мрежа">
            </div>

            <div class="col-12 mt-3">
                <div class="row mx-0 gap-2">
                    <label class="btn btn-warning col-md-auto m-0" for="profile">Додај
                        нову
                        слику</label>
                    <input type="file" class="d-none" name="image" id="profile">
                    <select class="form-control col-md" name="mediaID" id="">
                        <option value="" disabled selected>Одабери слику</option>
                        <?php foreach ($media as $image) : ?>
                            <option value="<?php echo $image->id; ?>"><?php echo
                                $image->fileName; ?></option>
                        <?php endforeach; ?>

                    </select>

                    <button class="btn btn-primary col-md-auto">Додај</button>
                </div>
            </div>
        </form>
    </div>


    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->

    <!--  -->
<?php require_once __DIR__ . '/../partials/bottom.php'; ?>