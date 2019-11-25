<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Abouts;

class AboutsController extends Controller
{
    public function index()
    {
        $contents = [
            'abouts' => Abouts::all(),
        ];

        $pagecontent = view('abouts.index', $contents);

        $pagemain = array(
            'title' => 'Abouts',
            'menu' => 'abouts',
            'submenu' => '',
            'pagecontent' => $pagecontent
        );

        return view('masterpage', $pagemain);
    }

    public function create_page()
    {
        $contents = [
            'abouts' => Abouts::all(),
        ];

        $pagecontent = view('abouts.create', $contents);

        // masterpage
        $pagemain = array(
            'title' => 'Abouts',
            'menu' => 'abouts',
            'submenu' => '',
            'pagecontent' => $pagecontent
        );
        
        return view('masterpage', $pagemain);
    }

    public function save_page(Request $request)
    {
        // return $request->all();
        $request->validate([
            'nomortelepon' => 'required',
            'whatsapp' => 'required',
            'email' => 'required',
        ]);

        $saveAbouts = new Abouts;
        $saveAbouts->nomortelepon = $request->nomortelepon;
        $saveAbouts->whatsapp = $request->whatsapp;
        $saveAbouts->email = $request->email;
        $saveAbouts->alamat = $request->alamat;
        $saveAbouts->tentang = $request->tentang;
        $saveAbouts->tentangkami = $request->tentangkami;
        $saveAbouts->save(); 

        return redirect('abouts')->with('status_success','Created Abouts');

    }

    public function update_page(Abouts $abouts)
    {
        // return $abouts;
        $contents = [
            'abouts' => Abouts::find($abouts->idabouts)
        ];

        // return $content;

        $pagecontent = view('abouts.update',$contents);

        // masterpage
        $pagemain = array(
            'title' => 'Abouts',
            'menu' => 'abouts',
            'submenu' => '',
            'pagecontent' => $pagecontent
        );
        
        return view('masterpage', $pagemain);
    }

    public function update_save(Request $request, Abouts $abouts)
    {
        // return $request->all();
        $request->validate([
            'nomortelepon' => 'required',
            'whatsapp' => 'required',
            'email' => 'required',
        ]);

        $saveAbouts = Abouts::find($abouts->idabouts);
        $saveAbouts->nomortelepon = $request->nomortelepon;
        $saveAbouts->whatsapp = $request->whatsapp;
        $saveAbouts->email = $request->email;
        $saveAbouts->alamat = $request->alamat;
        $saveAbouts->tentang = $request->tentang;
        $saveAbouts->tentangkami = $request->tentangkami;
        $saveAbouts->save(); 

        return redirect('abouts')->with('status_success','Update Abouts');
    }

    public function delete(Abouts $abouts)
    {
        $deleteAbouts = Abouts::find($abouts->idabouts);
        //   return $deleteCategories;
        $deleteAbouts->delete();
        return redirect('abouts')->with('status_success','Deleted abouts');
    }
}
