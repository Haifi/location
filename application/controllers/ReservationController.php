<?php

class ReservationController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

  public function indexAction()
    {
      $form = new Application_Form_Rechercher();
    $form->envoyer->setLabel('Ajouter');
    $this->view->form = $form;

    if ($this->getRequest()->isPost()) {
        $formData = $this->getRequest()->getPost();
        if ($form->isValid($formData)) {
            $Type= $form->getValue('Type');
			$Lieu= $form->getValue('Lieu');
			$Date_debut= $form->getValue('Date_debut');
			$Date_fin= $form->getValue('Date_fin');
	      /*  $client = new Application_Model_DbTable_Client();
            $client->ajouterClient($Nom,$Prenom,$Email,3);*/
            $this->_helper->redirector('index');
        } else {
            $form->populate($formData);
        }
    }
    }


}

