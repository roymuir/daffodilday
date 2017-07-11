<?php
class Link extends DataObject {

	private static $db = array(
		'SortID' => 'Int',
		'Title' => 'Text',
		'URL' => 'Text'
	);

	private static $has_one = array(
		'ParentPage' => 'HomePage',
	);
	
	private static $summary_fields = array(
		'Title' => 'Title',
		'URL' => 'URL'
	);

	public static $default_sort='SortID';

	public function getCMSFields() {
	
		$fields = parent::getCMSFields();

		$fields->addFieldToTab('Root.Main', new HiddenField('SortID', 'SortID'));
		$fields->addFieldToTab('Root.Main', new TextField('Title', 'Title'));
		$fields->addFieldToTab('Root.Main', new TextareaField('URL', 'URL'));

		return $fields;

	}
	
}
