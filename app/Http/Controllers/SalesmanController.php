<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salesman;

class SalesmanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salesmans = Salesman::all();
        return view('Salesman.index', compact('salesmans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Salesman.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'salesman_name' => 'required|string|max:255',
            'salesman_city' => 'required|string|max:255',
            'comision' => 'required|numeric|min:0|max:1', // komisi dalam bentuk desimal
        ]);
    
        $salesman = new Salesman;
        $salesman->salesman_name = $request->salesman_name;
        $salesman->salesman_city = $request->salesman_city;
        $salesman->comision = $request->comision;
        $salesman->save();
    
        return redirect('/salesmans')->with('success', 'Salesman Data Successfully Added');
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
    public function edit(Salesman $salesman)
    {
        return view('Salesman.edit', compact('salesman'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $salesman = Salesman::find($id);

        $request->validate([
            'salesman_name' => 'required|string|max:255',
            'salesman_city' => 'required|string|max:255',
            'comision' => 'required|numeric|min:0|max:1', // komisi dalam bentuk desimal
        ]);

        $salesman->salesman_name = $request->salesman_name;
        $salesman->salesman_city = $request->salesman_city;
        $salesman->comision = $request->comision;
        $salesman->save();

        return redirect('/salesmans')->with('success', 'Salesman Data Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Salesman $salesman)
    {
        $salesman->delete();

        return back()->with('success', 'Salesman Data Successfully Deleted');
    }
}
