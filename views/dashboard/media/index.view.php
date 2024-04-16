<?php require_once __DIR__ . "/../partials/top.php"; ?>
<?php require_once __DIR__ . "/../partials/sidebar.php"; ?>

    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <h4>МЕДИЈА</h4>
    <div class="card container-fluid p-3">
        <form class="form-inline row gap-2 align-items-center" action="/dashboard/media"
              method="post"
              enctype="multipart/form-data">
            <div class="col-sm-12 col-lg-8 d-flex align-items-center gap-2 ">
                <label for="fileName" style="white-space: nowrap">Назив фајла</label>
                <input id="fileName" type="text" name="fileName" class="form-control"
                       placeholder="Назив">
            </div>
            <div class="col-lg-4 col-sm-12 row gap-2 ">
                <label for="attachment" class="btn btn-warning m-0 text-nowrap col">Одабери
                    фајл</label>
                <input id="attachment" type="file" class="d-none" placeholder="file"
                       name="attachment">
                <button class="btn btn-primary col">ДОДАЈ</button>
            </div>
        </form>
    </div>
    <!-- ============================================================== -->
    <!-- Start Table -->
    <!-- ============================================================== -->
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Сви медија фајлови</h5>
            <div class="table-responsive">
                <table
                        id="zero_config"
                        class="table table-striped table-bordered"
                >
                    <thead>
                    <tr>
                        <th>Р.Б.</th>
                        <th>Назив фајла</th>
                        <th>Тип фајла</th>
                        <th>Величина фајла</th>
                        <th>Додат</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($media as $index => $file) : ?>
                        <tr>
                            <td><?php echo $index + 1; ?></td>
                            <td><a href="<?php uploadPath($file->storeName); ?>"
                                   target="_blank"><?php echo
                                    $file->fileName; ?></a></td>
                            <td><?php echo $file->type; ?></td>
                            <td><?php sizeInMB($file->size); ?></td>
                            <td><?php dateDDMMYYY($file->createdAt); ?></td>
                            <td>
                                <form action="/dashboard/media/<?php echo $file->id; ?>"
                                      method="post">
                                    <input type="hidden" value="delete" name="_method">
                                    <button class="btn bnt-sm btn-danger">ОБРИШИ</button>
                                </form>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Table -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- End Page Content -->
    <!-- ============================================================== -->
<?php require_once __DIR__ . "/../partials/bottom.php"; ?>