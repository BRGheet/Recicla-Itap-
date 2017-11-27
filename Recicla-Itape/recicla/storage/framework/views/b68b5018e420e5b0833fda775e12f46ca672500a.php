<?php $__env->startSection('cabecalho'); ?>
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="ModalLabel">Selecione um filtro para a melhor visualização do mapa.</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <button class="btn btn-green btn-filter" value="/reciclar/f=papel"><span class="glyphicon glyphicon-file"></span> Papéis</button>
            </div>
            <div class="col-md-6">
              <button class="btn btn-green btn-filter" value="/reciclar/f=plastico"><span class="glyphicon glyphicon-cd"></span> Plásticos</button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <button class="btn btn-green btn-filter" value="/reciclar/f=vidro"><span class="glyphicon glyphicon-glass"></span> Vidros</button>
            </div>
            <div class="col-md-6">
              <button class="btn btn-green btn-filter" value="/reciclar/f=metal"><span class="glyphicon glyphicon-oil"></span> Metais</button>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Div Mapa Google -->
<div class="container-fluid mapgoogle">
  <button class="btn btn-blue filter">
    <strong>Filtro</strong>
  </button>
  <div class="col-md-12" id="map"></div>
</div>
<!-- Chamando Rodape -->
<?php echo $__env->make('site.includes.rodape', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<script type="text/javascript">
  $('.filter').click(function(){
    $('#modal').modal('show');
  });
  $('.btn-filter').click(function(){
    var url = $(this).val();
    $(location).attr('href',url);
  });
  function initMap() {
    var meio = {lat: -23.588225, lng: -48.040106};
    var map = new google.maps.Map(document.getElementById('map'), {
      center: meio,
      zoom: 13,
      /*Minimo zoom limite*/
      minZoom:13,
      zoomControl: true,
      scaleControl: true,
      streetViewControl: false,
      /*Desabilita ctrl para zoon*/
      /*gestureHandling: 'greedy'*/
    });

    <?php $__currentLoopData = $markers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    var info<?php echo e($marker->id); ?> = new google.maps.InfoWindow({
      content: "<h2><?php echo e($marker->name); ?></h2>"
      +"<p><?php echo e($marker->content); ?></p>"
      +"<h5>Endereço</h5> <?php echo e($marker->address); ?><br>"
      +"<h5>A cooperativa coleta os seguintes tipos de lixo</h5> <br>"
      <?php if($marker->papel): ?>
      +"<span class=\"glyphicon glyphicon-file\"></span><strong> Papel</strong> "
      <?php endif; ?>
      <?php if($marker->plastico): ?>
      +"<span class=\"glyphicon glyphicon-cd\"></span><strong> Plastico</strong> "
      <?php endif; ?>
      <?php if($marker->vidro): ?>
      +"<span class=\"glyphicon glyphicon-glass\"></span><strong> Vidro</strong>"
      <?php endif; ?>
    });
    var marker<?php echo e($marker->id); ?> = new google.maps.Marker({
     position: {lat: <?php echo e($marker->lat); ?>, lng: <?php echo e($marker->lng); ?> },
     map: map,
     title: "<?php echo e($marker->name); ?>"
   });
    marker<?php echo e($marker->id); ?>.addListener('click', function(){
      info<?php echo e($marker->id); ?>.open(map,marker<?php echo e($marker->id); ?>)
    });

    marker<?php echo e($marker->id); ?>.setMap(map);
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  }
</script>     
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKTFiIq0LFTvHk92BdJ1qnyUf_U3AGDOE&callback=initMap"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('.site.template.cabecalho', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>