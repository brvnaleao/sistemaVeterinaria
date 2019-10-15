<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Loja</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
		<link rel="stylesheet" type="text/css" href="estilo/estilo.css">

  </head>
  <body>

  	<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="index.php">
      <img src="imagens/logo2.png" width="112" height="28">
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a href="index.php" class="navbar-item">
        Home
      </a>

      <a href="#about"class="navbar-item">
        Sobre
      </a>

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          Mais
        </a>

        <div class="navbar-dropdown">
          <a href="cadastro.php" class="navbar-item">
            Cadastro Veterinário
          </a>
          
          <a href="mensagens.php" class="navbar-item">
            Mensagens
          </a>
          <hr class="navbar-divider">
          <a href="#redessociais" class="navbar-item">
            Redes Sociais
          </a>
        </div>
      </div>
    </div>


  </div>
</nav>

  <section class="hero back2">
    <div class="hero-body">
      <div class="container">
      	<figure class="image center">
      		<img src="imagens/logo.png" style="max-width:200px">
      	</figure>
      	
      </div>

     
    </div>
  </section>








  <br><br>
  <?php require_once 'conexao.php';
    ?>
  <!--colunas-->
  <?php
    $mysqli = new mysqli('localhost', 'root', '', 'caomania') or die(mysqli_error($mysqli));?>
<section>
    <div class="container">
      <div class="columns has-background-light is-multiline">
        <div class="column center">
          <div class="notification back" id="area">
           
                <form method="POST" action="conexao.php" id="formulario" autocomplete="off">
                  <fieldset><br>
                    <label>Nome do dono:</label><input class="campo_nome" name="nome" type="text"><br><br>
                    <label>Nome do cachorro:</label><input class="campo_cachorro" name="cachorro" type="text"><br><br>
                    <label>Email:</label><input class="campo_email" name="email" type="email"><br><br>
                    <label>Telefone:</label><input name="tel" class="campo_telefone" type="tel"><br><br>
                    <label>Endereço :</label><input class="endereco"  name="endereco" type="text"></textarea><br><br>

                    <input class="button is-info botao" type="submit" name="save" value="Enviar">
                  </fieldset>
                </form>
              



          </div>  
        </div>
        


      </div>
    </div>
  </section>
  <br>






  <section class="hero">
    <div class="hero-body">
      <div class="container">
      	  <div class="columns center has-background-white is-multiline">
  			<div class="column center">
  				<div class="notification has-background-light">
      	<figure class="image center">
      		<img src="imagens/doggo.gif" style="max-width:300px">
      	</figure>
      	
      </div>

     </div></div></div>
    </div>
  </section>
  	


  <section>
  	<div class="container" id="redessociais">
	  <div class="columns is-multiline">
	  	<div class="column is-one-third center">
		    <article class="media notification has-background-white">
		        <figure class="media-left">
		            <span clas="icon has-text-warning">
		                <i class="fab fa-facebook-square"></i>
		            </span>
		        </figure>
		        <div class="media-content">
		            <div class="content">
		                <h3 class="title is-size-4" id="about">Facebook</h3>
						<p class="subtitle is-size-6">

		  					<a href="#">Acompanhe</a> nosso conteúdo!</p>
		           </div>
		       </div>
		   </article>
		 </div>


		 <div class="column is-one-third center">
		    <article class="media notification has-background-white">
		        <figure class="media-left">
		            <span clas="icon has-text-warning">
		                <i class="fab fa-instagram"></i>
		            </span>
		        </figure>
		        <div class="media-content">
		            <div class="content">
		                <h3 class="title is-size-4" id="about">Instagram</h3>
						<p class="subtitle is-size-6">

		  					<a href="#">Veja</a> nossos cliques! </p>
		           </div>
		       </div>
		   </article>
		 </div>


		</div>
	</div>
</section>


  </body>
</html>