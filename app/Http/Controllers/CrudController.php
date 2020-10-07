<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Product;


class CrudController extends Controller {

    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
    
        $product = Product::all();
        return Response::json(['code'=>0, 'msg'=>'success', 'data'=>$product]);
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'stock' => 'required'
        ]);
        $product = Product::create($data);

        return Response::json(['code'=>0, 'msg'=>'success', 'data'=>$product]);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return ['code'=>200, 'message'=>'Completed'];
    }

}
