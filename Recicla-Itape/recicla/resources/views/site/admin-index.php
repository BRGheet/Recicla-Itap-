<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recicla Itapê</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="css/QueroReciclar.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function(){
          $('.pagina').click(function(){

              var pagina = this.id;
              pagina = "resources/views/site/admin-"+pagina+".php";
              
              
              $.ajax({
                  url: pagina,
                  success: function(data){
                      /*Precisa de um servidor para funcionar*/
                      $('#conteudo').html(data)
                  }
              });

          });
      });
    </script>
  </head>
  <body>
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
      <a href="#" class="pagina" id="info">Nova Informação</a>
      <a href="#" class="pagina" id="video">Novo Vídeo</a>
      <a href="#" class="pagina" id="ponto">Novo Ponto no Quero Reciclar</a>
      <a href="#" class="pagina" id="coop">Nova Cooperativa</a>
      <a href="#" class="pagina" id="gift">Nova Recompensa</a>
      <a href="#" class="pagina" id="dicas">Alterar Dicas</a>
    </nav>
      <nav class="col-md-2 sidebar-lg hidden-xs hidden-sm">
      	<h1>ADMIN</h1>
      	  <a href="#" class="pagina" id="info">Nova Informação</a>
        	<a href="#" class="pagina" id="video">Novo Vídeo</a>
        	<a href="#" class="pagina" id="ponto">Novo Ponto no Quero Reciclar</a>
        	<a href="#" class="pagina" id="coop">Nova Cooperativa</a>
        	<a href="#" class="pagina" id="gift">Nova Recompensa</a>
        	<a href="#" class="pagina" id="dicas">Alterar Dicas</a>
      </nav>
          <div id="conteudo" class="col-md-10">
              <div class="row">
              
              </div>
          </div>
    <!-- Script NavBar -->
    <script type="text/javascript" src="js/Navbar.js"></script>
    <script src="https://use.fontawesome.com/eb29782670.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>