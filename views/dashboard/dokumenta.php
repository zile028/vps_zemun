<?php require_once 'partials/top.php'; ?>
<!--  -->
<?php require_once 'partials/sidebar.php'; ?>

<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<h4>ДОКУМЕНТА</h4>
<!-- ============================================================== -->
<!-- Sales Cards  -->
<!-- ============================================================== -->
<div class="row">

    <!-- Column -->
    <div class="col-md-6 col-lg-2 col-xlg-3">
        <a href="/dashboard/dokumenta/dodaj">
            <div class="card card-hover">
                <div class="box bg-warning text-center">
                    <h1 class="font-light text-white">
                        <i class="mdi mdi-view-dashboard"></i>
                    </h1>
                    <h6 class="text-white">ДОДАЈ ДОКУМЕНТ</h6>
                </div>
            </div>
        </a>
    </div>
</div>
<!-- ============================================================== -->
<!-- Sales chart -->
<!-- ============================================================== -->
<?php if (count($dokumenta) > 0): ?>
    <?php foreach ($dokumenta as $kategorija => $dokument) : ?>
        <h5><?php echo $kategorija; ?></h5>
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
                            <th>РБ</th>
                            <th>Назив</th>
                            <th>Датум објаве</th>
                            <th>Објавио</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 0;
                        foreach ($dokument as $item):$i++ ?>
                            <tr>
                                <td style="width: 30px">
                                    <a href="/dashboard/dokument/<?php echo $item["id"]; ?>">
                                        <?php echo $i; ?>
                                    </a></td>
                                <td>
                                    <a href="<?php echo uploadPath($item["attachment"]); ?>"
                                       target="_blank">
                                        <?php echo $item["title"]; ?>
                                    </a>
                                </td>
                                <td><?php dateDDMMYYY($item["createdAt"]); ?></td>
                                <td class="d-flex gap-1">
                                    <form action="/dashboard/dokumenta/<?php echo $item["id"]; ?>"
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
    <?php endforeach; ?>


<?php else: ?>
    <p>Тренутно нема докумената.</p>
<?php endif; ?>


<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<?php require_once 'partials/bottom.php'; ?>

