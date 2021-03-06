
<!DOCTYPE html>
<html class="no-js" lang="es-mx" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#"  itemscope="" itemtype="http://schema.org/LocalBusiness" xmlns="http://www.w3.org/1999/xhtml" xml:lang="es-mx" ng-app="tv">

<head>
	<title>SouthBox TV | Beta</title>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="author" content="Octavio Razo & Adrian Vazquez">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="dc.language" content="es_MX"/>
    <meta property="og:locale" content="es_MX"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>

	<link rel="shortcut icon"  type="image/x-icon" href="assets/img/Logo-2.png">
	<!--codigo de fuentes-->
	<link rel="stylesheet" type="text/css" href="assets/css/main.css" > 

	<link rel="stylesheet" href="bower_components/slick-carousel/slick/slick.css">
	<link rel="stylesheet" href="bower_components/slick-carousel/slick/slick-theme.css">
	<!-- angular -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
	<script src="bower_components/slick-carousel/slick/slick.js"></script>
	<script src="bower_components/slick-carousel/slick/slick.min.js"></script>
	<script src="bower_components/angular-slick/dist/slick.js"></script>
	<script src="bower_components/angular-slick/dist/slick.min.js"></script>
	<script src="bower_components/tv.js"></script>

	<script type='text/javascript' src='http://tutvgratis.tv/embed.js'></script>

</head>
<body>

<header id="header" class="header">
	<menu type="context toolbar">
		<figure class="menu-logo">
			<img src="assets/img/Logo-1.png">
		</figure>
		<div class="menu-search">
			<input type="search" placeholder="Busca videos, canales y más...">
			<button class="trans"> 
			<img src="https://cdn1.iconfinder.com/data/icons/hawcons/32/698627-icon-111-search-20.png">
			</button>
		</div>
		<div class="menu-options text-right">
			<ul>
				<li><a href="#" class="btn2 trans text-black">¡Registrate ahora!</a></li>
				<li><a href="#"><img src="https://cdn4.iconfinder.com/data/icons/ubercons-web-application/512/Avatar-24.png"></a></li>
				<li><a href="#"><img src="https://cdn4.iconfinder.com/data/icons/ubercons-web-application/512/Gear-24.png"></a></li>	
			</ul>
		</div>
	</menu>

</header>

<main ng-controller="tvcontrol" >
	<section class="tv black border-gray" id="tv" >
		<div class="column2 left">
			<script type='text/javascript'> width=728, height=410, channel='{{customUrl}}';</script>
			<iframe ng-src="{{customUrl}}" height="405" width="540" scrolling="no" data-checked="true" class="border-gray"></iframe>
		</div>
			<div class="column2 right">
			<table class="text-white">
				<tr>
					<th class="light-gray border-bottom">Lunes 8 de mayo</th><th class="light-gray border-bottom">11:00 a.m.</th>
					<th class="light-gray border-bottom">12:00 p.m.</th><th class="light-gray border-bottom">13:00 p.m.</th>
				</tr>
				<tr>
					<td class="light-gray"><span>CBC News</span></td><td class="light-blue">Ehicula Imperdiet</td>
					<td class="light-gray">Donec Diam Risus</td><td class="light-blue">Ehicula Imperdiet</td>
				</tr>
				<tr>
					<td class="light-blue"><span>ESPN</span></td><td class="light-gray">Ehicula Imperdiet</td>
					<td class="light-blue">Donec Diam Risus</td><td class="light-gray">Ehicula Imperdiet</td>
				</tr>
				<tr>
					<td class="light-gray"><span>CBC News</span></td><td class="light-blue">Ehicula Imperdiet</td>
					<td class="light-gray">Donec Diam Risus</td><td class="light-blue">Ehicula Imperdiet</td>
				</tr>
				<tr>
					<td class="light-blue"><span>CBC News</span></td><td class="light-gray">Ehicula Imperdiet</td>
					<td class="light-blue">Donec Diam Risus</td><td class="light-gray">Ehicula Imperdiet</td>
				</tr>
				<tr>
					<td class="light-gray"><span>CBC News</span></td><td class="light-blue">Ehicula Imperdiet</td>
					<td class="light-gray">Donec Diam Risus</td><td class="light-blue">Ehicula Imperdiet</td>
				</tr>
				<tr>
					<td class="light-blue"><span>CBC News</span></td><td class="light-gray">Ehicula Imperdiet</td>
					<td class="light-blue">Donec Diam Risus</td><td class="light-gray">Ehicula Imperdiet</td>
				</tr>
				<tr>
					<td class="light-gray"><span>CBC News</span></td><td class="light-blue">Ehicula Imperdiet</td>
					<td class="light-gray">Donec Diam Risus</td><td class="light-blue">Ehicula Imperdiet</td>
				</tr>
			</table>
		</div>
	</section>	


		<section id="corousel" class="black text-white mytv">
			<div class="container">
				<h2 style="border-color: #000;">Mi TV</h2>
			    <slick  data="myTV" ng-if="viewLoaded" settings="slickPanels" slides-to-show="6" slides-to-scroll="1">
			      <div ng-repeat="channel in myTV" class="channel">
			  		<img src="https://cdn0.iconfinder.com/data/icons/round-ui-icons/128/close_red.png" class="btn1"  ng-click="removeChannel(channel, myTV)"	>
			  		<img src="https://cdn1.iconfinder.com/data/icons/basic-ui-elements-color/700/02_play-32.png" class="btn2" ng-click="play(channel.url)">
		  			<img src="{{channel.img}}" class="img">
			      </div>
			    </slick>
			 </div>
		</section>	

		<section id="corousel" style="margin-top: 100px;" >
			<div class="container white">
				<h2>Canales Gratis</h2>
				<slick infinite="true" slides-to-show="6" slides-to-scroll="1">
		  			<div ng-repeat="channel in prueba" class="channel">
		  				<img src="https://cdn0.iconfinder.com/data/icons/round-ui-icons/128/add_green.png" class="btn1" ng-click="addChannel(channel)">
		  				<img src="{{channel.img}}" class="img">
		  			</div>
				</slick>
			</div>
		</section>	
		
		<section id="corousel" >
			<div class="container white">
				<h2>Canales de deportes</h2>
				<slick infinite="true" slides-to-show="6" slides-to-scroll="1">
		  			<div ng-repeat="channel in sports" class="channel">
		  				<img src="https://cdn0.iconfinder.com/data/icons/round-ui-icons/128/add_green.png" class="btn1" ng-click="addChannel(channel)">
		  				<img src="{{channel.img}}" class="img">
		  			</div>
				</slick>
			</div>
		</section>	
		<section id="corousel" >
			<div class="container white">
				<h2>Canales Mexicanos</h2>
				<slick infinite="true" slides-to-show="6" slides-to-scroll="1">
		  			<div ng-repeat="channel in mexico" class="channel">
		  				<img src="https://cdn0.iconfinder.com/data/icons/round-ui-icons/128/add_green.png" class="btn1" ng-click="addChannel(channel)">
		  				<img src="{{channel.img}}" class="img">
		  			</div>
				</slick>
			</div>
		</section>	
		<section id="corousel">
			<div class="container white">
				<h2>Canales de peliculas</h2>
		  		<!-- <slick lazy-load="ondemand" slides-to-show="6" slides-to-scroll="1"> -->
		 		<slick infinite="true" slides-to-show="6" slides-to-scroll="1">
			  		<div ng-repeat="channel in movies" class="channel">
			  			<img src="https://cdn0.iconfinder.com/data/icons/round-ui-icons/128/add_green.png" class="btn1" ng-click="addChannel(channel)">
			  			<img src="{{channel.img}}" class="img" >
			  		</div>
				</slick>
			</div>
			<div style="clear: both; margin-bottom: 200px"></div>
		</section>	

		<section id="download" class="gray">
			<div class="container">
				<div class="column4"></div>
				<div class="column4">
					<img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSN74Bkrry4nMYYfdbR-lfMV-p8MOM8cykmEnyjYQe7SaQvZUXc" alt="">
				</div>
				<div class="column4">
					<img src="https://buffer.com/images/common/app-store.png" alt="">
				</div>
				<div class="column4"></div>
			</div>
		</section>
		

</main>





<!-- begin footer section -->
<footer class="footer" id="footer">
	<div class="cols">
		<div class="column4 border-right">
			<p class="strong">WEB APP</p>
			<li><a href="#">Mi tv</a></li>
			<li><a href="#">Canales deportivos</a></li>
			<li><a href="#">Canales de películas</a></li>
			<li><a href="#">Lorem Ipsum</a></li>
			<li><a href="#">Nulla facilis</a></li>
		</div>
		<div class="column4 border-right">
			<p class="strong">LOREM IPSUM</p>
			<li><a href="#">Habitasse</a></li>
			<li><a href="#">Platea</a></li>
			<li><a href="#">Dictumst</a></li>
			<li><a href="#">Proin</a></li>
			<li><a href="#">Finibus</a></li>
			<li><a href="#">Sed</a></li>
			<li><a href="#">Tristique</a></li>
		</div>
		<div class="column4 border-right">
			<p class="strong">SOCIAL</p>
			<li><a href="#">FB-logo</a></li>
			<li><a href="#">Twitter-folows</a></li>
		</div>
		<div class="column4">
			<p class="strong">CONTACTO</p>
			<p>Nombre *<br>
				<input type="text"><br>
				Apellidos *<br>
				<input type="text"><br>
				Correo *<br>
				<input type="mail"><br>
				Comentario<br>
				<textarea></textarea>
				<br>
				<small>*campo obligatorio</small>
			</p>
		</div>
	</div>
	<div class="firma black"><p>Todos los derechos reservados  <a href="#" title="">Southboxtv</a>. </p></div>
</footer>
<!-- end footer section -->


</body>
</html>