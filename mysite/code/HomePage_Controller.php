<?php

class HomePage_Controller extends Page_Controller {

    private static $allowed_actions = array(
        'Form'
    );

    public function Form() { 
        $dropDown = new DropdownField('NearestRegion', 'Nearest region', array(
            'Auckland / Northland' => 'Auckland / Northland',
            'Waikato / Bay of Plenty' => 'Waikato / Bay of Plenty',
            'Central (Poverty Bay, Hawkes Bay, Taranaki, Manawatu & Surrounds)' => 'Central (Poverty Bay, Hawkes Bay, Taranaki, Manawatu & Surrounds)',
            'Wellington / Nelson / Tasman / Marlborough / Wairarapa' => 'Wellington / Nelson / Tasman / Marlborough / Wairarapa',
            'Canterbury / West Coast' => 'Canterbury / West Coast',
            'Otago / Southland' => 'Otago / Southland'
        ));
        $dropDown->setEmptyString('-- Select one --');

        $fields = new FieldList( 
            new TextField('Name'),
            new TextField('Organisation'), 
            new EmailField('Email'), 
            new TextField('Phone'),
            new TextField('StreetAddress', 'Street address'),
            new TextField('City'),
            new TextField('Postcode'),
            new TextareaField('WhatIsYourEnquiry', 'What is your enquiry?'),
            $dropDown
            //new RecaptchaField('ContactCaptcha')
        );

        $actions = new FieldList( 
            new FormAction('submit', 'Submit') 
        );

        $validator = new RequiredFields(
            'Name',
            'Email',
            'Phone',
            'StreetAddress',
            'City',
            'Postcode',
            'NearestRegion',
            'WhatIsYourEnquiry'
        );

        $form = new Form($this, 'Form', $fields, $actions, $validator);

        $form->setTemplate('ContactForm');

        return $form;
    }

    public function submit($data, $form) { 
        $adminEmail = new Email();
        if ($data['NearestRegion'] == 'Auckland / Northland') {
            $adminEmail->setTo('events@akcansoc.org.nz'); 
        } else if ($data['NearestRegion'] == 'Waikato / Bay of Plenty') {
            $adminEmail->setTo('fundraising@cancersociety.org.nz'); 
        } else if ($data['NearestRegion'] == 'Central (Poverty Bay, Hawkes Bay, Taranaki, Manawatu & Surrounds)') {
            $adminEmail->setTo('mail@cancercd.org.nz'); 
        } else if ($data['NearestRegion'] == 'Wellington / Nelson / Tasman / Marlborough / Wairarapa') {
            $adminEmail->setTo('daffodilday@cancersoc.org.nz'); 
        } else if ($data['NearestRegion'] == 'Canterbury / West Coast') {
            $adminEmail->setTo('daffodilday@cancercwc.org.nz'); 
        } else if ($data['NearestRegion'] == 'Otago / Southland') {
            $adminEmail->setTo('daffodilday@cansoc.org.nz'); 
        }
        //$adminEmail->setTo('admin@cancer.org.nz'); 
        $adminEmail->setFrom($data['Email']); 
        $adminEmail->setSubject("Contact message from {$data["Name"]} via the Daffodil Day website"); 
        $adminMessageBody = " 
            <p><strong>Name:</strong><br>{$data['Name']}</p> 
            <p><strong>Organisation:</strong><br>{$data['Organisation']}</p>
            <p><strong>Email:</strong><br>{$data['Email']}</p>
            <p><strong>Phone:</strong><br>{$data['Phone']}</p>
            <p><strong>Street address:</strong><br>{$data['StreetAddress']}</p>
            <p><strong>City:</strong><br>{$data['City']}</p>
            <p><strong>Postcode:</strong><br>{$data['Postcode']}</p>
            <p><strong>Nearest region:</strong><br>{$data['NearestRegion']}</p>
            <p><strong>What is your enquiry:</strong><br>{$data['WhatIsYourEnquiry']}</p> 
        "; 
        $adminEmail->setBody($adminMessageBody); 
        $adminEmail->send();

        $userEmail = new Email(); 
        $userEmail->setTo("{$data["Email"]}"); 
        $userEmail->setFrom('admin@cancer.org.nz'); 
        $userEmail->setSubject('Daffodil Day enquiry confirmation'); 
        $userMessageBody = "
            <p>Hi {$data["Name"]},</p>
            <p>Thank you for your enquiry. One of our team will be in contact as soon as possible.</p>
            <p>Thanks,<br>The Daffodil Day team.</p>
        "; 
        $userEmail->setBody($userMessageBody); 
        $userEmail->send();

        $form->addErrorMessage('Message', 'Thanks! Your enquiry has been successfully sent.', 'good');

        $this->redirect('/#contact');

    }

    public function ReverseStorySort(){
        return DataObject::get("Story", "", "RAND()", "");
    }

    public function ReverseMediaPhotoSort(){
        return DataObject::get("Photo", "", "SortID DESC", "");
    }
}