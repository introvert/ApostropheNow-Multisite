<?php

class aPageTable extends PluginaPageTable
{

  /*
  function __construct() {
    echo "MADAFAK aPageTable";
    parent::__construct();
  }
  */

  //retrieveBySlugWithSlots
  public static function queryWithSlots($version = false, $culture = null, $query = null)
  {
    return parent::queryWithSlots($version, $culture, $query)->andWhere('p.site_id = ?', Site::getCurrentId());
  }
  
  //getPagesInfo
  static public function getPagesInfo($options)
  {
    $and = (is_array($options) && !empty($options['where'])) ? ' AND ' : '';
    $options['where'] .=  $and . 'site_id = ' . Site::getCurrentId(); 
    return parent::getPagesInfo($options);
  }
  
}