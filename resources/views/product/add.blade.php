@extends('layouts.vertical', ['title' => 'Add Product', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])
@section('css')
@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Product', 'page_title' => 'Add Product'])
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <p class="text-muted mb-0">Add new products to the system</p>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label for="product-name">Product Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="product-name">Category</label>
                                <select name="category" class="form-select">
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="product-name">Product Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label for="product-name">Purchase Price</label>
                                <input type="text" name="purchase_price" class="form-control">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="product-name">Sale Price</label>
                                <input type="text" name="sale_price" class="form-control">
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="mb-3 col-md-6">
                                <label for="product-name">Stock</label>
                                <input type="text" name="stock" class="form-control">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" name="description" id="description" rows="5"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
