<td class="batch-actions first">
  <?php if ((!method_exists($sf_guard_user, 'userHasPrivilege')) || $sf_guard_user->userHasPrivilege('edit')): ?>
  <input type="checkbox" name="ids[]" value="<?php echo $sf_guard_user->getPrimaryKey() ?>" class="a-admin-batch-checkbox a-checkbox" />
  <?php endif; ?>
</td>
