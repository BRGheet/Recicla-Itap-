<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Recicla Itapê</title>
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/jquery.sweet-modal.min.css') }}" />
    <script src="{{ URL::asset('js/tinymce/tinymce.min.js') }}"></script>
    <script type="text/javascript">
      tinymce.init({ selector: '#texto' });
    </script>
    <!-- Google Fonts -->
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script>
       $(document).ready(function(){
           $('.pagina').click(function(){

               var pagina = this.id;
               pagina = "/"+ pagina;
              
              
               $.ajax({
                   type: "GET",
                   url: pagina,
                   success: function(data){
                      $('#conteudo').html(data);
                   }
               });

           });
       });
    </script>
  </head>
  <body>
    @include('site.includes.cabecalho')
    <nav class="navbar navbar-default navbar-green hidden-lg hidden-md">
        <div class="container">
            <div class="navbar-header cor-branco">
                 <!-- <a href="#" class="navbar-brand"><img src="img/logo.png" alt="Logo do Recicla Itapê"></a>-->
                <button type="button" onclick="openNav()" class="navbar-toggle pull-left">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> 
                <a href="index.html" class="navbar-brand hidden-xs">Recicla Itapê</a>
                <a href="index.html" class="navbar-brand hidden-sm hidden-md hidden-lg">Recicla Itapê</a>                
            </div>
        </div>
    </nav>

    <nav id="mySidenav" class="sidebar">
      <div class="sidenav-image">
        <h1>ADMIN</h1>
      </div>
      <button class="closebtn" onclick="closeNav()">&times;</button>
      <a href="#" class="pagina" id="info">Nova Informação/Tutorial</a>
      <a href="#" class="pagina" id="ponto">Novo Marcador no mapa</a>
      <a href="#" class="pagina" id="coop">Nova Cooperativa</a>
      <a href="#" class="pagina" id="gift">Nova Recompensa</a>
    </nav>
      <nav class="col-md-2 sidebar-lg hidden-xs hidden-sm">
        <h1>ADMIN</h1>
          <h2>Implementação</h2>
          <a class="pagina" id="add">Adicionar Ponto</a>
          <a class="pagina" id="check">Verificar Voucher</a>
          <a href="/admin">Nova Informação</a>
          <a class="pagina" id="ponto">Novo Marcador no mapa</a>
          <a class="pagina" id="coop">Nova Cooperativa</a>
          <a class="pagina" id="gift">Nova Recompensa</a>
          <h2>Modificação</h2>
          <a href="/admin/info/show">Editar Informações</a>
          <a href="/admin/ponto/show">Editar Marcadores no mapa</a>
          <a href="/admin/coop/show">Editar Cooperativas</a>
          <a href="/admin/gift/show">Editar Recompensas</a>
      </nav>
      <div class="col-md-2"></div>
      <div id="conteudo" class="container col-md-10">
        @yield('content')
      </div>
    <!-- Script NavBar -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/Navbar.js') }}"></script>
    <script src="https://use.fontawesome.com/eb29782670.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.sweet-modal.min.js') }}"></script>
    <script src="{{ URL::asset('js/jspdf/jspdf.js') }}"></script>
    <script type="text/javascript">
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
    </script>
    <script type="text/javascript">
      var file = null;
      $(document).on('click', '.btn-green', function(){
        var pagina = null;
        if ($('.btn-green').attr('data-cod') == 1) {
          pagina = $(this).attr('data-type');
          pagina = '/admin/'+pagina+'/store';
        }else{
          pagina = $(this).attr('data-type');
          pagina = '/admin/'+pagina+'/update';
        }
        if ($('#upload').length > 0){
          var form = $('#upload')[0];
          file = new FormData(form);
          if ($('#texto').length > 0){
            file.append('texto', tinymce.get('texto').getContent());
          }
        }
        $.ajax({
          type: 'POST',
          data: file,
          dataType: 'text',
          processData: false,
          contentType: false,
          url: pagina,
          success: function(data){
            $.sweetModal({
              content: data,
              icon: $.sweetModal.ICON_SUCCESS
            });
          },
        });
      });
    </script>

    @yield('script')
  </body>
</html>
<style type="text/css">
  body,html{
    overflow-y: hidden;
  }
</style>