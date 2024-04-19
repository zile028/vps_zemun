<?php require_once __DIR__ . "/../partials/top.php"; ?>
<?php require_once __DIR__ . "/../partials/sidebar.php"; ?>
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <h4>ДОДАЈ СТУДИЈСКИ ПРОГРАМ</h4>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <div class="card">
        <form class="form-horizontal" action="/dashboard/studije/sp/dodaj" method="post"
              enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group row">
                    <label for="nivo" class="col-sm-3 text-end control-label
                    col-form-label">Ниво</label>
                    <div class="col-sm-9">
                        <input
                                type="text"
                                class="form-control"
                                id="nivo"
                                placeholder="Ниво"
                                name="nivo"
                        />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-end control-label
                    col-form-label">Назив</label>
                    <div class="col-sm-9">
                        <input
                                type="text"
                                class="form-control"
                                id="fname"
                                placeholder="Назив"
                                name="naziv"
                        />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="modul" class="col-sm-3 text-end control-label
                    col-form-label">Модул</label>
                    <div class="col-sm-9">
                        <input
                                type="text"
                                class="form-control"
                                id="modul"
                                placeholder="Модул"
                                name="modul"
                        />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="trajanje" class="col-sm-3 text-end control-label
                    col-form-label">Трајање (година)</label>
                    <div class="col-sm-9">
                        <input
                                type="text"
                                class="form-control"
                                id="trajanje"
                                placeholder="Трајање (година)"
                                name="trajanje"
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
                    <label for="zvanje" class="col-sm-3 text-end control-label
                    col-form-label">Звање</label>
                    <div class="col-sm-9">
                        <input
                                type="text"
                                class="form-control"
                                id="zvanje"
                                placeholder="Звање"
                                name="zvanje"
                        />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="polje" class="col-sm-3 text-end control-label
                    col-form-label">Образовно поље</label>
                    <div class="col-sm-9">
                        <input
                                type="text"
                                class="form-control"
                                id="polje"
                                placeholder="Образовно поље"
                                name="polje"
                        />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="akreditovan" class="col-sm-3 text-end control-label
                    col-form-label">Година акредитације</label>
                    <div class="col-sm-9">
                        <input
                                type="text"
                                class="form-control"
                                id="akreditovan"
                                placeholder="Година акредитације"
                                name="akreditovan"
                        />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="cilj" class="col-sm-3 text-end control-label
                    col-form-label">Циљ</label>
                    <div class="col-sm-9">
                        <textarea
                                rows="10"
                                class="form-control"
                                id="cilj"
                                placeholder="Циљ"
                                name="cilj"
                        ></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="opis" class="col-sm-3 text-end control-label
                    col-form-label">Опис</label>
                    <div class="col-sm-9">
                        <textarea
                                rows="10"
                                class="form-control"
                                id="opis"
                                placeholder="Опис"
                                name="opis"
                        ></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ishod" class="col-sm-3 text-end control-label
                    col-form-label">Исход</label>
                    <div class="col-sm-9">
                        <textarea
                                rows="10"
                                class="form-control"
                                id="ishod"
                                placeholder="Исход"
                                name="ishod"
                        ></textarea>
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