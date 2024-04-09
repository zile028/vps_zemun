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
                    <th>Шифра</th>
                    <th>Предмет</th>
                    <th>С</th>
                    <th>П</th>
                    <th>В</th>
                    <th>О/И</th>
                    <th>ЕСПБ</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($predmeti as $index => $predmet): ?>
                    <tr>
                        <td style="width: 30px">
                            <?php echo $index + 1; ?>
                        </td>
                        <td class="">
                            <?php echo $predmet->sifra; ?>
                        </td>
                        <td class=""><?php echo $predmet->predmet; ?></td>
                        <td class=""><?php echo $predmet->semestar; ?></td>
                        <td class=""><?php echo $predmet->predavanja; ?></td>
                        <td class=""><?php echo $predmet->vezbe; ?></td>
                        <td class=""><?php echo $predmet->obavezan_izborni ? "Обавезан" : "Изборни"; ?></td>
                        <td class=""><?php echo $predmet->espb; ?></td>
                        <td class="">
                            <form action="/dashboard/studije/<?php echo $predmet->id; ?>"
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