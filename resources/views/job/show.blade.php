@extends('layouts.app')
@section('content')
    <div class="page-title">
        <div class="container">
            <h1>Apply Jobs</h1>
            <h3>Blessing Light</h3>
        </div>
    </div>
    <div class="breadcrumbs">
        <div class="container">
            <a href="{{ route('welcome') }}">Home</a>
            <i class="fa fa-long-arrow-right main-color"></i>
            <span>Job Application</span>
        </div>
    </div>

    <div class="md-padding">
        <div class="container">
            <div class="row">

                <div class="col-md-7 fx" data-animate="fadeInLeft">
                    <div class="alert  p-a-3" style="background-color: white;box-shadow:6px 6px 5px 5px gray;">
                        <div class="heading style3 m-b-3 sm">
                            <h3 class="uppercase">You need to know:</h3>
                        </div>
                        <p>Below are the main sectors we are recruiting from</p>
                        <ul>
                            <li>
                                Defense Sector (All forms of technical, Special technical and support staff)
                            </li>
                            <li>
                                Health Sector (All categories of Doctors, Nurse and Support Staff)
                            </li>
                            <li>
                                Education Sector (All level of professors, teachers, guides and support staff)
                            </li>
                            <li>
                                IT sector (All managerial, technical, non-technical, HR. and other support staff)
                            </li>
                            <li>
                                Industrial Sector
                            </li>
                            <li>
                                Public Service sector & Construction Industry.
                            </li>

                        </ul>
                    </div>

                    @foreach ($jobs as $job)
                        <div class="heading style3">
                            <h3>
                                {{ $job->title ?? '' }}
                            </h3>
                        </div>

                        <div id="acc_10" class="accordion radius margin">
                            <div class="panel">

                                <h5 class="acc-head">
                                    <a href="#_{{ $job->id }}" data-toggle="collapse" data-parent="#acc_10">
                                        <i class="fa fa-cloud-download main-color"></i>
                                        <span style="color:#163202;">Qualification</span>
                                    </a>
                                </h5>

                                <div class="acc-body collapse collapsed in" id="_{{ $job->id }}">
                                    <div class="acc-content">
                                        {!! $job->qualification ?? '' !!}
                                    </div>
                                </div>
                            </div>

                            <div class="panel">
                                <h5 class="acc-head">
                                    <a href="#_skills{{ $job->id }}" data-toggle="collapse" data-parent="#acc_10"
                                        class="collapsed">
                                        <i class="fa fa-shopping-bag main-color"></i>
                                        <span style="color:#163202;">Skills</span>
                                    </a>
                                </h5>
                                <div class="acc-body collapse" id="_skills{{ $job->id }}">
                                    <div class="acc-content">
                                        <p>You will need to show evidence of the following:</p>
                                        {!! $job->skills ?? '' !!}
                                    </div>
                                </div>
                            </div>

                            <div class="panel">
                                <h5 class="acc-head">
                                    <a href="#_WorkExperience{{ $job->id }}" data-toggle="collapse"
                                        data-parent="#acc_10" class="collapsed">
                                        <i class="fa fa-gears main-color"></i>
                                        <span style="color:#163202;">
                                            Work experience
                                        </span>
                                    </a>
                                </h5>
                                <div class="acc-body collapse" id="_WorkExperience{{ $job->id }}">
                                    <div class="acc-content">
                                        {!! $job->work_experience ?? '' !!}
                                    </div>
                                </div>
                            </div>

                        </div>

                        <a class="btn uppercase btn-default m-t-2 btn-block app-btn" id="project-manager"
                            href="{{ route('job.index') }}">
                            <span>Apply Now</span>
                        </a>
                        <br><br>
                    @endforeach
                </div>



                <div class="col-md-5 fx" data-animate="fadeInRight">
                    <div class="contact-form gry-bg p-a-3" id="careers-form">

                        <h3 class="uppercase"><span class="main-color">Apply</span> Now</h3>
                        <p class="p-b-3">To apply for the desired job, we recommend reading the job requirements carefuly
                            then if you found yourself qualified for it, simply fill in the below form and click APPLY NOW.
                        </p>

                        @include('job.submit_form')

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
