<?php 
    add_theme_support('post-thumbnails');

    function cadastrando_post_type_especificos(){
    
        $labels_profissional = array(
            'name'                  => ( 'Profissionais' ),
            'singular_name'         => ( 'Profissional' ),
            'menu_name'             => ( 'Profissionais' ),
            'name_admin_bar'        => ( 'Profissional'),
            'add_new'               => ( 'Adicionar novo'),
            'add_new_item'          => ( 'Adicionar novo profissional'),
            'new_item'              => ( 'Novo profisional'),
            'edit_item'             => ( 'Editar profissional'),
            'view_item'             => ( 'Ver profissional' ),
            'all_items'             => ( 'Todos profissionais'),
        
        );
      

        $args_profissional = array(
            'public'                => true,
            'labels'                => $labels_profissional, 
            'description'           => ( 'Profissionais da Clínica Espaço Acolher'),
            'menu_icon'             => ( 'dashicons-businesswoman'),
            'supports'              => array( 'title', 'editor', 'thumbnail')
        );

        register_post_type('profissional', $args_profissional);
        




        $labels_convenio = array(
            'name'                  => ( 'Convênios' ),
            'singular_name'         => ( 'Convênio' ),
            'menu_name'             => ( 'Convênios' ),
            'name_admin_bar'        => ( 'Convênio'),
            'add_new'               => ( 'Adicionar novo'),
            'add_new_item'          => ( 'Adicionar novo convênio'),
            'new_item'              => ( 'Novo convênio'),
            'edit_item'             => ( 'Editar convênio'),
            'view_item'             => ( 'Ver convênio' ),
            'all_items'             => ( 'Todos convênios'),
        
        );
      

        $args_convenio = array(
            'public'                => true,
            'labels'                => $labels_convenio, 
            'description'           => ( 'Convênios credenciados a Clínica Espaço Acolher'),
            'menu_icon'             => ( 'dashicons-admin-page'),
            'supports'              => array( 'title', 'thumbnail')
        );

        register_post_type('convenio', $args_convenio);
    
        




        $labels_servicos = array(
            'name'                  => ( 'Serviços' ),
            'singular_name'         => ( 'Serviço' ),
            'menu_name'             => ( 'Serviços' ),
            'name_admin_bar'        => ( 'Serviço'),
            'add_new'               => ( 'Adicionar novo'),
            'add_new_item'          => ( 'Adicionar novo serviço'),
            'new_item'              => ( 'Novo serviço'),
            'edit_item'             => ( 'Editar serviço'),
            'view_item'             => ( 'Ver serviço' ),
            'all_items'             => ( 'Todos serviços'),
        
        );
      

        $args_servicos = array(
            'public'                => true,
            'labels'                => $labels_servicos, 
            'description'           => ( 'Serviços oferecidos pela Clínica Espaço Acolher'),
            'menu_icon'             => ( 'dashicons-forms'),
            'supports'              => array( 'title', 'editor','thumbnail')
        );

        register_post_type('sevicos', $args_servicos);
    }

add_action('init','cadastrando_post_type_especificos');

// Desativa o menu Comentários do Painel Administrativo
function desativa_itens_admin_menu() {
        remove_menu_page('edit-comments.php');
        remove_menu_page('tools.php');
        remove_menu_page('plugins.php');
        remove_menu_page('themes.php');
        remove_menu_page('users.php');
        remove_menu_page('options-general.php');
    }
    add_action('admin_menu', 'desativa_itens_admin_menu');