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
			</div>
			
			<iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.be/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=Rue+du+Bayet+5+4218+H%C3%A9ron&amp;aq=0&amp;oq=rue+bayet+5+4218+&amp;sll=50.154465,4.624975&amp;sspn=2.217335,5.482178&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=Rue+du+Bayet+5,+Couthuin+4218+H%C3%A9ron,+Li%C3%A8ge,+R%C3%A9gion+wallonne&amp;ll=50.515282,5.11405&amp;spn=0.010915,0.036478&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.be/maps?f=q&amp;source=embed&amp;hl=fr&amp;geocode=&amp;q=Rue+du+Bayet+5+4218+H%C3%A9ron&amp;aq=0&amp;oq=rue+bayet+5+4218+&amp;sll=50.154465,4.624975&amp;sspn=2.217335,5.482178&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=Rue+du+Bayet+5,+Couthuin+4218+H%C3%A9ron,+Li%C3%A8ge,+R%C3%A9gion+wallonne&amp;ll=50.515282,5.11405&amp;spn=0.010915,0.036478&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">Agrandir le plan</a></small>
		</address>
        <section id="forms">
        <h2>Pour toutes informations, Remplissez le formulaire</h2>
        <form method="post" action="#slide4">
	        <label>Nom</label>
    		<input required="required" name="name" placeholder="Ecrivez votre nom">
            
    		<label>Email</label>
    		<input required="required" name="email" type="email" placeholder="Ecrivez votre e-mail">
            
    		<label>Message</label>
    		<textarea required="required" name="message" placeholder="Ecrivez votre message"></textarea>
            
           
    		<input id="submit" name="submit" type="submit" value="Envoyer">
    	</form>
    	
        </section>
        
   
        
        <?php get_footer(); ?> 