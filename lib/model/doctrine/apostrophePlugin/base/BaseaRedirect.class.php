<?php

/**
 * BaseaRedirect
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $page_id
 * @property string $slug
 * @property aPage $Page
 * 
 * @method integer   getId()      Returns the current record's "id" value
 * @method integer   getPageId()  Returns the current record's "page_id" value
 * @method string    getSlug()    Returns the current record's "slug" value
 * @method aPage     getPage()    Returns the current record's "Page" value
 * @method aRedirect setId()      Sets the current record's "id" value
 * @method aRedirect setPageId()  Sets the current record's "page_id" value
 * @method aRedirect setSlug()    Sets the current record's "slug" value
 * @method aRedirect setPage()    Sets the current record's "Page" value
 * 
 * @package    apo15
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseaRedirect extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('a_redirect');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('page_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('slug', 'string', 255, array(
             'type' => 'string',
             'unique' => true,
             'length' => 255,
             ));


        $this->index('slugindex', array(
             'fields' => 
             array(
              0 => 'slug',
             ),
             ));
        $this->option('type', 'INNODB');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('aPage as Page', array(
             'local' => 'page_id',
             'foreign' => 'id',
             'onDelete' => 'cascade'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $taggable0 = new Taggable();
        $this->actAs($timestampable0);
        $this->actAs($taggable0);
    }
}