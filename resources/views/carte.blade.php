<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
		<link rel="stylesheet" href="{{asset('front/assets/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/assets/css/main.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/fontawesome/css/fontawesome.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/fontawesome/css/brands.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/fontawesome/css/solid.css')}}">
		<link href="https://api.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.css" rel="stylesheet">
		<script src="https://api.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.js"></script>
		<script src="{{asset('front/assets/js/jquery-1.11.3.min.js')}}" defer></script>
        <script src="{{asset('front/assets/bootstrap/js/bootstrap.min.js')}}" defer></script>
        <script src="{{asset('front/assets/js/main.js')}}" defer></script>
	</head>
	<body>
	<div class="d-flex flex-row">	
		<div class="d-flex flex-column flex-shrink-0 bg-light" style="width: 4.5rem;">
			<a href="/" class="d-block p-3 link-dark text-decoration-none" title="Icon-only">
				<img class="logocarte" src="{{asset('front/assets/img/logoback.png')}}" alt="">
			</a>
			<ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
			<li class="nav-item">
				<a href="#" class="nav-link py-3 border-bottom rounded-0" id="carte" title="Carte">
					<i class="fa-solid fa-map"></i>
				</a>
				<div class="mymodcontainer" id="modalcarte" style="display: none">
					<h3 class="mod-title">Style de la carte</h3>
					<hr>
					<div class="style-container">
						<div class="style-content">
							<h4>Claire</h4>
							<div class="inner-style">
								<img src="{{asset('front/assets/img/clair.webp')}}" alt="">
								<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
								<p>Style Claire</p>
							</div>
						</div>
						<div class="style-content">
							<h4>Sombre</h4>
							<div class="inner-style">
								<img src="{{asset('front/assets/img/sombre.webp')}}" alt="">
								<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
								<p>Style Sombre</p>
							</div>
						</div>
						<div class="style-content">
							<h4>Satellite</h4>
							<div class="inner-style">
								<img src="{{asset('front/assets/img/satellite.webp')}}" alt="">
								<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
								<p>Style Satellite</p>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<a href="#" class="nav-link py-3 border-bottom rounded-0" title="Place">
					<i class="fa-solid fa-globe"></i>
				</a>
			</li>
			<li>
				<a href="#" class="nav-link py-3 border-bottom rounded-0" title="Rafraichir">
					<i class="fa-solid fa-arrows-rotate"></i>
				</a>
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link py-3 border-bottom rounded-0" id="infos" title="Informations">
					<i class="fa-solid fa-circle-info"></i>
				</a>
				<div class="mymodcontainer" id="modalinfos" style="display: none">
					<h3 class="mod-title">Informations sur les mangroves</h3>
					<hr>
					<div class="accordion" id="accordionExample">
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingOne">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Accordion Item #1
							</button>
							</h2>
							<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
							</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingTwo">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								Accordion Item #2
							</button>
							</h2>
							<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
							</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingThree">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								Accordion Item #3
							</button>
							</h2>
							<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
							</div>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<a href="#" class="nav-link py-3 border-bottom rounded-0" title="Partager">
					<i class="fa-solid fa-share-nodes"></i>
				</a>
			</li>
			</ul>
		</div>
		<div class="map-container">	
			<div id="map"></div>
		</div>
	</div>
	</body>
</html>