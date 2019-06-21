<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Espaco Acolher</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <?php wp_head();?>
    <?php $home = get_template_directory_uri();?>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />


    
    <link href="<?=$home;?>/assets/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="<?=$home;?>/paper-kit.css" type="text/css" rel="stylsheet">

    <link href="<?=$home;?>/style.css" type="text/css" rel="stylesheet">

</head>

<body class="index-page sidebar-collapse">
    <header>
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-primary">
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
                            <a class="nav-link" href="index.php">Início</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#equipe">Quem Somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#convenio">Convênios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="modal" data-target="#faleConoscoModal">Fale conosco</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>