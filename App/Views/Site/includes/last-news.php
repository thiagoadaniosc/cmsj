<section id="last-news" class="col-lg-4 col-md-4 col-xs-12 col-sm-12 thumbnail" style="padding-left: 20px; padding-right: 20px; margin:0;  border-radius: 0; border:0; ">

	<h3 class="col-lg-12" style="background-color: #274376; color:white; padding: 15px;  margin:0; padding-left: 20px; border-radius: 3px;
	border-bottom: 4px solid #0F314E; font-weight: bold;">Últimas Noticias</h3>
	<!--<h4 class="col-lg-12" style="background-color: #274376; padding: 5px; line-height:20px; margin:0; font-size: 14px; text-align: center"><a href="noticias" style="color: white" >Mais Noticias...</a></h4>-->

	<!-- INIT NOTICIA ITEM-->
	{% for i in 0..5 %}
		<div class="last-news-item thumbnail col-lg-12"> 
			<a href="">
				<div class="news-img col-lg-5" >
					<img src="public/assets/images/1032_big.jpg" class="img-responsive col-lg-12">
				</div>
				<h4 class="news-title col-lg-7">Noticia de hoje em dia<br>			
				</h4>
			</a>
		</div>
	{% endfor %}
	<!-- END  NOTICIA ITEM-->


</section>