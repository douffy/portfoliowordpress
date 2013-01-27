 <?php get_header(); ?> 


 <!-- Contenu -->
   <?php			
	$args = array('post_type'=>'works', 'posts_per_page' => 1000);
	$loop = new WP_Query ($args);?>   	
        	<img class="banniere" src="<?php bloginfo('template_directory') ?>/img/grande.jpg" alt="" width="1100" />
        <section>
        	<h1 id="work">Work</h1>
        	<!--	<nav id="categorie">
        			<ul>
        				<li><a href="#" id="all">All</a></li>
        				<li><a href="#print" id="print">Print</a></li>
        				<li><a href="#web" id="web">Web</a></li>
        				<li><a href="#logo" id="logo">Logo</a></li>
        			</ul>
        		</nav>
        	-->
        	<div id="container">
        	
        		<!--
        		<article class="box print">
					<a id="projet1" href="#" class="thumb"><img src="<?php bloginfo('template_directory') ?>/img/magritte.jpg" alt=""  width="315" height="467"> </a>
				</article>
					-->			
				

	
	<?php while ($loop->have_posts()) : $loop->the_post();?>
		
		<article class="box">
		<a href="<?php the_permalink()?>" class=""> <?php the_post_thumbnail('folio-work'); ?></a>
		<!--<p><?php the_terms($loop->ID, 'techniques'); ?></p>-->
		</article>
		
	<?php endwhile; ?>
					
			</div>
        	
        </section>
        
    <!-- Footer -->

 <?php get_footer(); ?> 