{% extends "template.php" %}
{% block body %}
<link rel="stylesheet" type="text/css" href="/public/assets/css/galeria-imagens.css">
<!-- Body Init -->
<main id="content-body" class="container col-lg-12">	
	<section id="galeria-content" class="thumbnail col-lg-12">
		<h2>GALERIA DE IMAGENS: Fotos Sessão 2017</h2>
		{% for i in 0..10 %}
		<div class="galeria-img thumbnail col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<img src="/public/assets/images/1030_big.jpg" class="thumbnail col-lg-12">
			<a href="/public/assets/images/1032_big.jpg" data-lightbox="image-1" data-title="Hello">
				<div class="galeria-mask thumbnail col-lg-12">
				<i class="fa fa-camera fa-4x" aria-hidden="true"></i>
				</div>
			</a>
		</div>
		{% endfor %}
	</section>
</main>	
{% endblock %}