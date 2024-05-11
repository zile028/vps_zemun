<?php require_once __DIR__ . "/../partials/top.php"; ?>
<?php require_once __DIR__ . "/../partials/sidebar.php"; ?>
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <h4 class="card-title">Особље/Додавање</h4>
    <div class="card ">
        <form class="form-horizontal" action="/dashboard/osoblje/<?php echo $osoba->id; ?>"
              method="post"
              enctype="multipart/form-data">
            <input type="hidden" name="_method" value="put">
            <input type="hidden" name="oldImage" value="<?php echo $osoba->image; ?>">
            <input type="hidden" name="oldCV" value="<?php echo $osoba->cv; ?>">
            <div class="card-body">
                <div class="row">

                    <div class="col-md-6">
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
                                        value="<?php echo $osoba->firstName; ?>"
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
                                        value="<?php echo $osoba->lastName; ?>"
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
                                        value="<?php echo $osoba->title; ?>"
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
                                        value="<?php echo $osoba->rank; ?>"
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
                                        value="<?php echo $osoba->email; ?>"
                                />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-sm-3 col ">
                                <label class="btn btn-warning" for="profile">Промени
                                    слику</label>
                                <label class="btn btn-warning" for="cvAtach">Промени CV</label>
                                <input type="file" class="d-none" name="image" id="profile">
                                <input type="file" class="d-none" name="cv" accept="application/pdf"
                                       id="cvAtach">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" style="height: 300px"
                             src="<?php uploadPath($osoba->image); ?>"
                             alt="<?php echo $osoba->firstName; ?>">
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Биографија</h4>
                                <div id="toolbar"></div>
                                <!-- Create the editor container -->
                                <div id="editor" style="height: 300px">
                                    <?php echo $osoba->description; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <textarea name="description" style="display: none"
                          id="playground"><?php echo $osoba->description; ?></textarea>
            </div>
            <div class="border-top">
                <div class="card-body">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </div>
            </div>
        </form>
        <div class="d-flex gap-1">
            <?php if (isset($osoba->cv)): ?>
                <a class="btn btn-sm btn-success"
                   href="<?php uploadPath($osoba->cv); ?>">Тренутни CV</a>
                <form action="/dashboard/osoblje/cv/<?php echo $osoba->id; ?>"
                      method="post">
                    <input type="hidden" name="_method" value="patch">
                    <button type="submit" class="btn btn-sm btn-danger">Уклони CV
                    </button>
                </form>
            <?php endif; ?>
            <form method="post"
                  action="/dashboard/osoblje/image/<?php echo $osoba->id;
                  ?>">
                <input type="hidden" name="_method" value="patch">
                <button type="submit" class="btn btn-sm btn-danger">Уклони слику
                </button>
            </form>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
<?php require_once __DIR__ . "/../partials/bottom.php"; ?>