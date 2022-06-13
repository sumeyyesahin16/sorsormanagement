@extends('app.master')

@section('css')
    <link href="{{ URL::asset('assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet">
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

        <div class="card px-0">
        <div class="form-group px-6">
            <label class="form-label">Searching Bar</label>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for a name or nick name">
                <span class="input-group-append">
				<button class="btn btn-primary mx-3" type="button"> Search </button>
				</span>
            </div>
        </div>
        </div>

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


    <script src="{{ URL::asset('assets/plugins/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/datatable.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>


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
                {data: 'count_fans'},
                {data: 'detail'}

            ],[], null);
        });
    </script>

@endsection




