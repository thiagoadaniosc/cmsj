{% extends "template.php" %}
{% block body %}
<link rel="stylesheet" type="text/css" href="/public/assets/css/galeria-imagens.css">
<!-- Body Init -->
<main id="content-body" class="container col-lg-12">	
	<section id="galeria-content" class="thumbnail col-lg-8 col-md-8">
		<h2>GALERIA DE IMAGENS</h2>
		{% for i in 0..11 %}
		<div class="galeria-img thumbnail col-lg-4 col-md-4 col-sm-12 col-xs-12">
			<img src="/public/assets/images/1030_big.jpg" class="thumbnail col-lg-12">
			<a href="/public/assets/images/1032_big.jpg" data-lightbox="image-1" data-title="Hello">
				<div class="galeria-mask thumbnail col-lg-12">
				<i class="fa fa-camera fa-4x" aria-hidden="true"></i>
				</div>
			</a>
		</div>
		{% endfor %}
	</section>
	
	<div id="central-multimidia" class="col-lg-4 col-md-4  col-sm-12 col-xs-12">
	<a href="">Central Multimídia</a>
	</div>

	{% include 'includes/last-news.php' %}

</main>	
{% endblock %}