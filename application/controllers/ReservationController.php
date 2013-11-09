<?php

class ReservationController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

   public function indexAction()
    {
      $form = new Application_Form_Inscription();
    $form->envoyer->setLabel('Rechercher');
    $this->view->form = $form;

    if ($this->getRequest()->isPost()) {
        $formData = $this->getRequest()->getPost();
        if ($form->isValid($formData)) {
            $Type = $form->getValue('Type');
            $Lieu = $form->getValue('Lieu');
			$Date = $form->getValue('Date');
			$Bdget = $form->getValue('Budget');
	        $client = new Application_Model_DbTable_Client();
            $client->ajouterClient($Type,$Lieu,$Date,$Budget);
            $this->_helper->redirector('index');
        } else {
            $form->populate($formData);
        }
    }
    }


}

