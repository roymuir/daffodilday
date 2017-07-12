<?php
class Donation extends DataObject {

	private static $db = array(
		'SortID' => 'Int',
		'Value' => 'Int',
		'Description' => 'Text'
	);

	private static $has_one = array(
		'ParentPage' => 'HomePage',
	);
	
	private static $summary_fields = array(
		'Value' => 'Value',
		'Description' => 'Description'
	);

	public static $default_sort='SortID';

	public function getCMSFields() {
	
		$fields = parent::getCMSFields();

		$fields->addFieldToTab('Root.Main', new HiddenField('SortID', 'SortID'));
		$fields->addFieldToTab('Root.Main', new TextField('Value', 'Value'));
		$fields->addFieldToTab('Root.Main', new TextareaField('Description', 'Description'));

		return $fields;

	}
	
}
