<td class="batch-actions first">
  <?php if ((!method_exists($site, 'userHasPrivilege')) || $site->userHasPrivilege('edit')): ?>
  <input type="checkbox" name="ids[]" value="<?php echo $site->getPrimaryKey() ?>" class="a-admin-batch-checkbox a-checkbox" />
  <?php endif; ?>
</td>
