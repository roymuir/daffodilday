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
        Requirements::javascript('https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js');
        Requirements::javascript('https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js');
        Requirements::javascript('https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js');
        Requirements::javascript($this->ThemeDir().'/scripts/libs/jquery.social.stream.wall.1.8.js');
        Requirements::javascript($this->ThemeDir().'/scripts/libs/jquery.social.stream.1.6.2.min.js');
        Requirements::javascript($this->ThemeDir().'/scripts/libs/easyResponsiveTabs.js');
        Requirements::javascript($this->ThemeDir().'/scripts/main.js');
        Requirements::css('https://fonts.googleapis.com/css?family=Roboto:400,400i,500,700,700i');
        Requirements::css('https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css');
        Requirements::css($this->ThemeDir().'/styles/css/libs/dcsns_wall.css');
        Requirements::css($this->ThemeDir().'/styles/css/libs/easy-responsive-tabs.css');
        Requirements::css($this->ThemeDir().'/styles/css/main.css');
    }

    public function copyrightDate() {
        return date("Y");
    }

    /*function TotalQuantItems() {
        $quantitems = Session::get('Cart.OrderID');
        $result = DB::query("SELECT SUM(Quantity) FROM Item WHERE OrderID LIKE $quantitems")->value();
        return $result;
    }*/
}
