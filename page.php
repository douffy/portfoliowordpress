 <?php get_header(); ?> 

<p>Je suis dans page.php</p>


<h1 id="maintittle">
	<a href="<?php bloginfo('wpurl'); ?>"><?php bloginfo('name'); ?></a>
</h1>

<?php if (have_posts()): ?>

<?php while(have_posts()): the_post(); ?>
	<h2><?php the_title(); ?> </h2>
	<h3><?php  _e('Post par') ?> <?php the_author();?> <?php _e('le') ?> <?php echo get_the_date(); ?></h3>  
	<div class="content">
		<?php the_content(); ?>
	</div>
	
<?php endWhile; ?>

<?php endif; ?>


 <?php get_footer(); ?> 