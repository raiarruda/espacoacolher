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
      
        <div class="row">
        <?php if (have_posts()) :
        while (have_posts()) : ?>
            <div class="col-3 m-3">
              <?php the_post(); ?>
                <h1><?=the_title()?></h1>
               <div class="img-thumbnail"> <?php the_post_thumbnail(); ?> </div>
                <article> <?=the_content()?></article>
  
                   
             </div>
        <?php endwhile;
            endif; 
            ?>
        </div>



        </body>
    <?php wp_footer()?>
</html>