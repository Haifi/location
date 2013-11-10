<?php

class Application_Form_Rechercher extends Zend_Form
{

    public function init()
    {
        $this->setName('Rechercher');

        $id = new Zend_Form_Element_Hidden('id');
        $id->addFilter('Int');

       	$Type=new Zend_Form_Element_Select('Type');
		$Type->setLabel('Type : ')
		      ->setMultiOptions(array(
				-1 => 'Gender',
				0 => 'Female',
				1 => 'Male'
));

        $Lieu=new Zend_Form_Element_Select('Lieu');
		$Lieu->setLabel('Lieu : ')
		      ->setMultiOptions(array(
				-1 => 'Gender',
				0 => 'Female',
				1 => 'Male'
               ));
			  
		 $Date_debut = new Zend_Form_Element_Text('Date_debut');
         $Date_debut->setLabel('Date debut')
               ->addValidator('Date', true,array( 'messages' => array(
                 'dateInvalidDate' => 'Opsss! Invalid date!',
                 'dateNotYYYY-MM-DD' => 'Opsss! Should enter a date!')
          ))
              ->setRequired(true);
            

          $Date_fin = new Zend_Form_Element_Text('Date_fin ');
         $Date_fin->setLabel('Date fin')
               ->addValidator('Date', true,array( 'messages' => array(
                 'dateInvalidDate' => 'Opsss! Invalid date!',
                 'dateNotYYYY-MM-DD' => 'Opsss! Should enter a date!')
          ))
              ->setRequired(true);			
              
			  
        $envoyer = new Zend_Form_Element_Submit('envoyer');
        $envoyer->setAttrib('id', 'boutonenvoyer');

        $this->addElements(array($id,$Type,$Lieu,$Date_debut,$Date_fin,$envoyer));

    }


}

