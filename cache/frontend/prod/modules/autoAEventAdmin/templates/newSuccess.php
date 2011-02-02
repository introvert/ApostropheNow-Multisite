<?php use_helper("a") ?>
<?php include_partial('aEventAdmin/assets') ?>

<?php slot('a-page-header')?>
<div class="a-ui a-admin-header">
	<?php include_partial('aEventAdmin/form_header', array('a_event' => $a_event, 'form' => $form, 'configuration' => $configuration)) ?>
</div>
<?php end_slot() ?>

<div class="a-admin-container <?php echo $sf_params->get('module') ?>">

  <?php include_partial('aEventAdmin/form_bar', array('title' => __('New AEventAdmin', array(), 'messages'))) ?>

  <div class="a-admin-content main">
	  <?php include_partial('aEventAdmin/flashes') ?>
 		<?php include_partial('aEventAdmin/form', array('a_event' => $a_event, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div class="a-admin-footer">
 		<?php include_partial('aEventAdmin/form_footer', array('a_event' => $a_event, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

</div>
