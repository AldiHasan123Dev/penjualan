@extends('layouts.master')

@section('container')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid mb-3 px-10-dark">
            <div class="mt-4 mb-5 m-2">
                <div class="form-card justify-content-center dark">
                    <div class="card-body">
                        <h3 class="p-1 mt-2 form-label">Edit Customer Data</h3>
                        <form action="{{ route('customers.update', $customer) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="customer_name" class="form-label">Customer Name</label>
                                <input type="text" class="form-control @error('customer_name') is-invalid @enderror"
                                name="customer_name" value="{{ old('customer_name', $customer) }}" id="customer_name">
                                @error('customer_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="customer_city" class="form-label">Customer City</label>
                                <input type="text" class="form-control @error('customer_city') is-invalid @enderror"
                                value="{{ old('customer_city', $customer) }}" name="customer_city" id="customer_city">
                                @error('customer_city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <button type="submit" class="btnt-a mb-2">Update</button>
                            <button type="reset" class="btnt-a mb-2">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
</main>
@endsection
