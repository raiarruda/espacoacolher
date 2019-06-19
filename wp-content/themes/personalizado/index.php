<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php wp_head();?>
    <!-- pra ter acessao painel -->

</head>

<body>
    <?php

$args = array(
    'orderby'   => 'title',
    'post_type' => 'convenio',
);
$the_query = new WP_Query($args);
?>
    <h1>Convenios</h1>
    <div class="row">
        <?php if ($the_query->have_posts()):
    while ($the_query->have_posts()):
        $the_query->the_post();?>
		        <div class="col-3 m-3">
		            <a href="<?=the_permalink();?>">
		                <h1><?=the_title();?></h1>
		            </a>

		            <img class="teste img-fluid" src="<?=the_post_thumbnail_url();?>">
		            <article> <?=the_content();?></article>


		        </div>
		        <?php endwhile;
else: ?>
        <!-- <p>Não tem nenhum convenio cadastrado</p> -->
        <?php endif;
wp_reset_query();?>
    </div>

    <?php

$args = array(
    'orderby'   => 'title',
    'post_type' => 'servico',
);
$the_query = new WP_Query($args);
?>
    <h1>Seviços</h1>
    <div class="row">
        <?php if ($the_query->have_posts()):
    while ($the_query->have_posts()):
        $the_query->the_post();?>
		        <div class="col-3 m-3">
		            <h1><?=the_title();?></h1>
		            <img class="teste img-fluid" src="<?=the_post_thumbnail_url();?>">
		            <article> <?=the_content();?></article>


		        </div>
		        <?php endwhile;
    // else:?>
	        <!-- <p>Não tem nenhum convenio cadastrado</p> -->
	        <?php endif;
wp_reset_query();?>
    </div>
    <?php

$args = array(
    'orderby'   => 'title',
    'post_type' => 'profissional',
);
$the_query = new WP_Query($args);?>
    <h1>Profissionais</h1>
    <div class="row">
        <?php if ($the_query->have_posts()):
    while ($the_query->have_posts()):
        $the_query->the_post();?>
		        <div class="col-3 m-3">
		            <a href="<?=the_permalink();?>">
		                <h1><?=the_title();?></h1>
		                <img class="teste img-fluid" src="<?=the_post_thumbnail_url();?>">
		                <article> <?=the_content();?></article>
		            </a>

		        </div>
		        <?php endwhile;
    // else:?>
	        <!-- <p>Não tem nenhum convenio cadastrado</p> -->
	        <?php endif;
wp_reset_query();?>
    </div>



</body>
<?php wp_footer();?>

</html>