<?php require_once __DIR__ . "/../partials/top.php"; ?>
<?php require_once __DIR__ . "/../partials/sidebar.php"; ?>

    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <h4>РАСПОРЕД</h4>
    <!-- ============================================================== -->
    <!-- Sales Cards  -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- Column -->
        <div class="col-md-6 col-lg-6 col-xlg-3">
            <a href="/dashboard/vesti/dodaj">
                <div class="card card-hover">
                    <div class="box bg-cyan text-center">
                        <h1 class="font-light text-white">
                            <i class="mdi mdi-view-dashboard"></i>
                        </h1>
                        <h6 class="text-white">ДОДАЈ ВЕСТ</h6>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Sales chart -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Start form -->
    <!-- ============================================================== -->

    <form class="" action="/dashboard/vesti/store" method="post" enctype="multipart/form-data">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="fname" class="col-12 control-label col-form-label">Наслов</label>
                    <div class="col-12">
                        <input
                                type="text"
                                class="form-control"
                                id="fname"
                                placeholder="Наслов"
                                name="naslov"
                        />
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-12 control-label
                    col-form-label">Вест</label>
                    <?php require_once __DIR__ . "/../partials/quill_editor.php" ?>
                </div>
                <div class="row">
                    <div id="fileSelector" class="attachment col-md-6">
                        <label class="btn btn-warning" for="attachment">Додај документ</label>
                        <input id="attachment" class="d-none" type="file" name="attachment[]"
                               multiple>
                    </div>
                    <div class="col-md-6">
                        <label for="featuredImage">Насловна слика</label>
                        <select id="featuredImage" class="form-control" name="featured_imageID">
                            <?php foreach ($media as $image) : ?>
                                <option value="<?php echo $image->id; ?>"><?php echo $image->fileName;
                                    ?></option>
                            <?php endforeach; ?>

                        </select>
                    </div>
                </div>
                <button class="btn btn-primary">Додај вест</button>
            </div>
        </div>
    </form>
    <!-- ============================================================== -->
    <!-- End form -->
    <!-- ============================================================== -->


    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
<?php require_once __DIR__ . "/../partials/bottom.php"; ?>