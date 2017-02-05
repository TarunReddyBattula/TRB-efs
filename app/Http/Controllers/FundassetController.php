<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Fundasset;
use App\Customer;

class FundassetController extends Controller
{
    public function index()
    {
        //
        $fundassets=Fundasset::all();
        return view('fundassets.index',compact('fundassets'));
    }

    public function show($id)
    {

        $fundasset = Fundasset::findOrFail($id);

        return view('fundassets.show',compact('fundasset'));
    }


    public function create()
    {

        $customers = Customer::lists('name','id');
        return view('fundassets.create', compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        $fundasset= new Fundasset($request->all());
        $fundasset->save();

        return redirect('fundassets');
    }

    public function edit($id)
    {
        $fundasset=Fundasset::find($id);
        return view('fundassets.edit',compact('fundasset'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,Request $request)
    {
        //
        $fundasset= new Fundasset($request->all());
        $fundasset=Fundasset::find($id);
        $fundasset->update($request->all());
        return redirect('fundassets');
    }

    public function destroy($id)
    {
        Fundasset::find($id)->delete();
        return redirect('fundassets');
    }
}
