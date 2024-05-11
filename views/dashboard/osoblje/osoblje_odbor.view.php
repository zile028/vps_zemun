<?php require_once __DIR__ . "/../partials/top.php"; ?>
<?php require_once __DIR__ . "/../partials/sidebar.php"; ?>
<div class="card">
    <div class="card-body">
        <h3>Додај у <?php echo $odbor->odbor; ?></h3>
        <form action="/dashboard/osoblje/odbor/<?php echo $odbor->id; ?>" class="row" method="post">
            <div class="row">
                <div class="col-6">
                    <select class="form-control" name="osobljeID">
                        <?php foreach ($osoblje as $osoba) : ?>
                            <option value="<?php echo $osoba->id; ?>">
                                <?php echo $osoba->firstName; ?>
                                <?php echo $osoba->lastName; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-4">
                    <input class="form-control"
                           list="GFGOptions" id="GFGDataList"
                           name="pozicija"
                           placeholder="Одабери или унеси позицију">
                    <datalist id="GFGOptions">
                        <?php foreach ($pozicije

                        as $pozicija) : ?>
                        <option value="<?php echo $pozicija; ?>">
                            <?php endforeach; ?>
                    </datalist>
                </div>
                <div class="col-2">
                    <button class="btn btn-primary form-control" type="submit">ДОДАЈ
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- ============================================================== -->
<!-- Start Table Content -->
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
                    <th></th>
                    <th>Име и презиме</th>
                    <th>Звање</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($clanovi as $pozicija => $clanoviPozicije) : ?>
                    <tr>
                        <td colspan="6"><?php echo $pozicija; ?></td>
                    </tr>
                    <?php foreach ($clanoviPozicije as $index => $clan) : ?>
                        <tr>
                            <td><?php echo $index + 1; ?></td>
                            <td style="width: 30px">
                                <a
                                        href="/dashboard/osoblje/<?php echo $clan->id; ?>">
                                    <img style="height: 30px; width: 30px; object-fit: cover"
                                         class="rounded-circle"
                                         src="<?php uploadPath($clan->image); ?>"
                                         alt="<?php echo $clan->fullName; ?>">
                                </a>
                            </td>
                            <td><?php echo $clan->fullName; ?></td>
                            <td><?php echo $clan->rank; ?></td>
                            <td>
                                <form action="/dashboard/osoblje/<?php echo $clan->id;
                                ?>/odbor/<?php echo $odbor->id ?>" method="post">
                                    <input type="hidden" name="_method" value="delete">
                                    <button class="btn btn-sm btn-danger"><i class="mdi
                                    mdi-delete"></i></button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Table Content -->
<!-- ============================================================== -->
<?php require_once __DIR__ . "/../partials/bottom.php"; ?>
