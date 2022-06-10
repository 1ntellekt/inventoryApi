<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use Illuminate\Http\Request;

class ClassRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response([
            'status'  =>  true,
            'message' =>  'Get all classrooms',
            'classrooms'=> ClassRoom::all(),
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'num' => 'required|string',
            'name' => 'required|string',
        ]);
        $classroom = ClassRoom::create($request->all());
        return response([
            'status' => true,
            'message' => 'Classroom created!',
            'classroom' => $classroom,
        ],201);
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
            'num' => 'required|string',
        ]);

        $query = ClassRoom::query();
        $classroom = $query->where('num',$request->num)->first();

//dd($classroom);

        if(is_null($classroom)){
            return response([
                'status' => false,
                'message' => 'Classroom not found!'
            ],404);
        }
        return response()->json([
            'status' => true,
            'message' => 'Classroom found success!',
            'classroom' => ClassRoom::with('items')->where('num',$request->num)->first(),
            //'items' => $classroom->items,
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
