@extends('app.master')

@section('css')
@endsection


@section('page-header')

    <!-- PAGE-HEADER -->
    <div>
        <h1 class="page-title">User Commission</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
        </ol>
    </div>
    <!-- PAGE-HEADER END -->
@endsection


@section('content')
    <h1>Reported Users</h1>

    <!-- ROW-5 -->
    <div class="row">
        <div class="col-12 col-sm-12">
            <div class="card ">
                <div class="card-header">
                    <h3 class="card-title mb-0">Users List</h3>
                </div>
                <div class="card-body">
                    <div class="grid-margin">
                        <div class="">
                            <div class="table-responsive">
                                <table id="grdDataTable" class="table card-table table-vcenter align-items-center text-center">
                                    <thead class="text-center">
                                    <tr class="">
                                        <th>Complaint Type</th>
                                        <th>User</th>
                                        <th>Action Type</th>
                                        <th>Description</th>
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
    </div><!-- ROW-5 END -->

@endsection

@section('js')
    <script src="{{ URL::asset('assets/plugins/chart/Chart.bundle.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/chart/utils.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/echarts/echarts.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/peitychart/peitychart.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/index1.js') }}"></script>

    <script type="text/javascript">
        var myDataTable=null;
        var filterData = '';
        var pageDataPath = '{{route('compDataService')}}?data_type=1';

        $(document).ready(function (){
            myDataTable = getTable($("#grdDataTable"), pageDataPath + filterData, [
                {data: 'complaint_type'},
                {data: 'username'},
                {data: 'action_type'},
                {data: 'description'},
                {data: 'detail'}

            ],[], null);
        });
    </script>

@endsection




