@extends('app.master')

@section('css')
@endsection


@section('header-title')
    Edit User
@endsection

@section('content')
    <!-- ROW-1 OPEN -->
    <div class="row">
        <div class="col-lg-4 col-xl-4 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <div class="userprofile">
                            <div class="userpic  brround"> <img src="https://sorsor.doersteam.net/{{$user->photo_path}}" alt="Profile Photo" class="userpicimg"> </div>
                            <h3 class="username text-dark mb-2"></h3>
                            <p class="mb-1 text-muted">{{$user->username}} / {{ $user->name }}</p>
                            <div class="socials text-center mt-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Edit Password</div>
                </div>
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <img alt="User Avatar" class="rounded-circle avatar-lg mr-2" src="{{URL::asset('assets/images/users/10.jpg')}}">
                        <div class="ml-auto mt-xl-2 mt-lg-0 ml-lg-2">
                            <a href="#" class="btn btn-danger btn-sm mt-1 mb-1"><i class="fe fe-camera-off mr-1"></i>Delete profile</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Change Password</label>
                        <input type="password" class="form-control" value="password">
                    </div>
                    <div class="form-group">
                        <label class="form-label">New Password</label>
                        <input type="password" class="form-control" value="password">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" value="password">
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="#" class="btn btn-primary">Updated</a>
                </div>
            </div>
            <div class="card panel-theme">
                <div class="card-header">
                    <div class="float-left">
                        <h3 class="card-title">Contact</h3>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="card-body no-padding">
                    <ul class="list-group no-margin">
                        <li class="list-group-item"><i class="fa fa-envelope mr-4"></i>{{$user->email}}</li>
                        <li class="list-group-item"><i class="fa fa-phone mr-4"></i>{{$user->phone}}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-xl-8 col-md-12 col-sm-12">
            <form name="form" action="{{route('ApplyChanges')}}" method="post">
                @csrf
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Profile</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label for="exampleInputname">Name Surname</label>
                                <input type="text" class="form-control" id="exampleInputname" value="{{$user->name}}" name="name">
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">User name</label>
                        <input placeholder="{{$user->username}}"  disabled type="text" class="form-control" id="exampleInputEmail1" name="username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" value="{{$user->email}}" name="email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputnumber">Contact Number</label>
                        <input type="number" class="form-control" id="exampleInputnumber" value="{{$user->phone}}" name="phone">
                    </div>
                    <div class="form-group">
                        <label class="form-label">About Me</label>
                        <textarea class="form-control" rows="6" placeholder="{{$user->bio}}" name="bio"></textarea>
                    </div>
                    <!--
                    <div class="form-group">
                        <label class="form-label">Website</label>
                        <input class="form-control" value="http://splink.com">
                    </div>
                    -->
                    <div class="form-group">

                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label">Verified Status</label>
                                <select class="form-control" name="verify_status">
                                    <option value="{{NULL}}">Not Verified</option>
                                    <option value="1" @if($user->verify_status==1) selected @endif>Pending</option>
                                    <option value="2" @if($user->verify_status==2) selected @endif>Approved</option>
                                    <option value="3" @if($user->verify_status==3) selected @endif>Rejected</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Pro Status</label>
                                <select class="form-control" name="is_pro" >
                                    <option value="{{NULL}}" @if($user->is_pro==NULL) selected @endif>Not PRO</option>
                                    <option value="1" @if($user->is_pro==1) selected @endif>PRO</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">NULL</label>
                                <select class="form-control" disabled>

                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <button class="btn btn-success mt-1">Save</button>
                   <!-- <a href="#" class="btn btn-danger mt-1">Cancel</a> -->
                </div>
            </div>
            </form>

            </div>
        </div>

    <!-- ROW-1 CLOSED -->

    <!-- ROW-2 OPEN -->
    <div class="row mx-2">
        <div class="col-12">
            <div class="card">
                <div class="card-header ">
                    <h3 class="card-title ">Projects</h3>
                    <div class="card-options">
                  <!--      <button id="add__new__list" type="button" class="btn btn-md btn-primary " data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-plus"></i> Add a new Project</button>
                     -->
                    </div>
                </div>
                <div class="table-responsive" >
                    <table id="grdDataTable" class="table table-hover card-table table-vcenter table-outline text-nowrap " >
                        <thead>
                        <tr>
                            <th scope="col">Share ID</th>
                            <th scope="col">Share Type</th>
                            <th scope="col">Post Text</th>
                            <th scope="col">Share Counts</th>
                            <th scope="col">Like Count</th>
                            <th scope="col">Comment Count </th>
                            <th scope="col">Detail </th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ROW-2 CLOSED -->


    <!--CONTAINER CLOSED -->

@endsection



@section('js')


    <script type="text/javascript">
        var myDataTable=null;
        var filterData = '';
        var pageDataPath = '{{route('user_share_dataservice')}}?data_type=1';

        $(document).ready(function (){
            myDataTable = getTable($("#grdDataTable"), pageDataPath + filterData, [
                {data: 'id'},
                {data: 'share_content_type'},
                {data: 'post_text',},
                {data: 'count_shares'},
                {data: 'count_likes'},
                {data: 'count_comments'},
                {data: 'detail'},

            ],[], null);
        });
    </script>


@endsection