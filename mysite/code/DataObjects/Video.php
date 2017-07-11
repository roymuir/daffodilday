<?php
class Video extends DataObject {

	private static $db = array(
		'SortID' => 'Int',
		'Description' => 'Text',
		'URL' => 'Text'
	);

	private static $has_one = array(
		'ParentPage' => 'HomePage'
	);
	
	private static $summary_fields = array(
		'Description' => 'Description',
		'URL' => 'URL'
	);

	public static $default_sort='SortID';

	public function getCMSFields() {
	
		$fields = parent::getCMSFields();

		$fields->addFieldToTab('Root.Main', new HiddenField('SortID', 'SortID'));
		$fields->addFieldToTab('Root.Main', new TextField('Description', 'Description'));
		$fields->addFieldToTab('Root.Main', new TextareaField('URL', 'URL'));

		return $fields;

	}
	
}
