<?php get_header(); ?>
	
<div class="container">
			
		<?php
		if(have_posts()){
		while(have_posts()){ 
				the_post();?>

		<div class="post single-post">
			
				   <a href="<?php the_permalink(); ?>">
						<?php 
			
			
						edit_post_link('Edit','', '<i class="fas fa-edit"></i>');
			?></a>
							<?php the_title('<h4>','</h4>'); ?> 
											<div>
												<i class="far fa-user"></i>
											<?php
							the_author_posts_link('<h2>','</h2>');
							echo '<span class="date">'; echo '<i class="fas fa-calendar-alt"></i> ' ; the_time('j-M-y'); echo'</span>';
							?><span><i class="far fa-comment"></i> <?php  comments_popup_link('No comments', '1 comment','%comments' ,'comment-url');?></span>
							</div>				
						<?php
							the_post_thumbnail('',['class'=>'img-responsive img-thumbnail']); ?>

							<p>	<?php the_content(); ?></p>

<i class="fab fa-buffer"></i>
		<?php if(has_tag()){
				the_tags();
			}else{echo 'there is no tags';} ?>



			


			</div>
	<div class="post-pagination">
						<?php
			if(get_previous_post_link()){//check if there is a previous page link 
				previous_post_link('%link',' <i class="fas fa-angle-double-left"></i> %title ');}else{
					echo '<span class="pre-next">There is no previous post</span>';
				}
				if(get_next_post_link()){//  check if there is a next page link 
				next_post_link('%link','%title <i class="fas fa-angle-double-right"></i>');
			}else{
						echo '<span class="pre-next">There is no next post</span>';
				}
		echo '</div>';?>
				
			
				
				<?php }} echo'<hr class="separator">';
		
		?>
	<div class="row">
		<div class="col-lg-3">
		<?php echo get_avatar(get_the_author_meta('ID'),128,'','',array('class'=>'img-thumbnail')); ?>
			</div>
		<div class="col-lg-9">
		<h5>
				<?php the_author_meta('first_name') ;?>
				<?php the_author_meta('last_name'); ?> 
				(<?php the_author_meta('nickname');?>)
		</h5>
		<p>
		<?php if(get_the_author_meta('description')){
	 the_author_meta('description'); }else{ echo 'there is no biography'; }?>
		</p>
			Visite the author site here : <?php the_author_posts_link(); ?>
		</div>
		</div>
		<?php //echo count_user_posts(get_the_author_meta('ID')); ?>
		
		<?php
	 echo'<hr class="separator">'; 
		
	$args=array( 'posts_per_page'=>5,
				'category__in'=> wp_get_post_categories(get_queried_object_id()),
			    'post__not_in'=>array(get_queried_object_id()));
		$aut =new WP_Query($args);
	  if($aut->have_posts()){
		  echo '<h4>Posts from the same Category</h4>'	;
		while($aut->have_posts()){
				$aut->the_post();
    
		?>
					
        <a href="<?php the_permalink(); ?>">
		<?php 

			 the_title('<h4>','</h4>'); ?></a><?php  }}
            wp_reset_postdata();


		 echo'<hr class="separator">'; ?>
		<div class="col-sm-12">
		
		<?php comments_template(); ?>
			 
			 </div>
	

</div> 
<?php get_footer(); ?>
		
	