 <?php get_header(); ?> 

   
             <address id="adresse">
             <h1><?php the_title();?></h1>
             
			<div id="hcard-Philippe-Douffet" class="vcard">
				<span class="fn">Philippe Douffet</span>
 				<div><a class="email" href="mailto:contact@douffy.be">contact@douffy.be</a></div>
				<div class="adr">
  					<div class="street-address">Rue du Bayet 5</div>
 		 			<span class="locality">Couthuin</span>, <span class="postal-code">4218</span>
				</div>
 				<div class="tel">0470 36 22 28</div>
 				<a href="<?php bloginfo('template_directory') ?>/Douffy.vcf">Ajouter moi au carnet d'adresses</a>
			</div>
			
			<iframe width="450" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=214535079017450383757.0004d479296234de2d35c&amp;ie=UTF8&amp;t=m&amp;ll=50.515173,5.114136&amp;spn=0.305634,0.738831&amp;z=10&amp;output=embed"></iframe><br /><small>Afficher <a href="https://maps.google.com/maps/ms?msa=0&amp;msid=214535079017450383757.0004d479296234de2d35c&amp;ie=UTF8&amp;t=m&amp;ll=50.515173,5.114136&amp;spn=0.305634,0.738831&amp;z=10&amp;source=embed" style="color:#0000FF;text-align:left">douffy</a> sur une carte plus grande</small>
		</address>
        <section id="forms">
        <h2>Pour toutes informations, Remplissez le formulaire</h2>
        
        
        
        <form method="post" action="page-contact.php">
        	<?php 
        	if(!empty($_POST)){
	        	extract($_POST);
	        	$valid=true;
	        	
	        	if(empty($nom)){
		        	$valid=false;
		        	$erreurnom="Vous n'avez pas rempli votre nom";
	        	}
	        	if(empty($email)){
		        	$valid=false;
		        	$erreuremail="Vous n'avez pas rempli votre email";
	        	}
	        	if(empty($message)){
		        	$valid=false;
		        	$erreurmessage="Vous n'avez pas rempli votre message";
	        	}
	        	
	        	if($valid){
		        	echo "tous les champs sont bons";	
	        	}
        	}
        	?>
	        <label id="name" for="nom">Nom</label> 
    		<input id="nom" type="text" required="required" name="nom" placeholder="Ecrivez votre nom">
    		<div class="error-message"><?php if(isset($erreurnom)) echo $erreurnom; ?></div>
            
    		<label id="email" for="email">Email</label>
    		<input id="mail" required="required" name="email" type="email" placeholder="Ecrivez votre e-mail">
    		<div class="error-message"></div>
            
    		<label id="message" for="message">Message</label>
    		<textarea id="mess" required="required" name="message" placeholder="Ecrivez votre message"></textarea>
            <div class="error-message"></div>
           
    		<input id="submit" name="submit" type="submit" value="Envoyer">
    	</form>
    	
        </section>
        
        <?php get_footer(); ?> 