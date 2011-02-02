<?php use_helper('a', 'Date') ?>
<?php include_partial('Site/assets') ?>

<?php slot('a-subnav') ?>
<div class="a-ui a-subnav-wrapper admin">
	<div class="a-subnav-inner">
	<?php include_partial('Site/form_header', array('site' => $site, 'form' => $form, 'configuration' => $configuration)) ?>
	</div>
</div>
<?php end_slot() ?>

<div class="a-ui a-admin-container <?php echo $sf_params->get('module') ?>">
  <?php include_partial('Site/form_bar', array('title' => __('New Site', array(), 'apostrophe'))) ?>

	<div class="a-admin-content main">
	  <?php include_partial('Site/flashes') ?>
 		<?php include_partial('Site/form', array('site' => $site, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div class="a-admin-footer">
    <?php include_partial('Site/form_footer', array('site' => $site, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

</div>
