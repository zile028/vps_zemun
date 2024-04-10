<?php require_once __DIR__ . "/../partials/top.php"; ?>
<?php require_once __DIR__ . "/../partials/sidebar.php"; ?>


<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="card">
    <form class="form-horizontal" action="/dashboard/osoblje/dodaj" method="post"
          enctype="multipart/form-data">
        <div class="card-body">
            <h4 class="card-title">Особље/Додавање</h4>
            <div class="form-group row">
                <label for="fname" class="col-sm-3 text-end control-label
                    col-form-label">Име</label
                >
                <div class="col-sm-9">
                    <input
                            type="text"
                            class="form-control"
                            id="fname"
                            placeholder="Име"
                            name="firstName"
                    />
                </div>
            </div>
            <div class="form-group row">
                <label
                        for="lname"
                        class="col-sm-3 text-end control-label col-form-label"
                >Презиме</label
                >
                <div class="col-sm-9">
                    <input
                            type="text"
                            class="form-control"
                            id="lname"
                            placeholder="Презиме"
                            name="lastName"
                    />
                </div>
            </div>
            <div class="form-group row">
                <label
                        for="title"
                        class="col-sm-3 text-end control-label col-form-label"
                >Титула</label
                >
                <div class="col-sm-9">
                    <input
                            type="text"
                            class="form-control"
                            id="title"
                            placeholder="Титула"
                            name="title"
                    />
                </div>
            </div>

            <div class="form-group row">
                <label
                        for="zvanje"
                        class="col-sm-3 text-end control-label col-form-label"
                >Звање</label
                >
                <div class="col-sm-9">
                    <input
                            type="text"
                            class="form-control"
                            id="zvanje"
                            placeholder="Звање"
                            name="rank"
                    />
                </div>
            </div>

            <div class="form-group row">
                <label
                        for="email"
                        class="col-sm-3 text-end control-label col-form-label"
                >Email</label
                >
                <div class="col-sm-9">
                    <input
                            type="email"
                            class="form-control"
                            id="email"
                            placeholder="E-mail"
                            name="email"
                    />
                </div>
            </div>
            <div class="form-group row">
                <label
                        for="status"
                        class="col-sm-3 text-end control-label col-form-label"
                >Статус</label
                >
                <div class="col-sm-9">
                    <select class="form-control" id="status" name="status">
                        <option value="nastavno">Наставно особље</option>
                        <option value="nenastavno">Ненаставно особље</option>
                        <option value="clan">Члан</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-sm-3 col ">
                    <label class="btn btn-warning" for="profile">Одабери
                        слику</label>
                    <label class="btn btn-warning" for="cvAtach">CV</label>
                    <input type="file" class="d-none" name="image" id="profile">
                    <input type="file" class="d-none" name="cv" accept="application/pdf"
                           id="cvAtach">
                </div>
            </div>
            <!-- editor -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Биографија</h4>
                            <div id="toolbar"></div>
                            <!-- Create the editor container -->
                            <div id="editor" style="height: 300px">
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <textarea name="description" style="display: none" id="playground"></textarea>

        </div>
        <div class="border-top">
            <div class="card-body">
                <button type="submit" class="btn btn-primary">
                    Submit
                </button>
            </div>
        </div>
    </form>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->

<!--  -->
<?php require_once __DIR__ . "/../partials/bottom.php"; ?>
