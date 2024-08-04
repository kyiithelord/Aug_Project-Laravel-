<?php

namespace App\Http\Controllers;

use App\Models\Tablet;
use Illuminate\Http\Request;

class TabletController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tablets = Tablet::all();
        return view('tablet.index',compact('tablets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tablet.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tablet = new Tablet();
        $tablet->name = $request->name;
        $tablet->price = $request->price;
        $tablet->color = $request->color;
        $tablet->stock = $request->stock;
        $tablet->save();
        return redirect()->route('tablet.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tablet=Tablet::find($id);
        return view('tablet.edit',compact('tablet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tablet=Tablet::find($id);
        $tablet->name = $request->name;
        $tablet->price = $request->price;
        $tablet->color = $request->color;
        $tablet->stock = $request->stock;
        $tablet->update();
        return redirect()->route('tablet.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tablet =Tablet::find($id);
        if($tablet){
            $tablet->delete();
            return back();
        }
    }
}
