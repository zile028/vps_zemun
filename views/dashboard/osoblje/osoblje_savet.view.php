<?php require_once __DIR__ . "/../partials/top.php"; ?>
<?php require_once __DIR__ . "/../partials/sidebar.php"; ?>
<div class="card">
    <div class="card-body">
        <h6>Додај предмет</h6>
        <form action="" class="row">
            <div class="col-md-9">
                <select class="form-control" name="osobljeID">
                    <?php foreach ($osoblje as $osoba) : ?>
                        <option value="<?php echo $osoba->id; ?>">
                            <?php echo $osoba->firstName; ?>
                            <?php echo $osoba->lastName; ?>
                        </option>
                    <?php endforeach; ?>
                </select>

            </div>
            <div class="col-md-3">
                <button class="btn btn-primary form-control" type="submit">ДОДАЈ ПРЕДМЕТ
                </button>
            </div>
        </form>
    </div>
</div>
<?php require_once __DIR__ . "/../partials/bottom.php"; ?>
