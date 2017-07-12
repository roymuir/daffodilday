<?php

class Page_Controller extends ContentController
{
    /**
     * An array of actions that can be accessed via a request. Each array element should be an action name, and the
     * permissions or conditions required to allow the user to access it.
     *
     * <code>
     * array (
     *     'action', // anyone can access this action
     *     'action' => true, // same as above
     *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
     *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
     * );
     * </code>
     *
     * @var array
     */
    private static $allowed_actions = array(
        'Form'
    );

    public function init()
    {
        parent::init();
        // You can include any CSS or JS required by your project here.
        // See: http://doc.silverstripe.org/framework/en/reference/requirements
        Requirements::javascript('https://code.jquery.com/jquery-3.2.1.min.js');
        Requirements::javascript('https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js');
        Requirements::javascript('https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js');
        Requirements::javascript('https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js');
        Requirements::javascript($this->ThemeDir().'/scripts/libs/jquery.social.stream.wall.1.8.js');
        Requirements::javascript($this->ThemeDir().'/scripts/libs/jquery.social.stream.1.6.1.min.js');
        Requirements::javascript($this->ThemeDir().'/scripts/libs/easyResponsiveTabs.js');
        Requirements::javascript($this->ThemeDir().'/scripts/main.js');
        Requirements::css('https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css');
        Requirements::css($this->ThemeDir().'/styles/css/libs/dcsns_wall.css');
        Requirements::css($this->ThemeDir().'/styles/css/libs/easy-responsive-tabs.css');
        Requirements::css($this->ThemeDir().'/styles/css/main.css');
    }

    public function copyrightDate() {
        return date("Y");
    }

    public function Form() { 
        $dropDown = new DropdownField('NearestRegion', 'Nearest region', array(
            'AklNth' => 'Auckland / Northland',
            'WakBop' => 'Waikato / Bay of Plenty',
            'Centra' => 'Central (Poverty Bay, Hawkes Bay, Taranaki, Manawatu &amp; Surrounds)',
            'WelTas' => 'Wellington / Nelson / Tasman / Marlborough / Wairarapa',
            'CanWes' => 'Canterbury / West Coast',
            'OtaSth' => 'Otago / Southland'
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
        $adminEmail->setTo('roym@roymuir.com'); 
        $adminEmail->setFrom($data['Email']); 
        $adminEmail->setSubject("Contact Message from {$data["Name"]}"); 
        $adminMessageBody = " 
            <p><strong>Name:</strong> {$data['Name']}</p> 
            <p><strong>Organisation:</strong> {$data['Organisation']}</p>
            <p><strong>Email:</strong> {$data['Email']}</p>
            <p><strong>Phone:</strong> {$data['Phone']}</p>
            <p><strong>Street address:</strong> {$data['StreetAddress']}</p>
            <p><strong>City:</strong> {$data['City']}</p>
            <p><strong>Postcode:</strong> {$data['Postcode']}</p>
            <p><strong>Nearest region:</strong> {$data['NearestRegion']}</p>
            <p><strong>What is your enquiry:</strong> {$data['WhatIsYourEnquiry']}</p> 
        "; 
        $adminEmail->setBody($adminMessageBody); 
        $adminEmail->send();

        $userEmail = new Email(); 
        $userEmail->setTo("{$data["Email"]}"); 
        $userEmail->setFrom('info@daffodilday.org.nz'); 
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
}
