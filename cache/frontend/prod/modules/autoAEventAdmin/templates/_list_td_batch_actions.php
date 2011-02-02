<td class="a-admin-batch-actions first">
  <?php if ((!method_exists($a_event, 'userHasPrivilege')) || $a_event->userHasPrivilege('edit')): ?>
  <input type="checkbox" name="ids[]" value="<?php echo $a_event->getPrimaryKey() ?>" class="a-admin-batch-checkbox a-checkbox" />
  <?php endif; ?>
</td>
