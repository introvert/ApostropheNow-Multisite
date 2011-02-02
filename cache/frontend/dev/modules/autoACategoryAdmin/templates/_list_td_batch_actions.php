<td class="batch-actions first">
  <?php if ((!method_exists($a_category, 'userHasPrivilege')) || $a_category->userHasPrivilege('edit')): ?>
  <input type="checkbox" name="ids[]" value="<?php echo $a_category->getPrimaryKey() ?>" class="a-admin-batch-checkbox a-checkbox" />
  <?php endif; ?>
</td>
