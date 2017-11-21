<?php $__env->startSection('cabecalho'); ?>
<!-- Carousel -->
<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
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
				<button class="btn btn-hero btn-lg" role="button">Procure No Mapa</button>
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
					<h1>Algo Aqui!</h1>        
					<h3>Aprenda a Reciclar</h3>
				</hgroup>
				<button class="btn btn-hero btn-lg" role="button">Clique Aqui</button>
			</div>
		</div>
	</div>
</div> 
<header id="box1" class="container-fluid box1">
	<div class="container">
		<div class="titulo">
			<h1>Tutoriais sobre a reciclagem</h1>
			<p>Aprenda a reciclar de forma correta!</p>
		</div>



		<div class="row">
			<div class="col-sm-6 col-md-6">
				<div class="thumbnail">
					<div class="imagemThubnail imagemThubnail1">
						<!-- <img src=""> -->
					</div>
					<div class="caption">
						<h3>Lorem ipsum</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ipsa voluptate, quae quibusdam. Doloremque similique, reiciendis sit quibusdam aperiam? Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						<p><a href="#" class="btn btn-primary" role="button">Ler Mais</a></p>
					</div>
				</div>
			</div>


			<div class="col-sm-6 col-md-6">
				<div class="thumbnail">
					<div class="imagemThubnail imagemThubnail2">
						<!-- <img src=""> -->
					</div>
					<div class="caption">
						<h3>Lorem ipsum</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ipsa voluptate, quae quibusdam. Doloremque similique, reiciendis sit quibusdam aperiam? Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						<p><a href="#" class="btn btn-primary" role="button">Ler Mais</a></p>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-6 col-md-6">
				<div class="thumbnail">
					<div class="imagemThubnail imagemThubnail3">
						<!-- <img src=""> -->
					</div>
					<div class="caption">
						<h3>Lorem ipsum</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ipsa voluptate, quae quibusdam. Doloremque similique, reiciendis sit quibusdam aperiam? Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						<p><a href="#" class="btn btn-primary" role="button">Ler Mais</a></p>
					</div>
				</div>
			</div>


			<div class="col-sm-6 col-md-6">
				<div class="thumbnail">
					<div class="imagemThubnail imagemThubnail4">
						<!-- <img src=""> -->
					</div>
					<div class="caption">
						<h3>Lorem ipsum</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ipsa voluptate, quae quibusdam. Doloremque similique, reiciendis sit quibusdam aperiam? Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						<p><a href="#" class="btn btn-primary" role="button">Ler Mais</a></p>
					</div>
				</div>
			</div>
		</div>

	</header>
	<?php $__env->stopSection(); ?>

<?php echo $__env->make('.site.template.cabecalho', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>