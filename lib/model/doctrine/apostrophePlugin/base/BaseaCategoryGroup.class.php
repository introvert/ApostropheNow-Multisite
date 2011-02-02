<?php

/**
 * BaseaCategoryGroup
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $category_id
 * @property integer $group_id
 * @property aCategory $Category
 * @property sfGuardGroup $Group
 * 
 * @method integer        getCategoryId()  Returns the current record's "category_id" value
 * @method integer        getGroupId()     Returns the current record's "group_id" value
 * @method aCategory      getCategory()    Returns the current record's "Category" value
 * @method sfGuardGroup   getGroup()       Returns the current record's "Group" value
 * @method aCategoryGroup setCategoryId()  Sets the current record's "category_id" value
 * @method aCategoryGroup setGroupId()     Sets the current record's "group_id" value
 * @method aCategoryGroup setCategory()    Sets the current record's "Category" value
 * @method aCategoryGroup setGroup()       Sets the current record's "Group" value
 * 
 * @package    apo15
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseaCategoryGroup extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('a_category_group');
        $this->hasColumn('category_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('group_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));

        $this->option('type', 'INNODB');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('aCategory as Category', array(
             'local' => 'category_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('sfGuardGroup as Group', array(
             'local' => 'group_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}