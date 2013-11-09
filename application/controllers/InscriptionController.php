<?php

class InscriptionController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
      $form = new Application_Form_Inscription();
    $form->envoyer->setLabel('Ajouter');
    $this->view->form = $form;

    if ($this->getRequest()->isPost()) {
        $formData = $this->getRequest()->getPost();
        if ($form->isValid($formData)) {
            $Nom = $form->getValue('Nom');
            $Prenom = $form->getValue('Prenom');
			$Adresse = $form->getValue('Adresse');
			$Email = $form->getValue('Email');
	        $client = new Application_Model_DbTable_Client();
            $client->ajouterClient($Nom,$Prenom,$Email,3);
            $this->_helper->redirector('index');
        } else {
            $form->populate($formData);
        }
    }
    }
    


}

