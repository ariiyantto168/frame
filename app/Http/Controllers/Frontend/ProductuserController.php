<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductuserController extends Controller
{
    public function index()
    {
        $contents = [
           
        ];
        // return $contents;
        $pagecontent = view('Frontend.productsuser.index', $contents);

        $pagemain = array(
            'title' => 'Product user',
            // 'menu' => 'master',
            // 'submenu' => 'categories',
            'pagecontent' => $pagecontent
        );
        
        return view('Frontend.masterpage_frontend', $pagemain);
    }
}
