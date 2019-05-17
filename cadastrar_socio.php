<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
      <title>Cadastrar Restaurante</title>

    </head>

    <body>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>

      <nav class="materialize-red darken-1" role="navigation">
        <div class="nav-wrapper container">
          <a id="logo-container" href="#" class="brand-logo">Gestor de Filas</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="index.html">Página Inicial</a></li>
          </ul>

          <ul id="nav-mobile" class="sidenav">
            <li><a href="index.html">Página Inicial</a></li>
          </ul>
          <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
      </nav>

      <div class="container center">
        <h3>Cadastro Sócio-Administrador</h3>
        <form class="col s12">
          <div class="row">
            <div class="input-field col s12">
              <input id="email" type="email" class="validate">
              <label for="email">Email</label>
            </div>
            <div class="input-field col s12">
              <input id="name" type="text" class="validate">
              <label for="name">Nome Completo</label>
            </div>
            <div class="input-field col s6">
              <input id="celular" type="text" class="validate">
              <label for="celular">Celular</label>
            </div>
            <div class="input-field col s6">
              <input id="cpf" type="text" class="validate">
              <label for="cpf">CPF</label>
            </div>
            <div class="row"></div>
            <p>
              <label>
                <input type="checkbox" />
                <span>Eu autorizo contato da empresa via telefone e/ou e-mail</span>
              </label>
            </p>
            <div class="row"></div>
            <a class="waves-effect waves-light btn materialize-red darken-1" href="cadastrar_restaurante.html">Seguinte</a>
          </div>
        </form>
      </div>
    </body>
  </html>