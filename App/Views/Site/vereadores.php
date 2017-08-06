{% extends "template.php" %}
{% block body %}
<link rel="stylesheet" type="text/css" href="/public/assets/css/vereadores.css">
<!-- Body Init -->
<main id="content-body" class="container col-lg-12">	
	<section id="vereadores-content" class="container thumbnail col-lg-9">

		<h1><i class="fa fa-chevron-right" aria-hidden="true"></i> {{ 'vereadores'|upper }} <i class="fa fa-chevron-left" aria-hidden="true"></i></h1>

		<ul uk-accordion="multiple: true">
			{% for i in 1..10 %}
			<li class="uk-open thumbnail">
				<h2 class="uk-accordion-title">Vereador Abel Veiga</h2>
				<div class="uk-accordion-content">
					<img src="/public/assets/images/vereador.jpg" class="img-responsive col-lg-3 col-md-3 col-sm-12 col-xl-12 col-xs-12">
					<div class="vereador-descricao col-lg-9 col-md-9 col-sm-12">
						<section>
							<ul>
								<li> <span>Partido: PMDB</span></li>
								<li><span><i class="fa fa-calendar" aria-hidden="true"> - </i> 20/06/2000</span></li>
								<!--<li><span>Instrução: Ensino Médio Completo</span></li>-->

							</ul>
						</section>
						<section class="descricao">
							<span>Descrição:</span> Abel Veiga, filho de Wilson Veiga e Maria Lúcia Vieira, nasceu em 20 de fevereiro de 1980, no município de Palhoça/SC. Homem trabalhador, pai dedicado, mudou-se para o município de São José/SC, no ano de 1995, cidade que passou a amar e cuidar.
						</section>
						<a href="" class="btn btn-primary vereador-btn	">Perfil Completo</a>
					</div>
				</div>
			</li>
			{% endfor %}
		</ul>

	</section>

	<section class="menu-institucional col-lg-3">
		<nav class="navbar navbar-inverse">
			<ul class="nav navbar-nav nav-pills">
				<li class="nav-item"><a href="">História</a></li>
				<li class="nav-item"><a href="">Honraria</a></li>
				<li class="nav-item menu-active"><a href="">Vereadores</a></li>
				<li class="nav-item"><a href="">Mesa Diretora</a></li>
				<li class="nav-item"><a href="">Ex-Presidenes</a></li>
			</ul>
			
		</nav>
	</section>
</main>	
{% endblock %}