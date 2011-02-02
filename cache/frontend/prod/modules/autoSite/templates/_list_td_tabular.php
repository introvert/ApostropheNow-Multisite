<td class="a-admin-text id"><?php echo link_to($site->getId(), 'a_site_admin_edit', $site) ?></td>
<td class="a-admin-text name"><?php echo $site->getName() ?></td>
<td class="a-admin-text domain"><?php echo $site->getDomain() ?></td>
<td class="a-admin-boolean main"><?php echo get_partial('Site/list_field_boolean', array('value' => $site->getMain())) ?></td>
