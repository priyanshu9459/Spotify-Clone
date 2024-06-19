<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index(): string
    {
        return view('contact_page');
    }
   
    public function getParm($a = false, $b = false)
    {
        echo $a . "\n";
    //    echo $getLink = service('uri');
    //    echo $getLink->getSegment(2);
       
    }
}