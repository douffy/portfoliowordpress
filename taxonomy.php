 <?php get_header(); ?> 


<h1 id="maintittle">
	<a href="<?php bloginfo('wpurl'); ?>"><?php bloginfo('name'); ?></a>
</h1>




<?php if (have_posts()): ?>

<?php while(have_posts()): the_post(); ?>
	<h2> <a href="<?php the_permalink();?>"><?php the_title(); ?> </a></h2>
	<p><?php  the_terms($post->ID, 'techniques', 'techniques utilisées: ', ' - ', ' super'); ?> </p>
	<h3><?php  _e('Posté par') ?> <?php the_author();?> <?php _e('le') ?> <?php echo get_the_date(); ?></h3> 
	<div class="content">
		<?php the_content(); ?>
	</div>
	<div>
	<?php the_post_thumbnail('folio-work'); ?>
	</div>
	<hr>
<?php endWhile; ?>

<?php endif; ?>

<p>
<?php 
	$term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
	echo $term->name;
 ?>
</p>



<?php get_sidebar('secondary'); ?>




<p> Je suis dans taxonomie.php </p>

 <?php get_footer(); ?> 