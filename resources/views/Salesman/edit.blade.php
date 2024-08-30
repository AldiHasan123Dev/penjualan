@extends('layouts.master')

@section('container')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid mb-3 px-10-dark">
            <div class="mt-4 mb-5 m-2">
                <div class="form-card justify-content-center dark">
                    <div class="card-body">
                        <h3 class="p-1 mt-2 form-label">Edit Salesman Data</h3>
                        <form action="{{ route('salesmans.update', $salesman->salesman_id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="salesman_name" class="form-label">Salesman Name</label>
                                <input type="text" class="form-control @error('salesman_name') is-invalid @enderror"
                                    name="salesman_name" id="salesman_name" value="{{ old('salesman_name', $salesman->salesman_name) }}">
                                @error('salesman_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="salesman_city" class="form-label">Salesman City</label>
                                <input type="text" class="form-control @error('salesman_city') is-invalid @enderror"
                                    name="salesman_city" id="salesman_city" value="{{ old('salesman_city', $salesman->salesman_city) }}">
                                @error('salesman_city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="comision" class="form-label">Salesman Comision</label>
                                <input type="number" step="0.01" class="form-control @error('comision') is-invalid @enderror"
                                    name="comision" id="comision" value="{{ old('comision', $salesman->comision) }}">
                                @error('comision')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <button type="submit" class="btnt-a mb-2">Update</button>
                            <button type="reset" class="btnt-a mb-2">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
</main>
@endsection
