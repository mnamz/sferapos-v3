@extends('layouts.vertical', ['title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
@include('layouts.shared/page-title', ['sub_title' => 'Menu', 'page_title' => 'Dashboard'])

    <div class="row">
        <div class="col-xxl-3 col-sm-6">
            <div class="card widget-flat text-bg-pink">
                <div class="card-body">
                    <div class="float-end">
                        <i class="ri-eye-line widget-icon"></i>
                    </div>
                    <h6 class="text-uppercase mt-0" title="Products">Total Products</h6>
                    <h2 class="my-2">8,652</h2>
                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-xxl-3 col-sm-6">
            <div class="card widget-flat text-bg-purple">
                <div class="card-body">
                    <div class="float-end">
                        <i class="ri-wallet-2-line widget-icon"></i>
                    </div>
                    <h6 class="text-uppercase mt-0" title="Revenue">Revenue</h6>
                    <h2 class="my-2">RM 9,254.62</h2>
                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-xxl-3 col-sm-6">
            <div class="card widget-flat text-bg-info">
                <div class="card-body">
                    <div class="float-end">
                        <i class="ri-shopping-basket-line widget-icon"></i>
                    </div>
                    <h6 class="text-uppercase mt-0" title="Orders">Orders</h6>
                    <h2 class="my-2">753</h2>
                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-xxl-3 col-sm-6">
            <div class="card widget-flat text-bg-primary">
                <div class="card-body">
                    <div class="float-end">
                        <i class="ri-group-2-line widget-icon"></i>
                    </div>
                    <h6 class="text-uppercase mt-0" title="Category">Total Category</h6>
                    <h2 class="my-2">63</h2>
                </div>
            </div>
        </div> <!-- end col-->
    </div>

    
    <div class="row">
        <div class="col-xl-12">
            <!-- Todo-->
            <div class="card">
                <div class="card-body p-0">
                    <div class="p-3">
                        <div class="card-widgets">
                            <a href="javascript:;" data-bs-toggle="reload"><i class="ri-refresh-line"></i></a>
                            <a data-bs-toggle="collapse" href="#yearly-sales-collapse" role="button"
                                aria-expanded="false" aria-controls="yearly-sales-collapse"><i
                                    class="ri-subtract-line"></i></a>
                            <a href="#" data-bs-toggle="remove"><i class="ri-close-line"></i></a>
                        </div>
                        <h5 class="header-title mb-0">Recent Orders</h5>
                    </div>

                    <div id="yearly-sales-collapse" class="collapse show">

                        <div class="table-responsive">
                            <table class="table table-nowrap table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Customer Name</th>
                                        <th>Order Date</th>
                                        <th>Total</th>
                                        <th>Payment Method</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Velonic Admin v1</td>
                                        <td>01/01/2015</td>
                                        <td><span class="badge bg-info-subtle text-info">RM 100</span></td>
                                        <td><span class="badge bg-info-subtle text-warning">Card</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Velonic Frontend v1</td>
                                        <td>01/01/2015</td>
                                        <td><span class="badge bg-info-subtle text-info">RM 100</span></td>
                                        <td><span class="badge bg-info-subtle text-success">Cash</span></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-widgets">
                        <a href="javascript:;" data-bs-toggle="reload"><i class="ri-refresh-line"></i></a>
                        <a data-bs-toggle="collapse" href="#weeklysales-collapse" role="button" aria-expanded="false"
                            aria-controls="weeklysales-collapse"><i class="ri-subtract-line"></i></a>
                        <a href="#" data-bs-toggle="remove"><i class="ri-close-line"></i></a>
                    </div>
                    <h5 class="header-title mb-0">Weekly Sales Report</h5>

                    <div id="weeklysales-collapse" class="collapse pt-3 show">
                        <div dir="ltr">
                            <div id="revenue-chart" class="apex-charts" data-colors="#3bc0c3,#1a2942,#d1d7d973"></div>
                        </div>

                        <div class="row text-center">
                            <div class="col">
                                <p class="text-muted mt-3">Current Week</p>
                                <h3 class=" mb-0">
                                    <span>$506.54</span>
                                </h3>
                            </div>
                            <div class="col">
                                <p class="text-muted mt-3">Previous Week</p>
                                <h3 class=" mb-0">
                                    <span>$305.25 </span>
                                </h3>
                            </div>
                            <div class="col">
                                <p class="text-muted mt-3">Conversation</p>
                                <h3 class=" mb-0">
                                    <span>3.27%</span>
                                </h3>
                            </div>
                            <div class="col">
                                <p class="text-muted mt-3">Customers</p>
                                <h3 class=" mb-0">
                                    <span>3k</span>
                                </h3>
                            </div>
                        </div>
                    </div>

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

    </div>
    <!-- end row -->

@endsection

@section('script')
    @vite(['resources/js/pages/dashboard.js'])
@endsection
