<ul class="a-ui a-controls">

			<?php if ($form->isNew()): ?>
				  		<?php echo $helper->linkToSaveAndList($form->getObject(), array(  'params' =>   array(  ),  'class_suffix' => 'save_and_list',  'label' => 'Save and list',)) ?>					  		<?php echo $helper->linkToList(array(  'params' =>   array(  ),  'class_suffix' => 'list',  'label' => 'Back to list',)) ?>						<?php else: ?>
				  		<?php echo $helper->linkToSaveAndList($form->getObject(), array(  'params' =>   array(  ),  'class_suffix' => 'save_and_list',  'label' => 'Save and list',)) ?>					  		<?php echo $helper->linkToList(array(  'params' =>   array(  ),  'class_suffix' => 'list',  'label' => 'Back to list',)) ?>			<?php endif; ?>
</ul>
