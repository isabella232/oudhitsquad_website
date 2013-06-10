          <div class="blog" id="blog">
		    <div class="blog-padding">  <!-- content goes below this line -->
                 <h1>Latest News</h1>
			  <div class="line2"></div><!-- dotted line -->
<?php
require('wordpress/wp-blog-header.php'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php the_date('','<h2>','</h2>'); ?>
	
<div class="post" id="post-<?php the_ID(); ?>">
	 <h3 class="storytitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
	
	<div class="storycontent">
		<?php the_content(__('(more...)')); ?>
	</div>
	
	<div class="feedback">
            <?php wp_link_pages(); ?>
            <!--<?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')); ?>-->
	</div>
			  <div class="line2"></div><!-- dotted line -->
</div>

<?php comments_template(); // Get wp-comments.php template ?>
.
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
		</div>
	</div>
  </div>
</div>

