<?php $comments_counter =0;
$all =get_comments(array('status'=>'approve'));

foreach($all as $comment){
	$post_id= $comment->comment_post_ID;
	
	
	if(!in_category('uncategorized',$post_id)){
		continue;
	}
	$comments_counter++;
	
} $countposts =get_queried_object();
  $count =$countposts ->count
?>
<div class="sidebar">
<div class="sidebar-comments">
	<h4> <?php single_cat_title() ?></h4>
	<span>Comments:<?php echo $comments_counter; ?></span>
	
	</div>

<div class="sidebar-comments">
	<h4>Articles</h4>
	<span>Count:<?php echo $count; ?></span>
	
	</div>

<div class="sidebar-comments">
	<?php $arguments=array(
  'posts_per_page'=>3,
	  'orderby'=>'comment_count',
  'cat'=>get_queried_object_id()
  );
		$random =new WP_Query($arguments); 
	?>
	<h4>top articles</h4>
	<?php if($random->have_posts()){
	while($random->have_posts()){
		$random->the_post(); ?>
		<a target="_blank" href="<?php the_permalink() ?>">
		<?php the_title('<h6>','</h6>'); ?>
	</a>
	<?php
	}
} ?>
	
	</div>

<div class="sidebar-comments">
		<h4>latest 5 articles</h4>
	
	
	<?php $arguments=array(
  'posts_per_page'=>5,
	 
  );
		$random =new WP_Query($arguments); 
	
	if($random->have_posts()){
	while($random->have_posts()){
		$random->the_post(); ?>
		<a target="_blank" href="<?php the_permalink() ?>">
		<?php the_title('<h6>','</h6>'); ?>
	</a>
	<?php
	}
} ?>
	</div>

</div>