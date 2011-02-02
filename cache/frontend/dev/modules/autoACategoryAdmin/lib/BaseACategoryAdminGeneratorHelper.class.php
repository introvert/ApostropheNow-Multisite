<?php

/**  
 * aCategoryAdmin module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage aCategoryAdmin
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 12482 2008-10-31 11:13:22Z fabien $
 */
class BaseACategoryAdminGeneratorHelper extends sfModelGeneratorHelper
{
  public function linkToNew($params)
  {
    return '<li class="a-admin-action-new">'.link_to('<span class="icon"></span>'.__($params['label'], array(), 'apostrophe'), $this->getUrlForAction('new'), array() ,array("class"=>"a-btn icon big a-add")).'</li>';
  }

  public function linkToEdit($object, $params)
  {
    return '<li class="a-admin-action-edit">'.link_to('<span class="icon"></span>'.__($params['label'], array(), 'apostrophe'), $this->getUrlForAction('edit'), $object, array('class'=>'a-btn icon no-label a-edit')).'</li>';
  }

  public function linkToDelete($object, $params)
  {
    if ($object->isNew())
    {
      return '';
    }

    return '<li class="a-admin-action-delete">'.link_to('<span class="icon"></span>'.__($params['label'], array(), 'apostrophe'), $this->getUrlForAction('delete'), $object, array('class'=>'a-btn icon no-label a-delete','method' => 'delete', 'confirm' => !empty($params['confirm']) ? __($params['confirm'], array(), 'apostrophe') : $params['confirm'])).'</li>';
  }

  public function linkToList($params)
  {
    return '<li class="a-admin-action-list">'.link_to('<span class="icon"></span>'.__('Cancel', array(), 'apostrophe'), $this->getUrlForAction('list'), array(), array('class'=>'a-btn icon a-cancel')).'</li>';
  }

  public function linkToSave($object, $params)
  {
    return '<li class="a-admin-action-save">' . a_anchor_submit_button(a_('Save', array(), 'apostrophe'), array('a-save')) . '</li>';
  }

  public function linkToSaveAndAdd($object, $params)
  {
    if (!$object->isNew())
    {
      return '';
    }
    return '<li class="a-admin-action-save-and-add">' . a_anchor_submit_button(a_($params['label']), array('a-save'), '_save_and_add') . '</li>';
  }

  public function linkToSaveAndList($object, $params)
  {
    return '<li class="a-admin-action-save-and-list">' . a_anchor_submit_button(a_('Save'), array('a-save'), '_save_and_list') . '</li>';
  }
  

  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'a_category_admin' : 'a_category_admin_'.$action;
  }
}
