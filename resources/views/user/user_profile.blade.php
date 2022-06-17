@extends('app.master')

@section('css')
@endsection

@section('header-title')
    User Profile
@endsection

@section('content')
    <!-- ROW-1 OPEN -->
    <div class="row" id="user-profile">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="wideget-user">
                        <div class="row">
                            <div class="col-lg-3 col-md-12 px-5">
                                <div class="wideget-user-desc ">
                                    <div class="wideget-user-img d-flex justify-content-center">
                                        @if($user->photo_path==NULL)
                                            <img class="" src="{{URL::asset('assets/images/users/10.jpg')}}" alt="img">
                                        @else
                                            <img class="w-75" src="https://sorsor.doersteam.net/{{$user->photo_path}}" alt="img">
                                        @endif
                                    </div>
                                    <div class="user-wrap ml-5">
                                        <h4>{{$user->username}}</h4>
                                        <h6 class="text-muted mb-3">Member Since: {{$user->created_at->format('F,Y')}}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-12">
                                <div class="row">
                                    <div class="col d-flex justify-content-end">
                                        <a href="/user/profile/{{$user->id}}/edit" class="btn btn-primary">Edit User</a>
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col">
                                        <div class="text-primary h3 d-flex justify-content-center">Following</div>
                                        <div class="d-flex justify-content-center h4">{{$user->count_following}}</div>
                                    </div>
                                    <div class="col">
                                        <div class="text-primary h3 d-flex justify-content-center">Followers</div>
                                        <div class="d-flex justify-content-center h4">{{$user->count_followers}}</div>
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col">
                                        <div class="text-primary h3 d-flex justify-content-center">Pro?</div>
                                        <div class="d-flex justify-content-center h4">
                                            @if($user->is_pro)
                                                <b>Yes</b> /&nbsp;{{$user->pro_date}}
                                            @else
                                          No
                                            @endif</div>
                                    </div>
                                    <div class="col">
                                        <div class="text-primary h3 d-flex justify-content-center">Verified?</div>
                                        <div class="d-flex justify-content-center h4">
                                            @if($user->verify_status==2)
                                                Yes
                                            @elseif($user->verify_status==3)
                                                No&nbsp; <u>(Rejected)</u>
                                            @else
                                                No
                                            @endif</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="text-primary h3 d-flex justify-content-center">Amount</div>
                                        <div class="d-flex justify-content-center h4">{{$usrAmount}}</div>
                                    </div>
                                    <div class="col">
                                        <div class="text-primary h3 d-flex justify-content-center">Coin</div>
                                        <div class="d-flex justify-content-center h4">{{$usrCoin}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border-top">
                    <div class="wideget-user-tab">
                        <div class="tab-menu-heading">
                            <div class="tabs-menu1">
                                <ul class="nav">
                                    <li class=""><a href="#tab-51" class="active show" data-toggle="tab">Profile</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


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
                                                <td><strong>Full Name :</strong> {{$user->name}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>User Name :</strong> {{$user->username}}</td>
                                            </tr>

                                            <tr>
                                                <td><strong>Gender :</strong>
                                                  @if($user->gender==1)
                                                        Undefined
                                                    @elseif($user->gender==2)
                                                        Female
                                                    @else
                                                        Male
                                                    @endif
                                                </td>
                                            </tr>


                                            </tbody>
                                            <tbody class="col-lg-12 col-xl-6 p-0">
                                            <tr>
                                                <td><strong>Email :</strong> {{$user->email}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Phone :</strong> {{$user->phone}} </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row profie-img">
                                        <div class="col-md-12">
                                            <div class="media-heading">
                                                <h5><strong>Biography</strong></h5>
                                            </div>
                                            <p>{{$user->bio}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div><!-- COL-END -->








        <!--Col Starts-->
        <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="border-0">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="tab-51">
                            <div id="profile-log-switch">
                                <div class="media-heading">
                                    <h5><strong>Payment Information</strong></h5>
                                </div>
                                <div class="table-responsive ">
                                    <table class="table row table-borderless">
                                        <tbody class="col-lg-12 col-xl-6 p-0">
                                        <tr>
                                            <td><strong>Amount :</strong> {{$usrAmount}}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Coin :</strong> {{$usrCoin}}</td>
                                        </tr>
                                        </tbody>
                                        <tbody class="col-lg-12 col-xl-6 p-0">
                                        <tr>
                                            <td><strong>---</strong>---</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--Col Ends-->


    </div>
    <!-- ROW-1 CLOSED -->
    </div>
    </div>
    <!-- CONTAINER CLOSED -->
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


