<td colspan="4">
  <?php echo __('%%id%% - %%name%% - %%domain%% - %%main%%', array('%%id%%' => link_to($site->getId(), 'a_site_admin_edit', $site), '%%name%%' => $site->getName(), '%%domain%%' => $site->getDomain(), '%%main%%' => get_partial('Site/list_field_boolean', array('value' => $site->getMain()))), 'apostrophe') ?>
</td>
