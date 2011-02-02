<?php use_helper("a") ?>
<?php include_partial('aBlogAdmin/assets') ?>

<div class="a-ui a-admin-header">
	<?php include_partial('aBlogAdmin/form_header', array('a_blog_post' => $a_blog_post, 'form' => $form, 'configuration' => $configuration)) ?>
</div>

<div class="a-admin-container <?php echo $sf_params->get('module') ?>">

  <?php include_partial('aBlogAdmin/form_bar', array('title' => __('Edit ABlogAdmin', array(), 'messages'))) ?>

  <div class="a-admin-content main">
	  <?php include_partial('aBlogAdmin/flashes') ?>
 		<?php include_partial('aBlogAdmin/form', array('a_blog_post' => $a_blog_post, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div class="a-admin-footer">
 		<?php include_partial('aBlogAdmin/form_footer', array('a_blog_post' => $a_blog_post, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

</div>
