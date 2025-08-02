<?php

namespace App\Controllers;

class PageController extends BaseController
{
    // This method will show the first page
    public function pageOne()
    {
        return view('page_one');
    }

    // This method will show the second page
    public function pageTwo()
    {
        return view('page_two');
    }
}
