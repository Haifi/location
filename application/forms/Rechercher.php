<?php

class Application_Form_Rechercher extends Zend_Form
{

    public function init()
    {
        /* Form Elements & Other Definitions Here ... */
		
		 $this->setName('Rechercher');

        $id = new Zend_Form_Element_Hidden('id');
        $id->addFilter('Int');

        $Type = new Zend_Form_Element_MultiCheckbox('Type');
        $Type->setLabel('Type')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addFilter('StringTrim')
                ->addValidator('NotEmpty');

        $Lieu = new Zend_Form_Element__MultiCheckbox('Lieu');
        $Lieu>setLabel('Lieu')
              ->setRequired(true)
              ->addFilter('StripTags')
              ->addFilter('StringTrim')
              ->addValidator('NotEmpty');
			  
			  
        $Date = new Zend_Form_Element_Date('Date');
        $Date->setLabel('Date')
              ->setRequired(true)
              ->addFilter('StripTags')
              ->addFilter('StringTrim')
              ->addValidator('NotEmpty');
			  
			  
        $Budget = new Zend_Form_Element_Text('Budget');
        $Email->setLabel('Budget')
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

