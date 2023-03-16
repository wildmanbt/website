<!DOCTYPE html><!-- HTML5 -->
<html prefix="og: http://ogp.me/ns#" lang="es-ES" dir="ltr">
	<head>
		<?php
		
		require_once('Pagadito.php');
		
		$pagadito = new Pagadito('737cf2ee55e4296533685912b45f8747', '443633f19e536894d6ba68bac9556bb2');
		
		if ($pagadito->connect()) {
		    // Conexión exitosa
		} else {
		    // Error de conexión
		}
		
		$pagadito->add_detail(1, 'boxer nb', 1.00);
		$pagadito->add_detail(2, 'medias cl 2', 1.00);
		
		$ern = uniqid();
		if ($pagadito->exec_trans($ern)) {
		    // Redireccionar al usuario a la página de Pagadito
		} else {
		    // Error al ejecutar la transacción
		}
		
		$token_trans = $_GET['token_trans']; // Obtener el token de la transacción de la URL
		if ($pagadito->get_status($token_trans)) {
		    // La transacción se ha completado
		} else {
		    // Error al obtener el estado de la transacción
		}
		
		?>
		<title>pagar - bebemimado</title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="author" content="caterine" />
		<meta name="generator" content="Incomedia WebSite X5 Pro 2022.1.7 - www.websitex5.com" />
		<meta property="og:locale" content="es" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="https://github.com/wildmanbt/siteweb.git/pagar.php" />
		<meta property="og:title" content="pagar" />
		<meta property="og:site_name" content="bebemimado" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" href="style/reset.css?2022-1-7-0" media="screen,print" />
		<link rel="stylesheet" href="style/print.css?2022-1-7-0" media="print" />
		<link rel="stylesheet" href="style/style.css?2022-1-7-0" media="screen,print" />
		
		<link rel="stylesheet" href="pluginAppObj/imFooter_pluginAppObj_05/custom.css" media="screen, print" />
		<link rel="stylesheet" href="pcss/pagar.css?2022-1-7-0-638145800231588346" media="screen,print" />
		<script src="res/jquery.js?2022-1-7-0"></script>
		<script src="res/x5engine.js?2022-1-7-0" data-files-version="2022-1-7-0"></script>
		
		<script src="pluginAppObj/imFooter_pluginAppObj_05/main.js"></script>
		<script>
			window.onload = function(){ checkBrowserCompatibility('El Explorador que estás usando no es compatible con las funciones requeridas para mostrar este Sitio web.','El Navegador que estás utilizando podría no ser compatible con las funciones requeridas para poder ver este Sitio web.','[1]Actualiza tu explorador [/1] o [2]continuar de todos modos[/2].','http://outdatedbrowser.com/'); };
			x5engine.utils.currentPagePath = 'pagar.php';
		</script>
		<link rel="icon" href="favicon.png?2022-1-7-0-638145800231588346" type="image/png" />
		<link rel="alternate" type="application/rss+xml" title="MyBlog" href="blog/x5feed.php" />
		<script>x5engine.boot.push(function () {x5engine.analytics.setPageView({ "postUrl": "analytics/wsx5analytics.php" });});</script>

	</head>
	<body>
		<div id="imPageExtContainer">
			<div id="imPageIntContainer">
				<div id="imHeaderBg"></div>
				<div id="imFooterBg"></div>
				<div id="imPage">
					<header id="imHeader">
						<h1 class="imHidden">pagar - bebemimado</h1>
						<!-- HeaderObjects -->
					</header>
					<div id="imStickyBarContainer">
						<div id="imStickyBarGraphics"></div>
						<div id="imStickyBar">
							<!-- StickyBarObjects -->
						</div>
					</div>
					<a class="imHidden" href="#imGoToCont" title="Salta el menu principal">Vaya al Contenido</a>
					<div id="imSideBar">
						<!-- SideBarObjects -->
					</div>
					<div id="imContentGraphics"></div>
					<main id="imContent">
						<a id="imGoToCont"></a>
						<div id="imPageRow_1" class="imPageRow">
						
						</div>
						<div id="imCell_1" class=""  data-responsive-sequence-number="1"> <div id="imCellStyleGraphics_1"></div><div id="imCellStyleBorders_1"></div><div id="imHTMLObject_21_01" class="imHTMLObject" style="text-align: center; width: 100%; overflow: hidden;"><form method="post" action="pagar.php">
						
						   
						
						    <button type="submit">Pagar</button>
						
						</form></div></div><div id="imPageRow_2" class="imPageRow">
						
						</div>
						
					</main>
					<footer id="imFooter">
						<!-- FooterObjects -->
					</footer>
				</div>
				<span class="imHidden"><a href="#imGoToCont" title="Lea esta página de nuevo">Regreso al contenido</a></span>
			</div>
		</div>
		<script src="cart/x5cart.js?2022-1-7-0-638145800231588346"></script>
		<noscript class="imNoScript"><div class="alert alert-red">Para utilizar este sitio tienes que habilitar JavaScript.</div></noscript>
	</body>
</html>
