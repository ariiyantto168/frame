<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Abouts;
use App\Models\Categories;
use App\Models\Products;
use App\Models\Images;

class HomeController extends Controller
{
    public function index()
    {
        $about = Abouts::all();
        $cat = Categories::all();
        $contents = [
            'products' => Products::with(['categories','images'])->get(), 
            'abouts' => $about,
            'categories' => $cat,
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

    public function show($name)
    {
        // return $name;
        $cat = Categories::with([
                            'products'=> function($image){
                                $image->with('images');
                            }
        ])
        ->where('name',$name)
        ->get();

        // return $cat;

        $contents = [
            'categories' => $cat,
        ];
        // return $contents;
        $pagecontent = view('Frontend.home.show', $contents);
        
        $pagemain = array(
            'title' => 'Products',
            'pagecontent' => $pagecontent
        );
        
        return view('Frontend.masterpage_frontend', $pagemain);
    }

    public function detail($slug)
    {
        // return $slug;
        $detail = Products::with(['categories','images'])->where('slug',$slug)->first();
        // return $detail;

        $contents = [
            'details' => $detail,
        ];

        // return $contents;

        $pagecontent = view('Frontend.home.detail', $contents);

        // return $pagecontent;
        
        $pagemain = array(
            'title' => 'Detail Products',
            'pagecontent' => $pagecontent
        );
        
        return view('Frontend.masterpage_frontend', $pagemain);

    }
}
