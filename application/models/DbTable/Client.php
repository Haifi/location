<?php

class Application_Model_DbTable_Client extends Zend_Db_Table_Abstract
{

    protected $_name = 'Client';


	public function ajouterClient($nom,$prenom,$email,$adresse)
    {
        $data = array(
            'Nom_Client' => $nom,
            'Prenom_Client' => $prenom,
			'Email_Client' => $email,
			'id_Adresse' => $adresse,
        );
        $this->insert($data);
    }
	
	
	
}

