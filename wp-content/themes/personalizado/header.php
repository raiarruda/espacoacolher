<!DOCTYPE html>
<html lang="pt-BR">
    <head>

      


    <title>Espaço Acolher</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <?php wp_head(); ?>
    <?php $home = get_template_directory_uri(); ?>
	
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="<?=$home?>/assets/css/reset.css" rel="stylesheet" />
	<link href="<?=$home?>/assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?=$home?>/assets/css/paper-kit.css" rel="stylesheet" />

    <link href="<?=$home?>/style.css" type="text/css" rel="stylesheet">

</head>

<body class="index-page sidebar-collapse">
    <header>
	<!--    navbar come here          -->

	<nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="100">
		<div class="container">
			<a class="navbar-brand" href="#">DuplaProgrameira</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#example-navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                    <a class="nav-link" href="#">Quem Somos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Convênios</a>
                  </li>
										
									<li class="nav-item">
										<a class="nav-link" href="#">Serviços</a>
									</li>
									<li class="nav-item">
														
										<a class="nav-link"  data-toggle="modal" data-target="#faleConoscoModal">Fale conosco</a>
									</li>
                </ul>
              </div>
            </div>
          </nav>
<!-- end navbar  -->
<div class="page-header section-dark" style="background-image: url('<?=$home?>/assets/img/antoine-barres.jpg')">
    <div class="filter"></div>

    <div class="content-center">
      <div class="container">
        <h1 class="presentation-subtitle text-center"> Seja bem vindo ao site da dupla programeira </h1>
      </div>
    </div>
    <div class="moving-clouds" style="background-image: url('<?=$home?>/assets/img/clouds.png'); "></div>
  </div>
<div class="wrapper">
<!-- TODO consertar row vazia -->
  

    <!-- content come here     -->
    <div class="container "  data-parallax="true">