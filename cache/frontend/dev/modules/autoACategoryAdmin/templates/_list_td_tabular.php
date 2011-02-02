<td class="a-admin-text name"><?php echo get_partial('aCategoryAdmin/name', array('type' => 'list', 'a_category' => $a_category)) ?></td>
<td class="a-admin-text users"><?php echo get_partial('aCategoryAdmin/users', array('type' => 'list', 'a_category' => $a_category)) ?></td>
<td class="a-admin-text groups"><?php echo get_partial('aCategoryAdmin/groups', array('type' => 'list', 'a_category' => $a_category)) ?></td>
<td class="a-admin-category aMediaItem"><?php echo $helper->getCount('aMediaItem', $a_category->id) ?></td>
<td class="a-admin-category aEvent"><?php echo $helper->getCount('aEvent', $a_category->id) ?></td>
<td class="a-admin-category aBlogPost"><?php echo $helper->getCount('aBlogPost', $a_category->id) ?></td>
