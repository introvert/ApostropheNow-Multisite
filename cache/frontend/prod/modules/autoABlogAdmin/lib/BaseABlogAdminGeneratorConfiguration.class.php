<?php

/**
 * aBlogAdmin module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage aBlogAdmin
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 12474 2008-10-31 10:41:27Z fabien $
 */
class BaseABlogAdminGeneratorConfiguration extends sfModelGeneratorConfiguration
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
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
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
    return array(  '_edit' => NULL,  '_delete' => NULL,);
  }

  public function getListActions()
  {
    return array(  'new' =>   array(    'label' => 'New Post',    'action' => 'new',    'params' =>     array(      'class' => 'a-btn big icon a-add',    ),  ),);
  }

  public function getListBatchActions()
  {
    return array(  'delete' =>   array(    'label' => 'Delete',  ),  'publish' =>   array(    'label' => 'Publish',  ),  'unpublish' =>   array(    'label' => 'Unpublish',  ),);
  }
  public function getListParams()
  {
    return '%%_title%% - %%_author_id%% - %%_editors_list%% - %%_tags_list%% - %%_categories_list%% - %%status%% - %%published_at%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Blog Admin';
  }

  public function getEditTitle()
  {
    return 'Edit ABlogAdmin';
  }

  public function getNewTitle()
  {
    return 'New ABlogAdmin';
  }

  public function getFilterDisplay()
  {
    return array(  0 => 'author_id',  1 => 'editors_list',  2 => 'categories_list',  3 => 'status',  4 => '_tags_list',);
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
    return array(  0 => '_title',  1 => '_author_id',  2 => '_editors_list',  3 => '_tags_list',  4 => '_categories_list',  5 => 'status',  6 => 'published_at',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'author_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',  'label' => 'created by',),
      'page_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'title' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'slug' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'slug_saved' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'excerpt' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'status' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Enum',),
      'allow_comments' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'template' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'published_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'type' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'start_date' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'start_time' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Time',),
      'end_date' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'end_time' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Time',),
      'location' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'created_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'updated_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'editors_list' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'edited by',),
      'categories_list' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'categorized',),
      'tags_list' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'tagged',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'author_id' => array(  'label' => 'Author',),
      'page_id' => array(),
      'title' => array(),
      'slug' => array(),
      'slug_saved' => array(),
      'excerpt' => array(),
      'status' => array(),
      'allow_comments' => array(),
      'template' => array(),
      'published_at' => array(  'label' => 'Date',),
      'type' => array(),
      'start_date' => array(),
      'start_time' => array(),
      'end_date' => array(),
      'end_time' => array(),
      'location' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'editors_list' => array(  'label' => 'Editors',  'type' => 'ManyKey',),
      'categories_list' => array(  'label' => 'Categories',  'type' => 'ManyKey',),
      'tags_list' => array(  'label' => 'Tags',),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'author_id' => array(),
      'page_id' => array(),
      'title' => array(),
      'slug' => array(),
      'slug_saved' => array(),
      'excerpt' => array(),
      'status' => array(),
      'allow_comments' => array(),
      'template' => array(),
      'published_at' => array(),
      'type' => array(),
      'start_date' => array(),
      'start_time' => array(),
      'end_date' => array(),
      'end_time' => array(),
      'location' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'editors_list' => array(),
      'categories_list' => array(),
      '1' => array(),
      '2' => array(),
      '3' => array(),
      '4' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'author_id' => array(),
      'page_id' => array(),
      'title' => array(),
      'slug' => array(),
      'slug_saved' => array(),
      'excerpt' => array(),
      'status' => array(),
      'allow_comments' => array(),
      'template' => array(),
      'published_at' => array(),
      'type' => array(),
      'start_date' => array(),
      'start_time' => array(),
      'end_date' => array(),
      'end_time' => array(),
      'location' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'editors_list' => array(),
      'categories_list' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'author_id' => array(),
      'page_id' => array(),
      'title' => array(),
      'slug' => array(),
      'slug_saved' => array(),
      'excerpt' => array(),
      'status' => array(),
      'allow_comments' => array(),
      'template' => array(),
      'published_at' => array(),
      'type' => array(),
      'start_date' => array(),
      'start_time' => array(),
      'end_date' => array(),
      'end_time' => array(),
      'location' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'editors_list' => array(),
      'categories_list' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'author_id' => array(),
      'page_id' => array(),
      'title' => array(),
      'slug' => array(),
      'slug_saved' => array(),
      'excerpt' => array(),
      'status' => array(),
      'allow_comments' => array(),
      'template' => array(),
      'published_at' => array(),
      'type' => array(),
      'start_date' => array(),
      'start_time' => array(),
      'end_date' => array(),
      'end_time' => array(),
      'location' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'editors_list' => array(),
      'categories_list' => array(),
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
    return 'aBlogPostForm';
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
    return 'aBlogPostFormFilter';
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
    return array('published_at', 'desc');
  }

  public function getTableMethod()
  {
    return 'filterByEditable';
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
