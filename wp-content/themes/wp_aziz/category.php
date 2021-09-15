<?php get_header(); ?>
<div class="container">
	<h2 class="text-center"><?php single_cat_title () ?></h2>
			<div class="row">
				<div class="col-sm-12 col-lg-9">
				
		<?php
		if(have_posts()){
		while(have_posts()){ 
				the_post();?>

		
						<div class="category-post">
<a href="<?php the_permalink(); ?>">
		<?php 

			the_title('<h4>','</h4>'); ?> </a>
		<?php
			the_author_posts_link('<h2>','</h2>');
			echo '<span class="date">';the_time('j-M-y'); echo'</span>';
			?><span><?php comments_popup_link('No comments', '1 comment','%comments' ,'comment-url');?></span>

		<?php
			the_post_thumbnail('',['class'=>'img-responsive img-thumbnail img-cat']); ?>

							<p>	<?php the_content(); ?></p>
							
<?php if(has_category()){echo 'Categories: '; the_category(' ');} //  ; if(has_category()){ the_category(); } 
			/*echo'Categories: ';
 foreach((get_the_category()) as $category){
        echo"<a href='"; get_category_link($category->term_id); echo "'>" ; echo $category->name."</a>, ";
      ;
        }*/
							echo '<br>';?>
		<?php if(has_tag()){
				the_tags();
			}else{echo 'there is no tags';} ?>



</div>
			

			
				
				<?php  } }?>
			</div>
			
				<div class="col-lg-3 ">
		<div class="main-sidebar">
				
 <?php 
		if(is_active_sidebar('main-sidebar')){
	 dynamic_sidebar('main-sidebar'); }
?>
			</div>
		</div>
			
				
				
			
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
	<div class="num-pagination ">
				
				<?php echo num_pagination(); ?>
				
				</div>
				
</div>

<?php  get_footer(); ?>
		
	