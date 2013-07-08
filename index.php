
<?php get_header(); ?>

	<div class="maincontent">
    	<div class="container-fluid">
      		<div class="row-fluid">
		        <div class="span3">
					<?php get_sidebar(); ?>
		        </div><!--/span-->
			
		        <div class="span9">
		        	<?php if( have_posts() ) :  ?>
			        	<?php while (have_posts() ) : the_post(); ?>
			         	<div class="post">
			            	<h1><?php the_title(); ?></h1>
			            	<div class="postmeta">
			            		<small>
			            			Posted in <?php the_category(', '); ?> on <?php echo get_the_date(); ?> by <?php the_author(); ?> <span class="label"><?php comments_number( 'no comment', 'one comment', '% comments' ); ?></span></small>
			            	</div>
			            	<div class="row-fluid postcontent">
			            		<div class="span4 postphoto">
			            		
			            		<?php if (has_post_thumbnail()) : ?>
	                        		<?php the_post_thumbnail(array(200, 145), array('class' => 'img-polaroid')); ?>
	                        	<?php else: ?>
	                        		<img class="img-polaroid" src="<?php echo get_template_directory_uri(); ?>/img/photo.png" width="200">
	                        	<?php endif; ?>

			            		</div>
			            		<div class="span8 postbody">
			            			<?php the_excerpt(); ?>
			            		</div>
			            	</div>
			            	<div class="postextra">
			            		<a href="<?php the_permalink(); ?>" class="btn btn-small btn-primary">Read more &raquo;</a><span class="tags"><?php the_tags(); ?></span> <span class="back"><a href="#">Back To Top</a></span>
			            	</div>
			          	</div>
			          	<?php endwhile; ?>
		      		<?php else: ?>
			      	<h1>Nothing found.</h1>
			      	<?php endif; ?>

		        </div><!--/span-->

      		</div><!--/row-->
		</div>
	</div>

<?php get_footer(); ?>