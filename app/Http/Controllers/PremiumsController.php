<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Premiums;
use Illuminate\Support\Str;
use Image;
use File;

class PremiumsController extends Controller
{
    public function index()
    {
        $contents = [
            'premiums' => Premiums::all(),
        ];

        $pagecontent = view('premiums.index', $contents);

        $pagemain = array(
            'title' => 'Premium Products',
            'menu' => 'premiums',
            'submenu' => '',
            'pagecontent' => $pagecontent
        );

        return view('masterpage', $pagemain);
    }

    public function create_page()
    {
        $contents = [
            'premiums' => Premiums::all(),
        ];

        $pagecontent = view('premiums.create', $contents);

        // masterpage
        $pagemain = array(
            'title' => 'Premium Products',
            'menu' => 'premiums',
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


        $savePremium = new Premiums;
        $savePremium->name = $request->name;
        $savePremium->slug = $slug = Str::slug($request->name, '-');
        // return $savePremium;
        if ($request->hasFile('images')) {
            $image = $request->file('images');
            $re_image = Str::random(20).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save( public_path('/porducts_images/' . $re_image) );
            $savePremium->images = $re_image;
        }
        $savePremium->description = $request->description;
        $savePremium->save();  
        // return $savePremium; 
        return redirect('premiums')->with('status_success','Created Best Premium products');
    }

    public function update_page(Premiums $premium)
    {
        // return $premium;
        $contents = [
            'premiums' => Premiums::find($premium->idpremiums)
        ];
        // return $contents;
        $pagecontent = view('premiums.update', $contents);

        // masterpage
        $pagemain = array(
            'title' => 'Premium Products',
            'menu' => 'premiums',
            'submenu' => '',
            'pagecontent' => $pagecontent
        );

        return view('masterpage', $pagemain);
    }

    public function update_save(Request $request, Premiums $premium)
    {
        // return $request->all();
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);


        $savePremium = Premiums::find($premium->idpremiums);
        $savePremium->name = $request->name;
        $savePremium->slug = $slug = Str::slug($request->name, '-');
        $savePremium->description = $request->description;

        $image_old =  public_path('/porducts_images/' . $savePremium->images);
        if ($request->hasFile('images')) {
            if (File::exists($image_old)) {
            $image = $request->file('images');
            $re_image = Str::random(20).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save( public_path('/porducts_images/' . $re_image) );
            $savePremium->images = $re_image;
            }
            File::delete($image_old);
        }

        $savePremium->save();  
        // return $savePremium; 
        return redirect('premiums')->with('status_success','Updated Premium products');
    }
}
