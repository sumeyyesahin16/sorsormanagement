@extends('app.master')

@section('css')
@endsection


@section('page-header')

    <!-- PAGE-HEADER -->
    <div>
        <h1 class="page-title">Complaint Detail</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
        </ol>
    </div>
    <!-- PAGE-HEADER END -->
@endsection


@section('content')
    <h2 class="text-primary px-2">Complained Person : {{$usr->username}}</h2>
    <!-- ROW-1 OPEN -->
    <div class="row" id="user-profile">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="border-0">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-51">
                                <div id="profile-log-switch">
                                    <div class="media-heading">
                                        <h5><strong>Personal Information</strong></h5>
                                    </div>
                                    <div class="table-responsive ">
                                        <table class="table row table-borderless">
                                            <tbody class="col-lg-12 col-xl-6 p-0">
                                            <tr>
                                                <td><strong>Full Name :</strong> {{$usr->name}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Complaint Type :</strong> {{$usr->complaint_type}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Object ID :</strong> </td>
                                            </tr>
                                            </tbody>
                                            <tbody class="col-lg-12 col-xl-6 p-0">
                                            <tr>
                                                <td><strong>Action Type :</strong></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Addible Area :</strong></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Addible Area :</strong></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row profie-img">
                                        <div class="col-md-12">
                                            <div class="media-heading">
                                                <h5><strong>Description</strong></h5>
                                            </div>
                                            <p>{{$usr->description}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                    <div class="ml-auto">
                        <button class="btn btn-outline-info">Something</button>
                        <button class="btn btn-outline-primary">Something</button>
                        <button class="btn btn-outline-danger">Something</button>
                    </div>
                    </div>
                </div>

            </div>
        </div><!-- COL-END -->

    </div>
    <!-- ROW-1 CLOSED -->

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




