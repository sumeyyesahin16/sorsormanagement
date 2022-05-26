@extends('app.master')

@section('css')
@endsection


@section('page-header')

    <!-- PAGE-HEADER -->
    <div>
        <h1 class="page-title">Users</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Users</li>
        </ol>
    </div>
    <!-- PAGE-HEADER END -->
@endsection


@section('content')
    <!-- ROW-5 -->
    <div class="row">
        <div class="col-12 col-sm-12">
            <div class="card ">

                <div class="card-body">
                    <div class="grid-margin">
                        <div class="">

                            <div class="table-responsive">
                                <table id="grdDataTable" class="table card-table border table-vcenter text-nowrap align-items-center">
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
        var pageDataPath = '{{route('user_dataservice')}}?data_type=1';

        $(document).ready(function (){
            myDataTable = getTable($("#grdDataTable"), pageDataPath + filterData, [
                {data: 'id'},
                {data: 'username'},
                {data: 'name'},
                {data: 'email'},
                {data: 'phone'},
                {data: 'count_following'},
                {data: 'count_followers'},
                {data: 'count_likes'},
                {data: 'count_fans'}

            ],[], null);
        });

    </script>



@endsection




