@extends('layouts.vertical', ['title' => 'Settings', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])
@section('css')
    @vite([
        'node_modules/datatables.net-bs5/css/dataTables.bootstrap5.min.css',
        'node_modules/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css',
        'node_modules/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css',
        'node_modules/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css',
        'node_modules/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css',
        'node_modules/datatables.net-select-bs5/css/select.bootstrap5.min.css',
    ])
@endsection
@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'System ', 'page_title' => 'Settings'])
    <div class="row">
        
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <p class="text-muted mb-0">Shop details for invoice and system settings</p>
                </div>
                <div class="card-body">
                    <div class="alert alert-primary" role="alert">
                        <strong>Primary - </strong> A simple primary alert—check it out!
                    </div>
                    <form action="" method="post" class="border-bottom-1 border-primary">
                        <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label for="shop-name">Name</label>
                                <input type="text" name="shop_name" class="form-control">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="shop-id">Company ID</label>
                                <input type="text" name="shop_id" class="form-control">
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="tax">Tax</label>
                                <input type="number" name="tax" class="form-control">
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label for="shop-address">Address</label>
                                <input type="text" name="address" class="form-control">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="product-name">State</label>
                                <select name="state" class="form-select">
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                </select>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label for="postcode">Postcode</label>
                                <input type="text" name="postcode" class="form-control">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="city">City</label>
                                <input type="text" name="city" class="form-control">
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@vite(['resources/js/pages/datatable.init.js'])
@endsection
