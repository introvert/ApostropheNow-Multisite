<?php use_helper('a', 'Date') ?>
<?php include_partial('aCategoryAdmin/assets') ?>

<?php slot('a-subnav') ?>
<div class="a-ui a-subnav-wrapper admin">
	<div class="a-subnav-inner">
	<?php include_partial('aCategoryAdmin/form_header', array('a_category' => $a_category, 'form' => $form, 'configuration' => $configuration)) ?>
	</div>
</div>
<?php end_slot() ?>

<div class="a-ui a-admin-container <?php echo $sf_params->get('module') ?>">
  <?php include_partial('aCategoryAdmin/form_bar', array('title' => __('New Category', array(), 'messages'))) ?>

	<div class="a-admin-content main">
	  <?php include_partial('aCategoryAdmin/flashes') ?>
 		<?php include_partial('aCategoryAdmin/form', array('a_category' => $a_category, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div class="a-admin-footer">
    <?php include_partial('aCategoryAdmin/form_footer', array('a_category' => $a_category, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

</div>
