<?php get_header(); ?> 

<h1 id="blogg"><?php the_title(); ?></h1>
<section id="blog" >
     <h1>Blog</h1>       	
<?php query_posts('category_name=news');?>

<?php if (have_posts() ): ?>

<?php while( have_posts() ): the_post(); ?>
	
	<article itemscope itemtype="http://schema.org/Article">
	<hgroup>
	<a href="<?php the_permalink();?>" itemprop="url"><?php the_title('<h2 itemprop="name">','</h2>'); ?></a>
	
	<h3><?php  _e('Posté par') ?> <span itemprop="creator"><?php the_author();?></span> <?php _e('le') ?> <time itemprop="dateCreated"><?php echo get_the_date(); ?></time></h3> 
	</hgroup>
	<?php the_post_thumbnail('folio-work'); ?>
	<div class="content" itemprop="text">
		<?php the_content(); ?>
	</div>
	<a href="<?php the_permalink();?>" class="nbcomments"><?php comments_number('Pas de commentaire','Un commentaire','% Commentaires' );?></a>
	</article>
<?php endwhile; ?>

<?php endif; ?>

</section>

 <?php get_footer(); ?> 

 
 