<?php

global $project;
$project = 'mysite';

global $database;
require_once('conf/ConfigureFromEnv.php');

// Set the site locale
i18n::set_locale('en_GB');

// load extensions
Object::add_extension('SiteConfig', 'SiteConfigExtension');
Object::add_extension('Product', 'ProductExtension');