@extends('layouts.vertical', ['title' => 'List Product', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])
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
    @include('layouts.shared/page-title', ['sub_title' => 'Product', 'page_title' => 'List Product'])

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="header-title">All products</h4>
                </div>
                <div class="card-body">
                    <table id="scroll-vertical-datatable" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Sample</td>
                                <td>123</td>
                                <td>12</td>
                                <td>test</td>
                                <td>xxx</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Sample</td>
                                <td>123</td>
                                <td>12</td>
                                <td>test</td>
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
