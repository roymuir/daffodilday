<?php
class MediaRelease extends DataObject {

	private static $db = array(
		'SortID' => 'Int',
		'Title' => 'Text'
	);

	private static $has_one = array(
		'ParentPage' => 'HomePage',
		'SinglePDF' => 'File'
	);
	
	private static $summary_fields = array(
		'Title' => 'Title',
	);

	public static $default_sort='SortID';

	public function getCMSFields() {
	
		$fields = parent::getCMSFields();

		$fields->addFieldToTab('Root.Main', new HiddenField('SortID', 'SortID'));
		$fields->addFieldToTab('Root.Main', new TextField('Title', 'Title'));
		$fields->addFieldToTab('Root.Main', $PDFUploadField = new UploadField('SinglePDF', 'PDF'));
		$PDFUploadField->setFolderName('media-releases');

		return $fields;

	}
	
}
