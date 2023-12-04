<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
		<link rel="stylesheet" href="{{asset('front/assets/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/assets/css/main.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/css/carte.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/fontawesome/css/fontawesome.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/fontawesome/css/brands.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/fontawesome/css/solid.css')}}">
		<link href="https://api.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.css" rel="stylesheet">
		<script src="https://api.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.js"></script>
		<script src="{{asset('front/assets/js/jquery-1.11.3.min.js')}}" defer></script>
        <script src="{{asset('front/assets/bootstrap/js/bootstrap.min.js')}}" defer></script>
        
		<script src="{{asset('front/assets/js/script.js')}}" defer></script>
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
					<div id="menu" class="style-container">
						<div class="form-check">
							<input class="form-check-input" type="radio" name="exampleRadios" id="streets-v12" value="option2" checked>
							<label class="form-check-label" for="exampleRadios2">
								Street
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="exampleRadios" id="dark-v11" value="option2">
							<label class="form-check-label" for="exampleRadios2">
								Sombre
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="exampleRadios" id="satellite-streets-v12" value="option2">
							<label class="form-check-label" for="exampleRadios2">
								Satellite
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="exampleRadios" id="light-v11" value="option1">
							<label class="form-check-label" for="exampleRadios1">
								Light
							</label>
						</div>
						{{-- <div class="style-content">
							<h4>Claire</h4>
							<div class="inner-style">
								<img src="{{asset('front/assets/img/clair.webp')}}" alt="">
								<input class="form-check-input" type="radio" value="option1" id="light-v11">
								<p>Style Claire</p>
							</div>
						</div>
						<div class="style-content">
							<h4>Sombre</h4>
							<div class="inner-style">
								<img src="{{asset('front/assets/img/sombre.webp')}}" alt="">
								<input class="form-check-input" type="radio" value="option2" id="dark-v11">
								<p>Style Sombre</p>
							</div>
						</div>
						<div class="style-content">
							<h4>Satellite</h4>
							<div class="inner-style">
								<img src="{{asset('front/assets/img/satellite.webp')}}" alt="">
								<input class="form-check-input" type="radio" value="option3" id="satellite-streets-v12">
								<p>Style Satellite</p>
							</div>
						</div> --}}
					</div>
				</div>
			</li>
			<li>
				<a href="#" class="nav-link py-3 border-bottom rounded-0" id="place" title="Place">
					<i class="fa-solid fa-globe"></i>
				</a>
				<div class="mymodcontainer" id="modalplace" style="display: none">
					<h3 class="mod-title">Zones de mangroves</h3>
					<hr>
					<div class="form-check form-switch">
						<input class="form-check-input" type="checkbox" id="saintlouis" >
						<label class="form-check-label" for="flexSwitchCheckChecked">Saint Louis</label>
					</div>
					<div class="form-check form-switch">
						<input class="form-check-input" type="checkbox" id="joal" >
						<label class="form-check-label" for="flexSwitchCheckChecked">Joal Fadiouth</label>
					</div>
					<div class="form-check form-switch">
						<input class="form-check-input" type="checkbox" id="sokone" >
						<label class="form-check-label" for="flexSwitchCheckChecked">Sokone</label>
					</div>
					<div class="form-check form-switch">
						<input class="form-check-input" type="checkbox" id="fleuvesenegal" >
						<label class="form-check-label" for="flexSwitchCheckChecked">Fleuve Senegal</label>
					</div>
					<div class="form-check form-switch">
						<input class="form-check-input" type="checkbox" id="casamance" >
						<label class="form-check-label" for="flexSwitchCheckChecked">Basse Casamance</label>
					</div>
				</div>
			</li>
			<li>
				<a href="{{ route('carte') }}" class="nav-link py-3 border-bottom rounded-0" title="Rafraichir">
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
								La Flore
							</button>
							</h2>
							<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								Le Sénégal compte 6 espèces de mangroves. Parmi eux, aucun n’est considéré comme menacé par la Liste rouge de l’UICN.
								<br>
								<strong>Acrostichum aureum</strong>
								<br>
								<strong>Avicennia germinans</strong>
								<br>
								<strong>Conocarpus erectus</strong>
								<br>
								<strong>Laguncularia racemosa</strong>
								<br>
								<strong>Rhizophora mangle</strong>
								<br>
								<strong>Rhizophora racemosa</strong>
							</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingTwo">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								La Faune
							</button>
							</h2>
							<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<strong>La faune des mangroves au Sénégal est diversifiée et abrite de nombreuses espèces adaptées à cet écosystème unique.</strong>
								<p>
									<strong>Espèces Aviaires</strong>
									<br>
									<strong>Espèces Poissonneuses</strong>
									<br>
									<strong>Crustacés et Mollusques</strong>
									<br>
									<strong>Reptiles et Amphibiens</strong>
									<br>
									<strong>Mammifères</strong>
								</p>
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