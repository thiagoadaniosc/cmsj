{% extends "template.php" %}
{% block body %}
<link rel="stylesheet" type="text/css" href="/public/assets/css/noticia.css">
<!-- Body Init -->
<main id="content-body" class="container">	
	<article class="thumbnail col-lg-8">

		<h1 class="article-title">Titulo da Noticia dassdasaddsadsadsadsadasdassad</h1>
		<h4 class="article-subtext">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</h4>

		<p class="article-author"><i class="fa fa-address-card-o fa-lg" aria-hidden="true"> -</i> Reporter 007 </p>
		<p class="article-date"><i class="fa fa-clock-o fa-lg" aria-hidden="true"> -</i> 07/07/2017 | Atualizado em: 08/07/2017 as 18:00</p>
		<p class="article-tags">
			<i class="fa fa-tags fa-lg" aria-hidden="true"> -</i>
			<span class="label label-primary">Vereadores</span>
			<span class="label label-primary">Noticias</span>
			<span class="label label-primary">Mercado</span>


		</p>

		<hr style="border-color: #A4A4A4; ">
		
		<figure class="img-thumbnail" style="margin: auto;">
			<a href="/public/assets/images/1032_big.jpg" data-lightbox="image-1" data-title="Hello">
				<img src="/public/assets/images/1032_big.jpg" class="img-responsive">
			</a>
		<figcaption><strong>Descrição: </strong> Foto da sessão</figcaption>

		</figure>


		<p class="article-content">	  Norem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.		
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

		</p>
	</article>

	{% include 'includes/last-news.php' %}

</main>

{% endblock %}