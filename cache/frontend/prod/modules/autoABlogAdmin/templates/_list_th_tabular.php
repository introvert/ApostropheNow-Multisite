	<?php slot('a-admin.current-header') ?>
	<th class="a-admin-text a-column-title">
      <span class="a-simple-title"><?php echo __('Title', array(), 'messages') ?></span>
  
    
  <?php if ('title' == $sort[0]): ?>

		<?php ($sort[1] == 'asc')? $sortLabel = __('<span class="icon"></span>Descending', array(), 'a-admin'): $sortLabel = __('<span class="icon"></span>Ascending', array(), 'a-admin'); ?>

    <?php echo link_to(
			$sortLabel,
			'aBlogAdmin/index?sort=title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), 
			array('class' => 'a-btn flag flag-right no-bg icon a-sort-arrow sorting '.$sort[1], 'title' => __($sortLabel, array(), 'a-admin'))) 
		?>
		
    <?php else: ?>

    <?php echo link_to(
      __('<span class="icon"></span>Ascending', array(), 'a-admin'),
      'aBlogAdmin/index?sort=title&sort_type=asc', 
			array('class' => 'a-btn flag flag-right no-bg icon a-sort-arrow asc', 'title' => __('Ascending', array(), 'a-admin'))) 
		?>
		
  <?php endif; ?>

  	</th>
	<?php end_slot(); ?>

<?php include_slot('a-admin.current-header') ?>
	<?php slot('a-admin.current-header') ?>
	<th class="a-admin-foreignkey a-column-author_id">
          <ul class="a-multi-title">
      <li><a href="#" class="a-btn a-sort-label"><?php echo __('Author', array(), 'messages') ?></a>
        <div class="filternav author_id">
          <hr/>
          <?php include_partial('aBlogAdmin/list_th_dropdown', array('filters' => $filters, 'name' => 'author_id'  )) ?>    
            </div>
      </li>
    </ul>
  
    
  <?php if ('author_id' == $sort[0]): ?>

		<?php ($sort[1] == 'asc')? $sortLabel = __('<span class="icon"></span>Descending', array(), 'a-admin'): $sortLabel = __('<span class="icon"></span>Ascending', array(), 'a-admin'); ?>

    <?php echo link_to(
			$sortLabel,
			'aBlogAdmin/index?sort=author_id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), 
			array('class' => 'a-btn flag flag-right no-bg icon a-sort-arrow sorting '.$sort[1], 'title' => __($sortLabel, array(), 'a-admin'))) 
		?>
		
    <?php else: ?>

    <?php echo link_to(
      __('<span class="icon"></span>Ascending', array(), 'a-admin'),
      'aBlogAdmin/index?sort=author_id&sort_type=asc', 
			array('class' => 'a-btn flag flag-right no-bg icon a-sort-arrow asc', 'title' => __('Ascending', array(), 'a-admin'))) 
		?>
		
  <?php endif; ?>

  	</th>
	<?php end_slot(); ?>

<?php include_slot('a-admin.current-header') ?>
	<?php slot('a-admin.current-header') ?>
	<th class="a-admin-manykey a-column-editors_list">
          <ul class="a-multi-title">
      <li><a href="#" class="a-btn a-sort-label"><?php echo __('Editors', array(), 'messages') ?></a>
        <div class="filternav editors_list">
          <hr/>
          <?php include_partial('aBlogAdmin/list_th_dropdown', array('filters' => $filters, 'name' => 'editors_list'  )) ?>    
            </div>
      </li>
    </ul>
  
  	</th>
	<?php end_slot(); ?>

<?php include_slot('a-admin.current-header') ?>
	<?php slot('a-admin.current-header') ?>
	<th class="a-admin-text a-column-tags_list">
          <ul class="a-multi-title">
      <li><a href="#" class="a-btn a-sort-label"><?php echo __('Tags', array(), 'messages') ?></a>
        <div class="filternav tags_list">
          <hr/>
          <?php include_partial('aBlogAdmin/list_th_tags_list_dropdown', array('filters' => $filters, 'name' => 'tags_list'  )) ?>
            </div>
      </li>
    </ul>
  
  	</th>
	<?php end_slot(); ?>

<?php include_slot('a-admin.current-header') ?>
	<?php slot('a-admin.current-header') ?>
	<th class="a-admin-manykey a-column-categories_list">
          <ul class="a-multi-title">
      <li><a href="#" class="a-btn a-sort-label"><?php echo __('Categories', array(), 'messages') ?></a>
        <div class="filternav categories_list">
          <hr/>
          <?php include_partial('aBlogAdmin/list_th_dropdown', array('filters' => $filters, 'name' => 'categories_list'  )) ?>    
            </div>
      </li>
    </ul>
  
  	</th>
	<?php end_slot(); ?>

<?php include_slot('a-admin.current-header') ?>
	<?php slot('a-admin.current-header') ?>
	<th class="a-admin-enum a-column-status">
          <ul class="a-multi-title">
      <li><a href="#" class="a-btn a-sort-label"><?php echo __('Status', array(), 'messages') ?></a>
        <div class="filternav status">
          <hr/>
          <?php include_partial('aBlogAdmin/list_th_dropdown', array('filters' => $filters, 'name' => 'status'  )) ?>    
            </div>
      </li>
    </ul>
  
    
  <?php if ('status' == $sort[0]): ?>

		<?php ($sort[1] == 'asc')? $sortLabel = __('<span class="icon"></span>Descending', array(), 'a-admin'): $sortLabel = __('<span class="icon"></span>Ascending', array(), 'a-admin'); ?>

    <?php echo link_to(
			$sortLabel,
			'aBlogAdmin/index?sort=status&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), 
			array('class' => 'a-btn flag flag-right no-bg icon a-sort-arrow sorting '.$sort[1], 'title' => __($sortLabel, array(), 'a-admin'))) 
		?>
		
    <?php else: ?>

    <?php echo link_to(
      __('<span class="icon"></span>Ascending', array(), 'a-admin'),
      'aBlogAdmin/index?sort=status&sort_type=asc', 
			array('class' => 'a-btn flag flag-right no-bg icon a-sort-arrow asc', 'title' => __('Ascending', array(), 'a-admin'))) 
		?>
		
  <?php endif; ?>

  	</th>
	<?php end_slot(); ?>

<?php include_slot('a-admin.current-header') ?>
	<?php slot('a-admin.current-header') ?>
	<th class="a-admin-date a-column-published_at">
      <span class="a-simple-title"><?php echo __('Date', array(), 'messages') ?></span>
  
    
  <?php if ('published_at' == $sort[0]): ?>

		<?php ($sort[1] == 'asc')? $sortLabel = __('<span class="icon"></span>Descending', array(), 'a-admin'): $sortLabel = __('<span class="icon"></span>Ascending', array(), 'a-admin'); ?>

    <?php echo link_to(
			$sortLabel,
			'aBlogAdmin/index?sort=published_at&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'), 
			array('class' => 'a-btn flag flag-right no-bg icon a-sort-arrow sorting '.$sort[1], 'title' => __($sortLabel, array(), 'a-admin'))) 
		?>
		
    <?php else: ?>

    <?php echo link_to(
      __('<span class="icon"></span>Ascending', array(), 'a-admin'),
      'aBlogAdmin/index?sort=published_at&sort_type=asc', 
			array('class' => 'a-btn flag flag-right no-bg icon a-sort-arrow asc', 'title' => __('Ascending', array(), 'a-admin'))) 
		?>
		
  <?php endif; ?>

  	</th>
	<?php end_slot(); ?>

<?php include_slot('a-admin.current-header') ?>
