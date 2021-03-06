<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <title><?php echo e(isset($title) ? $title : 'Recicla Itapê - Reciclagem'); ?></title>
  <!--************ Arquivos Css ****************-->
  <link href="<?php echo e(URL::asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo e(URL::asset('css/style.css')); ?>">
  <?php echo $__env->yieldPushContent('estilos'); ?>
</head>
<body>
  <!-- Sidebar Principal -->
  <nav class="navbar navbar-default navbar-green">
    <div class="container">
      <div class="navbar-header cor-branco">
        <!-- <a href="#" class="navbar-brand"><img src="img/logo.png" alt="Logo do Recicla Itapê"></a>-->
        <button type="button" onclick="openNav()" class="navbar-toggle pull-left">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> 
        <a href="/" class="navbar-brand hidden-xs">Recicla Itapê</a>
        <a href="/" class="navbar-brand hidden-sm hidden-md hidden-lg">Recicla Itapê</a>                
      </div>
      <div class="col-md-5 col-md-offset-3 hidden-xs">
        <ul class="nav navbar-nav">
          <li><a href="/">Home</a></li>
          <li><a href="/reciclar">Quero Reciclar</a></li>
          <li><a href="/cooperativas">Cooperativas</a></li>
        </ul>
      </div>
      <div class="nav navbar-nav navbar-right">
        <div class="dropdown hidden-xs">
          <?php if(!Auth::guard('web')->check() and !Auth::guard('admin')->check()): ?>
            <a href="<?php echo e(url('cadastro/login')); ?>"><button class="btn btn-blue-outline navbar-btn">Entrar</button></a>
          <?php elseif(Auth::guard('web')->check() and Auth::guard('admin')->check()): ?>
            <div class="btn-group">
              <button type="button" class="btn btn-blue-outline navbar-btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="/vouchers">Vouchers</a></li>
                <li><a href="/minha_conta">Minha Conta</a></li>
                <li><a href="/admin">DashBoard</a></li>
                <li><a href="<?php echo e(route('logout')); ?>"  onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Sair</a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                <?php echo e(csrf_field()); ?></form></li>
              </ul>
            </div>
          <?php endif; ?>
          <?php if(Auth::guard('web')->check() and !Auth::guard('admin')->check()): ?>
          <div class="btn-group">
            <button type="button" class="btn btn-blue-outline navbar-btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
              <li><a href="/vouchers">Vouchers</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="/minha_conta">Minha Conta</a></li>
              <li><a href="<?php echo e(route('logout')); ?>"  onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Sair</a>
              <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
              <?php echo e(csrf_field()); ?></form>
            </li>
          </ul>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </nav>
  <!--  Fim Sidebar Principal
  <nav id="mySidenav" class="sidebar">
    <div class="sidenav-image">
      <button class="btn btn-green">Cadastre-se</button>
    </div>
    <button class="closebtn" onclick="closeNav()">&times;</button>
    <a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> Informações</a>
    <a href="#"><i class="fa fa-play" aria-hidden="true"></i>Vídeos</a>
    <a href="reciclar"><i class="fa fa-recycle" aria-hidden="true"></i>Quero Reciclar</a>
    <a href="cooperativas"><i class="fa fa-home" aria-hidden="true"></i>Cooperativas</a>
    <a href="#"><i class="fa fa-ticket" aria-hidden="true"></i>Recompensas</a>
    <a href="#"><i class="fa fa-comment" aria-hidden="true"></i>Dicas</a>
    <a href="#"><i class="fa fa-question-circle" aria-hidden="true"></i>Sobre</a>
  </nav> -->
    <?php echo $__env->yieldContent('cabecalho'); ?>
  <!-- Script NavBar -->
 <script type="text/javascript" src="<?php echo e(URL::asset('js/Navbar.js')); ?>"></script>
  <script src="https://use.fontawesome.com/6a84f90556.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="<?php echo e(URL::asset('js/bootstrap.min.js')); ?>"></script> 
  <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<style type="text/css">
  .dropdown-menu>li>a, .open>.dropdown-menu, .open>.dropdown-menu, .dropdown-menu>li>a:hover {
    color: white;
    background-color: #1FDCA6;
    border-radius: 0px;
    text-align: justify;
}
.dropdown-menu>li>a, .open>.dropdown-menu, .open>.dropdown-menu, .dropdown-menu>li>a {
    color: white;
    background-color: #008000;
    border-radius: 0px;
    text-align: justify;
    font-size: 1em;
}
</style>