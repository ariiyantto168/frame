<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Customers;

class CustomersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $contents = [
            'customers' => Customers::all(),
        ];

        $pagecontent = view('customers.index', $contents);

        $pagemain = array(
            'title' => 'review customer',
            'menu' => 'customers',
            'submenu' => '',
            'pagecontent' => $pagecontent
        );

        return view('masterpage', $pagemain);
    }

    public function create_page()
    {
        $contents = [
            'customers' => Customers::all(),
        ];

        $pagecontent = view('customers.create', $contents);

        // masterpage
        $pagemain = array(
            'title' => 'create viewer',
            'menu' => 'customers',
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
            'posisi' => 'required',
            'description' => 'required',
        ]);


        $saveCustomer = new Customers;
        $saveCustomer->name = $request->name;
        $saveCustomer->posisi = $request->posisi;
        $saveCustomer->slug = $slug = Str::slug($request->name, '-');
        $saveCustomer->description = $request->description;
        $saveCustomer->save();  
        // return $saveCustomer;

        return redirect('customers')->with('status_success','Created Customers');
    }

    public function update_page(Customers $customer)
    {
        // return $customer;
    }
}
