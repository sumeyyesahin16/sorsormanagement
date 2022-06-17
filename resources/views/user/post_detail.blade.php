@extends('app.master')
@section('css')
    <link href="{{ URL::asset('assets/plugins/gallery/gallery.css')}}" rel="stylesheet">
@endsection
@section('content')

    <!-- @if($user_post_detail->share_content_type==1)
            <img src="https://sorsor.doersteam.net/{{$user_post_detail->text_path}}">
        @elseif($user_post_detail->share_content_type==2)
            <img src="https://sorsor.doersteam.net/{{$user_post_detail->image_path}}">
        @elseif($user_post_detail->share_content_type==3)
            <img src="https://sorsor.doersteam.net/{{$user_post_detail->video_path}}"> -->


        @endif

        <!-- GALLERY DEMO OPEN -->
        <div class="demo-gallery card">
            <div class="card-header">
                <div class="card-title">Light Gallery</div>
            </div>
            <div class="card-body">

                <ul id="lightgallery" class="list-unstyled row d-flex justify-content-center" >
                    <a href="">
                        <img class="img-responsive mb-0" src="https://sorsor.doersteam.net/{{$user_post_detail->image_path}}" alt="Thumb-2">
                    </a>
                    </li>
                </ul>

                <div class="row mb-5">
                    <div class="col">
                        <div class="text-primary h2 d-flex justify-content-center">Share Type</div>
                        <div class="d-flex justify-content-center h4">
                            @if($user_post_detail->share_content_type==1)
                                Text
                            @elseif($user_post_detail->share_content_type==2)
                                Photo
                            @elseif($user_post_detail->share_content_type==3)

                                Video
                            @endif
                        </div>
                    </div>
                    <div class="col">
                        <div class="text-primary h2 d-flex justify-content-center">Share Count</div>
                        <div class="d-flex justify-content-center h4">{{$user_post_detail->count_shares}}</div>
                    </div>
                </div>
                <div class="row mb-5 ">
                    <div class="col">
                        <div class="text-primary h2 d-flex justify-content-center">Like Count</div>
                        <div class="d-flex justify-content-center h4">
                            {{$user_post_detail->count_likes}}
                        </div>
                    </div>
                    <div class="col">
                        <div class="text-primary h2 d-flex justify-content-center">Comment Count</div>
                        <div class="d-flex justify-content-center h4">
                            {{$user_post_detail->count_comments}}

                        </div>
                    </div>
                    <div class="col">
                        <div class="text-primary h2 d-flex justify-content-center">Post Text</div>
                        <div class="d-flex justify-content-center h4">
                            {{$user_post_detail->post_text}}

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- GALLERY DEMO CLOSED -->

@endsection