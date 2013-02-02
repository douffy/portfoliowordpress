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

<?php 
if(isset($_POST['submitted'])) {

	//Captcha
	if(trim($_POST['checking']) !== '') {
		$captchaError = true;
	} else {
	
		//Vérifie le nom
		if(trim($_POST['contactName']) === '') {
			$nameError = 'Indiquez votre nom.';
			$hasError = true;
		} else {
			$name = trim($_POST['contactName']);
		}
		
		//vérifie adresse mail
		if(trim($_POST['email']) === '')  {
			$emailError = 'Indiquez une adresse e-mail valide.';
			$hasError = true;
		} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
			$emailError = 'Adresse e-mail invalide.';
			$hasError = true;
		} else {
			$email = trim($_POST['email']);
		}
			
		//Vérifie message	
		if(trim($_POST['comments']) === '') {
			$commentError = 'Entrez votre message.';
			$hasError = true;
		} else {
			if(function_exists('stripslashes')) {
				$comments = stripslashes(trim($_POST['comments']));
			} else {
				$comments = trim($_POST['comments']);
			}
		}
			
		//si il y a pas d'erreur il envoie le mail
		if(!isset($hasError)) {

			$emailTo = 'contact@douffy.be';
			$subject = 'Formulaire de contact de '.$name;
			$sendCopy = trim($_POST['sendCopy']);
			$body = "Name: $name \n\nEmail: $email \n\nMessage: $comments";
			$headers = 'De : mon site <'.$emailTo.'>' . "\r\n" . 'Repondre a : ' . $email;
			
			mail($emailTo, $subject, $body, $headers);

			if($sendCopy == true) {
				$subject = 'Formulaire de contact';
				$headers = 'De : <noreply@somedomain.com>';
				mail($email, $subject, $body, $headers);
			}
			$emailSent = true;
		}
	}
} ?>


<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/contact-form.js"></script>



<?php if(isset($emailSent) && $emailSent == true) { ?>

	<div class="thanks">
		<p><span>Merci !</span>Votre e-mail a été envoyé avec succés. Vous recevrez une réponse sous peu.</p>
	</div>

<?php } else { ?>

	<?php if (have_posts()) : ?>
	
	<?php while (have_posts()) : the_post(); ?>

		
		<?php if(isset($hasError) || isset($captchaError)) { ?>
			<p class="error">Une erreur est survenue lors de l'envoi du formulaire.<p>
		<?php } ?>
	
		<form action="<?php the_permalink(); ?>" id="contactForm" method="post">
	
			<label for="contactName">Nom</label>
			<input type="text" name="contactName" id="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" class="requiredField" />
					<?php if($nameError != '') { ?>
						<span class="error"><?=$nameError;?></span> 
					<?php } ?>
				
			<label for="email">E-mail</label>
			<input type="email" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="requiredField email" />
					<?php if($emailError != '') { ?>
						<span class="error"><?=$emailError;?></span>
					<?php } ?>
				
			<label for="commentsText">Message</label>
			<textarea name="comments" id="commentsText" rows="20" cols="30" class="requiredField"><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>
					<?php if($commentError != '') { ?>
						<span class="error"><?=$commentError;?></span> 
					<?php } ?>

			<label for="checking" class="screenReader">Laissez ce champ vide</label><input type="text" name="checking" id="checking" class="screenReader" value="<?php if(isset($_POST['checking']))  echo $_POST['checking'];?>" />
			<input type="hidden" name="submitted" id="submitted" value="true" /><button type="submit">Envoyer</button>

		</form>
	
		<?php endwhile; ?>
	<?php endif; ?>
<?php } ?>    	
        </section>
        
        <?php get_footer(); ?> 