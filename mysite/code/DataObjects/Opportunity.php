<?php
class Opportunity extends DataObject {

	private static $db = array(
		'SortID' => 'Int',
		'Title' => 'Text',
		'Icon' => 'Text',
		'Description' => 'HTMLText'
	);

	private static $has_one = array(
		'ParentPage' => 'HomePage',
	);
	
	private static $summary_fields = array(
		'Title' => 'Title'
	);

	public static $default_sort='SortID';

	public function getCMSFields() {
	
		$fields = parent::getCMSFields();

		$fields->addFieldToTab('Root.Main', new HiddenField('SortID', 'SortID'));
		$fields->addFieldToTab('Root.Main', new TextField('Title', 'Title'));
		$fields->addFieldToTab('Root.Main', new TextField('Icon', 'Icon'));
		$fields->addFieldToTab('Root.Main', new HTMLEditorField('Description', 'Description'));

		return $fields;

	}
	
}
