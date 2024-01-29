@extends('layouts.vertical', ['title' => 'Register', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])
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
    @include('layouts.shared/page-title', ['sub_title' => 'System ', 'page_title' => 'Register'])
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <p class="text-muted mb-0">System users</p>
                </div>
                <div class="card-body">
                    <form action="" method="post" class="border-bottom-1 border-primary">
                        <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label for="product-name">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="product-name">Login ID</label>
                                <input type="text" name="login" class="form-control">
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label for="product-name">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" placeholder="Enter your password">
                                    <div class="input-group-text" data-password="false">
                                        <span class="password-eye"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="product-name">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <table id="client-datatable" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Login</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Hugh</td>
                                <td>hugh</td>
                                <td>hugh@gmail.com</td>
                                <td>xxx</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Hugh</td>
                                <td>hugh</td>
                                <td>hugh@gmail.com</td>
                                <td>xxx</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@vite(['resources/js/pages/datatable.init.js'])
@endsection
