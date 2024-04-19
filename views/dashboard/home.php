<?php include('partials/top.php') ?>
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
            <a href="/dashboard/osoblje">
                <div class="card card-hover">
                    <div class="box bg-cyan text-center">
                        <h1 class="font-light text-white">
                            <i class="mdi mdi-face"></i>
                        </h1>
                        <h6 class="text-white">ОСОБЉЕ</h6>
                    </div>
                </div>
            </a>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <a href="/dashboard/cenovnik">
                <div class="card card-hover">
                    <div class="box bg-success text-center">
                        <h1 class="font-light text-white">
                            <i class="mdi mdi-chart-bubble"></i>
                        </h1>
                        <h6 class="text-white">ЦЕНОВНИК</h6>
                    </div>
                </div>
            </a>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <a href="/dashboard/dokumenta">
                <div class="card card-hover">
                    <div class="box bg-warning text-center">
                        <h1 class="font-light text-white">
                            <i class="mdi mdi-border-inside"></i>
                        </h1>
                        <h6 class="text-white">ДОКУМЕНТА</h6>
                    </div>
                </div>
            </a>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <a href="/dashboard/studije">
                <div class="card card-hover">
                    <div class="box bg-danger text-center">
                        <h1 class="font-light text-white">
                            <i class="mdi mdi-blur-linear"></i>
                        </h1>
                        <h6 class="text-white">СТУДИЈЕ</h6>
                    </div>
                </div>
            </a>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <a href="/dashboard/vesti">
                <div class="card card-hover">
                    <div class="box bg-info text-center">
                        <h1 class="font-light text-white">
                            <i class="mdi mdi-receipt"></i>
                        </h1>
                        <h6 class="text-white">ВЕСТИ</h6>
                    </div>
                </div>
            </a>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <a href="/dashboard/raspored">
                <div class="card card-hover">
                    <div class="box bg-danger text-center">
                        <h1 class="font-light text-white">
                            <i class="mdi mdi-calendar-check"></i>
                        </h1>
                        <h6 class="text-white">РАСПОРЕД</h6>
                    </div>
                </div>
            </a>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <a href="/dashboard/media">
                <div class="card card-hover">
                    <div class="box bg-info text-center">
                        <h1 class="font-light text-white">
                            <i class="mdi mdi-folder-multiple-image"></i>
                        </h1>
                        <h6 class="text-white">МЕДИЈИ</h6>
                    </div>
                </div>
            </a>
        </div>
        <?php if (\Core\Session::currentUser("role") === "admin"): ?>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <a href="/dashboard/users">
                    <div class="card card-hover">
                        <div class="box bg-cyan text-center">
                            <h1 class="font-light text-white">
                                <i class="mdi mdi-account-multiple"></i>
                            </h1>
                            <h6 class="text-white">USERS</h6>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-success text-center">
                        <h1 class="font-light text-white">
                            <i class="mdi mdi-calendar-check"></i>
                        </h1>
                        <h6 class="text-white">TICKETS</h6>
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
        <?php endif; ?>
    </div>
    <!-- ============================================================== -->
    <!-- Sales chart -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->

    <!--  -->
<?php include('partials/bottom.php') ?>