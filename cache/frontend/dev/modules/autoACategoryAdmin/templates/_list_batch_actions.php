<li class="a-admin-batch-actions-choice">
  <select name="batch_action">
    <option value=""><?php echo __('Choose an action', array(), 'apostrophe') ?></option>
    <option value="batchDelete"><?php echo __('Delete', array(), 'a-admin') ?></option>  </select>
  <?php $form = new BaseForm(); if ($form->isCSRFProtected()): ?>
    <input type="hidden" name="<?php echo $form->getCSRFFieldName() ?>" value="<?php echo $form->getCSRFToken() ?>" />
  <?php endif; ?>
	<?php echo a_anchor_submit_button(a_('Go')) ?>
</li>
