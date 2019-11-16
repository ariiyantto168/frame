<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Abouts;

class AboutsmeController extends Controller
{
    public function index()
    {
        $contents = [
            'abouts' => Abouts::all(),
        ];
        // return $contents;
        $pagecontent = view('Frontend.aboutsme.index', $contents);

        $pagemain = array(
            'title' => 'Abouts',
            // 'menu' => 'master',
            // 'submenu' => 'categories',
            'pagecontent' => $pagecontent
        );
        
        return view('frontend.masterpage_frontend', $pagemain);
    }
}
