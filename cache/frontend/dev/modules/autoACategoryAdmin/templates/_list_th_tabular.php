
	<?php slot('a-admin.current-header') ?>
	<th class="a-admin-text a-admin-list-th-name">
		  <?php if ('name' == $sort[0]): ?>
	    <?php echo link_to(__('Category', array(), 'messages'), 'aCategoryAdmin/index?sort=name&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>
	    <?php echo image_tag(((sfConfig::get('app_aAdmin_web_dir'))?sfConfig::get('app_aAdmin_web_dir'):'/apostrophePlugin').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'apostrophe'), 'title' => __($sort[1], array(), 'apostrophe'))) ?>
	  <?php else: ?>
	    <?php echo link_to(__('Category', array(), 'messages'), 'aCategoryAdmin/index?sort=name&sort_type=asc') ?>
	  <?php endif; ?>
		</th>
	<?php end_slot(); ?>

<?php include_slot('a-admin.current-header') ?>

	<?php slot('a-admin.current-header') ?>
	<th class="a-admin-text a-admin-list-th-users">
		  <?php echo __('Active Users', array(), 'messages') ?>
		</th>
	<?php end_slot(); ?>

<?php include_slot('a-admin.current-header') ?>

	<?php slot('a-admin.current-header') ?>
	<th class="a-admin-text a-admin-list-th-groups">
		  <?php echo __('Groups', array(), 'messages') ?>
		</th>
	<?php end_slot(); ?>

<?php include_slot('a-admin.current-header') ?>

	<?php slot('a-admin.current-header') ?>
	<th class="a-admin-category a-admin-list-th-aMediaItem">
		  <?php echo __('Media', array(), 'messages') ?>
		</th>
	<?php end_slot(); ?>

<?php include_slot('a-admin.current-header') ?>

	<?php slot('a-admin.current-header') ?>
	<th class="a-admin-category a-admin-list-th-aEvent">
		  <?php echo __('Events', array(), 'messages') ?>
		</th>
	<?php end_slot(); ?>

<?php include_slot('a-admin.current-header') ?>

	<?php slot('a-admin.current-header') ?>
	<th class="a-admin-category a-admin-list-th-aBlogPost">
		  <?php echo __('Blog Posts', array(), 'messages') ?>
		</th>
	<?php end_slot(); ?>

<?php include_slot('a-admin.current-header') ?>
