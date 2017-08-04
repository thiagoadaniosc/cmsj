{% extends "template.php" %}
{% block body %}
<link rel="stylesheet" type="text/css" href="/public/assets/css/contato.css">
<!-- Body Init -->
<main id="content-body" class="container">

	<h2>Contato</h2>
	<section id="form" class="col-lg-6 thumbnail">

		<form method="post" action="contato.php" class="form-inline">

			<input type="text" name="nome" placeholder="Nome" class="uk-input uk-width-1-2@s">
			<input type="text" name="telefone" placeholder="Telefone" class="uk-input uk-width-1-2@s">
			<input type="text" name="email" placeholder="E-mail" class="uk-input uk-width-1-2@s">
			<input type="text" name="assunto" placeholder="Assunto" class="uk-input uk-width-1-2@s">
			<textarea name="mensagem" placeholder="Mensagem" class="uk-input"></textarea>
			<input type="reset" value="Limpar" class="uk-button uk-button-danger">
			<input type="submit" value="Enviar" class="uk-button uk-button-primary">

		</form>
	</section>

	<section id="contato" class="col-lg-6">
		<div class="thumbnail">
			<h3>Departamento de Comunicação</h3>
			<h4>E-mail: contato@cmsj.sc.gov.br</h4>
			<h4>Telefone: (48) 3029 1321</h4>
		</div>
	</section>
	<section id="mapa" class="col-lg-6">
		<iframe src="https://www.google.com/maps/embed/v1/place?q=S%C3%A3o%20Jos%C3%A9%20-%20SC%2C%20Brasil%20camara&key=AIzaSyCToDJVcW0GDW1wd2NpTgIF8jFAeITH74Q" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 thumbnail"></iframe>
	</section>

</main>
{% endblock %}

