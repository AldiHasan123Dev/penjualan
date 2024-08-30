@extends('layouts.master')

@section('container')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid mb-3 px-10-dark">
            <div class="mt-4 mb-5 m-2">
                <div class="form-card justify-content-center dark">
                    <div class="card-body">
                        <h3 class="p-1 mt-2 form-label">Create New Order</h3>
                        <form action="{{ route('orders.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="order_date" class="form-label">Order Date</label>
                                <input type="date" class="form-control @error('order_date') is-invalid @enderror"
                                    name="order_date" id="order_date" value="{{ old('order_date') }}">
                                @error('order_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="amount" class="form-label">Amount</label>
                                <input type="number" step="0.01" class="form-control @error('amount') is-invalid @enderror"
                                    name="amount" id="amount" value="{{ old('amount') }}">
                                @error('amount')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="salesman_id" class="form-label">Salesman</label>
                                <select class="form-control @error('salesman_id') is-invalid @enderror"
                                    name="salesman_id" id="salesman_id">
                                    <option value="">Select Salesman</option>
                                    @foreach ($salesmen as $salesman)
                                        <option value="{{ $salesman->salesman_id }}" {{ old('salesman_id') == $salesman->salesman_id ? 'selected' : '' }}>
                                            {{ $salesman->salesman_name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('salesman_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="customers_id" class="form-label">Customer</label>
                                <select class="form-control @error('customers_id') is-invalid @enderror"
                                    name="customers_id" id="customers_id">
                                    <option value="">Select Customer</option>
                                    @foreach ($customers as $customer)
                                        <option value="{{ $customer->customers_id }}" {{ old('customers_id') == $customer->customers_id ? 'selected' : '' }}>
                                            {{ $customer->customer_name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('customer_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <button type="submit" class="btnt-a mb-2">Save</button>
                            <button type="reset" class="btnt-a mb-2">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

@endsection
