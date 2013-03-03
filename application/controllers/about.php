<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Hitanshu
 * Date: 3/2/13
 * Time: 6:14 PM
 * To change this template use File | Settings | File Templates.
 */
class About extends CI_Controller
{
    public function index()
    {
        $this->template->build('about/about_us');
    }

}
