<?php

class HomePage extends Page
{
    private static $db = array(
    	'HeaderTitle' => 'Text',
    	'WhatTitle' => 'Text',
    	'WhatContent' => 'HTMLText',
    	'DifferenceTitle' => 'Text',
    	'DifferenceContent' => 'HTMLText',
    	'SocialTitle' => 'Text'
    );

    private static $has_one = array(
		'BackgroundImage' => 'Image'
	);

    private static $has_many = array(
		'Stories' => 'Story'
	);

    public function getCMSFields() {
    	$fields = parent::getCMSFields();

		$fields->removeByName('Content');

		$fields->addFieldToTab('Root.Header', new TextField('HeaderTitle', 'Title'));
		$fields->addFieldToTab('Root.Header', $imageUploadField = new UploadField('BackgroundImage', 'Background Image'));
		$imageUploadField->setFolderName('header-background');
		$GFConfig = GridFieldConfig::create()->addComponents(
			new GridFieldToolbarHeader(),
			new GridFieldAddNewButton('toolbar-header-right'),
			new GridFieldSortableHeader(),
			new GridFieldDataColumns(),
			new GridFieldPaginator(10),
			new GridFieldEditButton(),
			new GridFieldDeleteAction(),
			new GridFieldDetailForm(),
			new GridFieldOrderableRows('SortID')
		);
		$Stories = new GridField('Stories', 'Stories', $this->Stories(), $GFConfig);
		$fields->addFieldToTab('Root.Header', $Stories);

		$fields->addFieldToTab('Root.What Is Daffodil Day?', new TextField('WhatTitle', 'Title'));
		$fields->addFieldToTab('Root.What Is Daffodil Day?', new HTMLEditorField('WhatContent', 'Content'));

		$fields->addFieldToTab('Root.How We Make A Difference', new TextField('DifferenceTitle', 'Title'));
		$fields->addFieldToTab('Root.How We Make A Difference', new HTMLEditorField('DifferenceContent', 'Content'));

		$fields->addFieldToTab('Root.Social Share', new TextField('SocialTitle', 'Title'));

		return $fields;
	}
}
