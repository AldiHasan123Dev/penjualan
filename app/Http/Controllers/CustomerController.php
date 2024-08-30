<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();
        return view('Customer.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required',
            'customer_city' => 'required'
        ]);

        $customer = new Customer;
        $customer->customer_name = $request->customer_name;
        $customer->customer_city = $request->customer_city;
        $customer->save();

        return redirect('/customers')->with('success', 'Customer Data Successfully Added');
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
    public function edit(Customer $customer)
    {
        return view('Customer.edit', compact('customer'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customer = Customer::find($id);

        $request->validate([
            'customer_name' => 'required',
            'customer_city' => 'required'
        ]);

        $customer->customer_name = $request->customer_name;
        $customer->customer_city = $request->customer_city;
        $customer->save();

        return redirect('/customers')->with('success', 'Customer Data Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();

        return back()->with('success', 'Customer Data Successfully Deleted');
    }
}
