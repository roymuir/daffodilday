<?php
class Radio extends DataObject {

	private static $db = array(
		'SortID' => 'Int',
		'Title' => 'Text'
	);

	private static $has_one = array(
		'ParentPage' => 'HomePage',
		'SingleMP3' => 'file'
	);
	
	private static $summary_fields = array(
		'Title' => 'Title',
	);

	public static $default_sort='SortID';

	public function getCMSFields() {
	
		$fields = parent::getCMSFields();

		$fields->addFieldToTab('Root.Main', new HiddenField('SortID', 'SortID'));
		$fields->addFieldToTab('Root.Main', new TextField('Title', 'Title'));
		$fields->addFieldToTab('Root.Main', $mp3UploadField = new UploadField('SingleMP3', 'MP3'));
		$mp3UploadField->setFolderName('radio-appeals');

		return $fields;

	}
	
}
