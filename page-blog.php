<?php get_header(); ?> 

<h1 id="blogg"><?php the_title(); ?></h1>
<section id="blog" >
        	
        	
<?php query_posts('category_name=news');?>

<?php if (have_posts() ): ?>

<?php while( have_posts() ): the_post(); ?>
	
	<article>
	<a href="<?php the_permalink();?>"><?php the_title('<h2>','</h2>'); ?></a>
	
	<h3><?php  _e('Posté par') ?> <?php the_author();?> <?php _e('le') ?> <?php echo get_the_date(); ?></h3> 
	<?php the_post_thumbnail('folio-work'); ?>
	<div class="content">
		<?php the_content(); ?>
	</div>
	<a href="<?php the_permalink();?>" class="nbcomments"><?php comments_number('Pas de commentaire','Un commentaire','% Commentaires' );?></a>
	</article>
<?php endwhile; ?>

<?php endif; ?>

</section>

 <?php get_footer(); ?> 

 
 