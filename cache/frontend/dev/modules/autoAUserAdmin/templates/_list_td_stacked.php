<td colspan="5">
  <?php echo __('%%username%% - %%first_name%% - %%last_name%% - %%created_at%% - %%last_login%%', array('%%username%%' => link_to($sf_guard_user->getUsername(), 'a_user_admin_edit', $sf_guard_user), '%%first_name%%' => $sf_guard_user->getFirstName(), '%%last_name%%' => $sf_guard_user->getLastName(), '%%created_at%%' => false !== strtotime($sf_guard_user->getCreatedAt()) ? format_date($sf_guard_user->getCreatedAt(), "f") : '&nbsp;', '%%last_login%%' => false !== strtotime($sf_guard_user->getLastLogin()) ? format_date($sf_guard_user->getLastLogin(), "f") : '&nbsp;'), 'apostrophe') ?>
</td>
