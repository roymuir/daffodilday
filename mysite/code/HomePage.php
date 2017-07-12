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
    	'InvolvedTitle' => 'Text',
    	'InvolvedIntro' => 'Text',
    	'MerchandiseTitle' => 'Text',
    	'MerchandiseIntro' => 'Text',
    	'MediaTitle' => 'Text',
    	'MediaIntro' => 'Text',
    	'MediaEnquiries' => 'HTMLText',
    	'SocialTitle' => 'Text',
    	'SocialIntro' => 'Text',
    	'ContactTitle' => 'Text',
    	'ContactIntro' => 'Text'
    );

    private static $has_one = array(
		'BackgroundImage' => 'Image'
	);

    private static $has_many = array(
		'Stories' => 'Story',
		'Donations' => 'Donation',
		'Opportunities' => 'Opportunity',
		'MediaVideos' => 'Video',
		'MediaPhotos' => 'Photo',
		'MediaRadios' => 'Radio',
		'MediaReleases' => 'MediaRelease',
		'MediaLinks' => 'Link'
	);

    public function getCMSFields() {
    	$fields = parent::getCMSFields();

		$fields->removeByName('Content');

		$fields->addFieldToTab('Root.Header', new TextField('HeaderTitle', 'Title'));
		$fields->addFieldToTab('Root.Header', $imageUploadField = new UploadField('BackgroundImage', 'Background Image'));
		$imageUploadField->setFolderName('header-background');
		$StoryConfig = GridFieldConfig::create()->addComponents(
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
		$Stories = new GridField('Stories', 'Stories', $this->Stories(), $StoryConfig);
		$fields->addFieldToTab('Root.Header', $Stories);

		$fields->addFieldToTab('Root.What Is Daffodil Day?', new TextField('WhatTitle', 'Title'));
		$fields->addFieldToTab('Root.What Is Daffodil Day?', new TextareaField('WhatIntro', 'Intro'));
		$fields->addFieldToTab('Root.What Is Daffodil Day?', new HTMLEditorField('WhatContent', 'Content'));

		$fields->addFieldToTab('Root.How We Make A Difference', new TextField('DifferenceTitle', 'Title'));
		$fields->addFieldToTab('Root.How We Make A Difference', new TextareaField('DifferenceIntro', 'Intro'));
		$DifferenceConfig = GridFieldConfig::create()->addComponents(
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
		$Donations = new GridField('Donations', 'Donation types', $this->Donations(), $DifferenceConfig);
		$fields->addFieldToTab('Root.How We Make A Difference', $Donations);

		$fields->addFieldToTab('Root.Get Involved', new TextField('InvolvedTitle', 'Title'));
		$fields->addFieldToTab('Root.Get Involved', new TextareaField('InvolvedIntro', 'Intro'));
		$OpportunitiesConfig = GridFieldConfig::create()->addComponents(
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
		$Opportunities = new GridField('Opportunities', 'Ways to get involved', $this->Opportunities(), $OpportunitiesConfig);
		$fields->addFieldToTab('Root.Get Involved', $Opportunities);

		$fields->addFieldToTab('Root.Merchandise', new TextField('MerchandiseTitle', 'Title'));
		$fields->addFieldToTab('Root.Merchandise', new TextareaField('MerchandiseIntro', 'Intro'));

		$fields->addFieldToTab('Root.Media', new TextField('MediaTitle', 'Title'));
		$fields->addFieldToTab('Root.Media', new TextareaField('MediaIntro', 'Intro'));
		$fields->addFieldToTab('Root.Media', new HTMLEditorField('MediaEnquiries', 'Media enquiries'));
		$VideoConfig = GridFieldConfig::create()->addComponents(
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
		$MediaVideos = new GridField('MediaVideos', 'Videos', $this->MediaVideos(), $VideoConfig);
		$fields->addFieldToTab('Root.Media', $MediaVideos);
		$RadioConfig = GridFieldConfig::create()->addComponents(
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
		$MediaRadios = new GridField('MediaRadios', 'Radio appeals', $this->MediaRadios(), $RadioConfig);
		$fields->addFieldToTab('Root.Media', $MediaRadios);
		$MediaReleaseConfig = GridFieldConfig::create()->addComponents(
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
		$MediaReleases = new GridField('MediaReleases', 'Media releases', $this->MediaReleases(), $MediaReleaseConfig);
		$fields->addFieldToTab('Root.Media', $MediaReleases);
		$LinkConfig = GridFieldConfig::create()->addComponents(
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
		$MediaLinks = new GridField('MediaLinks', 'Links', $this->MediaLinks(), $LinkConfig);
		$fields->addFieldToTab('Root.Media', $MediaLinks);
		$PhotoConfig = GridFieldConfig::create()->addComponents(
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
		$MediaPhotos = new GridField('MediaPhotos', 'Photos', $this->MediaPhotos(), $PhotoConfig);
		$fields->addFieldToTab('Root.Media', $MediaPhotos);

		$fields->addFieldToTab('Root.Social', new TextField('SocialTitle', 'Title'));
		$fields->addFieldToTab('Root.Social', new TextareaField('SocialIntro', 'Intro'));

		$fields->addFieldToTab('Root.Contact', new TextField('ContactTitle', 'Title'));
		$fields->addFieldToTab('Root.Contact', new TextareaField('ContactIntro', 'Intro'));

		return $fields;
	}
}