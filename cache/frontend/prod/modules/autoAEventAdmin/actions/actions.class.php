<?php

require_once(dirname(__FILE__).'/../lib/BaseAEventAdminGeneratorConfiguration.class.php');
require_once(dirname(__FILE__).'/../lib/BaseAEventAdminGeneratorHelper.class.php');

/**
 * aEventAdmin actions.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage aEventAdmin
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: actions.class.php 12493 2008-10-31 14:43:26Z fabien $
 */
class autoAEventAdminActions extends sfActions
{
  public function preExecute()
  {
    $this->configuration = new aEventAdminGeneratorConfiguration();

    if (!$this->getUser()->hasCredential($this->configuration->getCredentials($this->getActionName())))
    {
      $this->forward(sfConfig::get('sf_secure_module'), sfConfig::get('sf_secure_action'));
    }

    $this->dispatcher->notify(new sfEvent($this, 'admin.pre_execute', array('configuration' => $this->configuration)));

    $this->helper = new aEventAdminGeneratorHelper();

    aTools::setAllowSlotEditing(false);
  }

  public function executeIndex(sfWebRequest $request)
  {
    // sorting
    if ($request->getParameter('sort'))
    {
      $this->setSort(array($request->getParameter('sort'), $request->getParameter('sort_type')));
    }

    // pager
    if ($request->getParameter('page'))
    {
      $this->setPage($request->getParameter('page'));
    }

    $this->pager = $this->getPager();
    $this->sort = $this->getSort();

    aTools::setAllowSlotEditing(false);
  }

  public function executeFilter(sfWebRequest $request)
  {
    $this->setPage(1);

    if ($request->hasParameter('_reset'))
    {
      $this->setFilters($this->configuration->getFilterDefaults());

      $this->redirect('@a_event_admin');
    }

    $this->filters = $this->configuration->getFilterForm($this->getFilters());

    $this->filters->bind($request->getParameter($this->filters->getName()));
    if ($this->filters->isValid())
    {
      $this->setFilters($this->filters->getValues());

      $this->redirect('@a_event_admin');
    }

    $this->pager = $this->getPager();
    $this->sort = $this->getSort();

    $this->setTemplate('index');
  }
  public function executeAddFilter(sfWebRequest $request)
  {
    $name = $request->getParameter('name');
    $value = $request->getParameter('value');

    $filters = $this->getUser()->getAttribute('aEventAdmin.filters', $this->configuration->getFilterDefaults(), 'admin_module');

    $filters[$name] = $value;
    $this->getUser()->setAttribute('aEventAdmin.filters', $filters, 'admin_module');
    $this->setPage(1);
    $this->redirect('@a_event_admin');
  }
      public function executeRemoveFilter(sfWebRequest $request)
  {
    $name = $request->getParameter('name');
    $value = $request->getParameter('value');

    $filters = $this->getUser()->getAttribute('aEventAdmin.filters', $this->configuration->getFilterDefaults(), 'admin_module');
    unset($filters[$name]);
    $this->getUser()->setAttribute('aEventAdmin.filters', $filters, 'admin_module');
    $this->setPage(1);
    $this->redirect('@a_event_admin');
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = $this->configuration->getForm();
    $this->a_event = $this->form->getObject();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->form = $this->configuration->getForm();
    $this->a_event = $this->form->getObject();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->a_event = $this->getRoute()->getObject();
    $this->form = $this->configuration->getForm($this->a_event);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->a_event = $this->getRoute()->getObject();
    $this->form = $this->configuration->getForm($this->a_event);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->dispatcher->notify(new sfEvent($this, 'admin.delete_object', array('object' => $this->getRoute()->getObject())));

    $this->getRoute()->getObject()->delete();

    $this->getUser()->setFlash('notice', 'The item was deleted successfully.');

    $this->redirect('@a_event_admin');
  }

  public function executeBatch(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    if (!$ids = $request->getParameter('ids'))
    {
      $this->getUser()->setFlash('error', 'You must at least select one item.');

      $this->redirect('@a_event_admin');
    }

    if (!$action = $request->getParameter('batch_action'))
    {
      $this->getUser()->setFlash('error', 'You must select an action to execute on the selected items.');

      $this->redirect('@a_event_admin');
    }

    if (!method_exists($this, $method = 'execute'.ucfirst($action)))
    {
      throw new InvalidArgumentException(sprintf('You must create a "%s" method for action "%s"', $method, $action));
    }

    if (!$this->getUser()->hasCredential($this->configuration->getCredentials($action)))
    {
      $this->forward(sfConfig::get('sf_secure_module'), sfConfig::get('sf_secure_action'));
    }

    $validator = new sfValidatorDoctrineChoice(array('multiple' => true,  'model' => 'aEvent'));
    try
    {
      // validate ids
      $ids = $validator->clean($ids);

      // execute batch
      $this->$method($request);
    }
    catch (sfValidatorError $e)
    {
      $this->getUser()->setFlash('error', 'A problem occurs when deleting the selected items as some items do not exist anymore.');
    }

    $this->redirect('@a_event_admin');
  }

  protected function batchAction($action, sfWebRequest $request)
  {
   
    return $error;
  }

  protected function executeBatchDelete(sfWebRequest $request)
  {
    $ids = $request->getParameter('ids');

    $items = Doctrine_Query::create()
      ->from('aEvent')
      ->whereIn('id', $ids)
      ->execute();
    $count = count($items);
    $error = false;
    try
    {
      $items->delete();
    } catch (Exception $e)
    {
      $error = true;
    }
    
    if (($count == count($request->getParameter('ids'))) && (!$error))
    {
      $this->getUser()->setFlash('notice', 'The selected items have been deleted successfully.');
    }
    else
    {
      $this->getUser()->setFlash('error', 'An error occurred while deleting the selected items.');
    }

    $this->redirect('@a_event_admin');
  }


  protected function executeBatchPublish(sfWebRequest $request)
  {
    $ids = $request->getParameter('ids');

    $items = Doctrine_Query::create()
      ->from('aEvent')
      ->whereIn('id', $ids)
      ->execute();
    $count = count($items);
    $error = false;
    try
    {
      foreach($items as $item){
        $item->publish();
      }
    } catch (Exception $e)
    {
      $error = true;
    }

    if (($count == count($request->getParameter('ids'))) && (!$error))
    {
      $this->getUser()->setFlash('notice', 'The selected items have been published successfully.');
    }
    else
    {
      $this->getUser()->setFlash('error', 'An error occurred while publishing the selected items.');
    }

    $this->redirect('@a_event_admin');
  }

  protected function executeBatchUnpublish(sfWebRequest $request)
  {
    $ids = $request->getParameter('ids');

    $items = Doctrine_Query::create()
      ->from('aEvent')
      ->whereIn('id', $ids)
      ->execute();
    $count = count($items);
    $error = false;
    try
    {
      foreach($items as $item){
        $item->unPublish();
      }
    } catch (Exception $e)
    {
      $error = true;
    }
    
    if (($count == count($request->getParameter('ids'))) && (!$error))
    {
      $this->getUser()->setFlash('notice', 'The selected items have been unpublished successfully.');
    }
    else
    {
      $this->getUser()->setFlash('error', 'An error occurred while unpublishing the selected items.');
    }

    $this->redirect('@a_event_admin');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $this->getUser()->setFlash('notice', $form->getObject()->isNew() ? 'The item was created successfully.' : 'The item was updated successfully.');

      $a_event = $form->save();

      $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $a_event)));

      if ($request->hasParameter('_save_and_add'))
      {
        $this->getUser()->setFlash('notice', $this->getUser()->getFlash('notice').' You can add another one below.');

        $this->redirect('@a_event_admin_new');
      }
      else
      {
        $this->redirect('@a_event_admin_edit?id='.$a_event->getId());
      }
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.');
    }
  }

  protected function getFilters()
  {
    return $this->getUser()->getAttribute('aEventAdmin.filters', $this->configuration->getFilterDefaults(), 'admin_module');
  }

  protected function setFilters(array $filters)
  {
    return $this->getUser()->setAttribute('aEventAdmin.filters', $filters, 'admin_module');
  }

  protected function getPager()
  {
    $pager = $this->configuration->getPager('aEvent');
    $pager->setQuery($this->buildQuery());
    $pager->setPage($this->getPage());
    $pager->init();

    return $pager;
  }

  protected function setPage($page)
  {
    $this->getUser()->setAttribute('aEventAdmin.page', $page, 'admin_module');
  }

  protected function getPage()
  {
    return $this->getUser()->getAttribute('aEventAdmin.page', 1, 'admin_module');
  }

  protected function buildQuery()
  {
    $tableMethod = $this->configuration->getTableMethod();
    if (is_null($this->filters))
    {
      $this->filters = $this->configuration->getFilterForm($this->getFilters());
    }

    $this->filters->setTableMethod($tableMethod);

    $query = $this->filters->buildQuery($this->getFilters());

    $this->addSortQuery($query);

    $event = $this->dispatcher->filter(new sfEvent($this, 'admin.build_query'), $query);
    $query = $event->getReturnValue();

    return $query;
  }

  // The primary sort needs to use orderBy so it overrides the default sort of 
  // the createQuery() method. The secondary sort can use addOrderBy. The last
  // sort should be the designated "minor sort" for this type. Right now we're
  // using published_at desc for both blog and events - a natural order for event
  // admin is actually quite difficult to arrive at in another way, we'd have to
  // somehow skip them to today's page as well as ascending order by start date -
  // while reverse order of publication date does give a good sense of "what I have
  // worked on lately" and will do for 1.5. -Tom

  protected function addSortQuery($query)
  {
    $sorts = array();
    if (array(null, null) != ($sort = $this->getSort()))
    {
      // When sorting by start_date we must have a secondary sort of start time
      $sorts[] = $sort[0] . ' ' . $sort[1];
      if ($sort[0] === 'start_date')
      {
        $sorts[] = 'start_time ' . $sort[1];
      }
    }
    foreach ($this->minorSorts as $sort)
    {
      $sorts[] = $sort;
    }
    $first = true;
    foreach ($sorts as $sort)
    {
      if ($first)
      {
        $query->orderBy($sort);
        $first = false;
      }
      else
      {
        $query->addOrderBy($sort);
      }
    }
  }

  protected function getSort()
  {
    if (!is_null($sort = $this->getUser()->getAttribute('aEventAdmin.sort', null, 'admin_module')))
    {
      return $sort;
    }

    $this->setSort($this->configuration->getDefaultSort());

    return $this->getUser()->getAttribute('aEventAdmin.sort', null, 'admin_module');
  }

  protected function setSort(array $sort)
  {
    if (!is_null($sort[0]) && is_null($sort[1]))
    {
      $sort[1] = 'asc';
    }

    $this->getUser()->setAttribute('aEventAdmin.sort', $sort, 'admin_module');
  }
}
