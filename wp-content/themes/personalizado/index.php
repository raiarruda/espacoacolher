<?php get_header();?>
    
    <?php 
        $args = array( 
        'orderby' => 'title',
        'post_type' => 'convenio',
        );
        $the_query = new WP_Query( $args );
        ?>
      <h1>Convenios</h1>
        <div class="row">
        <?php if ( $the_query->have_posts()) :
        while ( $the_query->have_posts()) : 
            $the_query->the_post();?>
            <div class="col-3 m-3">
                <h1><?=the_title(); ?></h1>
              
               <img class="teste img-fluid" src="<?=the_post_thumbnail_url();?>">
                <article> <?=the_content()?></article>
  
                   
             </div>
        <?php endwhile;
            // else:?>
            <!-- <p>Não tem nenhum convenio cadastrado</p> -->
            <?php endif;
            wp_reset_query();      ?>
        </div>

    <?php 
        $args = array( 
        'orderby' => 'title',
        'post_type' => 'servico',
        );
        $the_query = new WP_Query( $args );
        ?>
      <h1>Seviços</h1>
        <div class="row">
        <?php if ( $the_query->have_posts()) :
        while ( $the_query->have_posts()) : 
            $the_query->the_post();?>
            <div class="col-3 m-3">
                <h1><?=the_title()?></h1>
                <img class="teste img-fluid" src="<?=the_post_thumbnail_url();?>">
                <article> <?=the_content()?></article>
  
                   
             </div>
        <?php endwhile;
            // else:?>
            <!-- <p>Não tem nenhum convenio cadastrado</p> -->
            <?php endif;
            wp_reset_query();      ?>
        </div>
    <?php 
        $args = array( 
        'orderby' => 'title',
        'post_type' => 'profissional',
        );
        $the_query = new WP_Query( $args );
        ?>
      <h1>Profissionais</h1>
        <div class="row">
        <?php if ( $the_query->have_posts()) :
        while ( $the_query->have_posts()) : 
            $the_query->the_post();?>
            <div class="col-3 m-3"  style= "width: 10rem;">
                <h1><?=the_title()?></h1>
                <img class="teste img-fluid" src="<?=the_post_thumbnail_url();?>">
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

