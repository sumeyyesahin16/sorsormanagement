@extends('app.master')

@section('css')
@endsection


@section('header-title')
    Posts
@endsection



@section('content')


    <!-- ROW-1 -->
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
            <!-- Col Header -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <h3 class="text-primary">Total Posts Statistics</h3>
                        </div>
                    </div>
                </div><!-- Col Header Ends -->

                <!--Col Start -->
                <div class="col-lg-6 col-md-12 col-sm-12 col-xl-3">
                    <div class="card">
                        <div class="card-body text-center statistics-info">
                            <div class="counter-icon bg-primary mb-0 box-primary-shadow">
                                <i class="fe fe-trending-up text-white"></i>
                            </div>
                            <h6 class="mt-4 mb-1">Posts' Count</h6>
                            <h2 class="mb-2 number-font">{{$post_share_count}}</h2>
                            <p class="text-muted"></p>
                        </div>
                    </div>
                </div><!--Col Ends-->

                <!--Col Start -->
                <div class="col-lg-6 col-md-12 col-sm-12 col-xl-3">
                    <div class="card">
                        <div class="card-body text-center statistics-info">
                            <div class="counter-icon bg-primary mb-0 box-primary-shadow">
                                <i class="fe fe-trending-up text-white"></i>
                            </div>
                            <h6 class="mt-4 mb-1">Posts' Comments' Count</h6>
                            <h2 class="mb-2 number-font">
                                {{$post_comment}}
                            </h2>
                            <p class="text-muted"></p>
                        </div>
                    </div>
                </div><!--Col Ends-->

                <!--Col Start -->
                <div class="col-lg-6 col-md-12 col-sm-12 col-xl-3">
                    <div class="card">
                        <div class="card-body text-center statistics-info">
                            <div class="counter-icon bg-primary mb-0 box-primary-shadow">
                                <i class="fe fe-trending-up text-white"></i>
                            </div>
                            <h6 class="mt-4 mb-1">Posts' Likes' Count</h6>
                            <h2 class="mb-2 number-font">
                                {{$post_like}}
                            </h2>
                            <p class="text-muted"></p>
                        </div>
                    </div>
                </div><!--Col Ends-->

                <!--Col Start -->
                <div class="col-lg-6 col-md-12 col-sm-12 col-xl-3">
                    <div class="card">
                        <div class="card-body text-center statistics-info">
                            <div class="counter-icon bg-primary mb-0 box-primary-shadow">
                                <i class="fe fe-trending-up text-white"></i>
                            </div>
                            <h6 class="mt-4 mb-1">Posts' Views' Count</h6>
                            <h2 class="mb-2 number-font">
                                AAAA
                            </h2>
                            <p class="text-muted"></p>
                        </div>
                    </div>
                </div><!--Col Ends-->


                <div class="col-12 col-sm-12">
                    <div class="card ">
                        <div class="card-header">
                            <h3 class="card-title mb-0">Users List</h3>
                        </div>
                        <div class="card-body">
                            <div class="grid-margin">
                                <div class="">
                                    <div class="table-responsive">
                                        <table id="grdDataTable" class="table card-table table-vcenter align-items-center">
                                            <thead class="">
                                            <tr>
                                                <th>Queue number</th>
                                                <th>User name</th>
                                                <th>Name</th>
                                                <th>E-mail</th>
                                                <th>Phone</th>
                                                <th>Following Count</th>
                                                <th>Followers Count</th>
                                                <th>Like Count</th>
                                                <th>Fan Count</th>
                                                <th>Detail</th>

                                            </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- COL END -->
            </div>
        </div>
        <!-- ROW-1 END -->

        @endsection



        @section('js')
            <script src="{{ URL::asset('assets/plugins/chart/Chart.bundle.js') }}"></script>
            <script src="{{ URL::asset('assets/plugins/chart/utils.js') }}"></script>
            <script src="{{ URL::asset('assets/plugins/echarts/echarts.js') }}"></script>
            <script src="{{ URL::asset('assets/plugins/apexcharts/apexcharts.js') }}"></script>
            <script src="{{ URL::asset('assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
            <script src="{{ URL::asset('assets/plugins/peitychart/peitychart.init.js') }}"></script>

@endsection
