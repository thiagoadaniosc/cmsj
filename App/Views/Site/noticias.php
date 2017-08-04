{% extends "template.php" %}
{% block body %}
<link rel="stylesheet" type="text/css" href="/public/assets/css/noticias.css">
<!-- Body Init -->
<main id="content-body" class="container">	
	<section id="noticias-content" class="container thumbnail">

		<h1>NOTICIAS</h1>

		{% for i in 1..12 %}
			<article class="thumbnail news-item col-lg-12">
				<a href="" class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-xl-12 img-news-link">
					<img class="img-responsive img-news col-lg-12" src="/public/assets/images/1032_big.jpg">

				</a>

				<div class="news-item-content col-lg-8">
					<p class="news-item-data"> <i class="fa fa-clock-o" aria-hidden="true"></i> - 27 de Julho de 2017</p>
					<a href="noticia" class="news-link">
						<h4 class="news-title">TITULO DA NOTICIA</h4>

						<p class="news-content-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet nibh lacinia, lacinia libero at, semper nibh. Etiam leo odio, sodales eget finibus sit amet, efficitur nec urna. Nullam purus enim, cursus commodo tristique ut, vehicula et turpis.</p>
					</a>
				</div>
				<a href="" class="news-item-btn btn btn-primary">Leia Mais</a>

			</article>
		{% endfor %}

	</section>
</main>	
{% endblock %}