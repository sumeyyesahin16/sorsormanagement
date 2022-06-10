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
    <!-- ROW-1 OPEN -->
    <div class="row">
        <div class="col-lg-4 col-xl-4 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <div class="userprofile">
                            <div class="userpic  brround"> <img src="{{URL::asset('assets/images/users/10.jpg')}}" alt="" class="userpicimg"> </div>
                            <h3 class="username text-dark mb-2"></h3>
                            <p class="mb-1 text-muted">Administrator, USA</p>

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
                        <li class="list-group-item"><i class="fa fa-envelope mr-4"></i> support@demo.com</li>
                        <li class="list-group-item"><i class="fa fa-globe mr-4"></i> www.abcd.com</li>
                        <li class="list-group-item"><i class="fa fa-phone mr-4"></i> +125 5826 3658 </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-xl-8 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Profile</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label for="exampleInputname">Name Surname</label>
                                <input type="text" class="form-control" id="exampleInputname" placeholder="{{$user->name}}">
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="{{$user->email}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputnumber">Contact Number</label>
                        <input type="number" class="form-control" id="exampleInputnumber" placeholder="{{$user->phone}}">
                    </div>
                    <div class="form-group">
                        <label class="form-label">About Me</label>
                        <textarea class="form-control" rows="6">{{$user->bio}}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Website</label>
                        <input class="form-control" placeholder="http://splink.com">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Verified Status</label>
                        <div class="row">
                            <div class="col-md-4">
                                <select class="form-control">
                                    <option value="0">Not Verified</option>
                                    <option value="1" @if($user->verify_status==1) selected @endif>Requested</option>
                                    <option value="2" @if($user->verify_status==2) selected @endif>Approved</option>
                                    <option value="3" @if($user->verify_status==3) selected @endif>Rejected</option>

                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-control" disabled>

                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-control" disabled>

                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-success mt-1">Save</a>
                    <a href="#" class="btn btn-danger mt-1">Cancel</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ROW-1 CLOSED -->

    <!-- ROW-2 OPEN -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header ">
                    <h3 class="card-title ">Projects</h3>
                    <div class="card-options">
                        <button id="add__new__list" type="button" class="btn btn-md btn-primary " data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-plus"></i> Add a new Project</button>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover card-table table-striped table-vcenter table-outline text-nowrap">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Project Name</th>
                            <th scope="col">Backend</th>
                            <th scope="col">Deadline</th>
                            <th scope="col">Team Members</th>
                            <th scope="col">Edit Project Details </th>
                            <th scope="col">list info</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>At vero eos et accusamus et iusto odio</td>
                            <td>PHP</td>
                            <td>15/11/2018</td>
                            <td>15 Members</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="#"><i class="fa fa-edit"></i> Edit</a>
                                <a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i> Delete</a>
                            </td>
                            <td><a class="btn btn-sm btn-secondary" href="#"><i class="fa fa-info-circle"></i> Details</a> </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>voluptatum deleniti atque corrupti quos</td>
                            <td>Angular js</td>
                            <td>25/11/2018</td>
                            <td>12 Members</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="#"><i class="fa fa-edit"></i> Edit</a>
                                <a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i> Delete</a>
                            </td>
                            <td><a class="btn btn-sm btn-secondary" href="#"><i class="fa fa-info-circle"></i> Details</a> </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>dignissimos ducimus qui blanditiis praesentium </td>
                            <td>Java</td>
                            <td>5/12/2018</td>
                            <td>20 Members</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="#"><i class="fa fa-edit"></i> Edit</a>
                                <a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i> Delete</a>
                            </td>
                            <td><a class="btn btn-sm btn-secondary" href="#"><i class="fa fa-info-circle"></i> Details</a> </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>deleniti atque corrupti quos dolores  </td>
                            <td>Phython</td>
                            <td>14/12/2018</td>
                            <td>10 Members</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="#"><i class="fa fa-edit"></i> Edit</a>
                                <a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i> Delete</a>
                            </td>
                            <td><a class="btn btn-sm btn-secondary" href="#"><i class="fa fa-info-circle"></i> Details</a> </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>et quas molestias excepturi sint occaecati</td>
                            <td>Phython</td>
                            <td>4/12/2018</td>
                            <td>17 Members</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="#"><i class="fa fa-edit"></i> Edit</a>
                                <a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i> Delete</a>
                            </td>
                            <td><a class="btn btn-sm btn-secondary" href="#"><i class="fa fa-info-circle"></i> Details</a> </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ROW-2 CLOSED -->

    </div>
    </div>
    <!--CONTAINER CLOSED -->
    </div>
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