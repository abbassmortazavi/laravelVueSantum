<?php

namespace App\Http\Controllers;

use App\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Employer::create([
            'name'=>$request->name,
            'position'=>$request->position,
            'email'=>$request->email
        ]);
        return response()->json([
            'message'=>'Create SuccessFull'
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function show(Employer $employer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function edit(Employer $employer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employer $employer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employer $employer)
    {
        //
    }

    public function getAll()
    {
        $data = Employer::all();
        return response()->json([
            'data'=>$data
        ],200);
    }

    public function getData(Request $request)
    {
        $data = Employer::whereId($request->id)->first();
        return response()->json([
            'data'=>$data
        ],200);
    }

    public function updateData(Request $request)
    {
        $data = Employer::whereId($request->id)->first();
        $data->update($request->all());
        return response()->json([
            'message'=>'Update SuccessFully'
        ],200);
    }

    public function deleteData(Request $request)
    {
        $data = Employer::whereId($request->id)->first();
        $data->delete();
        return response()->json([
            'message'=>'Deleted SuccessFully'
        ],200);
    }
}
