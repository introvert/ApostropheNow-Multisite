<?php
  // Compatible with sf_escaping_strategy: true
  $allTags = isset($allTags) ? $sf_data->getRaw('allTags') : null;
  $current = isset($current) ? $sf_data->getRaw('current') : null;
  $params = isset($params) ? $sf_data->getRaw('params') : null;
  $popularTags = isset($popularTags) ? $sf_data->getRaw('popularTags') : null;
  $search = isset($search) ? $sf_data->getRaw('search') : null;
  $searchForm = isset($searchForm) ? $sf_data->getRaw('searchForm') : null;
  $selectedCategory = isset($selectedCategory) ? $sf_data->getRaw('selectedCategory') : null;
  $selectedTag = isset($selectedTag) ? $sf_data->getRaw('selectedTag') : null;
	$selected = array('icon','a-selected'); // Class names for selected filters
?>
<?php use_helper('a') ?>
<?php // Media is now an engine, so there's a page ?>
<?php $page = aTools::getCurrentPage() ?>
  
<?php // Entire media browser goes into what would otherwise be the regular apostrophe subnav ?>
<?php slot('a-subnav') ?>

<?php // For backwards compatibility reasons it is best to implement these as before and after partials ?>
<?php // rather than a wrapper partial. If we use a wrapper that passes on each variable individually to an inner partial, ?>
<?php // it will break as new variables are added. If we had used a single $params array as the only variable ?>
<?php // in the first place, we could have avoided this, but we didn't, so let's be backwards compatible with all ?>
<?php // of the existing overrides of _browser in our sites and those of others. ?>

<?php include_partial('aMedia/browserBefore') ?>				

<div class="a-ui a-subnav-wrapper media clearfix">
	<div class="a-subnav-inner">
	
		<div class="a-subnav-section search">
		  <div class="a-search a-search-sidebar">
		    <form action="<?php echo url_for(aUrl::addParams($current, array("search" => false))) ?>" method="get">
		  		<div class="a-form-row"> <?php // div is for page validation ?>
		  			<label for="a-search-media-field" style="display:none;">Search</label><?php // label for accessibility ?>
		  			<input type="text" name="search" value="<?php echo htmlspecialchars($sf_params->get('search', ESC_RAW)) ?>" class="a-search-field" id="a-search-media-field"/>
		  			<input type="image" src="<?php echo image_path('/apostrophePlugin/images/a-special-blank.gif') ?>" class="submit a-search-submit" value="Search Pages" alt="Search" title="Search"/>
		  		</div>
		    </form>
		  </div>
		</div>				

    <?php if (!aMediaTools::getType()): ?>
			<hr class="a-hr" />
			<div class='a-subnav-section types'>
		  	<h4><?php echo a_('Browse by') ?></h4>
			  <div class="a-filter-options type clearfix">
					<?php $type = isset($type) ? $type : '' ?>
			    <?php $typesInfo = aMediaTools::getOption('types') ?>
					<?php foreach ($typesInfo as $typeName => $typeInfo): ?>
	  				<div class="a-filter-option">
							<?php $selected_type = ($typeName == $type) ? $selected : array() ?>
	  					<?php echo a_button(a_($typeInfo['label']), url_for(aUrl::addParams($current, array('type' => ($typeName == $type) ? '' : $typeName))), array_merge(array('a-link'),$selected_type)) ?>
	  				</div>
	  			<?php endforeach ?>
			  </div>
			</div>
		<?php endif ?>		

    <?php $categoriesInfo = $page->getCategoriesInfo('aMediaItem') ?>
    <?php $categoriesInfo = $categoriesInfo['counts'] ?>
    <?php // If an engine page is locked down to one category, don't show a category browser. ?>
    <?php // Also don't bother if all categories are empty ?>
    <?php if (count($categoriesInfo) > 1): ?>
			<hr class="a-hr" />
			<div class="a-subnav-section categories">
			  <h4><?php echo a_('Categories') ?></h4>
			  <div class="a-filter-options blog clearfix">
	        <?php $n=1; foreach ($categoriesInfo as $categoryInfo): ?>
				    <div class="a-filter-option<?php echo ($n == count($categoriesInfo) ? ' last':'') ?>">
							<?php $selected_category = (isset($selectedCategory) && ($categoryInfo['name'] == $selectedCategory->name)) ? $selected : array() ?>								
							<?php echo a_button($categoryInfo['name'], url_for(aUrl::addParams($current, array("category" => (isset($selectedCategory) ? false : $categoryInfo['slug'])))), array_merge(array('a-link'),$selected_category)) ?>
						</div>
				  <?php $n++; endforeach ?>
			  </div>	
			</div>
		<?php endif ?>		

		
		<?php if (count($allTags)): ?>
		<hr class="a-hr" />
		<div class='a-subnav-section section tags'>

		 <?php if (isset($selectedTag)): ?>
			<div class="a-tag-sidebar-selected-tag clearfix">
				<h4 class="a-tag-sidebar-title selected-tag"><?php echo __('Selected Tag', null, 'apostrophe') ?></h4>  
				<?php echo a_button(htmlspecialchars($selectedTag), url_for(aUrl::addParams($current, array("tag" => false))), array('a-link','icon','a-selected')) ?>			
			</div>				
     <?php endif ?>
   	
			<h4 class="a-tag-sidebar-title popular"><?php echo __('Popular Tags', null, 'apostrophe') ?></h4>
    	<ul class="a-ui a-tag-sidebar-list popular">
      	<?php $n=1; foreach ($popularTags as $tag => $count): ?>
	  			<li <?php echo ($n == count($popularTags) ? 'class="last"':'') ?>>
						<?php echo a_button('<span class="a-tag-count">'.$count.'</span>'.$tag, url_for(aUrl::addParams($current, array("tag" => $tag))), array('a-link','a-tag')) ?>		
					</li>
	      <?php $n++; endforeach ?>
    	</ul>

    	<h4 class="a-tag-sidebar-title all-tags"><?php echo __('All Tags', null, 'apostrophe') ?></h4>
	    <ul class="a-ui a-tag-sidebar-list all-tags">
	      <?php $n=1; foreach ($allTags as $tag => $count): ?>
	  			<li <?php echo ($n == count($allTags) ? 'class="last"':'') ?>>
						<?php echo a_button('<span class="a-tag-count">'.$count.'</span>'.$tag, url_for(aUrl::addParams($current, array("tag" => $tag))), array('a-link','a-tag')) ?>		
					</li>
	      <?php $n++; endforeach ?>
	    </ul>
  	</div>
		<?php endif ?>

	</div>
</div>
   
<script type="text/javascript" charset="utf-8">

  <?php if (isset($search)): ?>
    $('#a-media-search-remove').show();
    $('#a-media-search-submit').hide();
    var search = <?php echo json_encode($search) ?>;
    $('#a-media-search').bind("keyup blur", function(e) 
    {
      if ($(this).val() === search)
      {
        $('#a-media-search-remove').show();
        $('#a-media-search-submit').hide();
      }
      else
      {
        $('#a-media-search-remove').hide();
        $('#a-media-search-submit').show();
      }
    });

    $('#a-media-search').bind('aInputSelfLabelClear', function(e) {
      $('#a-media-search-remove').show();
      $('#a-media-search-submit').hide();
    });
  <?php endif ?>
  
	var allTags = $('.a-tag-sidebar-title.all-tags');

	allTags.hover(function(){
		allTags.addClass('over');
	},function(){
		allTags.removeClass('over');		
	});
	
	allTags.click(function(){
		allTags.toggleClass('open');
		allTags.next().toggle();
	});
	
</script>

<?php include_partial('aMedia/browserAfter') ?>		

<?php end_slot() ?>

<?php a_js_call('apostrophe.selfLabel(?)', array('selector' => '#a-search-media-field', 'title' => a_('Search Media'), 'focus' => false)) ?>