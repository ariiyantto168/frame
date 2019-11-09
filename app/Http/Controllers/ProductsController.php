<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categories;
use Illuminate\Support\Str;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $contents = [
            'products' => Products::with(['categories'])->get(),
        ];

        $pagecontent = view('products.index', $contents);

        $pagemain = array(
            'title' => 'Products',
            'menu' => 'products',
            'submenu' => '',
            'pagecontent' => $pagecontent
        );

        return view('masterpage', $pagemain);
    }

    public function create_page()
    {
        $cat = Categories::all();   
        $contents = [
            'categories' => $cat,
            'products' => Products::all(),
        ];

        $pagecontent = view('products.create', $contents);
        
        // masterpage
        $pagemain = array(
            'title' => 'Products',
            'menu' => 'products',
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
            'size' => 'required',
            'weight' => 'required',
            'color' => 'required',
            'type' => 'required',
            'description' => 'required',
        ]);

        $saveProducts = new Products;
        $saveProducts->name = $request->name;
        $saveProducts->slug = $slug = Str::slug($request->name, '-');
        $saveProducts->size = $request->size;
        $saveProducts->weight = $request->weight;
        $saveProducts->color = $request->color;
        $saveProducts->type = $request->type;
        $saveProducts->description = $request->description;
        $saveProducts->save();
        // return $saveProducts;

        $saveProducts->categories()->attach($request->cat,[
                                            'created_at' =>date('Y-m-d H:i:s')
        ]);

        // return $request->all();

        return redirect('products')->with('status_success','Created products');
    }

    public function update_page(Products $product)
    {
        $contents = [
            'products' => Products::find($product->idproducts)
        ];
        // return $contents;
        $pagecontent = view('products.update',$contents);

        // masterpage
        $pagemain = array(
            'title' => 'Products',
            'menu' => 'products',
            'submenu' => '',
            'pagecontent' => $pagecontent
        );
        
        return view('masterpage', $pagemain);
    }

    public function update_save(Request $request,Products $product)
    {
        // return $request->all();
        $request->validate([
            'name' => 'required',
            'size' => 'required',
            'weight' => 'required',
            'color' => 'required',
            'type' => 'required',
            'description' => 'required',
        ]);

        $updateProducts = Products::find($product->idproducts);
        $updateProducts->name = $request->name;
        $updateProducts->slug = $slug = Str::slug($request->name, '-');
        $updateProducts->size = $request->size;
        $updateProducts->weight = $request->weight;
        $updateProducts->color = $request->color;
        $updateProducts->type = $request->type;
        $updateProducts->description = $request->description;
        $updateProducts->save();
        return redirect('products')->with('updated_success','Updated products');
         
    }
    
    public function delete(Products $product)
    {
        $deleteProducts = Products::find($product->idproducts);
        // return $deleteProducts;
        $deleteProducts->delete();
        return redirect('products')->with('status_success','Deleted products');
    }

    public function show($slug)
    {
        $slud = Products::where('name',$slug)->first();
        return $slud;
    }
}
