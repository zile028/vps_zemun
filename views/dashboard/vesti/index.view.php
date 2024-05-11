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
    <!-- START table -->
    <!-- ============================================================== -->
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Вести</h5>
            <div class="table-responsive">
                <table
                        id="zero_config"
                        class="table table-striped table-bordered"
                >
                    <thead>
                    <tr>
                        <th></th>
                        <th>Наслов</th>
                        <th>Вест</th>
                        <th>Објављено</th>
                        <th>Аутор</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($vesti as $item): ?>
                        <tr>
                            <td style="width: 30px"><a
                                        href="/dashboard/vesti/<?php echo $item->id; ?>">
                                    <img style="height: 30px; width: 30px; object-fit: cover"
                                         class="rounded-circle"
                                         src="
                                         <?php empty($item->storeName) ? uploadPath("vest_avatar.png") :
                                             uploadPath($item->storeName); ?>"
                                         alt="<?php echo $item->fileName; ?>">
                                </a></td>
                            <td>
                                <?php echo $item->naslov; ?>
                            </td>
                            <td><?php echo getExcerpt($item->description); ?></td>
                            <td><?php dateDDMMYYY($item->createdAt); ?></td>
                            <td><?php echo $item->autor; ?></td>
                            <td class="">
                                <form action="/dashboard/vesti/<?php echo $item->id; ?>"
                                      method="post">
                                    <input type="hidden" name="_method" value="delete">
                                    <button class="btn btn-sm btn-danger"><i
                                                class="mdi mdi-delete"></i>
                                    </button>
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
    <!-- END table -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
<?php require_once __DIR__ . "/../partials/bottom.php"; ?>