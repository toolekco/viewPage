<?php


namespace Toolek\ViewPage\Controllers;




use Jenssegers\Agent\Agent;

class ViewPageController extends BaseController
{

    public function index(){
        $agent = new Agent();
        return $browser = $agent->browser();
    }
}
