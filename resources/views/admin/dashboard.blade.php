@extends('layouts.admin')


@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                    <div class="me-md-3 me-xl-5">

                        <h2>   لوحة التحكم</h2>
                        {{-- <p class="mb-md-0">Your analytics dashboard template.</p> --}}
                    </div>
                    <div class="d-flex">
                        <i class="mdi mdi-home text-muted hover-cursor"></i>
                        <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                        <p class="text-primary mb-0 hover-cursor">Analytics</p>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-end flex-wrap">

                    <div class="card_header me-3 mt-2 mt-xl-0">
                        <h4>
                            <a href="{{ url('admin/analy/report/'. Auth::user()->id) }}"
                                class="btn btn-outline-warning btn-sm float-end ">View Report</a>
                        </h4>
                    </div>

                    <div class="card_header">
                        <h4>
                            <a href="{{ url('admin/analy/report/'. Auth::user()->id .'/generate') }}"
                                class="btn btn-primary btn-sm float-end text-white">Generate Report</a>
                        </h4>
                    </div>
                </div>
            </div>

            <div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title">Recent Purchases</p>
                    <div class="table-responsive">
                        <table id="recent-purchases-listing" class="table">
                            <thead>
                                <tr>
                                    <th>Products</th>
                                    <th>Categories</th>
                                    <th>Trends</th>
                                    <th>Price</th>
                                    <th>Date</th>
                                    <th>amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>F</td>
                                    <td>F</td>
                                    <td>30</td>
                                    <td>$790</td>
                                    <td>04 Feb 2024</td>
                                    <td> YER 220,000</td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->

    <!-- partial -->
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{asset('admin/vendors/base/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{asset('admin/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{ asset('admin/vendors/datatables.net/jquery.dataTables.js')}}"></script>
    <script src="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('admin/js/off-canvas.js')}}"></script>
    <script src="{{ asset('admin/js/hoverable-collapse.js')}}"></script>
    <script src="{{ asset('admin/js/template.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('admin/js/dashboard.js')}}"></script>
    <script src="{{asset('admin/js/data-table.js')}}"></script>
    <script src="{{asset('admin/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('admin/js/dataTables.bootstrap4.js')}}"></script>
    <!-- End custom js for this page-->

    <script src="{{asset('admin/js/jquery.cookie.js')}}" type="text/javascript"></script>
@endsection
