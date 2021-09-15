<?php get_header(); ?>
<div class="container">
	<div class="row">			

		<?php
		if(have_posts()){
		while(have_posts()){ 
				the_post();?>
   <div class="col-sm-12 col-lg-6">
		<div class="post">
         <a href="<?php the_permalink(); ?>">
 		<?php 

			the_title('<h4>','</h4>'); ?> </a>
		<i class="far fa-user"></i>
		<?php
			the_author_posts_link('<h2>','</h2>');
			echo '<span class="date">'; echo '<i class="fas fa-calendar-alt"></i> ' ;the_time('j-M-y'); echo'</span>';
		?>
			<span> <i class="far fa-comment"></i> <?php comments_popup_link('No comments', '1 comment','%comments' ,'comment-url');?></span>

		<?php
			the_post_thumbnail('',['class'=>'img-responsive img-thumbnail img-post']); ?>

							<p>	<?php the_content('Read more...');?></p>
							<i class="fab fa-buffer"></i>
<?php  if(has_category()){echo 'Categories: '; the_category(' ');}//  ; if(has_category()){ the_category(); } 
			/*echo'Categories: ';
 foreach((get_the_category()) as $category){
        echo"<a href='"; get_category_link($category->term_id); echo "'>" ; echo $category->name."</a>, ";
      ;
        }*/
							echo '<br>';?>
			<i class="fas fa-tags"></i>
		<?php 
			if(has_tag()){
				the_tags();
			}
		?>
			</div>
		
		</div>
				
				<?php }  }?>
									
			
			<!--<div class="post-pagination">
						/*
			if(get_previous_posts_link()){
				previous_posts_link('prev');}else{
					echo '<span class="pre-next">there is no previpous page</span>';
				}
				if(get_next_posts_link()){
				next_posts_link('next<i class="fas fa-angle-right"></i>');}else{
						echo '<span class="pre-next">there is no next page</span>';
				}
		echo '</div>';*/
				 ?>
					
		-<div class="clearfix"></div>	-->		
	
				
	</div>
</div>
<div class="container">
<div class="num-pagination">
				
				<?php echo num_pagination(); 
	
	echo pp();?>
				
				</div></div>

<?php get_footer(); ?>
		
	