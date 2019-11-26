<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bestproducts;
use Illuminate\Support\Str;


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
        $contents = [
            'Bproducts' => Bestproducts::all(),
        ];

        $pagecontent = view('Bproducts.create', $contents);

        // masterpage
        $pagemain = array(
            'title' => 'Create Best Products',
            'menu' => 'bestproducts',
            'submenu' => '',
            'pagecontent' => $pagecontent
        );
        
        return view('masterpage', $pagemain);
    }

    public function save_page(Request $request)
    {
        // return $request->all();
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);


        $saveBproducts = new Bestproducts;
        $saveBproducts->name = $request->name;
        $saveBproducts->slug = $slug = Str::slug($request->name, '-');
        $saveBproducts->description = $request->description;
        $saveBproducts->save();  
        // return $saveBproducts; 
        return redirect('bestproducts')->with('status_success','Created Best Products');
    }

    public function update_page(Bestproducts $bestproduct)
    {
        // return $premium;
        $contents = [
            'Bproducts' => Bestproducts::find($bestproduct->idbestproducts)
        ];
        // return $contents;
        $pagecontent = view('Bproducts.update', $contents);

        // masterpage
        $pagemain = array(
            'title' => 'Create Best Products',
            'menu' => 'bestproducts',
            'submenu' => '',
            'pagecontent' => $pagecontent
        );

        return view('masterpage', $pagemain);
    }

    public function update_save(Request $request, Bestproducts $bestproduct)
    {
        // return $request->all();
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);


        $saveBproducts = Bestproducts::find($bestproduct->idbestproducts);
        $saveBproducts->name = $request->name;
        $saveBproducts->slug = $slug = Str::slug($request->name, '-');
        $saveBproducts->description = $request->description;
        $saveBproducts->save(); 
        // return $savePremium; 
        return redirect('premiums')->with('status_success','Updated Best best products');
    }
}
