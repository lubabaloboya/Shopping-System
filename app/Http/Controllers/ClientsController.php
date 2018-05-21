<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ClientsController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view("home")->with('products', $products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
        ]);
        
        $client = new Client;
        $client->client_name = $request->input('client_name');
        $client->_id = auth()->user()->id;
        $client->save();

        return redirect('/clients')->with('success', 'Client Created');
    }

}
