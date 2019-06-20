<?php get_header();?>

<main class="container">

    <section id="inicial" class="tela-inteira">
        <div class="content">
        <div class="row">
            <div class="col col-auto">
                <img src="https://via.placeholder.com/300.png/" alt="imagem inicial">
            </div>
            <div class="col col-md-8 col-sm-8">
                <div class="row">
                    <h4> standard Lorem Ipsum passage, used since the 1500s</h4>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat
                        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                    </p>
                </div>

                <div class="row">
                    standard Lorem Ipsum passage, used since the 1500s
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat
                    cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                </div>
            </div>
        </div>
        </div>
    </section>

    <section id="equipe" class="tela-inteira">
        <div class="content">
        <div class="row">

            <?php
            $args = array(
                'orderby'   => 'title',
                'post_type' => 'profissional',
            );

            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()):
                while ($the_query->have_posts()):
                    $the_query->the_post();?>

                        <div class="col">
                            <div class="card card-profile card-plain">

                                <div class="col">
                                    <div class="card-image">
                                        <img class="imagem-convenio img-fluid" src="<?=the_post_thumbnail_url();?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="content">
                                        <h4 class=""><?=the_title();?></h4>
                                        <h6 class="">CEO</h6>
                                        <p class=""><?=the_content();?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php endwhile;
            endif;
            wp_reset_query();?>
            </div>
        </div>
    </section>

    <section id="convenio" class="tela-inteira">
        <div class="content">
        <?php

        $args = array(
            'orderby'   => 'title',
            'post_type' => 'convenio',
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()):
            while ($the_query->have_posts()):
                $the_query->the_post();?>
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <img class="teste img-fluid" src="<?=the_post_thumbnail_url();?>" alt="<?=the_title();?>">
                            </div>
                            <div class="col">
                                <img src="https://via.placeholder.com/234x60?text=234x60+Half+Banner" alt="convenio">
                            </div>
                        </div>
                        <?php endwhile;?>
                    <?php endif;
                wp_reset_query();
                ?>

            </div>
        </div>
    </section>

</main>


<?php get_footer();?>