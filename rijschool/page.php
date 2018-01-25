<?php get_template_part('includes/header'); ?>

<div class="container mt-20">
  <div class="row">

    <div class="col-xs-12 col-sm-12">
      <div id="content" role="main">
        <?php get_template_part('includes/loops/content', 'page'); ?>
		<?php edit_post_link(__( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>
      </div><!-- /#content -->
    </div>
    
    
    
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('includes/footer'); ?>
