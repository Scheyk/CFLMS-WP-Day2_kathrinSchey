<?php get_header(); ?>

	

	<div class="container-fluid">

		<h1>Hello from the whole content of the food blog!</h1>

		<div class="sidebar">
			<?php
      		if(is_active_sidebar('sidebar')):
     			dynamic_sidebar('sidebar');
    		 endif;  
			?>
		</div>
		
		<div class="row justify-content-around holder">
			<?php if(have_posts()) : ?> <!--  If there are posts available  -->

       		<?php while(have_posts()) : the_post(); ?> <!-- if there are posts, iterate the posts in the loop -->			

				<div class="card col-lg-4"> 
					<?php if(has_post_thumbnail()) : ?>
						<?php the_post_thumbnail('medium'); ?>
					<?php endif; ?>
					<!-- <img class="img-responsive" src="<?php get_template_directory_uri(); ?>/img/image.jpg" alt="image"> -->
					<div>
						<a href="<?php the_permalink(); ?>"><!--retrieves URL for the permalink-->
          					<?php the_title(); ?>    <!--retrieves blog title-->
       					</a>
       					
       					<p><?php the_time('F j, Y g:i a'); ?></p><!--retrieves date blog entry was created-->
       					<p><?php the_author(); ?></p><!--retrieves author of blog entry-->
       					 <?php the_content(); ?><!--retrieves content-->
       					<!-- <p><?php the_excerpt(); ?></p> --><!--retrieves excerpt-->
					</div>	
				</div>

       		<?php endwhile; ?><!--end the while loop-->

       		<?php else :?> <!-- if no posts are found then: -->
       			<p>No posts found</p>  <!-- no posts found displayed -->
       		<?php endif; ?> <!-- end if -->
		</div>
       
   	</div>	

<?php get_footer(); ?>