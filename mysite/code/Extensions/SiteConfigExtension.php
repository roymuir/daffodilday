<?php

class SiteConfigExtension extends DataExtension {     
	
	public static $db = array(
		'DaffodilDay' => 'Text'
	);

    public function updateCMSFields(FieldList $fields) {		
		$fields->addFieldToTab('Root.Main', new TextField('DaffodilDay', 'Daffodil Day Date'));
    }
}