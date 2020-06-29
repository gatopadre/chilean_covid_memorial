<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

  <title>Chile Covid Memorial</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="<?php echo base_url('/css/bootstrap.css');?>" />
  <link href="<?php echo base_url('/css/coming-sssoon.css');?>" rel="stylesheet" />

  <!--     Fonts     -->
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&display=swap" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-transparent navbar-fixed-top" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#">
              <i class="fa fa-facebook-square"></i>
              Facebook
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-twitter"></i>
              Twitter
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-instagram"></i>
              Instagram
            </a>
          </li>
        </ul>

      </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
  </nav>

  <div class="main" style="background-image: url('images/default.jpg')">

    <!--    Change the image source '/images/default.jpg' with your favourite image.     -->

    <div class="cover orange" data-color="black"></div>

    <!--   You can change the black color for the filter with those colors: blue, green, red, orange       -->

    <div class="container">
      <h1 class="logo cursive" style="font-style: italic;">
        Chile Covid Memorial
      </h1>
      <div class="content">
        <h4 class="motto shadow">
          Porque no son sólo números los que se incrementan día a día, tenemos la responsabilidad y necesidad de hacer más humana la realidad
          de la contingencia, entregando un espacio de apoyo a los familiares a los que este virus les ha arrebatado la oportunidad de despedirse
          de sus seres queridos. Muchos chilenos han partido sumergidos en absoluta soledad tras esta pandemia, es por esto que queremos poner
          en marcha una idea, crear un memorial social o intervención a nombre de todos los talentos y humanos que hemos perdido para dar una
          merecida despedida y homenaje que nos permita recordarlos como los integrantes que fueron de nuestra sociedad.</h4>
        <div class="subscribe">

          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <h5 class="info-text text">
                Dejanos tus datos el formulario a continuación, para que tu ser querido sea parte de esta intervención.
              </h5>
              <form class="form" role="form" id="form-inscripcion" id="form-inscripcion">
                <div class="form-group">
                  <label class="sr-only" for="nombre-input">Ingresa nombre de tu ser querido</label>
                  <input name="nombre" type="text" class="form-control transparent" placeholder="Escribe nombre de tu ser querido aqui">
                </div>
                <div class="form-group">
                  <label class="sr-only" for="rut-input">Ingresa rut de tu ser querido</label>
                  <input name="rut" type="text" class="form-control transparent" placeholder="Escribe rut de tu ser querido">
                </div>
                <div class="form-group">
                  <label class="sr-only" for="image-input">Ingresa tu correo de contacto</label>
                  <input name="email" type="email" class="form-control transparent" placeholder="Escribe tu correo de contacto">
                </div>
                <div class="form-group">
                  <label class="sr-only" for="image-input">Ingresa tu teléfono de contacto</label>
                  <input name="telefono" type="tel" class="form-control transparent" placeholder="Escribe tu teléfono de contacto">
                </div>
                <div class="form-group">
                  <label class="sr-only" for="relacion-input">Ingresa tu relacion con la persona</label>
                  <select name="relacion" id="relacion" class="form-control transparent">
                    <option value="">Indicanos tu relacion con la persona</option>
                    <option value="familiar">familiar</option>
                    <option value="amigo">amigo</option>
                    <option value="conocido">conocido</option>
                    <option value="vecino">vecino</option>
                  </select>
                </div>
                <!-- <div class="form-group">
                  <label class="sr-only" for="image-input">Adjunta una foto de la persona y un mensaje para ella o el.</label>
                  <p class="image-text text">(Opcional) Si lo deseas adjunta una foto de la persona y un mensaje para ella o el.</p>
                  <input type="file" name="foto" class="form-control transparent" placeholder="Adjunta una imagen de la persona">
                </div> -->
                <div class="form-group">
                  <label class="sr-only" for="mensaje-input">Dejale un mensaje de recuerdo</label>
                  <textarea name="mensaje" id="mensaje" class="form-control transparent" placeholder="Escribe un mensaje de recuerdo" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-fill pull-right" id="btn-confirmar">Confirmar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="footer">
      <div class="container">
        Hecho <i class="fa fa-heart heart"></i> por <a href="https://github.com/gatopadre">SebaZ</a> y <a href="https://github.com/Sida-X">SebaD</a>.
      </div>
    </div>
  </div>
</body>
<script src="js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/funciones.js" type="text/javascript"></script>

</html>