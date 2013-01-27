
 <?php get_header(); ?> 


        
        <section id="about">
        <h1><?php the_title();?></h1>
        	<?php $post_id =124; $queried_post = get_post($post_id); $content = $queried_post->post_content; ?>
        	<?php echo $content; ?>
        </section>
		
		<section id="photoprofil">
			<?php the_post_thumbnail(); ?>
		
		</section>

 <?php get_footer(); ?> 