<?php use_helper('a', 'Date') ?>
<?php include_partial('aUserAdmin/assets') ?>

<?php slot('a-subnav') ?>
<div class="a-ui a-subnav-wrapper admin">
	<div class="a-subnav-inner">
	<?php include_partial('aUserAdmin/form_header', array('sf_guard_user' => $sf_guard_user, 'form' => $form, 'configuration' => $configuration)) ?>
	</div>
</div>
<?php end_slot() ?>

<div class="a-ui a-admin-container <?php echo $sf_params->get('module') ?>">
  <?php include_partial('aUserAdmin/form_bar', array('title' => __('New User', array(), 'apostrophe'))) ?>

	<div class="a-admin-content main">
	  <?php include_partial('aUserAdmin/flashes') ?>
 		<?php include_partial('aUserAdmin/form', array('sf_guard_user' => $sf_guard_user, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div class="a-admin-footer">
    <?php include_partial('aUserAdmin/form_footer', array('sf_guard_user' => $sf_guard_user, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

</div>
