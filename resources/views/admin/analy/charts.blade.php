@extends('layouts.admin')

@section('content')

    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Line chart</h4>
                            <canvas id="lineChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Bar chart</h4>
                            <canvas id="barChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Area chart</h4>
                            <canvas id="areaChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Doughnut chart</h4>
                            <canvas id="doughnutChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 grid-margin grid-margin-lg-0 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Pie chart</h4>
                            <canvas id="pieChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin grid-margin-lg-0 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Scatter chart</h4>
                            <canvas id="scatterChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- plugins:js -->
    <script src="{{asset('admin/vendors/base/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
        <!-- Plugin js for this page-->
    <script src="{{asset('admin/vendors/chart.js/Chart.min.js')}}"></script>
        <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('admin/js/off-canvas.js')}}"></script>
    <script src="{{ asset('admin/js/hoverable-collapse.js')}}"></script>
    <script src="{{ asset('admin/js/template.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('admin/js/chart.js')}}"></script>
    <!-- End custom js for this page-->

@endsection
