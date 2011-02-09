<?php

class aPage extends PluginaPage
{

  /*
    modified functions
  */
  
  
  //getPagesInfo
  protected function getPagesInfo($livingOnly = true, $where, $admin = false)
  {
    if (!empty($where)) {
      $where .= ' AND ';
    }
    $where .= 'site_id = ' . Site::getCurrentId();

    return aPageTable::getPagesInfo(array('culture' => $this->getCulture(), 'where' => $where, 'admin' => $admin));
  }
  
  public function save(Doctrine_Connection $conn = null)
  {
    if (empty($this->site_id))
      $this->site_id = Site::getCurrentId();

    return parent::save($conn);
  }

}