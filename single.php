 <?php get_header(); ?> 


<?php if (have_posts()): ?>
 <section id="blog">
<?php while(have_posts()): the_post(); ?>
	<article itemscope itemtype="http://schema.org/Article">
	<h2 itemprop="name"> <a href="<?php the_permalink();?>" itemprop="url"><?php the_title(); ?> </a></h2>
	<!-- <h3><?php  _e('Posté par') ?> <?php the_author();?> <?php _e('le') ?> <?php echo get_the_date(); ?> </h3> -->
	<!--<?php the_post_thumbnail('grande'); ?>-->
	<div class="content" itemprop="text">
		<?php the_content(); ?>
	</div>
	</article>
<?php endwhile; ?>

<?php endif; ?>

<?php comments_template(); ?>




<div id="pnpost">
<?php previous_post('&laquo;&laquo; %', '', 'yes'); ?>
| <?php next_post('% &raquo;&raquo; ', '', 'yes'); ?>
</div>

</section>


 <?php get_footer(); ?> 