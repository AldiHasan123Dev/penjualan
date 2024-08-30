@extends('layouts.master')

@section('container')
<div id="layoutSidenav_content">
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4 gray">Home</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <a href="/customers" class="text-decoration-none">
                                    <div class="card text-dark mb-4">
                                        <div class="card-body text-white total">Customers</div>
                                        <h2 class="text-white total">{{ $countsCustomer }}</h2>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <a href="/salesmans" class="text-decoration-none">
                                    <div class="card text-white mb-4">
                                        <div class="card-body text-white total">Salesmans</div>
                                        <h2 class="text-white total">{{ $countsSalesman }}</h2>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <a href="/orders" class="text-decoration-none">
                                    <div class="card text-white mb-4">
                                        <div class="card-body text-white total">Order</div>
                                        <h2 class="text-white total">{{ $countsOrder }}</h2>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="text-muted">
                            Copyright By TIM &copy;Aldi Age Hasani
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
@endsection