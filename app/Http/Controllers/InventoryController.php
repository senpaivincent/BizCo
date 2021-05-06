<?php

namespace App\Http\Controllers;

use App\Inventory;
use App\Test;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $check = Inventory::count();

        $userCheck = Auth()->user()->id;

        if($check == 0){
            $inv = Inventory::latest()->paginate(5);
        }else{
            $inv = Inventory::first()->where('users_id', $userCheck)->paginate(5);
        }

        return view('inv.index', compact('inv'))->with('i', (request()->input('page', 1)- 1)* 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        //remove if blade is created
        $request->validate([
            'users_id' => 'required' ,'product' => 'required', 'variant', 'description', 'quantity' => 'required',
            ]);

        Inventory::create($request->all());

        //To check route name go to 'php artisan route:list'
        return redirect()->route('inventory.index')->with('success', 'Item created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function show(Inventory $inventory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventory $inventory)
    {
        return view('inv.edit', compact('inventory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventory $inventory)
    {
        $request->validate([
            'users_id' ,
            'product' => 'required',
            'variant',
            'description',
            'quantity' => 'required',
            ]);

            $inventory->update($request->all());

            //ddd( $inventory->update($request->all()) );

        return redirect()->route('inventory.index')->with('success', 'Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventory $inventory)
    {
        //remove if blade is created
        $inventory->delete();

        return redirect()->route('inventory.index')->with('success', 'Item deleted successfully');
    }
}