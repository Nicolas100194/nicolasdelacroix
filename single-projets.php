<?php
get_header();
if(have_posts()){
    while(have_posts()){
        the_post();
        ?>
        <section class="section-primary-single-project">
            <div class="col-left">
                <?= do_action('display_cpt_thumbnails')?>
            </div>
            <div class="col-right">
                <h1 class="title-h1">Projet site internet : <?= do_action('display_cpt_title')?></h1>
                <h2>Contexte</h2>
                <?= do_action('display_cpt_context')?>
                <h2 class="title-technologies">Technologies</h2>
                <?= do_action('display_cpt_technologies')?>
            </div>
        </section>
        <section class="section-btn-single-project">
            <?= do_action('display_cpt_link')?>
        </section>

        <?php
    }
}
get_footer();