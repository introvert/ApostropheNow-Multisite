<td class="a-admin-batch-actions first">
  <?php if ((!method_exists($a_blog_post, 'userHasPrivilege')) || $a_blog_post->userHasPrivilege('edit')): ?>
  <input type="checkbox" name="ids[]" value="<?php echo $a_blog_post->getPrimaryKey() ?>" class="a-admin-batch-checkbox a-checkbox" />
  <?php endif; ?>
</td>
