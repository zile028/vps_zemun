<?php require_once 'partials/top.php'; ?>
    <!--  -->
<?php require_once 'partials/sidebar.php'; ?>

    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="card">
        <form class="form-horizontal" action="/dashboard/osoblje/dodaj" method="post"
              enctype="multipart/form-data">
            <div class="card-body">
                <h4 class="card-title">Osoblje - dodavanje</h4>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-end control-label
                    col-form-label">Ime</label
                    >
                    <div class="col-sm-9">
                        <input
                                type="text"
                                class="form-control"
                                id="fname"
                                placeholder="Ime"
                                name="firstName"
                        />
                    </div>
                </div>
                <div class="form-group row">
                    <label
                            for="lname"
                            class="col-sm-3 text-end control-label col-form-label"
                    >Prezime</label
                    >
                    <div class="col-sm-9">
                        <input
                                type="text"
                                class="form-control"
                                id="lname"
                                placeholder="Prezime"
                                name="lastName"
                        />
                    </div>
                </div>
                <div class="form-group row">
                    <label
                            for="title"
                            class="col-sm-3 text-end control-label col-form-label"
                    >Titula</label
                    >
                    <div class="col-sm-9">
                        <input
                                type="text"
                                class="form-control"
                                id="title"
                                placeholder="Titula"
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
                                placeholder="Звање"
                                name="email"
                        />
                    </div>
                </div>
                <!-- editor -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Quill Editor</h4>
                                <!-- Create the editor container -->
                                <div id="editor" style="height: 300px">
                                    <p>Hello World!</p>
                                    <p>Some initial <strong>bold</strong> text</p>
                                    <p>
                                        <br/>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


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
<?php require_once 'partials/bottom.php'; ?>