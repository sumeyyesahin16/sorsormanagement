@extends('app.master')

@section('css')
@endsection


@section('page-header')

    <!-- PAGE-HEADER -->
    <div>
        <h1 class="page-title text-primary">Pending Verifies</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
        </ol>
    </div>
    <!-- PAGE-HEADER END -->
@endsection


@section('content')
    <h1>Pending requests</h1>

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
                                    <th>User name</th>
                                    <th>Show Details</th>

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
        var pageDataPath = '{{route('user_verify_dataservice')}}?data_type=1';

        $(document).ready(function (){
            myDataTable = getTable($("#grdDataTable"), pageDataPath + filterData, [
                {data: 'username'},
                {data:'detail'}
            ],[], null);
        });
    </script>
@endsection




