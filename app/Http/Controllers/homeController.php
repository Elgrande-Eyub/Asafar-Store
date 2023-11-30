<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $products = product::get();

        return view('index',compact('products'));
    }

    public function shop()
    {
        $products = product::get();

        return view('shop',compact('products'));
    }

    public function cart()
    {
         $cart = session()->get('cart', []);

        return view('cart',compact('cart'));
    }

    public function addToCart( request $request)
    {
                /*    $cart = session()->get('cart', []);

            // Clear the cart data from the session
            session()->forget('cart');

            return $cart; */

        $product = product::where('sku',$request['productSku'])->first();


        $cart = session()->get('cart', []);

        if(isset($cart[$request['productSku']])) {
            $cart[$request['productSku']]['qte']++;
        } else {

            if( $product->isDiscount){
                $price = $product->compared_price;
            }else{
                $price = $product->price;
            }
            $cart[$request['productSku']] = [
                "name" => $product->name,
                "sku" => $product->sku,
                "qte" => 1,
                "price" => $price,
                "image" => $product->attachement
            ];
        }

        session()->put('cart', $cart);

    }

    public function updateCartQuantity(Request $request)
    {
        $productSku = $request->input('productSku');
        $newQuantity = $request->input('qte');

        $cart = session()->get('cart', []);

        if (isset($cart[$productSku])) {
            $cart[$productSku]['qte'] = $newQuantity;
            session()->put('cart', $cart);

            // Calculate the updated total based on new quantity and product price
            $updatedTotal = $cart[$productSku]['price'] * $newQuantity;

            return response()->json([
                'message' => 'Cart quantity updated successfully',
                'updatedTotal' => $updatedTotal,
            ]);
        }

        return response()->json(['error' => 'Product not found in the cart'], 404);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($sku)
    {
        $product = product::where('sku',$sku)->first();
        $products = Product::get();

        return view('single-product',compact('product','products'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
