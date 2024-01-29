@extends('layouts.vertical', ['title' => 'Client', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])
@section('css')
    @vite(['node_modules/datatables.net-bs5/css/dataTables.bootstrap5.min.css', 'node_modules/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css', 'node_modules/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css', 'node_modules/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css', 'node_modules/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css', 'node_modules/datatables.net-select-bs5/css/select.bootstrap5.min.css'])
@endsection
@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'CRM', 'page_title' => 'Client'])
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <p class="text-muted mb-0">Add and view customers/client list</p>
                </div>
                <div class="card-body">
                    @if (isset($editClient))
                        <form action="{{ route('client.update', $editClient->id) }}" method="POST"
                            class="border-bottom-1 border-primary">
                            @csrf
                            @method('PUT')
                            <div class="row g-2">
                                <div class="mb-3 col-md-6">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" value="{{ $editClient->name }}"
                                        class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" value="{{ $editClient->phone }}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="address">Address</label>
                                <input type="text" name="address" value="{{ $editClient->address }}"
                                    class="form-control">
                            </div>
                            <div class="row g-2">
                                <div class="mb-3 col-md-6">
                                    <label for="postcode">Postcode</label>
                                    <input type="text" name="postcode" value="{{ $editClient->name }}"
                                        class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="city">City</label>
                                    <input type="text" name="city" value="{{ $editClient->city }}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="mb-3 col-md-6">
                                    <label for="state">State</label>
                                    <select name="state" class="form-select">
                                        <option value="{{ $editClient->state }}">1</option>
                                        <option value="1">1</option>
                                        <option value="1">1</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" value="{{ $editClient->email }}" class="form-control">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    @else
                        <form action="{{ route('client.store') }}" method="POST" class="border-bottom-1 border-primary">
                            @csrf
                            <div class="row g-2">
                                <div class="mb-3 col-md-6">
                                    <label for="product-name">Name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="product-name">Phone</label>
                                    <input type="text" name="phone" class="form-control">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="product-name">Address</label>
                                <input type="text" name="address" class="form-control">
                            </div>
                            <div class="row g-2">
                                <div class="mb-3 col-md-6">
                                    <label for="product-name">Postcode</label>
                                    <input type="text" name="postcode" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="product-name">City</label>
                                    <input type="text" name="city" class="form-control">
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="mb-3 col-md-6">
                                    <label for="product-name">State</label>
                                    <select name="state" class="form-select">
                                        <option value="1">1</option>
                                        <option value="1">1</option>
                                        <option value="1">1</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="product-name">Email</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    @endif

                    <table id="client-datatable" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Postcode</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)
                                <tr>
                                    <td>{{ $client->id }}</td>
                                    <td>{{ $client->name }}</td>
                                    <td>{{ $client->postcode }}</td>
                                    <td>{{ $client->city }}</td>
                                    <td>{{ $client->state }}</td>
                                    <td>{{ $client->phone }}</td>
                                    <td>{{ $client->email }}</td>
                                    <td>
                                        <a href="{{ route('client.edit', $client->id) }}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal{{ $client->id }}">Delete</button>
                                    </td>
                                </tr>

                                <!-- Delete Modal -->
                                <div class="modal fade" id="deleteModal{{ $client->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="deleteModalLabel{{ $client->id }}"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header modal-colored-header bg-danger">
                                                <h4 class="modal-title" id="deleteModalLabel{{ $client->id }}">Confirm
                                                    Delete</h4>
                                                <button type="button" class="btn-close btn-close-white"
                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete this category?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <form action="{{ route('client.destroy', $client->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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
