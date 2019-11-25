<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bestproducts;


class BestproductsController extends Controller
{
    public function index()
    {
        $contents = [
            'Bproducts' => Bestproducts::all(),
        ];

        $pagecontent = view('Bproducts.index', $contents);

        $pagemain = array(
            'title' => 'bestproducts',
            'menu' => 'bestproducts',
            'submenu' => '',
            'pagecontent' => $pagecontent
        );

        return view('masterpage', $pagemain);
    }

    public function create_page()
    {
        
    }
}
