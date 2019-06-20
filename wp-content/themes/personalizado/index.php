<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Espaco Acolher</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head();?>
    <?php $home = get_template_directory_uri();?>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="<?=$home;?>/style.css" type="text/css" rel="stylesheet">

    <style>
        .teste {
            width: 10rem;
            height: 10rem;
            object-fit: contain;
        }

        .sessao {
            height: 100%;
        }

        html,
        body {
            width: 100%;
            height: 100%;
        }
    </style>

</head>

<body>

    <body class="container">
        <header>

            <nav class="navbar navbar-expand-lg fixed-top" color-on-scroll="100">
                <div class="container">
                    <a class="navbar-brand" href="#">DuplaProgrameira</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#example-navbar"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Início</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#equipe">Quem Somos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Convênios</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Serviços</a>
                            </li>
                            <li class="nav-item">

                                <a class="nav-link" data-toggle="modal" data-target="#faleConoscoModal">Fale conosco</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </header>

        <section id="inicial" class="sessao">
            <div class="row">
                <div class="col col-auto">
                    <img src="https://via.placeholder.com/300.png/09f/fff" alt="imagem inicial">
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
        </section>






        <section id="equipe" class="sessao">
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
                                <img class="teste img-fluid" src="<?=the_post_thumbnail_url();?>">
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
        </section>


        <section id="convenio" class="sessao">

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
        </section>

        <footer>

        </footer>
    </body>
    <?php wp_footer();?>

</html>