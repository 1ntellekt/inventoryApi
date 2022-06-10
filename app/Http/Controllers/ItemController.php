<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $request->validate([
            'in_num' => 'required|string',
        ]);

        $query = Item::query();
        $item = $query->where('inventory_num',$request->in_num)->first();

        //dd($request->all());

        if(is_null($item)){
            return response([
                'status' => false,
                'message' => 'Item not found!'
            ],404);
        }
        return response()->json([
            'status' => true,
            'message' => 'Item found success!',
            'item' => Item::with(['classroom','category'])->where('inventory_num',$request->in_num)->first(),
            //'classroom' => $item->classroom,
            //'category' => $item->category,
        ], 200);
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
