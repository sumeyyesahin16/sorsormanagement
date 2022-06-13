@extends('app.master')
@section('css')
    <link href="{{ URL::asset('assets/plugins/gallery/gallery.css')}}" rel="stylesheet">
@endsection

@section('content')
    <form>
        @csrf
    </form>

    <div class="card">
        <div class="card-header">
            <div class="card-title h2 text-primary">User : {{$usr->username}}</div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <ul id="lightgallery" class="list-unstyled row ml-3">
                        <li class="col-sm-12 mb-5 border-bottom-0" data-responsive="https://sorsor.doersteam.net/{{$usrverify->photo_path}}" data-src="https://sorsor.doersteam.net/{{$usrverify->photo_path}}" data-sub-html="<h4>{{$usr->username}}</h4>">
                            <a href="">
                                <img class="img-responsive" src="https://sorsor.doersteam.net/{{$usrverify->photo_path}}" alt="Thumb-1">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-7 d-flex justify-content-between flex-column">
                    <div>
                        <p style="font-size: 15px"><span class="font-weight-bolder">User Name : </span><span class="text-primary">{{$usr->username}}</span></p>
                        <p style="font-size: 15px"><span class="font-weight-bolder">Name Surname : </span><span class="text-primary">{{$usr->name}}</span></p>
                        <p style="font-size: 15px"><span class="font-weight-bolder">Phone : </span><span class="text-primary">{{$usr->phone}}</span></p>

                    </div>
                    <div class="d-flex justify-content-between">
                        <div class=""> User wants to be verified user. Do you want to confirm?</div>
                        <div>
                            <button class="btn btn-outline-primary ml-2 mb-4" onclick="ChangeStatus('{{$usr->id}}',2);">Confirm</button>
                            <button class="btn btn-outline-danger ml-2 mb-4" onclick="ChangeStatus('{{$usr->id}}',3);">Decline</button>
                        </div>
                    </div>
              </div>

            </div>
        </div>
    </div>
@endsection

@section('js')


    <script type="text/javascript">

        function ChangeStatus(_id,_stt){

          //  console.log("TOKEN-ELEMENT =>" + document.getElementsByName('csrf-token')[0]);
            let token = document.getElementsByName('csrf-token')[0].content;
          //  console.log("TOKEN => "+token);
            $.post("{{ route('user_verify') }}", {id: _id,stt:_stt, _token: token }, function (data) {

                if(data.success){
                    console.log('true');
                }
                else{
                    console.log('FALSE');
                }
                console.log(data);
            });
        }

    </script>
    <script src="{{ URL::asset('assets/plugins/gallery/picturefill.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/gallery/lightgallery.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/gallery/lightgallery-1.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/gallery/lg-pager.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/gallery/lg-autoplay.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/gallery/lg-fullscreen.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/gallery/lg-zoom.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/gallery/lg-hash.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/gallery/lg-share.js') }}"></script>


@endsection
