@extends('app.master')

@section('css')
    <link href="{{ URL::asset('assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet">
@endsection


@section('page-header')

    <!-- PAGE-HEADER -->
    <div>
        <h1 class="page-title">Events</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
        </ol>
    </div>
    <!-- PAGE-HEADER END -->
@endsection


@section('content')

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
                                        <th>User</th>
                                        <th>Event Name</th>
                                        <th>Event Category</th>
                                        <th>About</th>
                                        <th>Event Date</th>
                                        <th>Duration Min</th>
                                        <th>Standard Ticket Price</th>
                                        <th>Vip Ticket Price</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
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
        var pageDataPath = '{{route('events_dataservice')}}?data_type=1';

        $(document).ready(function (){
            myDataTable = getTable($("#grdDataTable"), pageDataPath + filterData, [
                {data: 'user_id'},
                {data:'name'},
                {data: 'event_category'},
                {data:'about'},
                {data:'event_date'},
                {data:'duration_min'},
                {data:'standart_ticket'},
                {data:'vip_ticket'},
                {data:'edit'},
                {data:'delete'}
            ],[], null);
        });
    </script>



@endsection




