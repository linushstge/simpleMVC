<?php
namespace Controllers;

use Core\View;
use Core\Controller;

/*
 * Welcome controller
 *
 * @author David Carr - dave@simplemvcframework.com
 * @version 2.2
 * @date June 27, 2014
 * @date updated May 18 2015
 */
class Welcome extends Controller
{

    /**
     * Call the parent construct
     */
    public function __construct()
    {
        parent::__construct();
        $this->language->load('Welcome');
    }

    /**
     * Define Index page title and load template files
     */
    public function index()
    {
        $this->template->assign("title", $this->language->get('welcome_text'));
        $this->template->assign("welcome_message", $this->language->get('welcome_message'));

        $this->template->render("default/index.tpl");
    }

    /**
     * Define Subpage page title and load template files
     */
    public function subPage()
    {
        echo 'do some other cool stuff here';
    }
}
