<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Salesman;
use App\Models\Customer;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil semua order dengan data salesman dan customer yang terkait
        $orders = Order::with('salesman', 'customer')->get();
        return view('Order.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Ambil semua salesman dan customer untuk dropdown
        $salesmen = Salesman::all();
        $customers = Customer::all();
        return view('Order.create', compact('salesmen', 'customers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'order_date' => 'required|date',
            'amount' => 'required|numeric|min:0',
            'salesman_id' => 'required|exists:salesman,salesman_id',
            'customers_id' => 'required|exists:customers,customers_id',
        ]);

        // Simpan order baru
        $order = new Order;
        $order->order_date = $request->order_date;
        $order->amount = $request->amount;
        $order->salesman_id = $request->salesman_id;
        $order->customers_id = $request->customers_id;
        $order->save();

        return redirect()->route('orders.index')->with('success', 'Order Data Successfully Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return view('Order.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        // Ambil semua salesman dan customer untuk dropdown
        $salesmen = Salesman::all();
        $customers = Customer::all();
        return view('Order.edit', compact('order', 'salesmen', 'customers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        // Validasi input
        $request->validate([
            'order_date' => 'required|date',
            'amount' => 'required|numeric|min:0',
            'salesman_id' => 'required|exists:salesman,salesman_id',
            'customers_id' => 'required|exists:customers,customers_id',
        ]);

        // Update order yang ada
        $order->order_date = $request->order_date;
        $order->amount = $request->amount;
        $order->salesman_id = $request->salesman_id;
        $order->customers_id = $request->customers_id;
        $order->save();

        return redirect()->route('orders.index')->with('success', 'Order Data Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();

        return back()->with('success', 'Order Data Successfully Deleted');
    }
}
