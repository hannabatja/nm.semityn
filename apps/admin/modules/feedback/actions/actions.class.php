<?php

/**
 * feedback actions.
 *
 * @package    broadway
 * @subpackage feedback
 * @author     singleton
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class feedbackActions extends sfActions
{
  function preExecute() {
      $this->forwardUnless($this->getUser()->hasCredential('feedback'), 'admin', 'perm');  
  }
  
  /*TODO: reply options can be here*/
  
  public function executeIndex(sfWebRequest $request)
  {
      $params = array();
      $params['isActive'] = 'all';
      $params['orderBy'] = 'created_at DESC';
      if($request->getParameter('s')) $params['sFeedback'] = $request->getParameter('s');
      $this->pager = GlobalTable::getPager('Feedback', array('*'), $params, $request->getParameter('page'));
  }

  public function executeDelete(sfWebRequest $request)
  {
	    $this->forward404Unless($rs = Doctrine::getTable('Feedback')->find(array($request->getParameter('id'))), sprintf('Object feedback does not exist (%s).', $request->getParameter('id')));
	    try {
		      $rs->delete();
		      $this->getUser()->setFlash('flash', 'Successfully deleted.', true);
	    }catch (Exception $e){}
	    $this->redirect('feedback/index');
  }
  
}