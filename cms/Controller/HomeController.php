<?php

namespace Cms\Controller;


/**
 * HomeController
 *
 * @author SuslikESt
 */
class HomeController extends CmsController
{
    public function index() 
    {
        echo 'Index page';
    }
    
    public function news($id) 
    {
        echo 'News page' . $id;
    }
}
