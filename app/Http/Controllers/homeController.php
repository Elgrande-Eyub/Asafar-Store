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
        $products = product::get();
        return view('cart',compact('cart','products'));
    }

    public function checkout()
    {
        $cart = session()->get('cart', []);

        return view('checkout',compact('cart'));
    }

    public function addToCart( request $request)
    {

        $product = product::where('sku',$request['productSku'])->first();


        $cart = session()->get('cart', []);

        if (isset($cart[$request['productSku']])) {
            $cart[$request['productSku']]['qte']++;

            // Update the total for the specific item
            $cart[$request['productSku']]['total'] = $cart[$request['productSku']]['qte'] * $cart[$request['productSku']]['price'];
        } else {
            if ($product->isDiscount) {
                $price = $product->compared_price;
            } else {
                $price = $product->price;
            }

            $cart[$request['productSku']] = [
                "name" => $product->name,
                "sku" => $product->sku,
                "qte" => 1,
                "price" => $price,
                "image" => $product->attachement,
                "total" => $price  // Initial total for the item
            ];
        }


        session()->put('cart', $cart);

        return response()->json([
            'countCart' => count($cart)
        ]);

    }

    public function updateCartQuantity(Request $request)
    {
        $productSku = $request->input('productSku');
        $newQuantity = $request->input('qte');

        $cart = session()->get('cart', []);

        if (isset($cart[$productSku])) {
            // Calculate the difference in quantity
            $quantityDifference = $newQuantity - $cart[$productSku]['qte'];

            // Update the quantity in the cart
            $cart[$productSku]['qte'] = $newQuantity;

            // Update the total based on the new quantity
            $cart[$productSku]['total'] += $quantityDifference * $cart[$productSku]['price'];

            // Update the overall total for the entire cart
            $overallTotal = array_sum(array_column($cart, 'total'));

            // Update the cart session
            session()->put('cart', $cart);

            return response()->json([
                'message' => 'Cart quantity updated successfully',
                'updatedTotal' => $cart[$productSku]['total'],
                'overallTotal' => $overallTotal
            ]);
        }

        return response()->json(['error' => 'Product not found in the cart'], 404);
    }


    public function deleteFromCart(Request $request)
    {
        $productSku = $request->input('productSku');

        $cart = session()->get('cart', []);

        // Check if the item exists in the cart
        if (isset($cart[$productSku])) {
            // Remove the item from the cart
            unset($cart[$productSku]);
            session()->put('cart', $cart);

            return response()->json(['message' => 'Item deleted from cart']);
        }

        return response()->json(['error' => 'Item not found in the cart'], 404);
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
        $item = product::where('sku',$sku)->first();
        $products = Product::get();

        return view('single-product',compact('item','products'));

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
