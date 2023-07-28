@extends('layouts.app')
@section('content')
<div class="page-title">
    <div class="container">
        <h1>Our Mentor</h1>
        <h3>About Our Mentor</h3>
    </div>
</div>
<div class="breadcrumbs">
    <div class="container">
        <a href="{{route('welcome')}}">Home</a>
        
        <i class="fa fa-long-arrow-right main-color"></i><span>Our Mentor</span>
    </div>
</div>
<div class="md-padding">
										
    <div class="container">

        <div class="row">
            
            <div class="heading main centered">
                <h3 class="uppercase lg-title">About <span class="main-color">Our Mentor</span></h3>
                <p>Her deep knowledge, encouraging persona and excellent managerial skills have aided us in propelling ourselves in to a distinctive position in our field.</p>
            </div>

            <div class="col-md-12">
                <div class="team-box box-5">
                    <div class="team-img">
                        <img alt="" src="{{asset('assets/images/md_message.png')}}">
                    </div>
                    <div class="team-details">
                        <h4 class="team-name" style="font-weight:bold;">
                            Mrs. Myo Zin Win<br>
                            <span class="main-color">Managing Director</span>
                        </h4>
                        <p style="text-align: justify;">
                            I am incredibly proud of the progress we have made together. I am thrilled to address both our esteemed clients and our exceptional team at our overseas employment agency. 
                        </p>
                        <p style="text-align: justify;">
                            To our valued clients, we are committed to providing you with the best talent and impeccable service. Your goals are our priority, and we will continue to exceed expectations.
                        </p>
                        <p style="text-align: justify;">
                            To our dedicated team, we are committed to providing you with the best talent and impeccable service. Your goals are our priority, and we will continue to exceed expectations. your hard work and passion have made us a formidable force in the industry. 
                        </p>
                        <p style="text-align: justify;">
                            Together, we will reach even greater heights. our mission is to empower lives by creating meaningful connections between clients and candidates. Thank you for your trust, dedication, and hard work. Your contributions are what make our agency truly exceptional.
                        </p>
                        <p style="text-align: justify;">
                            With gratitude and excitement for the journey ahead.
                        </p>
                    </div>
                    <div class="team-socials">
                        <div class="social-list">
                            <a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Facebook"><i class="fa fa-facebook ic-facebook sm-icon"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Twitter"><i class="fa fa-twitter ic-twitter sm-icon"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Linkedin"><i class="fa fa-linkedin ic-linkedin sm-icon"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Google Plus"><i class="fa fa-google-plus ic-gplus sm-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

    </div>
</div>

@endsection