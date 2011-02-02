<?php

/**
 * site module configuration.
 *
 * @package    Kundi_store
 * @subpackage site
 * @author     Your name here
 * @version    SVN: $Id: configuration.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class siteGeneratorConfiguration extends BaseSiteGeneratorConfiguration
{
  //static $registered = false;
  /**
   * @see sfPluginConfiguration
   */
   
   /*
  public function initialize()
  {
    // Yes, this can get called twice. This is Fabien's workaround:
    // http://trac.symfony-project.org/ticket/8026
    
    echo "MADAFAAAAK";
    if (!self::$registered)
    {
      $this->dispatcher->connect('a.getGlobalButtons', array('apostropheBlogPluginConfiguration', 
        'getGlobalButtons'));
      //$this->dispatcher->connect('command.post_command', array('aBlogEvents',  'listenToCommandPostCommandEvent'));
      self::$registered = true;
    }
  }
  */
  /*
  
  static public function getGlobalButtons()
  {
    $user = sfContext::getInstance()->getUser();
 
    //echo "MAFAAAAAAAAAAAAA";
    if ($user->hasCredential('site_admin'))
    {
      aTools::addGlobalButtons(array(
        new aGlobalButton('site', 'Site', '@a_site_admin', 'a-site-btn')
      ));
    }
  }
  */
  
}
