<?php

/**
 * aCategoryAdmin module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage aCategoryAdmin
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 12474 2008-10-31 10:41:27Z fabien $
 */
class BaseACategoryAdminGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getCredentials($action)
  {
    if (0 === strpos($action, '_'))
    {
      $action = substr($action, 1);
    }

    return isset($this->configuration['credentials'][$action]) ? $this->configuration['credentials'][$action] : array();
  }

  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_save_and_list' => NULL,  '_list' => NULL,  '_delete' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array();
  }

  public function getListActions()
  {
    return array(  'new' =>   array(    'label' => '<span class="icon"></span>New Category',    'action' => 'new',    'params' =>     array(      'class' => 'a-btn big icon a-add',    ),  ),);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }
  public function getListParams()
  {
    return '%%_name%% - %%_users%% - %%_groups%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Categories Admin';
  }

  public function getEditTitle()
  {
    return 'Edit Category';
  }

  public function getNewTitle()
  {
    return 'New Category';
  }

  public function getFilterDisplay()
  {
    return array();
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => '_name',  1 => '_users',  2 => '_groups',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'name' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'description' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'created_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'updated_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'slug' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'media_items_list' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'pages_list' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'users_list' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'groups_list' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'blog_items_list' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'users' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Active Users',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'name' => array(  'label' => 'Category',),
      'description' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'slug' => array(),
      'media_items_list' => array(),
      'pages_list' => array(),
      'users_list' => array(),
      'groups_list' => array(),
      'blog_items_list' => array(),
      'category_aMediaItem' => array(  'label' => 'Media Items',),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'name' => array(),
      'description' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'slug' => array(),
      'media_items_list' => array(),
      'pages_list' => array(),
      'users_list' => array(),
      'groups_list' => array(),
      'blog_items_list' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'name' => array(),
      'description' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'slug' => array(),
      'media_items_list' => array(),
      'pages_list' => array(),
      'users_list' => array(),
      'groups_list' => array(),
      'blog_items_list' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'name' => array(),
      'description' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'slug' => array(),
      'media_items_list' => array(),
      'pages_list' => array(),
      'users_list' => array(),
      'groups_list' => array(),
      'blog_items_list' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'name' => array(),
      'description' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'slug' => array(),
      'media_items_list' => array(),
      'pages_list' => array(),
      'users_list' => array(),
      'groups_list' => array(),
      'blog_items_list' => array(),
    );
  }


  public function getForm($object = null, $options = array())
  {
    $class = $this->getFormClass();

    return new $class($object, array_merge($this->getFormOptions(), $options));
  }

  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'aCategoryForm';
  }

  public function getFormOptions()
  {
    return array();
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'aCategoryFormFilter';
  }

  public function getFilterForm($filters)
  {
    $class = $this->getFilterFormClass();

    return new $class($filters, $this->getFilterFormOptions());
  }

  public function getFilterFormOptions()
  {
    return array();
  }

  public function getFilterDefaults()
  {
    return array();
  }

  public function getPager($model)
  {
    $class = $this->getPagerClass();

    return new $class($model, $this->getPagerMaxPerPage());
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 20;
  }

  public function getDefaultSort()
  {
    return array('name', 'asc');
  }

  public function getTableMethod()
  {
    return '';
  }

  public function getTableCountMethod()
  {
    return '';
  }

  public function getConnection()
  {
    return null;
  }
}
