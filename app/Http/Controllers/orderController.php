<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\orderItem;
use App\Models\product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class orderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
     try{

                // Validation rules
                $validator = Validator::make($request->all(), [
                    'first_name' => 'required|string|max:255',
                    'last_name' => 'required|string|max:255',
                    'country' => 'required|string|max:255',
                    'street_adchair' => 'required|string|max:255',
                    'city' => 'required|string|max:255',
                    'phone' => 'required|string|max:20',
                    'email' => 'required|email|max:255',
                ]);

                if ($validator->fails()) {
                    Session::flash('error', $validator->errors()->first());
                    return redirect()->back();
                }

                $orderNumber = 'ORDER' . rand(100000, 999999);

                while (order::where('order_number', $orderNumber)->exists()) {
                    $orderNumber = 'ORDER' . rand(100000, 999999);
                }

                $cart = session()->get('cart', []);

                $overallTotal = 0;
                foreach ($cart as $item) {
                    $overallTotal += $item['total'];
                }

                $order = new order();
                $order->first_name = $request->input('first_name');
                $order->last_name = $request->input('last_name');
                $order->company_name = $request->input('company_name');
                $order->country = $request->input('country');
                $order->street_adchair = $request->input('street_adchair');
                $order->postcode = $request->input('postcode');
                $order->city = $request->input('city');
                $order->phone = $request->input('phone');
                $order->email = $request->input('email');
                $order->note = $request->input('note');
                $order->payment_way = $request->input('payment_way');
                $order->order_number = $orderNumber;
                $order->total_order = $overallTotal;

                $order->save();


                foreach($cart  as $item){

                    $itemID = product::where('sku',$item['sku'])->first();

                    orderItem::create([
                        'order_id' => $order->id,
                        'product_id' => $itemID->id,
                        'qte' => $item['qte'],
                        'total_item' => $item['total'],
                    ]);
                }



                return redirect()->back()->with('success', 'Order Sent successfully , Will Contact You soon');

     }catch(Exception $e){

     }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {


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
