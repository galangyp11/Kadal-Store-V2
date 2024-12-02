<?php

namespace App\Http\Controllers;

use App\Models\Apl;
use App\Http\Requests\StoreAplRequest;
use App\Http\Requests\UpdateAplRequest;
use App\Models\AplItems;
use App\Models\Payment;
use Illuminate\Http\Request;

class AplController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     
        $apls = Apl::all();
        // $payments = Payments::all();
     
        return view("home",["apls"=> $apls]);
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
    public function store(StoreAplRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Apl $apl, $id)
    {
        //$apl = Apl::with('aplitems')->findOrFail( $id );
        $apl = Apl::find($id);
        $items= AplItems::where('id_apl', $id)->get();
        $payments = Payment::all();
        // $apl = Apl::get( $apl->id );
        return view("apl.viewapl", ["apl" => $apl, "items" => $items ,'payments'=> $payments]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Apl $apl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAplRequest $request, Apl $apl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Apl $apl)
    {
        //
    }
    public function total(Request $request) {
        $value = $request->input('value');
    }
}
