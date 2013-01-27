<?php comment_form(); ?>
<?php 
	if (have_comments()): 
		while (have_comments()): the_comment();
?>
		<div class="commentaire">
			<h4><?php comment_author(); ?></h4>
			<span><?php comment_date(); ?></span> à
			<span><?php comment_time(); ?></span>
			<div class="comment-text"><?php comment_text();?></div>
		</div>
<?php
		endwhile;
	endif;

?>

