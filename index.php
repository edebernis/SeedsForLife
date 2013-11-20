<!DOCTYPE html>
<html>
  <head>
  	<meta charset="utf-8">
    <title>Seeds For Life</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
  	<div id="wrapper">
	  	<div id="masterhead" class="hero-unit">
	 		<div class="row-fluid">
		  		<div id="logo" class="span3">
		      		<a href="index.php"><img src="img/logo.png" alt></a>
		    	</div>
		    	<div class="span6">
		  			<a href="index.php"><h1>Seeds For Life</h1></a>
		  			<p>Plant the seeds of our future ...</p>
		  		</div>
		  		<div id="masterhead_right" class="span3">
		  			<h1><a href="#commandModal" data-toggle="modal" class="btn btn-large btn-primary">Je plante un arbre !</a></h1>
		  			<p>... plantez avec nous la for&ecirc;t de demain.</p>
		  		</div>
		  	</div>
		</div>

		<div id="main" class="row-fluid">
			<div id="left-menu" class="span2">
				<ul id="left_menu_list" class="nav nav-pills nav-stacked">
	  				<li class="active"><a href="index.php">Accueil</a></li>
	  				<li><a href="projet.php">Notre projet</a></li>
	  				<li><a href="vous-plantez.php">Vous plantez</a></li>
	  				<li><a href="sachets.php">Des sachets en cadeau</a></li>
	  				<li><a href="partenaires.php">Ils ont plant&eacute; avec SFL</a></li>
	  				<li><a href="enfants.php">Le coin des enfants</a></li>
	  				<li><a href="plus.php">Et bien plus encore</a></li>
	  				<li><a href="#contactModal" data-toggle="modal">Nous contacter</a></li>
				</ul>
				<div id="social-links">
					<a href="https://www.facebook.com/seeds4life" target="_blank"><img src="img/facebook-icon.png" alt></a>
					<a href="https://twitter.com/seeds4life" target="_blank"><img src="img/twitter-icon.png" alt></a>
					<a href="http://seedsforlifeinternational.tumblr.com/" target="_blank"><img src="img/tumblr-icon.png" alt></a>
				</div>
				<p class="lead">Truly, they are seeds for life !</p>
			</div>

			<div id="center" class="span8">
				<?php
				if (isset($_GET['send_command']) && $_GET['send_command'] == 'error') {  
				?>
				<div class="alert alert-error span11"><strong>Erreur !</strong> Une erreur est survenue lors de votre commande.</div>
				<?php
				}
				if (isset($_GET['send_command']) && $_GET['send_command'] == 'success') {  
				?>
				<div class="alert alert-success span11"><strong>Succ&egrave;s !</strong> Votre commande a &eacute;t&eacute; r&eacute;alis&eacute;e avec succ&egrave;s. Merci !</div>
				<?php
				}
				?>
				<?php
				if (isset($_GET['send_message']) && $_GET['send_message'] == 'error') {  
				?>
				<div class="alert alert-error span11"><strong>Erreur !</strong> Une erreur est survenue lors de l'envoi de votre message..</div>
				<?php
				}
				if (isset($_GET['send_message']) && $_GET['send_message'] == 'success') {  
				?>
				<div class="alert alert-success span11"><strong>Succ&egrave;s !</strong> Votre message a bien &eacute;t&eacute; envoy&eacute;. Merci !</div>
				<?php
				}
				?>
				<p class="text" style="clear:both;">Le Projet <a href="projet.php">&laquo; Seeds for Life &raquo;</a> est n&eacute; &agrave; Paris de la soif d'agir de deux &eacute;tudiants. En Janvier 2013, Stanislas part trois mois au <span>Kenya</span> o&ugrave; il d&eacute;couvre la for&ecirc;t menac&eacute;e de <span>Kakamega</span>. Poumon vert de <span>l'Afrique</span>, elle souffre de la folie des hommes qui coupent, d&eacute;frichent et saccagent les derniers espaces qui leur r&eacute;sistent. Pourtant certains se l&egrave;vent, et le projet <a href="projet.php">&laquo; Seeds for Life &raquo;</a> marche avec eux.</p>
				<div id="slideshow" class="carousel slide">
			      <ol class="carousel-indicators">
			        <li data-target="#slideshow" data-slide-to="0" class="active"></li>
			        <li data-target="#slideshow" data-slide-to="1"></li>
			        <li data-target="#slideshow" data-slide-to="2"></li>
			        <li data-target="#slideshow" data-slide-to="3"></li>
			        <li data-target="#slideshow" data-slide-to="4"></li>
			      </ol>
			      <div class="carousel-inner">
			          <div class="active item">
			            <img src="img/welcome.jpg" alt>
			            <div class="carousel-caption">
			              <h4>Welcome</h4>
			              <p>A l'int&eacute;rieur de la for&ecirc;t vierge sur l'unique chemin qui la traverse.</p>
			            </div>
			          </div>
			          <div class="item">
			            <img src="img/sachets_slide.png" alt>
			            <div class="carousel-caption">
			              <h4>Les sachets &laquo; Seeds for Life &raquo;</h4>
			              <p>Plein de graines, plein de couleurs !</p>
			            </div>
			          </div>
			          <div class="item">
			            <img src="img/kakamega_soleil_levant.jpg" alt>
			            <div class="carousel-caption">
			              <h4>For&ecirc;t de Kakamega</h4>
			              <p>Lever de soleil sur les 23 000 hectares de for&ecirc;t tropicale.</p>
			            </div>
			          </div>
			          <div class="item">
			            <img src="img/petits_crotons.jpg" alt>
			            <div class="carousel-caption">
			              <h4>5000 Croton Megalocorpus poussent &agrave; la Croton Tree Nursery</h4>
			              <p>C'est un arbre particuli&egrave;rement imporant pour l'eco syst&egrave;me des for&ecirc;ts tropicales comme Kakamega.</p>
			            </div>
			          </div>
			          <div class="item">
			            <img src="img/seed_in_a_hand.jpg" alt>
			            <div class="carousel-caption">
			              <h4>&laquo; Seeds for Life &raquo;</h4>
			              <p>Un membre de &laquo; Seeds for Life &raquo; v&eacute;rifie la r&eacute;colte.</p>
			            </div>
			          </div>
			      </div>
			      <a class="carousel-control left" href="#slideshow" data-slide="prev">&lsaquo;</a>
			      <a class="carousel-control right" href="#slideshow" data-slide="next">&rsaquo;</a>
			    </div>
				<p class="text"><span>Leur id&eacute;e ?</span> Permettre &agrave; des entreprises ou des particuliers de faire des <span>dons</span> correspondant &agrave; un certain nombre <span>d&rsquo;arbres plant&eacute;s</span> pour compenser leur consommation de papier et leurs &eacute;missions de CO2. <span>Communiquer et t&eacute;moigner</span> de son geste avec les sachets <a href="projet.php">&laquo;Seeds for Life&raquo;</a>.</p>
				<p class="text"><a href="projet.php">&laquo; Seeds for Life &raquo;</a> emploie les <span>communaut&eacute;s locales</span> &agrave; r&eacute;colter &agrave; la main, entre deux rideaux de pluie, ou sous les arbres secou&eacute;s par les singes, des centaines de graines de <span>Croton Megalocorpus</span>, arbre typique des for&ecirc;ts tropicales africaines. Vos dons correspondent &agrave; un certain nombre d&rsquo;arbres plant&eacute;s. Des liens invisibles se cr&eacute;ent entre deux continents amis. Les sachets <a href="projet.php">&laquo; Seeds for Life &raquo;</a> offerts en cadeau contiennent quelques-unes de ces graines de <span>Croton Megalocorpus</span>. Vous pourrez voir de quelles graines il s&rsquo;agit et t&eacute;moigner de votre action : <span>un cadeau original pour dire que vous agissez</span>.</p>
			</div>
			<div id="right-col" class="span2">
				<a href="sachets.php"><img src="img/sachet.png" alt></a>
				<br /><br />
				<h4>La for&ecirc;t s'agrandie !</h4>
				<ul style="text-align:left;">
					<li><p class="text"><span><?php include('functions.php'); echo getPlantedTreesCount();?></span> arbres plant&eacute;s</p></li>
					<li><p class="text"><span>57</span> donateurs</p></li>
				</ul>
				<br /><br />
				<h4>Nos donateurs</h4>
				<ul style="text-align:left;">
					<li><p class="text"><a href="http://www.keep-kakamega.or.ke" target="_blank">KEEP Sarl</a> a plant&eacute; 356 arbres.</p></li>
					<li><p class="text"><a href="http://www.kefri.org" target="_blank">KEFRI</a> a plant&eacute; 210 arbres.</p></li>
					<li><p class="text"><a href="http://mykitchengarden.com" target="_blank">My Kitchen Garden</a> a plant&eacute; 45 arbres.</p></li>
				</ul>
			</div>
		</div>
	</div>
	<footer class="footer">
		<ul class="footer-links">
          <li><a href="#contactModal" data-toggle="modal">Nous contacter</a></li>
          <li class="muted">&middot;</li>
          <li><a href="#">Haut de page</a></li>
          <li class="muted">&middot;</li>
          <li><a href="#commandModal" data-toggle="modal">Je plante un arbre</a></li>
        </ul>
        <p>&copy; Seeds For Life 2013</p>
	</footer>

	<div id="commandModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="commandModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	    <h3 id="commandModalLabel">Planter des arbres</h3>
	  </div>
	  <form class="form-horizontal" method="POST" action="commande.php?page=index">
	  <div class="modal-body">
	    <p class="text"><span>Seeds for life</span> n'est pas une entreprise commerciale : <span>nous ne faisons aucun b&eacute;n&eacute;fice.</span> Donnez ce que vous voulez, <span>10 euros c'est par exemple 5 arbres</span>, et un sachet en retour pour t&eacute;moigner !</p><br />
	    	<div class="control-group">
			    <label class="control-label">Je plante</label>
			    <div class="controls">
			      <input onchange="javascript:treesCountChange(this);" class="input-small" type="number" name="inputNumberTrees" value="5" min="1"><span class="control-label-right">arbres</span>
			    </div>
			</div>
			<div class="control-group">
				<label class="control-label">Je donne</label>
				<div class="controls controls-no-input">
					<span class="control-label-no-input"><span id="bags_price">10 euros</span>.</span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Je re&ccedil;ois</label>
				<div class="controls controls-no-input">
					<span class="control-label-no-input"><span id="bags_count">2 sachet(s)</span>.</span>
				</div>
			</div>
			<div class="control-group">
			    <label class="control-label">Couleur</label>
			    <div class="controls">
			      <select name="selectColor">
					  <option value="naturel">Naturel</option>
					  <option value="jaune_moutarde">Jaune moutarde</option>
					  <option value="rose_saumon">Rose saumon</option>
					  <option value="rouge">Rouge</option>
					  <option value="bleu_ciel">Bleu ciel</option>
					  <option value="bleu_fonce">Bleu fonc&eacute;</option>
					  <option value="rose_pale">Rose p&acirc;le</option>
					  <option value="orange">Orange</option>
					  <option value="vert_pale">Vert p&acirc;le</option>
					  <option value="vert_fonce">Vert fonc&eacute;</option>
					</select>
			    </div>
			</div>
			<br />
			<p class="text"><span>Entreprises ?</span> Au del&agrave; d'un certain montant pensez &agrave; personnaliser les sachets ! <a href="#contactModal" data-toggle="modal">Contactez-nous !</a> 
			<br /><br />
	    	<div class="control-group">
			    <label class="control-label">Nom</label>
			    <div class="controls">
			      <input type="text" name="inputName" placeholder="Nom">
			    </div>
		  	</div>
		  	<div class="control-group">
			    <label class="control-label">Pr&eacute;nom</label>
			    <div class="controls">
			      <input type="text" name="inputFirstName" placeholder="Pr&eacute;nom">
			    </div>
			</div>
			<div class="control-group">
			    <label class="control-label">Email</label>
			    <div class="controls">
			      <input type="text" name="inputEmail" placeholder="Email">
			    </div>
			</div>
			<br />
			<div class="control-group">
			    <label class="control-label">Adresse</label>
			    <div class="controls">
			      <input type="text" name="inputAddress" placeholder="Adresse">
			    </div>
		  	</div>
		  	<div class="control-group">
			    <label class="control-label">Code postal</label>
			    <div class="controls">
			      <input type="text" name="inputPostcode" placeholder="Code postal">
			    </div>
			</div>
			<div class="control-group">
			    <label class="control-label">Ville</label>
			    <div class="controls">
			      <input type="text" name="inputCity" placeholder="Ville">
			    </div>
			</div>
	  </div>
	  <div class="modal-footer">
	    <button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
	    <button type="submit" class="btn btn-primary">Planter</button>
	  </div>
	  </form>
	</div>

	<div id="contactModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	    <h3 id="contactModalLabel">Contacter Seeds For Life</h3>
	  </div>
	  <form class="form-horizontal" method="POST" action="contact.php?page=index">
	  <div class="modal-body">
	    <p class="text"><span>Seeds For Life</span> est &agrave; votre &eacute;coute pour toutes vos <span>questions, remarques et encouragements &eacute;ventuels</span>. Merci !</p><br />
	    	<div class="control-group">
			    <label class="control-label">Nom</label>
			    <div class="controls">
			      <input type="text" name="inputName" placeholder="Nom">
			    </div>
		  	</div>
		  	<div class="control-group">
			    <label class="control-label">Pr&eacute;nom</label>
			    <div class="controls">
			      <input type="text" name="inputFirstName" placeholder="Pr&eacute;nom">
			    </div>
			</div>
			<div class="control-group">
			    <label class="control-label">Email</label>
			    <div class="controls">
			      <input type="text" name="inputEmail" placeholder="Email">
			    </div>
			</div>
			<br />
			<div class="control-group">
			    <label class="control-label">Votre message</label>
			    <div class="controls">
			<textarea name="inputMessage" rows="5" class="span5" placeholder="Tapez votre message ici..."></textarea>
	  			</div>
			</div>
	  </div>
	  <div class="modal-footer">
	    <button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
	    <button type="submit" class="btn btn-primary">Envoyer</button>
	  </div>
	  </form>
	</div>

  	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sfl.js"></script>
    <script type="text/javascript">
    	$('.carousel').carousel({
  			interval: 6000
		});
    </script>
  </body>
</html>