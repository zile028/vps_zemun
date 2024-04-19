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
            <a href="/dashboard/studije/sp/dodaj">
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
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($users as $index => $user) : ?>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                    </tfoot>
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