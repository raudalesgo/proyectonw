<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="icomoon/style.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"><link rel="stylesheet" href="contactenos.css">
    <title>Contactenos</title>
  </head>
  <body>
  <div class="inicio" style="width:100%">
    <div class="logo">
      <img src="img/logo.png" alt="logoccdh">
    </div>




  <div class="menú">
    <nav>
      <ul>
        <li><a href="principal.php">INICIO</a></li>
        <li><a href="historia.php">SOBRE CCDH</a></li>
        <li><a href="beneficios.php">BENEFICIOS</a></li>
        <li><a href="Eventos.php">NOTICIAS</a></li>
        <li><a href="contactenos.php">CONTACTANOS</a></li>
        <li><a href="sesion.php" class="button blue"><span class="icon-account_box"></span>INICIAR SESION </a></li>

      </ul>
    </nav>
  </div>

      <div class="heroPanel">
        <h1>Contactenos</h1>
      </div>
      <div class="infoymensaje">
      <div class="row">
      <fieldset>
        <form class="enviarmensaje" action="contactenos.html" method="post" name="Contactenos">
          <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre Completo"maxlength="60" /><br />
          <input type="email" name="txtEmail" id="txtEmail" placeholder="corre@electro.nico"/> <br />
          <textarea name="message"placeholder="Mensaje" id="txtMensaje"></textarea></br>
          <input type="submit" id="btnEnviar" name="btnEnviar"value="Enviar" />
        </form>
      </fieldset>
      <div class="informacion">
        <h2>Informacion de Contacto</h2>
        <p>Col. Maria Cristina, Calle al Club del BCIE, Casa No. 302</p>
        <p>Correo: elnuevoccdh@yahoo.com</p>
        <p>Tel: 2225-3111 / 2225-1263</p>
        <p>Fax:  2225-3122</p>
      </div>
</div>
</div>
      <script src="contactenos.js"></script>
  </body>
</html>
