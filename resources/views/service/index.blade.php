@extends('layouts.app')
@section('content')
<div class="page-title">
    <div class="container">
        <h1>Services</h1>
        <h3>WHAT WE CAN DO Special Services</h3>
    </div>
</div>
<div class="breadcrumbs">
    <div class="container">
        <a href="{{route('welcome')}}">Home</a>
        
        <i class="fa fa-long-arrow-right main-color"></i><span>Services</span>
    </div>
</div>

<div class="md-padding">
    <div class="container">
        <div class="heading main centered">
            <h3 class="uppercase bolder font-40">What We Can <span class="main-color">Do?</span></h3>
            <h4 class="light-font font-30 lg-title"><span class="main-color">Special</span> Services</h4>
            <p class="heading-desc centered">Blessing Light Services Co.,Ltd is a leading international employment agency specializing in connecting employers from all over the world with the best and most qualified candidates. With a wide network of recruitment professionals, our team is dedicated to matching employers with the ideal candidates to help your business succeed.</p>
        </div>
        <div class="row">
            <div class="col-md-4" >
                <div class="icon-box simple" style="border: 2px dotted black; padding:10px;">
                    <i class="fa fa-adjust icon-bg main-bg md-icon border3px"></i>
                    <div class="icon-simple-desc">
                        <h4 class="uppercase main-color">International Recruitment</h4>
                        <p>Securing the best candidates for our international partners and clientele ranging from top level management executives to support staff.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon-box simple" style="border: 2px dotted black; padding:10px;">
                    <i class="fa fa-laptop icon-bg main-bg md-icon border3px"></i>
                    <div class="icon-simple-desc">
                        <h4 class="uppercase main-color">Recruitment  Management</h4>
                        <p>After analysing projects Blessing Light then advances with the recruitment process and helps in recruiting the ideal candidates for the specified projects.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon-box simple" style="border: 2px dotted black; padding:10px;">
                    <i class="fa fa-html5 icon-bg main-bg md-icon border3px"></i>
                    <div class="icon-simple-desc">
                        <h4 class="uppercase main-color">Man Power Sourcing & Outsourcing</h4>
                        <p>We have all the skills to handle the recruitment of executives.We specialise in facilitating recruitment at all level of an organization.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row m-t-3">
            <div class="col-md-4">
                <div class="icon-box simple" style="border: 2px dotted black; padding:10px;">
                    <i class="fa fa-file-text-o icon-bg main-bg md-icon border3px"></i>
                    <div class="icon-simple-desc">
                        <h4 class="uppercase main-color">CV / Resume Outsourcing</h4>
                        <p>We provides CV sourcing services to majority of the companies in the middle east. We look after all the recruitment needs of the clients.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon-box simple" style="border: 2px dotted black; padding:10px;">
                    <i class="fa fa-css3 icon-bg main-bg md-icon border3px"></i>
                    <div class="icon-simple-desc">
                        <h4 class="uppercase main-color">Evaluation, Testing & Screening</h4>
                        <p>We take care of ensuring that only the right candidate joins you. Training and testing from the best certified trade site centers across Myanmar.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon-box simple" style="border: 2px dotted black; padding:10px;">
                    <i class="fa fa-paper-plane icon-bg main-bg md-icon border3px"></i>
                    <div class="icon-simple-desc">
                        <h4 class="uppercase main-color">Visa Services</h4>
                        <p>We have proven experience in terms of giving visa assitance to fellow candidates willing to work abroad.visa assitance is one of the critical factors that decides the feasibility. </p>
                    </div>
                </div>
            </div>
        </div>

        

    </div>
</div>
@endsection