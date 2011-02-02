<td colspan="6">
  <?php echo __('%%name%% - %%users%% - %%groups%%', array('%%name%%' => get_partial('aCategoryAdmin/name', array('type' => 'list', 'a_category' => $a_category)), '%%users%%' => get_partial('aCategoryAdmin/users', array('type' => 'list', 'a_category' => $a_category)), '%%groups%%' => get_partial('aCategoryAdmin/groups', array('type' => 'list', 'a_category' => $a_category))), 'messages') ?>
</td>
