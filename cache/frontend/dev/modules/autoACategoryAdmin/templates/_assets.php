<?php use_helper('a')?>

<?php slot('body_class') ?>a-admin a-admin-generator <?php echo $sf_params->get('module'); ?> <?php echo $sf_params->get('action');?> <?php end_slot() ?>


<?php aTools::setAllowSlotEditing(false); ?>