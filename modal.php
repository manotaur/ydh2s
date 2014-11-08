<a href="#" data-toggle="modal" data-target="#modal-<?php the_ID(); ?>">
	<?php echo get_the_post_thumbnail($page->ID, 'list'); ?>
</a>
<!-- Modal -->
<div class="modal fade" id="modal-<?php the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog">

      	<div class="modal-header">
        	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        	<h4 class="modal-title" id="myModalLabel"><?php the_title(); ?></h4>
      	</div><!-- .modal-header -->
      	<div class="modal-body">
      		<?php echo get_the_post_thumbnail($page->ID, 'modal'); ?>
      	</div><!-- .modal-body -->
  	</div><!-- .modal-dialog -->

</div><!-- .modal -->