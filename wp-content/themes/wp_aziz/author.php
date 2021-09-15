<?php get_header() ?>
<div class="container">
		<h2 class="text-center">
			<?php the_author_meta('first_name') ?>
		   <?php the_author_meta('last_name') ?> 
			(<?php the_author_meta('nickname');?>)
		</h2>
<div class="row">
		<div class="col-lg-3">
		<?php echo get_avatar(get_the_author_meta('ID'),200,'','',array('class'=>'img-thumbnail img-author')); ?>
			</div>
		<div class="col-lg-9">
			<div class="author-infos">
		
			   <h6>First Name : <?php the_author_meta('first_name') ;?></h6>	
				<h6>Last Name : <?php the_author_meta('last_name') ;?></h6>
				<h6>Nick Name : <?php the_author_meta('nickname') ;?></h6>
		
		<p class="desc">
		<?php if(get_the_author_meta('description')){
	 the_author_meta('description'); }else{ echo 'there is no biography'; }?>
		</p>
				<h6>Posts count :<?php echo count_user_posts(get_the_author_meta('ID')); ?> </h6>
	           

		</div>
		</div>
	</div>
<div class="features">	
<div class="row">
	<div class="col-lg-3 col-sm-12 ">
		
		<div class="feature">
			<h5><i class="fas fa-clipboard"></i> Posts</h5>
	<?php echo count_user_posts(get_the_author_meta('ID')); ?>
			</div>
	</div>
	<div class="col-lg-3  col-sm-12 col-sm-12">
	<div class="feature">
		<h5> <i class="far fa-comment"> Comments</i></h5>
		<?php echo get_comments(array(
         'user_id' =>  get_the_author_meta('ID')  ,
	     'count'=>true
                 )) ; ?>
	
			</div>
	</div>
	<div class="col-lg-3  col-sm-12">
	<div class="feature">
	<h5><i class="fas fa-calendar-alt"></i> Member since</h5>
		<?php  
		the_author_meta('user_registered'); ?>
			</div>
	</div>
	<div class="col-lg-3  col-sm-12">
	<div class="feature">
	#Test1
			</div>
	</div>
	</div>

</div>
	<?php
	$count=count_user_posts(get_the_author_meta('ID'));
	if($count>=3){
	$posts_number=3;}else{$posts_number=$count;}
	$args=array('author'=>get_the_author_meta('ID'),
				    'posts_per_page'=>$posts_number);
		$aut =new WP_Query($args); ?>
	<h4 class="last-posts"> last <?php echo $posts_number; ?> posts of <?php the_author_meta('first_name');?></h4>
	
	<div class="row">
		<?php
		
		if($aut->have_posts()){?>
			
		<?php
		while($aut->have_posts()){ 
				$aut->the_post();?>
    
		<div class="col-sm-3">
					
							<?php
			the_post_thumbnail('',['class'=>'img-responsive img-thumbnail']); ?>
							</div>
			<div class="col-sm-9">
					
<a href="<?php the_permalink(); ?>">
		<?php 

			the_title('<h4>','</h4>'); ?> </a>
		<?php
			//echo '<span class="date">';the_time('j-M-y'); echo'</span>';
			?><!--<span><?php //comments_popup_link('No comments', '1 comment','%comments' ,'comment-url');?></span>-->

		

							<p>	<?php the_content('Read more...'); ?></p>


						
	</div>
	
	
		<?php }} wp_reset_postdata(); ?>
			</div>
			
	<div class="last-comments">
		<?php
		$comments_count =get_comments(array(
         'user_id' =>  get_the_author_meta('ID')  ,
	     'count'=>true
                 ));
	if($comments_count >=3){
		$counter =3;
		}else {
		$counter= $comments_count ;}
	 $arguments=array('status' => 'approve',
						  'user_id'=>get_the_author_meta('ID'),
						  'number'=>$counter );
	$comments =get_comments($arguments);
		if(get_comments($arguments)){?>
			<h4>Last <?php echo $counter ; ?> comments of <?php the_author_meta('first_name') ?> </h4>
	<?php	}
	foreach($comments as $comment){?>
		<div class="comment">
	<?php
	echo '<h6><a href="'; the_permalink(); echo '">'; echo get_the_title($comment->comment_post_ID) . '</a></h6> ';
	echo mysql2date( 'l d-m-Y',$comment->comment_date ) . '<br />';
	echo $comment->comment_content . '<br />'; ?>
	</div>
	<?php }?>
			
		
</div>
</div>




<?php get_footer() ?>
 