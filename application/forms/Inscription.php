<?php

class Application_Form_Inscription extends Zend_Form
{

    public function init()
    {
        /* Form Elements & Other Definitions Here ... */
		
		
		 $this->setName('Inscription');

        $id = new Zend_Form_Element_Hidden('id');
        $id->addFilter('Int');

        $Nom = new Zend_Form_Element_Text('Nom');
        $Nom->setLabel('Nom')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addFilter('StringTrim')
                ->addValidator('NotEmpty');

        $Prenom = new Zend_Form_Element_Text('Prenom');
        $Prenom->setLabel('Prénom')
              ->setRequired(true)
              ->addFilter('StripTags')
              ->addFilter('StringTrim')
              ->addValidator('NotEmpty');
			  
			  
        $Adresse = new Zend_Form_Element_Text('Adresse');
        $Adresse->setLabel('Adresse')
              ->setRequired(true)
              ->addFilter('StripTags')
              ->addFilter('StringTrim')
              ->addValidator('NotEmpty');
			  
			  
        $Email = new Zend_Form_Element_Text('Email');
        $Email->setLabel('Email')
              ->setRequired(true)
              ->addFilter('StripTags')
              ->addFilter('StringTrim')
              ->addValidator('NotEmpty')
		      ->addValidator('EmailAddress');	  
			  
			  
			  
			  
			  
			  
        $envoyer = new Zend_Form_Element_Submit('envoyer');
        $envoyer->setAttrib('id', 'boutonenvoyer');

        $this->addElements(array($id,$Nom,$Prenom,$Adresse,$Email,$envoyer));


}

}

