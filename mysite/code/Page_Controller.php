<?php

class Page_Controller extends ContentController
{
    /**
     * An array of actions that can be accessed via a request. Each array element should be an action name, and the
     * permissions or conditions required to allow the user to access it.
     *
     * <code>
     * array (
     *     'action', // anyone can access this action
     *     'action' => true, // same as above
     *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
     *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
     * );
     * </code>
     *
     * @var array
     */
    private static $allowed_actions = array(
    );

    public function init()
    {
        parent::init();
        // You can include any CSS or JS required by your project here.
        // See: http://doc.silverstripe.org/framework/en/reference/requirements
        Requirements::javascript('https://code.jquery.com/jquery-3.2.1.min.js');
        Requirements::javascript('https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js');
        Requirements::javascript($this->ThemeDir().'/scripts/libs/jquery.social.stream.wall.1.8.js');
        Requirements::javascript($this->ThemeDir().'/scripts/libs/jquery.social.stream.1.6.1.min.js');
        Requirements::javascript($this->ThemeDir().'/scripts/main.js');
        Requirements::css($this->ThemeDir().'/styles/css/libs/dcsns_wall.css');
        Requirements::css($this->ThemeDir().'/styles/css/main.css');
    }

    public function copyrightDate() {
        return date("Y");
    }
}
