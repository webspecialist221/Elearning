@extends('layout.front-master')

@section('content')

<div class="container container-videos">
    <div class="row">
        @foreach($records as $record)
        <a href="{{url('courses',$record->id)}}">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 media-col text-center">
                <img src="{{ asset('assets/images/'.$record->picture)}}" class="img-media-responsive">
                <div class="container-caption">
                    <h4 class="text-uppercase"><b>{{$record->name}}</b></h4>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>

<div class="container container-professionals">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <h3 class="text-uppercase training"><b>training professionals from</b></h3>
            </div>
        </div>
    </div>
    <div class="row text-center" style="margin-top: 40px;">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 prof-col">
            <img src="{{asset('assets/images/logo-hp.png')}}" class="img-filter1 basic-filter">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 prof-col">
            <img src="{{asset('assets/images/logo-intel.png')}}" class="img-filter2 basic-filter">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 prof-col">
            <img src="{{ asset('assets/images/logo-microsoft.png')}}" class="img-filter3 basic-filter">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 prof-col">
            <img src="{{asset('assets/images/logo-cisco.png')}}" class="img-filter4 basic-filter">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 prof-col">
            <img src="{{asset('assets/images/logo-at-t.png')}}" class="img-filter5 basic-filter">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 prof-col">
            <img src="{{asset('assets/images/logo-verizon.png')}}" class="img-filter6 basic-filter">
        </div>
    </div>
</div>

<!-- <div class="container container-professionals">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <h3 class="text-uppercase videos"><b>latest videos</b></h3>
            </div>
        </div>
    </div>
    <div class="row text-center" style="margin-top: 40px;">
        <div class="col-lg-3 col-md-3 col-sm-6 mini-video-container">
            <img src="{{asset('assets/images/block.png')}}" class="img-responsive img-video">
            <div class="container-video">
                <h4 class="text-uppercase text-center"><b>video</b></h4>
                <p class="text-grey">
                    <small>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </small>
                </p>
                <hr>
                <div class="row">
                    <div class="col-lg-6">
                        <p class="pull-left">234 Views</p>
                    </div>
                    <div class="col-lg-6">
                        <p class="pull-right text-yellow">Free</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 mini-video-container">
            <img src="{{asset('assets/images/block.png')}}" class="img-responsive img-video">
            <div class="container-video">
                <h4 class="text-uppercase text-center"><b>video</b></h4>
                <p class="text-grey">
                    <small>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </small>
                </p>
                <hr>
                <div class="row">
                    <div class="col-lg-6">
                        <p class="pull-left">234 Views</p>
                    </div>
                    <div class="col-lg-6">
                        <p class="pull-right text-yellow">Free</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 mini-video-container">
            <img src="{{asset('assets/images/block.png')}}" class="img-responsive img-video">
            <div class="container-video">
                <h4 class="text-uppercase text-center"><b>video</b></h4>
                <p class="text-grey">
                    <small>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </small>
                </p>
                <hr>
                <div class="row">
                    <div class="col-lg-6">
                        <p class="pull-left">234 Views</p>
                    </div>
                    <div class="col-lg-6">
                        <p class="pull-right text-yellow">Free</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 mini-video-container">
            <img src="{{asset('assets/images/block.png')}}" class="img-responsive img-video">
            <div class="container-video">
                <h4 class="text-uppercase text-center"><b>video</b></h4>
                <p class="text-grey">
                    <small>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </small>
                </p>
                <hr>
                <div class="row">
                    <div class="col-lg-6">
                        <p class="pull-left">234 Views</p>
                    </div>
                    <div class="col-lg-6">
                        <p class="pull-right text-yellow">Free</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

@endsection