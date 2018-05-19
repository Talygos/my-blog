<?php require_once('../src/functions/configs.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Versões Reais de mim</title>

	<meta property="og:type" content="blog">
	<meta property="og:title" content="Versões Reais de mim">
	<meta property="og:image" itemprop="image" content="assets/img/perfil.jpg">
	<meta property="og:image:alt" content="Logo">
	<meta property="og:description" content="Blog pessoal">
	<meta property="og:image:width" content="200">
	<meta property="og:image:height" content="200">
	<meta name="theme-color" content="#b71c1c">

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <?php include('../src/functions/imports.php'); ?>
    
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

	<header class="principal-color">

		<div class="container">

      <nav class="principal-color z-depth-0">
        <div class="nav-wrapper">
          <ul class="right">
            <li><a class="btn white principal-text waves-effect waves-light" href="login.html"><b>Conectar-se</b></a></li>
          </ul>
        </div>
      </nav>

			<img id="perfil" src="assets/img/perfil.jpg" alt="perfil" class="circle responsive-img">
			<center><span id="perfilSubtitle">@Talygos</span></center>

			<br>

			<div class="divider"></div>
			
  			<nav class="principal-color z-depth-0">
  			  <div class="nav-wrapper">
  			    <a href="http://localhost/blog" class="brand-logo">Versões Reais de mim</a>
  			    <ul class="right hide-on-med-and-down">
  			      <li><a href="http://localhost/public_html/">Sobre</a></li>
  			      <li><a href="http://localhost/public_html/#footer">Fale comigo</a></li>
  			    </ul>
  			  </div>
  			</nav>

		</div>

	</header>

	<div class="container">

		<div class="row">
			
			<div class="col l8 m8 s12">
				<div id="cardPanel1" class="card-panel">
					<p>E se eu fosse eu? Foi lendo Clarice e ouvindo 'me espera' que a ideia de criar esse espaço surgiu, vontade de conectar pessoas que se identifiquem, de compartilhar ideias, teorias e sonhos. Aqui você vai encontrar várias versões de um</p>
				</div>				
			</div>

			<div class="col l4 m4 s12">
				<div id="cardPanel2" class="card-panel">
					<center><h5>Bons olhos te vejam!</h5></center>
				</div>				
			</div>

		</div>

		<div class="row">
			
        <div class="col l12 m12 s12">
          <div class="card">
            <div class="card-image">
          <img style="max-height: 250px" src="assets/img/sun.jpg">
              <span class="card-title">14 de maio de 2018</span>
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <span class="card-title">Não desista</span>
                <p>Andei pensando sobre sonho, todo mundo deve ter um. </p>
              </div>
              <div class="card-action">
                 <a class="principal-text" href="#">Continuar lendo</a>
              </div>
            </div>
          </div>
        </div>

  			<div class="col l12 m12 s12">
  			  <div class="card">
  			    <div class="card-image">
				  <img style="max-height: 250px" src="assets/img/post3.jpg">
    		      <span class="card-title">13 de maio de 2018</span>
  			    </div>
  			    <div class="card-stacked">
  			      <div class="card-content">
    		      	<span class="card-title">O dia do amor maior</span>
    		      	<p>Hoje é dia das mães...</p>
  			      </div>
  			      <div class="card-action">
  			         <a class="principal-text" href="#">Continuar lendo</a>
  			      </div>
  			    </div>
  			  </div>
  			</div>

		</div>

	</div>

  <footer class="page-footer principal-color">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Conheça meus outros blogs</h5>
          <ul>
            <li><a class="white-text text-lighten-3" href="https://www.facebook.com/talison.macedo.7" target="_blank" >Fui por ai</a></li>
            <li><a class="white-text text-lighten-3" href="https://github.com/Talygos" target="_blank">Problemas de TI</a></li>
          </ul>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Fale comigo</h5>
          <ul>
            <li><a class="white-text text-lighten-3" href="https://www.facebook.com/talison.macedo.7" target="_blank" >Facebook</a></li>
            <li><a class="white-text text-lighten-3" href="https://www.instagram.com/talygos" target="_blank">Instagram</a></li>
            <li><a class="white-text text-lighten-3" href="https://twitter.com/Talygos" target="_blank">Twitter</a></li>
            <li><a class="white-text text-lighten-3" href="https://linkedin.com/in/talison-macedo7" target="_blank">LinkedIn</a></li>
            <li><a class="white-text text-lighten-3" href="https://github.com/Talygos" target="_blank">GitHub</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      © Talygos - Versões Reais de mim. Site desenvolvido por <a style="color: white" href="https://linkedin.com/in/talison-macedo7"><b>Talison Macedo</b></a>.
      </div>
    </div>
  </footer>


	<script type="text/javascript">
		
		$( document ).ready(function() {

    		if ( $(window).width() > 425) {      
    		  $('.card').addClass('horizontal');
    		}else{
    		  $(".card").removeClass("horizontal");
    		}

			if ($(window).width() >= 600) {

				var height =  $('#cardPanel1').height();
	
				$('#cardPanel2').height(height);
				$('#cardPanel2').addClass('valign-wrapper');

			}

		});

	</script>

	<script type="text/javascript">

	  $( window ).resize(function() {

	    if ( $(window).width() > 425) {      
	      $('.card').addClass('horizontal');
	    }else{
	      $(".card").removeClass("horizontal");
	    }

		if ($(window).width() >= 600) {

			var height =  $('#cardPanel1').height();
	
			$('#cardPanel2').height(height);
			$('#cardPanel2').addClass('valign-wrapper');

		}

	  }); 

	</script>

</body>
</html>