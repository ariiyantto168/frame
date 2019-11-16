<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Abouts;

class HomeController extends Controller
{
    public function index()
    {
        $about = Abouts::all();
        $contents = [
            'abouts' => $about,
        ];
        $pagecontent = view('Frontend.home.index', $contents);

        // masterpage
        $pagemain = array(
            'title' => 'Home',
            // 'menu' => 'master',
            // 'submenu' => 'categories',
            'pagecontent' => $pagecontent
        );
        
        return view('Frontend.masterpage_frontend', $pagemain);
    }
}
