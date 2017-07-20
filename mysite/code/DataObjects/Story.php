<?php
class Story extends DataObject {

	private static $db = array(
		'SortID' => 'Int',
		'Name' => 'Text',
		'Story' => 'Text',
		'Age' => 'Int',
		'Location' => 'Text',
		'Status' => 'Text',
		'Family' => 'Text',
		'CareerInterest' => 'Text'
	);

	private static $has_one = array(
		'ParentPage' => 'HomePage',
	);
	
	private static $summary_fields = array(
		'Name' => 'Name',
		'Story' => 'Name'
	);

	public static $default_sort='SortID';

	public function getCMSFields() {
	
		$fields = parent::getCMSFields();

		$fields->addFieldToTab('Root.Main', new HiddenField('SortID', 'SortID'));
		$fields->addFieldToTab('Root.Main', new TextField('Name', 'Name'));
		$fields->addFieldToTab('Root.Main', new TextField('Age', 'Age'));
		$fields->addFieldToTab('Root.Main', new TextField('Location', 'Location'));
		$fields->addFieldToTab('Root.Main', new TextField('Status', 'Status'));
		$fields->addFieldToTab('Root.Main', new TextField('Family', 'Family'));
		$fields->addFieldToTab('Root.Main', new TextField('CareerInterest', 'Career / Interests'));
		$fields->addFieldToTab('Root.Main', new TextareaField('Story', 'Story'));

		return $fields;

	}
	
}
