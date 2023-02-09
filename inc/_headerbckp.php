<?php $title = 'Clínica Hospitalar Recanto'; ?>
<!DOCTYPE html>

<html lang="pt-BR">

<head>
<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title; ?></title>
	<meta name="description" content="<?php echo $title;?>" />
	<meta name="keywords" content="" />
	<meta name="application-name" content="<?php echo $title; ?>"/>
	<meta name="author" content="Agência Ópera"/>
	<link rel="canonical" href="recantopsiquiatria.com.br">

	<meta property="og:type" content="website">
	<meta property="og:url" content="">
	<meta property="og:description" content="<?php echo $title;?>">
	<meta property="og:title" content="<?php echo $title; ?>">
	<meta property="og:locale" content="pt_BR">
	<meta property="og:site_name" content="<?php echo $title; ?>">
	<meta property="og:image" content="">
	<meta property="fb:app_id" content="">

	<link rel="icon" href="./dist/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="./dist/images/favicon.png" type="image/x-icon" />

	<link rel="stylesheet" href="./dist/styles/styles.min.css">
	<link rel="stylesheet" href="./dist/styles/custom.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.4.0/css/lightgallery.min.css" integrity="sha512-J3GvWzuXtDGv7Kmqhj1gbn/jM2i3G40XtSBcqGEQ7eLpP0izHygFgT0FMIVCWMVRZnz7u2rS6mhTtlQ3oJsr1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NLTG4QQ');</script>
<!-- End Google Tag Manager -->

</head>
<body>

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NLTG4QQ";
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

	<?php
	$pageName = basename($_SERVER['PHP_SELF']);
	switch ($pageName) {
		case 'index.php':
			$headerClass = 'h-bg-white';
			break;

		case 'internacao.php':
			$headerClass = 'h-bg-blue';
			break;

		default:
			$headerClass = 'h-bg-green';
			break;
	}
	?>
	<header class="<?php echo $headerClass; ?>">
		<div class="nav-header">
			<div class="container-mobile">
				<div class="phone">
					<div class="content-mobile">

						<nav role="navigation">
							<div id="menuToggle">
								<input type="checkbox" />
								<span></span>
								<span></span>
								<span></span>
								<ul id="menu">
									<li><a href="quem-somos.php">Quem somos</a></li>
									<li><a href="tratamentos.php">Tratamentos</a></li>
									<li><a href="equipe.php">Equipe</a></li>
									<!-- <li><a href="internacao.php">Internação</a></li> -->
									<li><a href="nossa-estrutura.php">Estrutura</a></li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>

			<a class="logo-home" href="index.php">
				<figure class="logo">
					<img src="./dist/images/clinicahospitalarrecanto-bgw.svg">
				</figure>
			</a>

			<nav class="main-menu-wrapper">
				<ul class="main-menu">
					<li><a href="quem-somos.php">Quem somos</a></li>
					<li><a href="tratamentos.php">Tratamentos</a></li>
					<li><a href="equipe.php">Equipe</a></li>
					<!-- <li><a href="internacao.php">Internação</a></li> -->
					<li><a href="nossa-estrutura.php">Estrutura</a></li>
				</ul>
			</nav>
			<a class="contact-header" href="https://api.whatsapp.com/send?phone=5581997610300&text=Ol%C3%A1%20gostaria%20de%20conversar%20sobre%20tratamento%20psiqui%C3%A1trico" class="contact-header" target="_blank">
				<img class="i-phone bg-white" src="./dist/images/phone-bg-white.svg">

				<div class="central">
					<span> Central de </span>
					<span> Atendimento </span>
					<span class="phone-number">4007-2316</span></p>
				</div>
			</a>
		</div>
	</header>
	<div class="buttons-fixed bottomFix">
		<div class="flex">

			<a href="javascript:;" class="btn-fix">Atendimento 24h</a>

			<a id="atendimento-chat-online" href="javascript:;" class="btn-fix btn-green" title="Atendimento por Chat Online | Grupo Recanto - Clínica de reabilitação para dependentes químicos" alt="Atendimento Chat Online | Grupo Recanto - Clínica de reabilitação para dependentes químicos">Atendimento chat online</a>
			
			<a href="https://api.whatsapp.com/send?phone=5581997610300&text=Olá gostaria de conversar sobre tratamento psiquiátrico" target="_blank" class="btn-fix" title="Atendimento por Whatsapp | Grupo Recanto - Clínica de reabilitação para dependentes químicos" alt="Atendimento por Whatsapp | Grupo Recanto - Clínica de reabilitação para dependentes químicos">Estamos aqui 24h é só clicar</a>
		</div>
	</div>