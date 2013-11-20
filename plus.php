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
	  				<li><a href="index.php">Accueil</a></li>
	  				<li><a href="projet.php">Notre projet</a></li>
	  				<li><a href="vous-plantez.php">Vous plantez</a></li>
	  				<li><a href="sachets.php">Des sachets en cadeau</a></li>
	  				<li><a href="partenaires.php">Ils ont plant&eacute; avec SFL</a></li>
	  				<li><a href="enfants.php">Le coin des enfants</a></li>
	  				<li class="active"><a href="plus.php">Et bien plus encore</a></li>
	  				<li><a href="#contactModal" data-toggle="modal">Nous contacter</a></li>
				</ul>
				<div id="social-links">
					<a href="https://www.facebook.com/seeds4life" target="_blank"><img src="img/facebook-icon.png" alt></a>
					<a href="https://twitter.com/seeds4life" target="_blank"><img src="img/twitter-icon.png" alt></a>
					<a href="http://seedsforlifeinternational.tumblr.com/" target="_blank"><img src="img/tumblr-icon.png" alt></a>
				</div>
				<p class="lead">Truly, they are seeds for life !</p>
			</div>

			<div id="center" class="span10">
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
				<div class="page-header"><h1>Et bien plus encore ...</h1></div>
				<p class="text"><span>Le saviez-vous ?</span> Un consultant dans une boite de conseil consomme environ <span>7 kgs de papier par mois</span> ! Un collaborateur en cabinet d&rsquo;avocat : <span>10 kgs de papier par mois</span> !</p>
				<p class="text"><span>Dix euros c&rsquo;est 5 arbres de plant&eacute;s</span>. A l'&acirc;ge adulte, <span>20 arbres couvrent un hectare de for&ecirc;t</span> ! Vous mettez un terme &agrave; la d&eacute;forestation de Kakamega rainforest. Plut&ocirc;t que d'aller couper un arbre pour obtenir 400 shillings kenyans de la vente du bois, celui qui pourrait &ecirc;tre bucheron ramasse des graines et <span>plante les arbres de demain</span>.<br />
				Vous participez &agrave; la reforestation de <span>Kakamega rainforest</span> et offrez une bouff&eacute;e d'air pur &agrave; la plan&egrave;te&nbsp;: un arbre permet de s&eacute;questrer en 20 ans, <span>plus de 10 tonnes de carbone &agrave; l'&acirc;ge adulte</span> ! Vous nous aidez &agrave; lutter efficacement contre la pauvret&eacute; en milieu rural en procurant un revenu suppl&eacute;mentaire aux kenyans qui r&eacute;coltent et plantent les graines.<br />
				Vous faites plaisir &agrave; celui ou celle &agrave; qui vous offrez le petit sachet, <span>cadeau original et 100% &eacute;cologique</span>. Plus de 10 coloris, choisissez&nbsp;!<br />
				Vous recevez <span>un petit morceau d'Afrique</span> et mettez un peu d'exotisme dans votre vie.</p>
				<img src="img/plus.png" alt>
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
	  <form class="form-horizontal" method="POST" action="commande.php?page=plus">
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
	  <form class="form-horizontal" method="POST" action="contact.php?page=plus">
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
  </body>
</html>