@extends('app.master')

@section('css')
@endsection


@section('header-title')
    Photos
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
                            <h3 class="text-primary">Total Photos Statistics</h3>
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
                            <h6 class="mt-4 mb-1">Photos' Count</h6>
                            <h2 class="mb-2 number-font">{{$typeCount2}}</h2>
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
                            <h6 class="mt-4 mb-1">Photos' Comments' Count</h6>
                            <h2 class="mb-2 number-font">
                              {{-- @foreach($userShares as $us)
                                    {{$us->count_shares}}
                                @endforeach--}} aaaaa
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
                            <h6 class="mt-4 mb-1">Photos' Comments' Count</h6>
                            <h2 class="mb-2 number-font">
                                aaaaa
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
                            <h6 class="mt-4 mb-1">Photos' Wiews' Count</h6>
                            <h2 class="mb-2 number-font">
                                aaaaa
                            </h2>
                            <p class="text-muted"></p>
                        </div>
                    </div>
                </div><!--Col Ends-->


                <!-- Col Header -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body text-center">
                                <h3 class="text-primary">Top Liked List</h3>
                            </div>
                        </div>
                    </div><!-- Col Header Ends -->

                <div class="col-12 col-sm-12">
                    <div class="card ">

                        <div class="card-body">
                            <div class="grid-margin">
                                <div class="">
                                    <div class="table-responsive">
                                        <table id="grdDataTable" class="table card-table table-vcenter align-items-center">
                                            <thead class="">
                                            <tr>
                                                <th>Queue number</th>
                                                <th>Photo</th>
                                                <th>User name</th>
                                                <th>Name</th>
                                                <th>E-mail</th>
                                                <th>Phone</th>
                                                <th>Like Count</th>
                                                <th>Comment Count</th>
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
    <script src="{{ URL::asset('assets/js/index1.js') }}"></script>
@endsection




