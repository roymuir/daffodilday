<?php
class Story extends DataObject {

	private static $db = array(
		'SortID' => 'Int',
		'Name' => 'Text',
		'Story' => 'Text'
	);

	private static $has_one = array(
		'ParentPage' => 'HomePage',
		'Image' => 'Image'
	);
	
	private static $summary_fields = array(
		'Name' => 'Name'
	);

	public static $default_sort='SortID';

	public function getCMSFields() {
	
		$fields = parent::getCMSFields();

		$fields->addFieldToTab('Root.Main', new HiddenField('SortID', 'SortID'));
		$fields->addFieldToTab('Root.Main', new TextField('Name', 'Name'));
		$fields->addFieldToTab('Root.Main', $imageUploadField = new UploadField('Image', 'Handwritten Name'));
		$imageUploadField->setFolderName('story-names');
		$fields->addFieldToTab('Root.Main', new TextareaField('Story', 'Story'));

		return $fields;

	}
	
}
