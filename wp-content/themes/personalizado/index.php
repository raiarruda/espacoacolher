<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       <!-- pra ter acessao painel -->
        <?php wp_head(); ?> 

    </head>
    <body> 
    <a href="convenio.php">link convenio</a>
    <?php 
        $args = array( 
        'orderby' => 'title',
        'post_type' => 'convenio',
        );
        $the_query = new WP_Query( $args );
        ?>
      
        <div class="row">
        <?php if ( $the_query->have_posts()) :
        while ( $the_query->have_posts()) : 
            $the_query->the_post();?>
            <div class="col-3 m-3">
                <h1><?=the_title()?></h1>
               <div class="img-thumbnail"> <?php the_post_thumbnail(); ?> </div>
                <article> <?=the_content()?></article>
  
                   
             </div>
        <?php endwhile;
            // else:?>
            <!-- <p>Não tem nenhum convenio cadastrado</p> -->
            <?php endif;
            wp_reset_query();      ?>
        </div>



        </body>
    <?php wp_footer()?>
</html>