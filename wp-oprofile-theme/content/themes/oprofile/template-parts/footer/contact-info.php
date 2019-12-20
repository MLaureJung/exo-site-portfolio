<address class="contact-info">

    <?php if (get_theme_mod('oprofile_footer_email')) : ?>

        <?php $email = get_theme_mod('oprofile_footer_email'); ?>

        <div class="contact-info__part">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <h4 class="contact-info__part__label">Email</h4>
            <a href="mailto:<?= $email; ?>" class="contact-info__part__content is-email"><?= $email; ?></a>
        </div>

    <?php endif; ?>

    <?php if (get_theme_mod('oprofile_footer_num')) : ?>

        <?php $number = get_theme_mod('oprofile_footer_num'); ?>

        <div class="contact-info__part">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <h4 class="contact-info__part__label">Téléphone</h4>
            <a href="tel:<?= $number; ?>" class="contact-info__part__content"><?= $number; ?></a>
        </div>

    <?php endif; ?>

    <?php if (get_theme_mod('oprofile_footer_address')) : ?>

        <?php
        // https://www.php.net/manual/fr/function.nl2br.php    
        $address = nl2br(get_theme_mod('oprofile_footer_address')); ?>

        <div class="contact-info__part">
            <i class="fa fa-home" aria-hidden="true"></i>
            <h4 class="contact-info__part__label">Adresse</h4>
            <p class="contact-info__part__content"><?= $address; ?></p>
        </div>

    <?php endif; ?>

</address>