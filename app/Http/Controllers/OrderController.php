<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Item;
use App\ItemOrder;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $validator = Validator::make($request->all(),[
            'address' => 'required',
            'phone_number' => 'required',
            'name' => 'required',
            'items' => 'required',
        ]);

        if ( $validator->fails() ) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ]);

        }

        $order = new Order();

        $order->address = $request->address;
        $order->phone_number = $request->phone_number;
        $order->name =$request->name;

        $order->save();

        foreach ($request->items as $key => $value) {
            $item_order = new ItemOrder();
            $item = Item::find($value['id']);

            $item_order->order_id = $order->id;
            $item_order->item_id = $item->id;
            $item_order->price = $item->price;
            $item_order->quantity = $value['quantity'];

            $item_order->save();
        }

        return response()->json([
            'success' => true,
            'response' => [
                'message'=>"The order was placed successfully",
                'order_number'=>$order->id,
            ]
        ]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
