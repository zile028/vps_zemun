<?php include('partials/top.php') ?>
    <style>
        #zero_config tr td {
            vertical-align: middle;
        }
    </style>
    <!--  -->
<?php include('partials/sidebar.php') ?>

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
                        <h6 class="text-white">DODAJ</h6>
                    </div>
                </div>
            </a>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-4 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-success text-center">
                    <h1 class="font-light text-white">
                        <i class="mdi mdi-chart-areaspline"></i>
                    </h1>
                    <h6 class="text-white">Charts</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-warning text-center">
                    <h1 class="font-light text-white">
                        <i class="mdi mdi-collage"></i>
                    </h1>
                    <h6 class="text-white">Widgets</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-danger text-center">
                    <h1 class="font-light text-white">
                        <i class="mdi mdi-border-outside"></i>
                    </h1>
                    <h6 class="text-white">Tables</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-info text-center">
                    <h1 class="font-light text-white">
                        <i class="mdi mdi-arrow-all"></i>
                    </h1>
                    <h6 class="text-white">Full Width</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-md-6 col-lg-4 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-danger text-center">
                    <h1 class="font-light text-white">
                        <i class="mdi mdi-receipt"></i>
                    </h1>
                    <h6 class="text-white">Forms</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-info text-center">
                    <h1 class="font-light text-white">
                        <i class="mdi mdi-relative-scale"></i>
                    </h1>
                    <h6 class="text-white">Buttons</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-cyan text-center">
                    <h1 class="font-light text-white">
                        <i class="mdi mdi-pencil"></i>
                    </h1>
                    <h6 class="text-white">Elements</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-success text-center">
                    <h1 class="font-light text-white">
                        <i class="mdi mdi-calendar-check"></i>
                    </h1>
                    <h6 class="text-white">Calnedar</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-warning text-center">
                    <h1 class="font-light text-white">
                        <i class="mdi mdi-alert"></i>
                    </h1>
                    <h6 class="text-white">Errors</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
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
                            <td style="width: 30px"><a href="/dashboard/osoblje/<?php echo $item["id"]; ?>">
                                    <img style="height: 30px; width: 30px; object-fit: cover" class="rounded-circle"
                                         src="<?php uploadPath($item["image"]); ?>"
                                         alt="<?php echo $item["firstName"]; ?>">
                                </a></td>
                            <td>
                                <?php echo $item["title"]; ?>
                                <?php echo $item["firstName"]; ?>
                                <?php echo $item["lastName"]; ?>
                            </td>
                            <td><?php echo $item["rank"]; ?></td>
                            <td><?php echo $item["email"]; ?></td>
                            <td><a class="btn btn-sm btn-warning" href="<?php uploadPath($item["cv"]); ?>"
                                   target="_blank">CV</a></td>
                            <td class="d-flex gap-1">
                                <a class="btn btn-sm btn-info" href="/dashboard/osoblje/<?php echo $item["id"]; ?>"><i
                                            class="mdi mdi-account-card-details"></i></a>
                                <form action="/dashboard/osoblje/<?php echo $item["id"]; ?>">
                                    <input type="hidden" name="_method" value="delete">
                                    <button class="btn btn-sm btn-danger"><i class="mdi mdi-delete"></i>
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
<?php include('partials/bottom.php') ?>