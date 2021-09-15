<?php 
if(comments_open()){
	
	echo '<h4>'.comments_number().'</h4>';
	echo '<ul class="list-unstyled">';
	wp_list_comments(array(
	'max_depth'=> 3,
	'type' => 'comment'));
	
    echo '</ul>';?>
		
	<?php comment_form(array(
	'title_reply'=> 'Add a Comment',
   'label_submit'=> 'Comment',
		'class_submit'=> 'btn btn-primary'
	
	)); ?>

<?php				
}else{echo ' comments Disabled';}