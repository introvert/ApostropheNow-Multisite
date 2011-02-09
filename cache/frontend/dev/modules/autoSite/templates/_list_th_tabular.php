
	<?php slot('a-admin.current-header') ?>
	<th class="a-admin-text a-admin-list-th-id">
		  <?php if ('id' == $sort[0]): ?>
	    <?php echo link_to(__('Id', array(), 'messages'), 'Site/index?sort=id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>
	    <?php echo image_tag(((sfConfig::get('app_aAdmin_web_dir'))?sfConfig::get('app_aAdmin_web_dir'):'/apostrophePlugin').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'apostrophe'), 'title' => __($sort[1], array(), 'apostrophe'))) ?>
	  <?php else: ?>
	    <?php echo link_to(__('Id', array(), 'messages'), 'Site/index?sort=id&sort_type=asc') ?>
	  <?php endif; ?>
		</th>
	<?php end_slot(); ?>

<?php include_slot('a-admin.current-header') ?>

	<?php slot('a-admin.current-header') ?>
	<th class="a-admin-text a-admin-list-th-name">
		  <?php if ('name' == $sort[0]): ?>
	    <?php echo link_to(__('Name', array(), 'messages'), 'Site/index?sort=name&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>
	    <?php echo image_tag(((sfConfig::get('app_aAdmin_web_dir'))?sfConfig::get('app_aAdmin_web_dir'):'/apostrophePlugin').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'apostrophe'), 'title' => __($sort[1], array(), 'apostrophe'))) ?>
	  <?php else: ?>
	    <?php echo link_to(__('Name', array(), 'messages'), 'Site/index?sort=name&sort_type=asc') ?>
	  <?php endif; ?>
		</th>
	<?php end_slot(); ?>

<?php include_slot('a-admin.current-header') ?>

	<?php slot('a-admin.current-header') ?>
	<th class="a-admin-text a-admin-list-th-domain">
		  <?php if ('domain' == $sort[0]): ?>
	    <?php echo link_to(__('Domain', array(), 'messages'), 'Site/index?sort=domain&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>
	    <?php echo image_tag(((sfConfig::get('app_aAdmin_web_dir'))?sfConfig::get('app_aAdmin_web_dir'):'/apostrophePlugin').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'apostrophe'), 'title' => __($sort[1], array(), 'apostrophe'))) ?>
	  <?php else: ?>
	    <?php echo link_to(__('Domain', array(), 'messages'), 'Site/index?sort=domain&sort_type=asc') ?>
	  <?php endif; ?>
		</th>
	<?php end_slot(); ?>

<?php include_slot('a-admin.current-header') ?>

	<?php slot('a-admin.current-header') ?>
	<th class="a-admin-boolean a-admin-list-th-main">
		  <?php if ('main' == $sort[0]): ?>
	    <?php echo link_to(__('Main', array(), 'messages'), 'Site/index?sort=main&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>
	    <?php echo image_tag(((sfConfig::get('app_aAdmin_web_dir'))?sfConfig::get('app_aAdmin_web_dir'):'/apostrophePlugin').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'apostrophe'), 'title' => __($sort[1], array(), 'apostrophe'))) ?>
	  <?php else: ?>
	    <?php echo link_to(__('Main', array(), 'messages'), 'Site/index?sort=main&sort_type=asc') ?>
	  <?php endif; ?>
		</th>
	<?php end_slot(); ?>

<?php include_slot('a-admin.current-header') ?>
