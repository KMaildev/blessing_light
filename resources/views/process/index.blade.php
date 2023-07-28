@extends('layouts.app')
@section('content')
    <div class="page-title">
        <div class="container">
            <h1>Manpower Recruitment & Proess</h1>
            <h3>"We do this by ensuring that our clients' expectations and needs are out priorities and placing candidates
                with right skills"</h3>
        </div>
    </div>
    <div class="breadcrumbs">
        <div class="container">
            <a href="{{ route('welcome') }}">Home</a>

            <i class="fa fa-long-arrow-right main-color"></i><span>Manpoer Process</span>
        </div>
    </div>

    <div class="md-padding">
        <div class="container">
            <div class="row">
                <div class="heading main centered">
                    <h3 class="uppercase lg-title">DON'T TAKE <span class="main-color">OUR WORD</span></h3>
                    <p>Selection Process</p>
                </div>

                <div class="col-md-12" style="text-align: center">
                    <center>
                        <img alt="" src="{{ asset('assets/images/rp.png') }}" style="width: 50%;">
                    </center>
                </div>

            </div>
        </div>
    </div>
@endsection
