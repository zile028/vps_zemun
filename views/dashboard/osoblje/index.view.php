<?php require_once __DIR__ . "/../partials/top.php"; ?>
    <style>
        #zero_config tr td {
            vertical-align: middle;
        }
    </style>
    <!--  -->
<?php require_once __DIR__ . "/../partials/sidebar.php"; ?>

    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Sales Cards  -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <a href="/dashboard/osoblje/dodaj">
                <div class="card card-hover">
                    <div class="box bg-cyan text-center">
                        <h1 class="font-light text-white">
                            <i class="mdi mdi-view-dashboard"></i>
                        </h1>
                        <h6 class="text-white">ДОДАЈ</h6>
                    </div>
                </div>
            </a>
        </div>
        <?php foreach ($odbori as $odbor) : ?>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <a href="/dashboard/osoblje/odbor/<?php echo $odbor->id; ?>">
                    <div class="card card-hover">
                        <div class="box bg-cyan text-center">
                            <h1 class="font-light text-white">
                                <i class="mdi mdi-view-dashboard"></i>
                            </h1>
                            <h6 class="text-white text-uppercase"><?php echo $odbor->odbor ?></h6>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>

    </div>
    <!-- ============================================================== -->
    <!-- Sales chart -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- START table -->
    <!-- ============================================================== -->
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Osoblje</h5>
            <div class="table-responsive">
                <table
                        id="zero_config"
                        class="table table-striped table-bordered"
                >
                    <thead>
                    <tr>
                        <th></th>
                        <th>Име и Презиме</th>
                        <th>Звање</th>
                        <th>E-mail</th>
                        <th>CV</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($osoblje as $item): ?>
                        <tr>
                            <td style="width: 30px"><a
                                        href="/dashboard/osoblje/<?php echo $item["id"]; ?>">
                                    <img style="height: 30px; width: 30px; object-fit: cover"
                                         class="rounded-circle"
                                         src="<?php empty($item["image"]) ? uploadPath("avatar.png") :
                                             uploadPath($item["image"]); ?>"
                                         alt="<?php echo $item["firstName"]; ?>">
                                </a></td>
                            <td>
                                <?php echo $item["title"]; ?>
                                <?php echo $item["firstName"]; ?>
                                <?php echo $item["lastName"]; ?>
                            </td>
                            <td><?php echo $item["rank"]; ?></td>
                            <td><?php echo $item["email"]; ?></td>
                            <td>
                                <?php if (isset($item["cv"])): ?>
                                    <a class="btn btn-sm btn-warning"
                                       href="<?php uploadPath($item["cv"]); ?>"
                                       target="_blank">CV</a>
                                <?php endif; ?>
                            </td>
                            <td class="d-flex gap-1">


                                <a class="btn btn-sm btn-info"
                                   href="/dashboard/osoblje/<?php echo $item["id"]; ?>"><i
                                            class="mdi mdi-account-card-details"></i></a>

                                <form action="/dashboard/osoblje/<?php echo $item["id"]; ?>"
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
    <!-- End PAge Content -->
    <!-- ============================================================== -->

    <!--  -->
<?php require_once __DIR__ . "/../partials/bottom.php"; ?>