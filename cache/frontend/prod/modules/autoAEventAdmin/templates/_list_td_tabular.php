<td class="a-admin-text a-column-title"><?php echo get_partial('aEventAdmin/title', array('type' => 'list', 'a_event' => $a_event)) ?></td>
<td class="a-admin-foreignkey a-column-author_id"><?php echo get_partial('aEventAdmin/author_id', array('type' => 'list', 'a_event' => $a_event)) ?></td>
<td class="a-admin-manykey a-column-editors_list"><?php echo get_partial('aEventAdmin/editors_list', array('type' => 'list', 'a_event' => $a_event)) ?></td>
<td class="a-admin-text a-column-tags_list"><?php echo get_partial('aEventAdmin/tags_list', array('type' => 'list', 'a_event' => $a_event)) ?></td>
<td class="a-admin-manykey a-column-categories_list"><?php echo get_partial('aEventAdmin/categories_list', array('type' => 'list', 'a_event' => $a_event)) ?></td>
<td class="a-admin-enum a-column-status"><?php echo $a_event->getStatus() ?></td>
<td class="a-admin-date a-column-start_date"><?php echo get_partial('aEventAdmin/start_date', array('type' => 'list', 'a_event' => $a_event)) ?></td>
