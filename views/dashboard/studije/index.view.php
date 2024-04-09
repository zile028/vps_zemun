<?php require_once __DIR__ . "/../partials/top.php"; ?>
<?php require_once __DIR__ . "/../partials/sidebar.php"; ?>

    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <h4>СТУДИЈЕ</h4>
    <!-- ============================================================== -->
    <!-- Sales Cards  -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- Column -->
        <div class="col-md-6 col-lg-4 col-xlg-3">
            <a href="/dashboard/studije/sp/dodaj">
                <div class="card card-hover">
                    <div class="box bg-cyan text-center">
                        <h1 class="font-light text-white">
                            <i class="mdi mdi-view-dashboard"></i>
                        </h1>
                        <h6 class="text-white">ДОДАЈ СТУДИЈСКИ ПРОГРАМ</h6>
                    </div>
                </div>
            </a>
        </div>

        <!-- Column -->
        <div class="col-md-6 col-lg-4 col-xlg-3">
            <a href="/dashboard/studije/predmet/dodaj">
                <div class="card card-hover">
                    <div class="box bg-cyan text-center">
                        <h1 class="font-light text-white">
                            <i class="mdi mdi-view-dashboard"></i>
                        </h1>
                        <h6 class="text-white">ДОДАЈ ПРЕДМЕТ</h6>
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
            <div class="table-responsive">
                <table
                        id="zero_config"
                        class="table table-striped table-bordered"
                >
                    <thead>
                    <tr>
                        <th>Р.Б.</th>
                        <th>Студијски програм</th>
                        <th>Акредитован</th>
                        <th>Ниво</th>
                        <th>Трајање</th>
                        <th>ЕСПБ</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($studije as $index => $sp): ?>
                        <tr>
                            <td style="width: 30px">
                                <a href="/dashboard/studije/sp/<?php echo $sp->id; ?>">
                                    <?php echo $index + 1; ?>
                                </a>
                            </td>
                            <td class="">
                                <a href="/dashboard/studije/sp/<?php echo $sp->id; ?>">
                                    <?php echo $sp->naziv . " " . $sp->modul; ?>
                                </a>

                            </td>
                            <td class=""><?php echo $sp->akreditovan; ?></td>
                            <td class=""><?php echo $sp->nivo; ?></td>
                            <td class=""><?php echo $sp->trajanje; ?></td>
                            <td class=""><?php echo $sp->espb; ?></td>
                            <td class="">
                                <form action="/dashboard/studije/<?php echo $sp->id; ?>"
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