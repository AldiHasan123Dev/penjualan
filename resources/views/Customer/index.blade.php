@extends('layouts.master')

@section('container')

<div id="layoutSidenav_content">
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mb-1 m-5" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close m-5" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <main>
        <div class="container-fluid px-4-dark">
            <h1 class="mt-4 mb-5 m-2">Customers</h1>
            <div class="cardt mb-4-dark">
                <div class="cardt-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>City</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <h5 class="p-1 mt-2 btnt" type="button"><a  href="{{ route('customers.create') }}" class="btnt" data-target="#customerModal"><i class="fas fa-fw fa-plus">
                            </i>&nbsp;Create Customer Data</a></h5>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>City</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($customers as $no => $customer)
                            <tr>
                                <td>{{ $no + 1 }}</td>
                                <td>{{ $customer->customer_name }}</td>
                                <td>{{ $customer->customer_city }}</td>
                                <td>
                                    <form action="{{ route('customers.destroy', $customer) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <li class="mb-2">
                                            <a type="button" class="btnt-a text-align-center"
                                                href="{{ route('customers.edit', $customer) }}"
                                                method="POST">
                                                <i class="fas fa-fw fa-edit"></i>Edit
                                            </a>
                                            <a><button type="submit" class="btnt-a" onclick="return confirm('Apakah Anda Yakin Ingin Menghapusnya?');"><i class="fas fa-fw fa-trash"></i>Delete</button></a>
                                        </li>
                                </td>
                                </form>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <footer class="py-4 mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright By TIM &copy;Aldi Age Hasani</div>
            </div>
    </footer>
</div>
@endsection
