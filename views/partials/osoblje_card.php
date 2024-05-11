<div class="card">
    <img src="<?php uploadPath($nastavnik->image); ?>" alt="">
    <div class="card-body">
        <div class="card-body_group">

            <h4><?php echo $nastavnik->firstName; ?>
                <br><?php echo $nastavnik->lastName; ?></h4>
            <p><?php echo $nastavnik->rank; ?></p>

            <a class="email" href="mailto:<?php echo $nastavnik->email;
            ?>"><?php echo $nastavnik->email; ?></a>
        </div>

        <a href="nastavno_osoblje/<?php echo $nastavnik->id; ?>" class="btn
                        btn-sm">Детаљније</a>
    </div>
</div>