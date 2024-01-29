@extends('layouts.vertical', ['title' => 'Category', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Main', 'page_title' => 'Category'])
    <div class="row">
        <div class="card">
            <div class="card-header">
                <p class="text-muted mb-0">
                    Create and manage categories for products
                </p>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-lg-6">
                        @if(isset($editCategory))
                            <!-- Edit Form -->
                            <form action="{{ route('category.update', $editCategory->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="category-name">Name</label>
                                    <input type="text" name="name" class="form-control" value="{{ $editCategory->name }}">
                                </div>
                                <button type="submit" class="btn btn-warning">Update</button>
                            </form>
                        @else
                            <!-- Create Form -->
                            <form action="{{ route('category.store') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="category-name">Name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        @endif
                    </div>
                    <div class="col-lg-6">
                        <div class="table-responsive-sm">
                            <table class="table table-centered mb-0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>
                                                <a href="{{ route('category.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $category->id }}">Delete</button>
                                            </td>
                                        </tr>

                                        <!-- Delete Modal -->
                                        <div class="modal fade" id="deleteModal{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{ $category->id }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header modal-colored-header bg-danger">
                                                        <h4 class="modal-title" id="deleteModalLabel{{ $category->id }}">Confirm Delete</h4>
                                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Are you sure you want to delete this category?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                                        <form action="{{ route('category.destroy', $category->id) }}" method="post">
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
        </div>
    </div>
@endsection
