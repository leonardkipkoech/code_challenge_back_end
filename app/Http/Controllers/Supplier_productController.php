<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier_product;

class Supplier_productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Supplier_product::orderBy('created_at', 'DESC')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newSupplier_product = new Supplier_product();
        $newSupplier_product->supply_id = $request->supplier_product['supply_id'];
        $newSupplier_product->product_id = $request->supplier_product['product_id'];
        $newSupplier_product->save();
        return $newSupplier_product;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $existingSupplier_product = Supplier_product::find($id);
        if ($existingSupplier_product) {
            $existingSupplier_product->supply_id = $request->supplier_product['supply_id'];
            $existingSupplier_product->product_id = $request->supplier_product['product_id'];
            $existingSupplier_product->save();
            return $existingProduct;
        }
        return "Supplier product not found";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $existingSupplier_product = Supplier_product::find($id);
        if ($existingSupplier_product) {
            $existingSupplier_product->delete();
            return "Supplier product successfully deleted";
        }
        return "Supplier product not found";
    }
}
