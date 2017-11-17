@extends('.site.template.cabecalho')
@section('cabecalho')
<!-- Carousel -->
<!-- <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
	<div class="overlay" id="carousel"></div>
	<ol class="carousel-indicators">
		<li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
		<li data-target="#bs-carousel" data-slide-to="1"></li>
		<li data-target="#bs-carousel" data-slide-to="2"></li>
	</ol>

	<div class="carousel-inner">
		<div class="item slides active">
			<div class="slide-1"></div>
			<div class="hero">
				<hgroup>
					<h1>Recicle seu Lixo</h1>        
					<h3>Ajude o Meio Ambiente</h3>
				</hgroup>
				<a href="/reciclar"><button class="btn btn-hero btn-lg" role="button">Procure No Mapa</button></a>
			</div>
		</div>
		<div class="item slides">
			<div class="slide-2"></div>
			<div class="hero">        
				<hgroup>
					<h1>Lixo no Lixo</h1>        
					<h3>Ganhe Recompensas</h3>
				</hgroup>       
				<button class="btn btn-hero btn-lg" role="button">Veja Agora</button>
			</div>
		</div>

		<div class="item slides">
			<div class="slide-3"></div>
			<div class="hero">        
				<hgroup>
					<h1>Tutoriais sobre reciclagem</h1>        
					<h3>Aprenda a Reciclar</h3>
				</hgroup>
				<a href="#Tutoriais"><button class="btn btn-hero btn-lg" role="button">Clique Aqui</button></a>
			</div>
		</div>
	</div>
</div> 

<div id="box1" class="container box1">
	<div class="titulo">
		<h1 id="Tutoriais">
			Tutoriais sobre a reciclagem
		</h1>
		<p>
			Aprenda a reciclar de forma correta!
		</p>
	</div>

	@forelse($tutoriais as $tuto)
	<div class="col-sm-12 col-md-6">
		<div class="thumbnail">
			
				<div class="imagemThubnail" style="background-image:url('https://cdn4.ecycle.com.br/cache/images/guia_da_reciclagem/50-650-o-que-e-reciclagem.jpg');">
			</div>
			<div class="caption">
				<h3>{{$tuto->titulo}}.</h3>
				<p>{{$tuto->resumo}}</p>
				<p class="ReadMore">
					<a href="/tutoriais/{{$tuto->id}}" class="btn btn-primary" role="button">Ler Mais</a></p>
				</div>
			</div>
		</div>
		@empty
		<p style="text-align: center; font-size: 1.5em;">Nenhum Tutorial Encontrado</p>
		@endforelse
		<div class="col-md-12 paginacao">
			{!!$tutoriais->links()!!}
		</div>

	</div> -->
	<!-- Chamando Rodape -->
	@include('site.includes.rodape')
	@endsection
