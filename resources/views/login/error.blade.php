@extends('app.master2')

@section('css')

@endsection

@section('content')

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{URL::asset('assets/images/loader.svg')}}" class="loader-img" alt="Loader">
    </div>
    <!-- End GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <!-- PAGE-CONTENT OPEN -->
        <div class="page-content error-page">
            <div class="container text-center">
                <div class="error-template">
                    <h1 class="display-1  text-white mb-2">Error</h1>
                    <h5 class="error-details text-white">
                        @if (Session::has('error'))
                                    {{ Session::get('error') }}
                        @endif
                    </h5>
                    <div class="text-center">
                        <a class="btn btn-secondary mt-5 mb-5" href="{{ url('/' . $page='index') }}"> <i class="fa fa-long-arrow-left"></i> Back to Home </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- PAGE-CONTENT OPEN CLOSED -->
    </div>

    <!-- End PAGE -->

@endsection

@section('js')

@endsection
