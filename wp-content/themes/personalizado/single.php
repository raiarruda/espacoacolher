<div>
    <div>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div>
            <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
            <img class="teste img-fluid" src="<?=the_post_thumbnail_url();?>">

            <p>Postado por <?php the_author() ?> em <?php the_time('D/M/Y') ?> -
                <?php comments_popup_link('Sem Comentários', '1 Comentário', '% Comentários', 'comments-link', ''); ?>
                <?php edit_post_link('(Editar)'); ?></p>
            <p><?php the_content(); ?></p>
        </div>


        <?php endwhile; else: ?>
        <div>
            <h2>Nada Encontrado</h2>
            <p>Erro 404</p>
            <p>Lamentamos mas não foram encontrados artigos.</p>
        </div>
        <?php endif; ?>

    </div>


</div>