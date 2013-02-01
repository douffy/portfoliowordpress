	<footer id="footer">
	<?php
	
	$args = array('post_type'=>'social');
	$loop = new WP_Query ($args);
	
	while ($loop->have_posts()) : $loop->the_post();?>
		<a href="<?php  $value = get_post_meta($post->ID, 'url', true);  echo $value?>"> <?php the_post_thumbnail(); ?></a>
	<?php endwhile; ?>
    		<p> &copy;douffy.be</p>
    		<div class="scroll"><a href="#">Top</a>
    		</div>
    	</footer>
    	
        <script src="<?php bloginfo('template_directory') ?>/js/main.min.js"></script> 
        
    </body>
</html>
