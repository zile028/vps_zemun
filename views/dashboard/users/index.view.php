<?php require_once __DIR__ . "/../partials/top.php"; ?>
<?php require_once __DIR__ . "/../partials/sidebar.php"; ?>
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <h4>Корисници</h4>
    <!-- ============================================================== -->
    <!-- Start Sales Cards  -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- Column -->
        <div class="col-md-6 col-lg-4 col-xlg-3">
            <a href="/dashboard/users/create">
                <div class="card card-hover">
                    <div class="box bg-cyan text-center">
                        <h1 class="font-light text-white">
                            <i class="mdi mdi-view-dashboard"></i>
                        </h1>
                        <h6 class="text-white">ДОДАЈ КОРИСНИКА</h6>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Sales chart -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Table Content -->
    <!-- ============================================================== -->
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Basic Datatable</h5>
            <div class="table-responsive">
                <table
                        id="zero_config"
                        class="table table-striped table-bordered"
                >
                    <thead>
                    <tr>
                        <th>РБ</th>
                        <th>Име</th>
                        <th>Презиме</th>
                        <th>E-mail</th>
                        <th>Улога</th>
                        <th>Креиран</th>
                        <th>Последњи приступ</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($users as $index => $user) : ?>
                        <tr>
                            <td><?php echo $index + 1; ?></td>
                            <td><?php echo $user->firstName; ?></td>
                            <td><?php echo $user->lastName; ?></td>
                            <td><?php echo $user->email; ?></td>
                            <td><?php echo $user->role; ?></td>
                            <td><?php dateDDMMYYY($user->createdAt); ?></td>
                            <td><?php dateDDMMYYY($user->lastAccess); ?></td>
                            <td></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Table Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- End Page Content -->
    <!-- ============================================================== -->
<?php require_once __DIR__ . "/../partials/bottom.php"; ?>