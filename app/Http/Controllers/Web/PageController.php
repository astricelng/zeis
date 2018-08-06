<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Page;

class PageController extends Controller
{
   public function __construct()
    {
    
    }

        /**
     * Return view for index page on url: /
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $page = new Page();
        
        $page->route = 'Home';
        $page->view_file = 'index';
        $page->localization_file = 'home';
        $page->style_file = 'home';
        $page->is_active = true;
        
        return view('www.'.$page->view_file, compact('page'));
    }
}
