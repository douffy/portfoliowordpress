 <?php get_header(); ?> 
 
   <?php			
	$args = array('post_type'=>'works', 'posts_per_page' => 100);
	$loop = new WP_Query ($args);?>   	
        	<img class="banniere" src="<?php bloginfo('template_directory') ?>/img/banniere.jpg" alt="banniere" width="1100" height="409" />
        <section>
        	<h1 id="work">Travaux</h1>
        	<div id="container">
        	<?php while ($loop->have_posts()) : $loop->the_post();?>
				<article class="box">
					<h2><?php the_title()?></h2>
					<a href="<?php the_permalink()?>" class=""> <?php the_post_thumbnail('folio-work'); ?></a>
				</article>
			<?php endwhile; ?>
					
			</div>
		</section>

 <?php get_footer(); ?> 