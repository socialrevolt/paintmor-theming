<?php comment_form(); ?>


<?php 

if (have_comments()) : ?>

<div class="row margin-top-65">
  <h4><?php comments_number(); ?></h4>

<div class="comments">
</div>
	
<ul id="comments-list">
	<?php wp_list_comments('type=comment&callback=html5blankcomments'); // Custom callback in functions.php ?>
</ul>


<?php return; 

endif; ?>


</div>
