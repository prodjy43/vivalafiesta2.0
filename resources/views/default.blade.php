<!DOCTYPE html>
<html>
<head>
	<title>VivaLaFiesta - {{ $title }}</title>
		<!--[if lte IE 8]><script src="{{ elixir('js/ie/html5shiv.js') }}"></script><![endif]-->
		<link rel="stylesheet" href="{{ elixir('css/main.css') }}" />
		<!--[if lte IE 8]><link rel="stylesheet" href="{{ elixir('css/ie8.css') }}" /><![endif]-->
</head>
<body>
	<div id="page-wrapper">
			<!-- Header -->
				<div id="header-wrapper" class="wrapper">
					<div id="header">

						<!-- Logo -->
							<div id="logo">
								<h1><a href="index.html">Viva La Fiesta</a></h1>
								<p>Un moyen de crée et geré des evenements simplement</p>
							</div>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li class="current"><a href="/">Accueil</a></li>
									<li><a href="/soiree">Soirée</a></li>
									<li>
										<a href="#">Galerie</a>
										<ul>
											<li><a href="galerie/photos">Photos</a></li>
											<li><a href="galerie/videos">Vidéos</a></li>
										</ul>
									</li>
									<li><a href="/faq">F.A.Q</a></li>
									@if (Auth::check())
										<li><a href="/account/{{ Auth::user()->nom }}/{{ Auth::user()->prenom }}">{{ Auth::user()->prenom }} {{ Auth::user()->nom }}</a></li>
										@if (Auth::user()->grade_id === 2)
											<li><a href="#">Administration</a>
												<ul>
													<li><a href="/admin/user">Utilisateurs</a></li>
													<li><a href="/administration/faq">F.A.Q</a></li>
													<li><a href="/administration/evenements">Evénements</a></li>
													<li><a href="/administration/transactions">Transactions</a></li>
													<li><a href="/administration/benefice">Bénéfice / Recette</a></li>
												</ul>
											</li>
										@endif
										<li><a href="/account/logout">Deconnexion</a></li>
									@else
										<li><a href="/account/login">Connexion</a></li>
										<li><a href="/account/register">Inscription</a></li>
									@endif
								</ul>
							</nav>

					</div>
				</div>
				
				@yield('content')

			<!-- Footer -->
				<div id="footer-wrapper" class="wrapper">
					<div class="title">Contactez-nous</div>
					<div id="footer" class="container">
						<header class="style1">
							<h2>Vous voulez nous contacter ?</h2>
							<p>
								Envoyez nous un mail ou rejoigner sur <strong>Facebook</strong> ou <strong>Linkedin</strong><br />
								Il vous est possible de nous contacter par <strong>téléphone</strong> avec le numéro ci-dessous
							</p>
						</header>
						<hr />
						<div class="row 150%">
							<div class="6u 12u(mobile)">

								<!-- Contact Form -->
									<section>
										<form method="post" action="#">
											<div class="row 50%">
												<div class="6u 12u(mobile)">
													<input type="text" name="Nom" id="contact-name" placeholder="Name" />
												</div>
												<div class="6u 12u(mobile)">
													<input type="text" name="email" id="contact-email" placeholder="Email" />
												</div>
											</div>
											<div class="row 50%">
												<div class="12u">
													<textarea name="message" id="contact-message" placeholder="Message" rows="4"></textarea>
												</div>
											</div>
											<div class="row">
												<div class="12u">
													<ul class="actions">
														<li><input type="submit" class="style1" value="Envoyer" /></li>
														<li><input type="reset" class="style2" value="Effacer" /></li>
													</ul>
												</div>
											</div>
										</form>
									</section>

							</div>
							<div class="6u 12u(mobile)">

								<!-- Contact -->
									<section class="feature-list small">
										<div class="row">
											<div class="6u 12u(mobile)">
												<section>
													<h3 class="icon fa-home">Localisation</h3>
													<p>
														Untitled Corporation<br />
														1234 Somewhere Rd #987<br />
														Nashville, TN 00000-0000
													</p>
												</section>
											</div>
											<div class="6u 12u(mobile)">
												<section>
													<h3 class="icon fa-comment">Social</h3>
													<p>
														<a href="#">@untitled-corp</a><br />
														<a href="#">linkedin.com/untitled</a><br />
														<a href="#">facebook.com/untitled</a>
													</p>
												</section>
											</div>
										</div>
										<div class="row">
											<div class="6u 12u(mobile)">
												<section>
													<h3 class="icon fa-envelope">Email</h3>
													<p>
														<a href="#">info@untitled.tld</a>
													</p>
												</section>
											</div>
											<div class="6u 12u(mobile)">
												<section>
													<h3 class="icon fa-phone">Téléphone</h3>
													<p>
														(000) 555-0000
													</p>
												</section>
											</div>
										</div>
									</section>

							</div>
						</div>
						<hr />
					</div>
					<div id="copyright">
						<ul>
							<li>&copy; all rights reserved to VivaLaFiesta</li><li>Design: <a href="http://html5up.net">HTML5 UP</a> - Ivan Biedermann</li>
						</ul>
					</div>
				</div>

		</div>
</body>
	<script src="{{ elixir('js/jquery.min.js') }}"></script>
	<script src="{{ elixir('js/jquery.dropotron.min.js') }}"></script>
	<script src="{{ elixir('js/skel.min.js') }}"></script>
	<script src="{{ elixir('js/skel-viewport.min.js') }}"></script>
	<script src="{{ elixir('js/util.js') }}"></script>
	<!--[if lte IE 8]><script src="{{ elixir('js/ie/respond.min.js') }}"></script><![endif]-->
	<script src="{{ elixir('js/main.js') }}"></script>
</html>