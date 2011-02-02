
	<?php slot('a-admin.current-header') ?>
	<th class="a-admin-text a-admin-list-th-username">
		  <?php if ('username' == $sort[0]): ?>
	    <?php echo link_to(__('Username', array(), 'apostrophe'), 'aUserAdmin/index?sort=username&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>
	    <?php echo image_tag(((sfConfig::get('app_aAdmin_web_dir'))?sfConfig::get('app_aAdmin_web_dir'):'/apostrophePlugin').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'apostrophe'), 'title' => __($sort[1], array(), 'apostrophe'))) ?>
	  <?php else: ?>
	    <?php echo link_to(__('Username', array(), 'apostrophe'), 'aUserAdmin/index?sort=username&sort_type=asc') ?>
	  <?php endif; ?>
		</th>
	<?php end_slot(); ?>

<?php include_slot('a-admin.current-header') ?>

	<?php slot('a-admin.current-header') ?>
	<th class="a-admin-text a-admin-list-th-first_name">
		  <?php if ('first_name' == $sort[0]): ?>
	    <?php echo link_to(__('First name', array(), 'apostrophe'), 'aUserAdmin/index?sort=first_name&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>
	    <?php echo image_tag(((sfConfig::get('app_aAdmin_web_dir'))?sfConfig::get('app_aAdmin_web_dir'):'/apostrophePlugin').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'apostrophe'), 'title' => __($sort[1], array(), 'apostrophe'))) ?>
	  <?php else: ?>
	    <?php echo link_to(__('First name', array(), 'apostrophe'), 'aUserAdmin/index?sort=first_name&sort_type=asc') ?>
	  <?php endif; ?>
		</th>
	<?php end_slot(); ?>

<?php include_slot('a-admin.current-header') ?>

	<?php slot('a-admin.current-header') ?>
	<th class="a-admin-text a-admin-list-th-last_name">
		  <?php if ('last_name' == $sort[0]): ?>
	    <?php echo link_to(__('Last name', array(), 'apostrophe'), 'aUserAdmin/index?sort=last_name&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>
	    <?php echo image_tag(((sfConfig::get('app_aAdmin_web_dir'))?sfConfig::get('app_aAdmin_web_dir'):'/apostrophePlugin').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'apostrophe'), 'title' => __($sort[1], array(), 'apostrophe'))) ?>
	  <?php else: ?>
	    <?php echo link_to(__('Last name', array(), 'apostrophe'), 'aUserAdmin/index?sort=last_name&sort_type=asc') ?>
	  <?php endif; ?>
		</th>
	<?php end_slot(); ?>

<?php include_slot('a-admin.current-header') ?>

	<?php slot('a-admin.current-header') ?>
	<th class="a-admin-date a-admin-list-th-created_at">
		  <?php if ('created_at' == $sort[0]): ?>
	    <?php echo link_to(__('Created at', array(), 'apostrophe'), 'aUserAdmin/index?sort=created_at&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>
	    <?php echo image_tag(((sfConfig::get('app_aAdmin_web_dir'))?sfConfig::get('app_aAdmin_web_dir'):'/apostrophePlugin').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'apostrophe'), 'title' => __($sort[1], array(), 'apostrophe'))) ?>
	  <?php else: ?>
	    <?php echo link_to(__('Created at', array(), 'apostrophe'), 'aUserAdmin/index?sort=created_at&sort_type=asc') ?>
	  <?php endif; ?>
		</th>
	<?php end_slot(); ?>

<?php include_slot('a-admin.current-header') ?>

	<?php slot('a-admin.current-header') ?>
	<th class="a-admin-date a-admin-list-th-last_login">
		  <?php if ('last_login' == $sort[0]): ?>
	    <?php echo link_to(__('Last login', array(), 'apostrophe'), 'aUserAdmin/index?sort=last_login&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc')) ?>
	    <?php echo image_tag(((sfConfig::get('app_aAdmin_web_dir'))?sfConfig::get('app_aAdmin_web_dir'):'/apostrophePlugin').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'apostrophe'), 'title' => __($sort[1], array(), 'apostrophe'))) ?>
	  <?php else: ?>
	    <?php echo link_to(__('Last login', array(), 'apostrophe'), 'aUserAdmin/index?sort=last_login&sort_type=asc') ?>
	  <?php endif; ?>
		</th>
	<?php end_slot(); ?>

<?php include_slot('a-admin.current-header') ?>
