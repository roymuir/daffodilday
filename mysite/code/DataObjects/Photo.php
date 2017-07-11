<?php
class Photo extends DataObject {

	private static $db = array(
		'SortID' => 'Int',
		'Caption' => 'Text'
	);

	private static $has_one = array(
		'ParentPage' => 'HomePage',
		'SingleImage' => 'Image'
	);
	
	private static $summary_fields = array(
		'ImageThumb' => 'Thumbnail',
		'Caption' => 'Caption'
	);

	public function ImageThumb(){
		if( isset($this->SingleImage()->ID) )
			return $this->SingleImage()->SetHeight(50);
	}

	public static $default_sort='SortID';

	public function getCMSFields() {
	
		$fields = parent::getCMSFields();

		$fields->addFieldToTab('Root.Main', new HiddenField('SortID', 'SortID'));
		$fields->addFieldToTab('Root.Main', new TextField('Caption', 'Caption'));
		$fields->addFieldToTab('Root.Main', $ImageUploadField = new UploadField('SingleImage', 'Image'));
		$ImageUploadField->setFolderName('media-photos');

		return $fields;

	}
	
}
