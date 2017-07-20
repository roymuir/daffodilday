<?php

class ProductExtension extends DataExtension {     
	
	public static $db = array(
		'ItemNumber' => 'Int'
	);

	private static $has_one = array(
		'SingleImage' => 'Image'
	);
 
    public function updateCMSFields(FieldList $fields) {		
		$fields->addFieldToTab("Root.Main", NumericField::create('ItemNumber', 'Item #'), 'Content');
		$fields->addFieldToTab('Root.Image', $ImageUploadField = new UploadField('SingleImage', 'Image'));
		$ImageUploadField->setFolderName('product-photos');
    }
}