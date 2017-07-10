<?php

class HomePage extends Page
{
    private static $db = array(
    	'HeaderTitle' => 'Text',
    	'WhatTitle' => 'Text',
    	'WhatIntro' => 'Text',
    	'WhatContent' => 'HTMLText',
    	'DifferenceTitle' => 'Text',
    	'DifferenceIntro' => 'Text',
    	'DifferenceContent' => 'HTMLText',
    	'MerchandiseTitle' => 'Text',
    	'MerchandiseIntro' => 'Text',
    	'MediaTitle' => 'Text',
    	'MediaIntro' => 'Text',
    	'SocialTitle' => 'Text',
    	'SocialIntro' => 'Text',
    	'ContactTitle' => 'Text',
    	'ContactIntro' => 'Text'
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
		$fields->addFieldToTab('Root.What Is Daffodil Day?', new TextareaField('WhatIntro', 'Intro'));
		$fields->addFieldToTab('Root.What Is Daffodil Day?', new HTMLEditorField('WhatContent', 'Content'));

		$fields->addFieldToTab('Root.How We Make A Difference', new TextField('DifferenceTitle', 'Title'));
		$fields->addFieldToTab('Root.How We Make A Difference', new TextareaField('DifferenceIntro', 'Intro'));
		$fields->addFieldToTab('Root.How We Make A Difference', new HTMLEditorField('DifferenceContent', 'Content'));

		$fields->addFieldToTab('Root.Merchandise', new TextField('MerchandiseTitle', 'Title'));
		$fields->addFieldToTab('Root.Merchandise', new TextareaField('MerchandiseIntro', 'Intro'));

		$fields->addFieldToTab('Root.Media', new TextField('MediaTitle', 'Title'));
		$fields->addFieldToTab('Root.Media', new TextareaField('MediaIntro', 'Intro'));

		$fields->addFieldToTab('Root.Social', new TextField('SocialTitle', 'Title'));
		$fields->addFieldToTab('Root.Social', new TextareaField('SocialIntro', 'Intro'));

		$fields->addFieldToTab('Root.Contact', new TextField('ContactTitle', 'Title'));
		$fields->addFieldToTab('Root.Contact', new TextareaField('ContactIntro', 'Intro'));

		return $fields;
	}
}
