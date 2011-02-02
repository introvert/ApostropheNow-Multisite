<td class="a-admin-text a-column-title"><?php echo get_partial('aBlogAdmin/title', array('type' => 'list', 'a_blog_post' => $a_blog_post)) ?></td>
<td class="a-admin-foreignkey a-column-author_id"><?php echo get_partial('aBlogAdmin/author_id', array('type' => 'list', 'a_blog_post' => $a_blog_post)) ?></td>
<td class="a-admin-manykey a-column-editors_list"><?php echo get_partial('aBlogAdmin/editors_list', array('type' => 'list', 'a_blog_post' => $a_blog_post)) ?></td>
<td class="a-admin-text a-column-tags_list"><?php echo get_partial('aBlogAdmin/tags_list', array('type' => 'list', 'a_blog_post' => $a_blog_post)) ?></td>
<td class="a-admin-manykey a-column-categories_list"><?php echo get_partial('aBlogAdmin/categories_list', array('type' => 'list', 'a_blog_post' => $a_blog_post)) ?></td>
<td class="a-admin-enum a-column-status"><?php echo $a_blog_post->getStatus() ?></td>
<td class="a-admin-date a-column-published_at"><?php echo false !== strtotime($a_blog_post->getPublishedAt()) ? format_date($a_blog_post->getPublishedAt(), "f") : '&nbsp;' ?></td>
