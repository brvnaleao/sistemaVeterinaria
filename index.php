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

  <!--colunas-->
  <section>
  	<div class="container">
  		<div class="columns has-background-light is-multiline">
  			<div class="column is-one-third">
  				<div class="notification back">
  					<h3 class="title is-size-3" id="about">Sobre nós</h3>
  					<p class="is-size-5">
  					Cãomania é uma loja especializada em produtos para o publico canino. Entedemos a língua auau para atender melhor ao seu companheiro de quatro patas. </p>
  				</div>	
  			</div>
  			<div class="column is-one-third">
  				<div class="notification back3">
  					<h3 class="title is-size-4">Atendimento Veterinário nós</h3>
  					<p class="is-size-5">
	  				
	  				Tembém temos especialistas prontos para atender o seu pet caso seja necessário. Funcionamos 24h por dia. Faça seu cadastro <a href="cadastro.php"> aqui</a> e retornaremos o contato. </p>
  				</div>
  			</div>
  			<div class="column is-one-third">
  				<div class="notification back">
  					<h3 class="title is-size-4">Envie uma mensagem nós</h3>
  					<p class="is-size-5">
  					
  					Ficou interessado em algum produto que não tem nas nossas lojas? Você pode mandar dicas e recados para a gente por <a href="mensagens.php">aqui</a>. Ficamos felizes em melhor ajudá-los!</p>
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